<?php


namespace SymfonyLab\RocketGateReport;


use GuzzleHttp\Client;

class AccessLogsCleaner
{
    const BASE_LINK = 'https://my.rocketgate.com';

    public function check(string $data): bool
    {
        $xmlCheck = substr($data, 0, 1);
        if ($xmlCheck === '<') {
            $xml = simplexml_load_string($data);
            if ($xml !== false) {
                if (isset($xml->code) && $xml->code === 401) {
                    return true;
                }
            }
        }

        return false;
    }

    public function clear(MerchantInterface $merchant)
    {
        $client = new Client([
            'base_uri' => self::BASE_LINK,
            'http_errors' => false,
            'cookies' => true
        ]);

        $response = $client->post('/mc/secure/index.cfm', [
            'form_params' => [
                'j_username' => $merchant->getAdminLogin(),
                'j_password' => $merchant->getAdminPassword(),
                'tmz' => 'GMT',
                'mg_id' => $merchant->getId()
            ],
        ]);
        if ($response->getStatusCode() !== 200) {
            throw new \Exception('RocketGate Clear API request: Failed to login to mission control.');
        }

        // Get page to fetch _cf_clientid
        $body = $client->get('/mc/secure/users/gw_access_logs/index.cfm')->getBody()->getContents();
        preg_match_all("/_cf_clientid='([^']+)';/", $body, $matches);
        if (!empty($matches[1][0])) {
            $CFClientID = $matches[1][0];
        } else {
            throw new \Exception('RocketGate Clear API request: failed to fetch _cf_clientid.');
        }

        $from = (new \DateTimeImmutable('-1 month'))->format('m/d/Y');
        $to = (new \DateTimeImmutable('+1 day'))->format('m/d/Y');

        $response = $client->get('/mc/secure/users/gw_access_logs/clear_logs.cfm', [
            'query' => [
                'merch_id' => $merchant->getId(),
                'fromDate' => $from,
                'toDate' => $to,
                '_cf_containerId' => 'details',
                '_cf_nodebug' => true,
                '_cf_clientid' => $CFClientID,
            ],
        ]);

        if ($response->getStatusCode() !== 200) {
            throw new \Exception('RocketGate Clear API request: ' . $response->getBody()->getContents());
        }

        $data = $response->getBody()->getContents();
        if (strpos($data, 'Record Updated') === false) {
            throw new \Exception('RocketGate Clear API request: failed to clear api.');
        }
    }
}

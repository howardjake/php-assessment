<?php
require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

function fetchData()
{
    $client = new Client();
    $response = $client->get('https://public.opendatasoft.com/api/records/1.0/search/?dataset=georef-united-states-of-america-state&q=&rows=56&facet=ste_name');
    $data = json_decode($response->getBody(), true);

    return $data;
}

// Cache the API data using a simple file-based cache
function getCachedData()
{
    $cacheFile = __DIR__ . '/cached_data.json';

    if (file_exists($cacheFile)) {
        $data = json_decode(file_get_contents($cacheFile), true);
        if ($data && time() - $data['timestamp'] < 3600) {
            return $data['data'];
        }
    }

    $data = fetchData();
    file_put_contents($cacheFile, json_encode(['data' => $data, 'timestamp' => time()]));
    return $data;
}

$statesJSON = getCachedData();

// PAINT THE STATES DATA
foreach ($statesJSON['records'] as $record) {
    $state = $record['fields']['ste_name'];
    echo "<li>$state</li>";
}
<?php

namespace Beer\Application\Query\Booking;

use Carbon\CarbonImmutable;
use GuzzleHttp\Client;
use Beer\Application\Query\FindBeersQuery;

class FindBookingsQueryHandler
{
    private array $params;

    public function __construct(array $params)
    {
        $this->params = $params;
    }

    public function handleFindBeersQuery(FindBeersQuery $query): string
    {
        $client = new Client([
            'base_uri' => 'https://api.punkapi.com/v2/',
        ]);
          
        $response = $client->request('GET', '/beers');
        $body = $response->getBody();
        $arr_body = json_decode($body);
        return $arr_body;
    }
}
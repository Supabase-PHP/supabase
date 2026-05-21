<?php

declare(strict_types=1);

namespace Supabase;

use Supabase\Client;

final class Supabase
{
    private array $config = [];
    private Client $http;

    public function __construct()
    {
        $this->config();
    }

    public function config(array $config)
    {
        $this->config[] = [
            'base_uri' => $config['url'],
            'headers' => [
                'apikey' => $config['apikey'],
                'Authorization' => 'Bearer ' . $config['apikey'],
                'Content-Type' => 'application/json',
            ]
        ];

        return $config;
    }

    public function table() {
        return new QueryBuilder();
    }

    public function from() {
        return new QueryBuilder();
    }
}

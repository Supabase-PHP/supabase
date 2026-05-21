<?php

declare(strict_types=1);

namespace Supabase;

use GuzzleHttp\Client as GuzzleClient;

abstract class Client
{
    public GuzzleClient $client;
}

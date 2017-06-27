<?php

namespace CawaKharkov\TarantoolBundle\Connector;

use Tarantool\Client\Connection\StreamConnection;

class StreamConnector extends StreamConnection implements ConnectionInterface
{

    protected $config;


    public function __construct($uri)
    {
        parent::__construct($uri,[]);
    }


}
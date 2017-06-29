<?php

namespace CawaKharkov\TarantoolBundle\Connector;


interface ConnectionInterface
{
    public function open();
    public function close();
    public function send($data);
}
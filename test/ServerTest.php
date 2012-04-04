<?php

require_once '../src/Aysheka/Socket/Socket.php';
require_once '../src/Aysheka/Socket/Server.php';
require_once '../src/Aysheka/Socket/Exception/SocketException.php';
require_once '../src/Aysheka/Socket/Listener.php';
require_once '../src/Aysheka/Socket/Client.php';

use Aysheka\Socket\Socket;

class Listener implements \Aysheka\Socket\Listener
{
    public function accept(Socket $socket)
    {
        $data = $socket->read(64);

        var_dump($data);
    }

}

$server = new \Aysheka\Socket\Server('127.0.0.1', 8088);
$server->listen(new Listener());

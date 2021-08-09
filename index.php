<?php
    require_once './vendor/autoload.php';

    $client = new Service\ServiceClient('10.110.20.15:8881', [
        'credentials' => Grpc\ChannelCredentials::createInsecure(),
        'timeout' => 1]);

    $request = new Service\Request();
    $request->setA(10);
    $request->setB(15);

    $response = $client->Sum($request)->wait();

    if ($response[1]->code !== 0) {
        var_dump($response[1]->details);
    } else {
        var_dump($response[0]->getSum());
    }


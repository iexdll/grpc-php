<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Service;

/**
 */
class ServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Service\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Sum(\Service\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/service.Service/Sum',
        $argument,
        ['\Service\Response', 'decode'],
        $metadata, $options);
    }

}

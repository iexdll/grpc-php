<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: service.proto

namespace Service;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>service.Request</code>
 */
class Request extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 a = 1;</code>
     */
    protected $a = 0;
    /**
     * Generated from protobuf field <code>int32 b = 2;</code>
     */
    protected $b = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $a
     *     @type int $b
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 a = 1;</code>
     * @return int
     */
    public function getA()
    {
        return $this->a;
    }

    /**
     * Generated from protobuf field <code>int32 a = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setA($var)
    {
        GPBUtil::checkInt32($var);
        $this->a = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 b = 2;</code>
     * @return int
     */
    public function getB()
    {
        return $this->b;
    }

    /**
     * Generated from protobuf field <code>int32 b = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setB($var)
    {
        GPBUtil::checkInt32($var);
        $this->b = $var;

        return $this;
    }

}


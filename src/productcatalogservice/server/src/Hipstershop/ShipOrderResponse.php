<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: demo.proto

namespace Hipstershop;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>hipstershop.ShipOrderResponse</code>
 */
class ShipOrderResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string tracking_id = 1;</code>
     */
    private $tracking_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tracking_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Demo::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string tracking_id = 1;</code>
     * @return string
     */
    public function getTrackingId()
    {
        return $this->tracking_id;
    }

    /**
     * Generated from protobuf field <code>string tracking_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTrackingId($var)
    {
        GPBUtil::checkString($var, True);
        $this->tracking_id = $var;

        return $this;
    }

}


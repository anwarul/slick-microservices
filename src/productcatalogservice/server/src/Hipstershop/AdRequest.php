<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: demo.proto

namespace Hipstershop;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>hipstershop.AdRequest</code>
 */
class AdRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * List of important key words from the current page describing the context.
     *
     * Generated from protobuf field <code>repeated string context_keys = 1;</code>
     */
    private $context_keys;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $context_keys
     *           List of important key words from the current page describing the context.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Demo::initOnce();
        parent::__construct($data);
    }

    /**
     * List of important key words from the current page describing the context.
     *
     * Generated from protobuf field <code>repeated string context_keys = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContextKeys()
    {
        return $this->context_keys;
    }

    /**
     * List of important key words from the current page describing the context.
     *
     * Generated from protobuf field <code>repeated string context_keys = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContextKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->context_keys = $arr;

        return $this;
    }

}


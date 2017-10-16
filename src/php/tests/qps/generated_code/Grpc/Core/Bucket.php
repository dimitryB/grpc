<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: src/proto/grpc/core/stats.proto

namespace Grpc\Core;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>grpc.core.Bucket</code>
 */
class Bucket extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>double start = 1;</code>
     */
    private $start = 0.0;
    /**
     * Generated from protobuf field <code>uint64 count = 2;</code>
     */
    private $count = 0;

    public function __construct() {
        \GPBMetadata\Src\Proto\Grpc\Core\Stats::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>double start = 1;</code>
     * @return float
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Generated from protobuf field <code>double start = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkDouble($var);
        $this->start = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 count = 2;</code>
     * @return int|string
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>uint64 count = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkUint64($var);
        $this->count = $var;

        return $this;
    }

}

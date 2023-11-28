<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: HMS/RealData.proto

namespace Hoymiles;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>symcon.hoymiles.RpMO</code>
 */
class RpMO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 sn = 1;</code>
     */
    protected $sn = 0;
    /**
     * Generated from protobuf field <code>int32 sign = 2;</code>
     */
    protected $sign = 0;
    /**
     * Generated from protobuf field <code>int32 chan = 3;</code>
     */
    protected $chan = 0;
    /**
     * Generated from protobuf field <code>int32 pv_nub = 4;</code>
     */
    protected $pv_nub = 0;
    /**
     * Generated from protobuf field <code>int32 link = 5;</code>
     */
    protected $link = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $sn
     *     @type int $sign
     *     @type int $chan
     *     @type int $pv_nub
     *     @type int $link
     * }
     */
    public function __construct($data = NULL) {
        \Hoymiles\RealData::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 sn = 1;</code>
     * @return int|string
     */
    public function getSn()
    {
        return $this->sn;
    }

    /**
     * Generated from protobuf field <code>int64 sn = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSn($var)
    {
        GPBUtil::checkInt64($var);
        $this->sn = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 sign = 2;</code>
     * @return int
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * Generated from protobuf field <code>int32 sign = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSign($var)
    {
        GPBUtil::checkInt32($var);
        $this->sign = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 chan = 3;</code>
     * @return int
     */
    public function getChan()
    {
        return $this->chan;
    }

    /**
     * Generated from protobuf field <code>int32 chan = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setChan($var)
    {
        GPBUtil::checkInt32($var);
        $this->chan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 pv_nub = 4;</code>
     * @return int
     */
    public function getPvNub()
    {
        return $this->pv_nub;
    }

    /**
     * Generated from protobuf field <code>int32 pv_nub = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPvNub($var)
    {
        GPBUtil::checkInt32($var);
        $this->pv_nub = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 link = 5;</code>
     * @return int
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Generated from protobuf field <code>int32 link = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setLink($var)
    {
        GPBUtil::checkInt32($var);
        $this->link = $var;

        return $this;
    }

}

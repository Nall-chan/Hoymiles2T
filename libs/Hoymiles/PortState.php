<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: HMS/RealData.proto

namespace Hoymiles;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>symcon.hoymiles.PortState</code>
 */
class PortState extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 sn = 1;</code>
     */
    protected $sn = 0;
    /**
     * Generated from protobuf field <code>int32 pi = 2;</code>
     */
    protected $pi = 0;
    /**
     * Generated from protobuf field <code>int32 v = 3;</code>
     */
    protected $v = 0;
    /**
     * Generated from protobuf field <code>int32 i = 4;</code>
     */
    protected $i = 0;
    /**
     * Generated from protobuf field <code>int32 p = 5;</code>
     */
    protected $p = 0;
    /**
     * Generated from protobuf field <code>int32 et = 6;</code>
     */
    protected $et = 0;
    /**
     * Generated from protobuf field <code>int32 ed = 7;</code>
     */
    protected $ed = 0;
    /**
     * Generated from protobuf field <code>int32 code = 8;</code>
     */
    protected $code = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $sn
     *     @type int $pi
     *     @type int $v
     *     @type int $i
     *     @type int $p
     *     @type int $et
     *     @type int $ed
     *     @type int $code
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
     * Generated from protobuf field <code>int32 pi = 2;</code>
     * @return int
     */
    public function getPi()
    {
        return $this->pi;
    }

    /**
     * Generated from protobuf field <code>int32 pi = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPi($var)
    {
        GPBUtil::checkInt32($var);
        $this->pi = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 v = 3;</code>
     * @return int
     */
    public function getV()
    {
        return $this->v;
    }

    /**
     * Generated from protobuf field <code>int32 v = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setV($var)
    {
        GPBUtil::checkInt32($var);
        $this->v = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 i = 4;</code>
     * @return int
     */
    public function getI()
    {
        return $this->i;
    }

    /**
     * Generated from protobuf field <code>int32 i = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setI($var)
    {
        GPBUtil::checkInt32($var);
        $this->i = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 p = 5;</code>
     * @return int
     */
    public function getP()
    {
        return $this->p;
    }

    /**
     * Generated from protobuf field <code>int32 p = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setP($var)
    {
        GPBUtil::checkInt32($var);
        $this->p = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 et = 6;</code>
     * @return int
     */
    public function getEt()
    {
        return $this->et;
    }

    /**
     * Generated from protobuf field <code>int32 et = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setEt($var)
    {
        GPBUtil::checkInt32($var);
        $this->et = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 ed = 7;</code>
     * @return int
     */
    public function getEd()
    {
        return $this->ed;
    }

    /**
     * Generated from protobuf field <code>int32 ed = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setEd($var)
    {
        GPBUtil::checkInt32($var);
        $this->ed = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 code = 8;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>int32 code = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->code = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: HMS/RealData.proto

namespace Hoymiles;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>symcon.hoymiles.RealDataResDTO</code>
 */
class RealDataResDTO extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ymd_hms = 1;</code>
     */
    protected $ymd_hms = '';
    /**
     * Generated from protobuf field <code>int32 cp = 2;</code>
     */
    protected $cp = 0;
    /**
     * Generated from protobuf field <code>int32 err_code = 3;</code>
     */
    protected $err_code = 0;
    /**
     * Generated from protobuf field <code>int32 oft = 4;</code>
     */
    protected $oft = 0;
    /**
     * Generated from protobuf field <code>int32 time = 5;</code>
     */
    protected $time = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ymd_hms
     *     @type int $cp
     *     @type int $err_code
     *     @type int $oft
     *     @type int $time
     * }
     */
    public function __construct($data = NULL) {
        \Hoymiles\RealData::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string ymd_hms = 1;</code>
     * @return string
     */
    public function getYmdHms()
    {
        return $this->ymd_hms;
    }

    /**
     * Generated from protobuf field <code>string ymd_hms = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setYmdHms($var)
    {
        GPBUtil::checkString($var, True);
        $this->ymd_hms = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 cp = 2;</code>
     * @return int
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Generated from protobuf field <code>int32 cp = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCp($var)
    {
        GPBUtil::checkInt32($var);
        $this->cp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 err_code = 3;</code>
     * @return int
     */
    public function getErrCode()
    {
        return $this->err_code;
    }

    /**
     * Generated from protobuf field <code>int32 err_code = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setErrCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->err_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 oft = 4;</code>
     * @return int
     */
    public function getOft()
    {
        return $this->oft;
    }

    /**
     * Generated from protobuf field <code>int32 oft = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setOft($var)
    {
        GPBUtil::checkInt32($var);
        $this->oft = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 time = 5;</code>
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Generated from protobuf field <code>int32 time = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkInt32($var);
        $this->time = $var;

        return $this;
    }

}


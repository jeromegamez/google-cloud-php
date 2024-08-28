<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/distribution.proto

namespace Google\Cloud\ServiceControl\V1\Distribution;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describing buckets with exponentially growing width.
 *
 * Generated from protobuf message <code>google.api.servicecontrol.v1.Distribution.ExponentialBuckets</code>
 */
class ExponentialBuckets extends \Google\Protobuf\Internal\Message
{
    /**
     * The number of finite buckets. With the underflow and overflow buckets,
     * the total number of buckets is `num_finite_buckets` + 2.
     * See comments on `bucket_options` for details.
     *
     * Generated from protobuf field <code>int32 num_finite_buckets = 1;</code>
     */
    protected $num_finite_buckets = 0;
    /**
     * The i'th exponential bucket covers the interval
     *   [scale * growth_factor^(i-1), scale * growth_factor^i)
     * where i ranges from 1 to num_finite_buckets inclusive.
     * Must be larger than 1.0.
     *
     * Generated from protobuf field <code>double growth_factor = 2;</code>
     */
    protected $growth_factor = 0.0;
    /**
     * The i'th exponential bucket covers the interval
     *   [scale * growth_factor^(i-1), scale * growth_factor^i)
     * where i ranges from 1 to num_finite_buckets inclusive.
     * Must be > 0.
     *
     * Generated from protobuf field <code>double scale = 3;</code>
     */
    protected $scale = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $num_finite_buckets
     *           The number of finite buckets. With the underflow and overflow buckets,
     *           the total number of buckets is `num_finite_buckets` + 2.
     *           See comments on `bucket_options` for details.
     *     @type float $growth_factor
     *           The i'th exponential bucket covers the interval
     *             [scale * growth_factor^(i-1), scale * growth_factor^i)
     *           where i ranges from 1 to num_finite_buckets inclusive.
     *           Must be larger than 1.0.
     *     @type float $scale
     *           The i'th exponential bucket covers the interval
     *             [scale * growth_factor^(i-1), scale * growth_factor^i)
     *           where i ranges from 1 to num_finite_buckets inclusive.
     *           Must be > 0.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicecontrol\V1\Distribution::initOnce();
        parent::__construct($data);
    }

    /**
     * The number of finite buckets. With the underflow and overflow buckets,
     * the total number of buckets is `num_finite_buckets` + 2.
     * See comments on `bucket_options` for details.
     *
     * Generated from protobuf field <code>int32 num_finite_buckets = 1;</code>
     * @return int
     */
    public function getNumFiniteBuckets()
    {
        return $this->num_finite_buckets;
    }

    /**
     * The number of finite buckets. With the underflow and overflow buckets,
     * the total number of buckets is `num_finite_buckets` + 2.
     * See comments on `bucket_options` for details.
     *
     * Generated from protobuf field <code>int32 num_finite_buckets = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNumFiniteBuckets($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_finite_buckets = $var;

        return $this;
    }

    /**
     * The i'th exponential bucket covers the interval
     *   [scale * growth_factor^(i-1), scale * growth_factor^i)
     * where i ranges from 1 to num_finite_buckets inclusive.
     * Must be larger than 1.0.
     *
     * Generated from protobuf field <code>double growth_factor = 2;</code>
     * @return float
     */
    public function getGrowthFactor()
    {
        return $this->growth_factor;
    }

    /**
     * The i'th exponential bucket covers the interval
     *   [scale * growth_factor^(i-1), scale * growth_factor^i)
     * where i ranges from 1 to num_finite_buckets inclusive.
     * Must be larger than 1.0.
     *
     * Generated from protobuf field <code>double growth_factor = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setGrowthFactor($var)
    {
        GPBUtil::checkDouble($var);
        $this->growth_factor = $var;

        return $this;
    }

    /**
     * The i'th exponential bucket covers the interval
     *   [scale * growth_factor^(i-1), scale * growth_factor^i)
     * where i ranges from 1 to num_finite_buckets inclusive.
     * Must be > 0.
     *
     * Generated from protobuf field <code>double scale = 3;</code>
     * @return float
     */
    public function getScale()
    {
        return $this->scale;
    }

    /**
     * The i'th exponential bucket covers the interval
     *   [scale * growth_factor^(i-1), scale * growth_factor^i)
     * where i ranges from 1 to num_finite_buckets inclusive.
     * Must be > 0.
     *
     * Generated from protobuf field <code>double scale = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setScale($var)
    {
        GPBUtil::checkDouble($var);
        $this->scale = $var;

        return $this;
    }

}



<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/securitycenter_service.proto

namespace Google\Cloud\SecurityCenter\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for listing the attack paths for a given simulation or
 * valued resource.
 *
 * Generated from protobuf message <code>google.cloud.securitycenter.v1.ListAttackPathsResponse</code>
 */
class ListAttackPathsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The attack paths that the attack path simulation identified.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.AttackPath attack_paths = 1;</code>
     */
    private $attack_paths;
    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\SecurityCenter\V1\AttackPath>|\Google\Protobuf\Internal\RepeatedField $attack_paths
     *           The attack paths that the attack path simulation identified.
     *     @type string $next_page_token
     *           Token to retrieve the next page of results, or empty if there are no more
     *           results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Securitycenter\V1\SecuritycenterService::initOnce();
        parent::__construct($data);
    }

    /**
     * The attack paths that the attack path simulation identified.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.AttackPath attack_paths = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttackPaths()
    {
        return $this->attack_paths;
    }

    /**
     * The attack paths that the attack path simulation identified.
     *
     * Generated from protobuf field <code>repeated .google.cloud.securitycenter.v1.AttackPath attack_paths = 1;</code>
     * @param array<\Google\Cloud\SecurityCenter\V1\AttackPath>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttackPaths($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\SecurityCenter\V1\AttackPath::class);
        $this->attack_paths = $arr;

        return $this;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Token to retrieve the next page of results, or empty if there are no more
     * results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}


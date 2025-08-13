<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1beta2;

use \KubernetesRuntime\AbstractModel;

/**
 * DeviceAttribute must have exactly one field set.
 */
class DeviceAttribute extends AbstractModel
{
    /**
     * BoolValue is a true/false value.
     *
     * @var boolean
     */
    public $bool = null;

    /**
     * IntValue is a number.
     *
     * @var integer
     */
    public $int = null;

    /**
     * StringValue is a string. Must not be longer than 64 characters.
     *
     * @var string
     */
    public $string = null;

    /**
     * VersionValue is a semantic version according to semver.org spec 2.0.0. Must not
     * be longer than 64 characters.
     *
     * @var string
     */
    public $version = null;
}


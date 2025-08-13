<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ConfigMapEnvSource selects a ConfigMap to populate the environment variables
 * with.
 *
 * The contents of the target ConfigMap's Data field will represent the key-value
 * pairs as environment variables.
 */
class ConfigMapEnvSource extends AbstractModel
{
    /**
     * Name of the referent. This field is effectively required, but due to backwards
     * compatibility is allowed to be empty. Instances of this type with an empty value
     * here are almost certainly wrong. More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     *
     * @var string
     */
    public $name = null;

    /**
     * Specify whether the ConfigMap must be defined
     *
     * @var boolean
     */
    public $optional = null;
}


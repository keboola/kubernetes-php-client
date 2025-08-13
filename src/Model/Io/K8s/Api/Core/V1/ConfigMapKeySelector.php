<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Selects a key from a ConfigMap.
 */
class ConfigMapKeySelector extends AbstractModel
{
    /**
     * The key to select.
     *
     * @var string
     */
    public $key = null;

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
     * Specify whether the ConfigMap or its key must be defined
     *
     * @var boolean
     */
    public $optional = null;
}


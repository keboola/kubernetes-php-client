<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * PodDNSConfigOption defines DNS resolver options of a pod.
 */
class PodDNSConfigOption extends AbstractModel
{
    /**
     * Name is this DNS resolver option's name. Required.
     *
     * @var string
     */
    public $name = null;

    /**
     * Value is this DNS resolver option's value.
     *
     * @var string
     */
    public $value = null;
}


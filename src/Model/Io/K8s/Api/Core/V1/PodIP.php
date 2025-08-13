<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * PodIP represents a single IP address allocated to the pod.
 */
class PodIP extends AbstractModel
{
    /**
     * IP is the IP address assigned to the pod
     *
     * @var string
     */
    public $ip = null;
}


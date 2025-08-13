<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha3;

use \KubernetesRuntime\AbstractModel;

/**
 * AllocationResult contains attributes of an allocated resource.
 */
class AllocationResult extends AbstractModel
{
    /**
     * Devices is the result of allocating devices.
     *
     * @var DeviceAllocationResult
     */
    public $devices = null;

    /**
     * NodeSelector defines where the allocated resources are available. If unset, they
     * are available everywhere.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\NodeSelector
     */
    public $nodeSelector = null;
}


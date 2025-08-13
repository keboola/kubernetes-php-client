<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1beta2;

use \KubernetesRuntime\AbstractModel;

/**
 * DeviceAllocationResult is the result of allocating devices.
 */
class DeviceAllocationResult extends AbstractModel
{
    /**
     * This field is a combination of all the claim and class configuration parameters.
     * Drivers can distinguish between those based on a flag.
     *
     * This includes configuration parameters for drivers which have no allocated
     * devices in the result because it is up to the drivers which configuration
     * parameters they support. They can silently ignore unknown configuration
     * parameters.
     *
     * @var DeviceAllocationConfiguration[]
     */
    public $config = null;

    /**
     * Results lists all allocated devices.
     *
     * @var DeviceRequestAllocationResult[]
     */
    public $results = null;
}


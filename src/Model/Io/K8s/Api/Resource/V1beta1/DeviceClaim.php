<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * DeviceClaim defines how to request devices with a ResourceClaim.
 */
class DeviceClaim extends AbstractModel
{
    /**
     * This field holds configuration for multiple potential drivers which could
     * satisfy requests in this claim. It is ignored while allocating the claim.
     *
     * @var DeviceClaimConfiguration[]
     */
    public $config = null;

    /**
     * These constraints must be satisfied by the set of devices that get allocated for
     * the claim.
     *
     * @var DeviceConstraint[]
     */
    public $constraints = null;

    /**
     * Requests represent individual requests for distinct devices which must all be
     * satisfied. If empty, nothing needs to be allocated.
     *
     * @var DeviceRequest[]
     */
    public $requests = null;
}


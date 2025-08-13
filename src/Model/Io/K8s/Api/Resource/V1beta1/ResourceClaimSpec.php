<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * ResourceClaimSpec defines what is being requested in a ResourceClaim and how to
 * configure it.
 */
class ResourceClaimSpec extends AbstractModel
{
    /**
     * Devices defines how to request devices.
     *
     * @var DeviceClaim
     */
    public $devices = null;
}


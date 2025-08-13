<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1beta2;

use \KubernetesRuntime\AbstractModel;

/**
 * DeviceCapacity describes a quantity associated with a device.
 */
class DeviceCapacity extends AbstractModel
{
    /**
     * Value defines how much of a certain device capacity is available.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Api\Resource\Quantity
     */
    public $value = null;
}


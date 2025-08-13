<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * Device represents one individual hardware instance that can be selected based on
 * its attributes. Besides the name, exactly one field must be set.
 */
class Device extends AbstractModel
{
    /**
     * Basic defines one device instance.
     *
     * @var BasicDevice
     */
    public $basic = null;

    /**
     * Name is unique identifier among all devices managed by the driver in the pool.
     * It must be a DNS label.
     *
     * @var string
     */
    public $name = null;
}


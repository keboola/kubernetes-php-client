<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * DeviceClassConfiguration is used in DeviceClass.
 */
class DeviceClassConfiguration extends AbstractModel
{
    /**
     * Opaque provides driver-specific configuration parameters.
     *
     * @var OpaqueDeviceConfiguration
     */
    public $opaque = null;
}


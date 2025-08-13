<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * DeviceSelector must have exactly one field set.
 */
class DeviceSelector extends AbstractModel
{
    /**
     * CEL contains a CEL expression for selecting a device.
     *
     * @var CELDeviceSelector
     */
    public $cel = null;
}


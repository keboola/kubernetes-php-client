<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * AllocatedDeviceStatus contains the status of an allocated device, if the driver
 * chooses to report it. This may include driver-specific information.
 */
class AllocatedDeviceStatus extends AbstractModel
{
    /**
     * Conditions contains the latest observation of the device's state. If the device
     * has been configured according to the class and claim config references, the
     * `Ready` condition should be True.
     *
     * Must not contain more than 8 entries.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Condition[]
     */
    public $conditions = null;

    /**
     * Data contains arbitrary driver-specific data.
     *
     * The length of the raw data must be smaller or equal to 10 Ki.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Runtime\RawExtension
     */
    public $data = null;

    /**
     * Device references one device instance via its name in the driver's resource
     * pool. It must be a DNS label.
     *
     * @var string
     */
    public $device = null;

    /**
     * Driver specifies the name of the DRA driver whose kubelet plugin should be
     * invoked to process the allocation once the claim is needed on a node.
     *
     * Must be a DNS subdomain and should end with a DNS domain owned by the vendor of
     * the driver.
     *
     * @var string
     */
    public $driver = null;

    /**
     * NetworkData contains network-related information specific to the device.
     *
     * @var NetworkDeviceData
     */
    public $networkData = null;

    /**
     * This name together with the driver name and the device name field identify which
     * device was allocated (`<driver name>/<pool name>/<device name>`).
     *
     * Must not be longer than 253 characters and may contain one or more DNS
     * sub-domains separated by slashes.
     *
     * @var string
     */
    public $pool = null;
}


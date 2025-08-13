<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha3;

use \KubernetesRuntime\AbstractModel;

/**
 * DeviceTaintSelector defines which device(s) a DeviceTaintRule applies to. The
 * empty selector matches all devices. Without a selector, no devices are matched.
 */
class DeviceTaintSelector extends AbstractModel
{
    /**
     * If device is set, only devices with that name are selected. This field
     * corresponds to slice.spec.devices[].name.
     *
     * Setting also driver and pool may be required to avoid ambiguity, but is not
     * required.
     *
     * @var string
     */
    public $device = null;

    /**
     * If DeviceClassName is set, the selectors defined there must be satisfied by a
     * device to be selected. This field corresponds to class.metadata.name.
     *
     * @var string
     */
    public $deviceClassName = null;

    /**
     * If driver is set, only devices from that driver are selected. This fields
     * corresponds to slice.spec.driver.
     *
     * @var string
     */
    public $driver = null;

    /**
     * If pool is set, only devices in that pool are selected.
     *
     * Also setting the driver name may be useful to avoid ambiguity when different
     * drivers use the same pool name, but this is not required because selecting pools
     * from different drivers may also be useful, for example when drivers with
     * node-local devices use the node name as their pool name.
     *
     * @var string
     */
    public $pool = null;

    /**
     * Selectors contains the same selection criteria as a ResourceClaim. Currently,
     * CEL expressions are supported. All of these selectors must be satisfied.
     *
     * @var DeviceSelector[]
     */
    public $selectors = null;
}


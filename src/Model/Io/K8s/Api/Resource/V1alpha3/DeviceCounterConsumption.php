<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha3;

use \KubernetesRuntime\AbstractModel;

/**
 * DeviceCounterConsumption defines a set of counters that a device will consume
 * from a CounterSet.
 */
class DeviceCounterConsumption extends AbstractModel
{
    /**
     * CounterSet defines the set from which the counters defined will be consumed.
     *
     * @var string
     */
    public $counterSet = null;

    /**
     * Counters defines the Counter that will be consumed by the device.
     *
     * The maximum number counters in a device is 32. In addition, the maximum number
     * of all counters in all devices is 1024 (for example, 64 devices with 16 counters
     * each).
     *
     * @var object
     */
    public $counters = null;
}


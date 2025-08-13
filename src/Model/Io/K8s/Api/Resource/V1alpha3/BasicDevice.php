<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha3;

use \KubernetesRuntime\AbstractModel;

/**
 * BasicDevice defines one device instance.
 */
class BasicDevice extends AbstractModel
{
    /**
     * AllNodes indicates that all nodes have access to the device.
     *
     * Must only be set if Spec.PerDeviceNodeSelection is set to true. At most one of
     * NodeName, NodeSelector and AllNodes can be set.
     *
     * @var boolean
     */
    public $allNodes = null;

    /**
     * Attributes defines the set of attributes for this device. The name of each
     * attribute must be unique in that set.
     *
     * The maximum number of attributes and capacities combined is 32.
     *
     * @var object
     */
    public $attributes = null;

    /**
     * Capacity defines the set of capacities for this device. The name of each
     * capacity must be unique in that set.
     *
     * The maximum number of attributes and capacities combined is 32.
     *
     * @var object
     */
    public $capacity = null;

    /**
     * ConsumesCounters defines a list of references to sharedCounters and the set of
     * counters that the device will consume from those counter sets.
     *
     * There can only be a single entry per counterSet.
     *
     * The total number of device counter consumption entries must be <= 32. In
     * addition, the total number in the entire ResourceSlice must be <= 1024 (for
     * example, 64 devices with 16 counters each).
     *
     * @var DeviceCounterConsumption[]
     */
    public $consumesCounters = null;

    /**
     * NodeName identifies the node where the device is available.
     *
     * Must only be set if Spec.PerDeviceNodeSelection is set to true. At most one of
     * NodeName, NodeSelector and AllNodes can be set.
     *
     * @var string
     */
    public $nodeName = null;

    /**
     * NodeSelector defines the nodes where the device is available.
     *
     * Must only be set if Spec.PerDeviceNodeSelection is set to true. At most one of
     * NodeName, NodeSelector and AllNodes can be set.
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\NodeSelector
     */
    public $nodeSelector = null;

    /**
     * If specified, these are the driver-defined taints.
     *
     * The maximum number of taints is 4.
     *
     * This is an alpha field and requires enabling the DRADeviceTaints feature gate.
     *
     * @var DeviceTaint[]
     */
    public $taints = null;
}


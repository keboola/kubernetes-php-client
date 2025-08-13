<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha3;

use \KubernetesRuntime\AbstractModel;

/**
 * DeviceTaintRuleSpec specifies the selector and one taint.
 */
class DeviceTaintRuleSpec extends AbstractModel
{
    /**
     * DeviceSelector defines which device(s) the taint is applied to. All selector
     * criteria must be satified for a device to match. The empty selector matches all
     * devices. Without a selector, no devices are matches.
     *
     * @var DeviceTaintSelector
     */
    public $deviceSelector = null;

    /**
     * The taint that gets applied to matching devices.
     *
     * @var DeviceTaint
     */
    public $taint = null;
}


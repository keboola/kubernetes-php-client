<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha3;

use \KubernetesRuntime\AbstractModel;

/**
 * DeviceAllocationConfiguration gets embedded in an AllocationResult.
 */
class DeviceAllocationConfiguration extends AbstractModel
{
    /**
     * Opaque provides driver-specific configuration parameters.
     *
     * @var OpaqueDeviceConfiguration
     */
    public $opaque = null;

    /**
     * Requests lists the names of requests where the configuration applies. If empty,
     * its applies to all requests.
     *
     * References to subrequests must include the name of the main request and may
     * include the subrequest using the format <main request>[/<subrequest>]. If just
     * the main request is given, the configuration applies to all subrequests.
     *
     * @var string[]
     */
    public $requests = null;

    /**
     * Source records whether the configuration comes from a class and thus is not
     * something that a normal user would have been able to set or from a claim.
     *
     * @var string
     */
    public $source = null;
}


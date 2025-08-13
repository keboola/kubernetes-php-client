<?php

namespace Kubernetes\Model\Io\K8s\Api\Discovery\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * EndpointConditions represents the current condition of an endpoint.
 */
class EndpointConditions extends AbstractModel
{
    /**
     * ready indicates that this endpoint is ready to receive traffic, according to
     * whatever system is managing the endpoint. A nil value should be interpreted as
     * "true". In general, an endpoint should be marked ready if it is serving and not
     * terminating, though this can be overridden in some cases, such as when the
     * associated Service has set the publishNotReadyAddresses flag.
     *
     * @var boolean
     */
    public $ready = null;

    /**
     * serving indicates that this endpoint is able to receive traffic, according to
     * whatever system is managing the endpoint. For endpoints backed by pods, the
     * EndpointSlice controller will mark the endpoint as serving if the pod's Ready
     * condition is True. A nil value should be interpreted as "true".
     *
     * @var boolean
     */
    public $serving = null;

    /**
     * terminating indicates that this endpoint is terminating. A nil value should be
     * interpreted as "false".
     *
     * @var boolean
     */
    public $terminating = null;
}


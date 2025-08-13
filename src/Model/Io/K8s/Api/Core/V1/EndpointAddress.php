<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * EndpointAddress is a tuple that describes single IP address. Deprecated: This
 * API is deprecated in v1.33+.
 *
 * @deprecated
 */
class EndpointAddress extends AbstractModel
{
    /**
     * The Hostname of this endpoint
     *
     * @var string
     */
    public $hostname = null;

    /**
     * The IP of this endpoint. May not be loopback (127.0.0.0/8 or ::1), link-local
     * (169.254.0.0/16 or fe80::/10), or link-local multicast (224.0.0.0/24 or
     * ff02::/16).
     *
     * @var string
     */
    public $ip = null;

    /**
     * Optional: Node hosting this endpoint. This can be used to determine endpoints
     * local to a node.
     *
     * @var string
     */
    public $nodeName = null;

    /**
     * Reference to object providing the endpoint.
     *
     * @var ObjectReference
     */
    public $targetRef = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Networking\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * IngressBackend describes all endpoints for a given service and port.
 */
class IngressBackend extends AbstractModel
{
    /**
     * resource is an ObjectRef to another Kubernetes resource in the namespace of the
     * Ingress object. If resource is specified, a service.Name and service.Port must
     * not be specified. This is a mutually exclusive setting with "Service".
     *
     * @var \Kubernetes\Model\Io\K8s\Api\Core\V1\TypedLocalObjectReference
     */
    public $resource = null;

    /**
     * service references a service as a backend. This is a mutually exclusive setting
     * with "Resource".
     *
     * @var IngressServiceBackend
     */
    public $service = null;
}


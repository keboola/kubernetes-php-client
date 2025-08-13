<?php

namespace Kubernetes\Model\Io\Cilium\V2;

use \KubernetesRuntime\AbstractModel;

/**
 * CiliumNode represents a node managed by Cilium. It contains a specification to
 * control various node specific configuration aspects and a status section to
 * represent the status of the node.
 */
class CiliumNode extends AbstractModel
{
    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'cilium.io/v2';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'CiliumNode';

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Spec defines the desired specification/configuration of the node.
     *
     * @var object
     */
    public $spec = null;

    /**
     * Status defines the realized specification/configuration and status of the node.
     *
     * @var object
     */
    public $status = null;
}


<?php

namespace Kubernetes\Model\Io\Cilium\V2;

use \KubernetesRuntime\AbstractModel;

/**
 * CiliumLocalRedirectPolicy is a Kubernetes Custom Resource that contains a
 * specification to redirect traffic locally within a node.
 */
class CiliumLocalRedirectPolicy extends AbstractModel
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
    public $kind = 'CiliumLocalRedirectPolicy';

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Spec is the desired behavior of the local redirect policy.
     *
     * @var object
     */
    public $spec = null;

    /**
     * Status is the most recent status of the local redirect policy. It is a read-only
     * field.
     *
     * @var object
     */
    public $status = null;
}


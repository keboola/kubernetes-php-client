<?php

namespace Kubernetes\Model\Io\Cilium\V2;

use \KubernetesRuntime\AbstractModel;

/**
 * CiliumIdentityList is a list of CiliumIdentity
 */
class CiliumIdentityList extends AbstractModel
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
     * List of ciliumidentities. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md
     *
     * @var CiliumIdentity[]
     */
    public $items = null;

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'CiliumIdentityList';

    /**
     * Standard list metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ListMeta
     */
    public $metadata = null;
}


<?php

namespace Kubernetes\Model\Io\Cilium\V2;

use \KubernetesRuntime\AbstractModel;

/**
 * CiliumExternalWorkload is a Kubernetes Custom Resource that contains a
 * specification for an external workload that can join the cluster.  The name of
 * the CRD is the FQDN of the external workload, and it needs to match the name in
 * the workload registration. The labels on the CRD object are the labels that will
 * be used to allocate a Cilium Identity for the external workload. If
 * 'io.kubernetes.pod.namespace' or 'io.kubernetes.pod.name' labels are not
 * explicitly specified, they will be defaulted to 'default' and <workload name>,
 * respectively. 'io.cilium.k8s.policy.cluster' will always be defined as the name
 * of the current cluster, which defaults to "default".
 */
class CiliumExternalWorkload extends AbstractModel
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
    public $kind = 'CiliumExternalWorkload';

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Spec is the desired configuration of the external Cilium workload.
     *
     * @var object
     */
    public $spec = null;

    /**
     * Status is the most recent status of the external Cilium workload. It is a
     * read-only field.
     *
     * @var object
     */
    public $status = null;
}


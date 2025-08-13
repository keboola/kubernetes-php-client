<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha3;

use \KubernetesRuntime\AbstractModel;

/**
 * ResourceClaim describes a request for access to resources in the cluster, for
 * use by workloads. For example, if a workload needs an accelerator device with
 * specific properties, this is how that request is expressed. The status stanza
 * tracks whether this claim has been satisfied and what specific resources have
 * been allocated.
 *
 * This is an alpha type and requires enabling the DynamicResourceAllocation
 * feature gate.
 */
class ResourceClaim extends AbstractModel
{
    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'resource.k8s.io/v1alpha3';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'ResourceClaim';

    /**
     * Standard object metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Spec describes what is being requested and how to configure it. The spec is
     * immutable.
     *
     * @var ResourceClaimSpec
     */
    public $spec = null;

    /**
     * Status describes whether the claim is ready to use and what has been allocated.
     *
     * @var ResourceClaimStatus
     */
    public $status = null;
}


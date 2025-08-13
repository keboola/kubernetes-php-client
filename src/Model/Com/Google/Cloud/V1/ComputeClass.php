<?php

namespace Kubernetes\Model\Com\Google\Cloud\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ComputeClass is a way to impact Cluster Autoscaler scaling
 * decisions based on user preferences. It gives control over preference of
 * hardware to be selected by Cluster Autoscaler.
 * Given ComputeClass affects only workloads using workload separation
 * label equal to CCs name, except ComputeClass with name default
 * which will be used for workloads not specifying any preferences.
 */
class ComputeClass extends AbstractModel
{
    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'cloud.google.com/v1';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'ComputeClass';

    /**
     * Standard object's metadata. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Specification of the ComputeClass object.
     * More info:
     * https://git.k8s.io/community/contributors/devel/api-conventions.md#spec-and-status.
     *
     * @var object
     */
    public $spec = null;

    /**
     * Status of the ComputeClass.
     *
     * @var object
     */
    public $status = null;
}


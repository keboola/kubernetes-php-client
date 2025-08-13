<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1beta2;

use \KubernetesRuntime\AbstractModel;

/**
 * DeviceClass is a vendor- or admin-provided resource that contains device
 * configuration and selectors. It can be referenced in the device requests of a
 * claim to apply these presets. Cluster scoped.
 *
 * This is an alpha type and requires enabling the DynamicResourceAllocation
 * feature gate.
 */
class DeviceClass extends AbstractModel
{
    /**
     * APIVersion defines the versioned schema of this representation of an object.
     * Servers should convert recognized schemas to the latest internal value, and may
     * reject unrecognized values. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#resources
     *
     * @var string
     */
    public $apiVersion = 'resource.k8s.io/v1beta2';

    /**
     * Kind is a string value representing the REST resource this object represents.
     * Servers may infer this from the endpoint the client submits requests to. Cannot
     * be updated. In CamelCase. More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = 'DeviceClass';

    /**
     * Standard object metadata
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\ObjectMeta
     */
    public $metadata = null;

    /**
     * Spec defines what can be allocated and how to configure it.
     *
     * This is mutable. Consumers have to be prepared for classes changing at any time,
     * either because they get updated or replaced. Claim allocations are done once
     * based on whatever was set in classes at the time of allocation.
     *
     * Changing the spec automatically increments the metadata.generation number.
     *
     * @var DeviceClassSpec
     */
    public $spec = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ResourceClaim references one entry in PodSpec.ResourceClaims.
 */
class ResourceClaim extends AbstractModel
{
    /**
     * Name must match the name of one entry in pod.spec.resourceClaims of the Pod
     * where this field is used. It makes that resource available inside a container.
     *
     * @var string
     */
    public $name = null;

    /**
     * Request is the name chosen for a request in the referenced claim. If empty,
     * everything from the claim is made available, otherwise only the result of this
     * request.
     *
     * @var string
     */
    public $request = null;
}


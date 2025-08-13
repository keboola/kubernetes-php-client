<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * NodeFeatures describes the set of features implemented by the CRI
 * implementation. The features contained in the NodeFeatures should depend only on
 * the cri implementation independent of runtime handlers.
 */
class NodeFeatures extends AbstractModel
{
    /**
     * SupplementalGroupsPolicy is set to true if the runtime supports
     * SupplementalGroupsPolicy and ContainerUser.
     *
     * @var boolean
     */
    public $supplementalGroupsPolicy = null;
}


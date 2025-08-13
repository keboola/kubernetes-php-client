<?php

namespace Kubernetes\Model\Io\K8s\Api\Storagemigration\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * The names of the group, the version, and the resource.
 */
class GroupVersionResource extends AbstractModel
{
    /**
     * The name of the group.
     *
     * @var string
     */
    public $group = null;

    /**
     * The name of the resource.
     *
     * @var string
     */
    public $resource = null;

    /**
     * The name of the version.
     *
     * @var string
     */
    public $version = null;
}


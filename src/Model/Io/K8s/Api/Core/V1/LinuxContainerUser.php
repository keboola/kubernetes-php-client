<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * LinuxContainerUser represents user identity information in Linux containers
 */
class LinuxContainerUser extends AbstractModel
{
    /**
     * GID is the primary gid initially attached to the first process in the container
     *
     * @var integer
     */
    public $gid = null;

    /**
     * SupplementalGroups are the supplemental groups initially attached to the first
     * process in the container
     *
     * @var integer[]|integer[]
     */
    public $supplementalGroups = null;

    /**
     * UID is the primary uid initially attached to the first process in the container
     *
     * @var integer
     */
    public $uid = null;
}


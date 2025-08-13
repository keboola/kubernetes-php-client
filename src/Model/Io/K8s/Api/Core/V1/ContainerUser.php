<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ContainerUser represents user identity information
 */
class ContainerUser extends AbstractModel
{
    /**
     * Linux holds user identity information initially attached to the first process of
     * the containers in Linux. Note that the actual running identity can be changed if
     * the process has enough privilege to do so.
     *
     * @var LinuxContainerUser
     */
    public $linux = null;
}


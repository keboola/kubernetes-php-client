<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * NodeRuntimeHandlerFeatures is a set of features implemented by the runtime
 * handler.
 */
class NodeRuntimeHandlerFeatures extends AbstractModel
{
    /**
     * RecursiveReadOnlyMounts is set to true if the runtime handler supports
     * RecursiveReadOnlyMounts.
     *
     * @var boolean
     */
    public $recursiveReadOnlyMounts = null;

    /**
     * UserNamespaces is set to true if the runtime handler supports UserNamespaces,
     * including for volumes.
     *
     * @var boolean
     */
    public $userNamespaces = null;
}


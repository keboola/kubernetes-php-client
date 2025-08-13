<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * NodeRuntimeHandler is a set of runtime handler information.
 */
class NodeRuntimeHandler extends AbstractModel
{
    /**
     * Supported features.
     *
     * @var NodeRuntimeHandlerFeatures
     */
    public $features = null;

    /**
     * Runtime handler name. Empty for the default runtime handler.
     *
     * @var string
     */
    public $name = null;
}


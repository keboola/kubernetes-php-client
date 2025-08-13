<?php

namespace Kubernetes\Model\Io\K8s\Api\Discovery\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ForNode provides information about which nodes should consume this endpoint.
 */
class ForNode extends AbstractModel
{
    /**
     * name represents the name of the node.
     *
     * @var string
     */
    public $name = null;
}


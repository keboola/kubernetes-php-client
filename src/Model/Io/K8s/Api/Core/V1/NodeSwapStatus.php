<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * NodeSwapStatus represents swap memory information.
 */
class NodeSwapStatus extends AbstractModel
{
    /**
     * Total amount of swap memory in bytes.
     *
     * @var integer
     */
    public $capacity = null;
}


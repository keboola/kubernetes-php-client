<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * NamespaceCondition contains details about state of namespace.
 */
class NamespaceCondition extends AbstractModel
{
    /**
     * Last time the condition transitioned from one status to another.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastTransitionTime = null;

    /**
     * Human-readable message indicating details about last transition.
     *
     * @var string
     */
    public $message = null;

    /**
     * Unique, one-word, CamelCase reason for the condition's last transition.
     *
     * @var string
     */
    public $reason = null;

    /**
     * Status of the condition, one of True, False, Unknown.
     *
     * @var string
     */
    public $status = null;

    /**
     * Type of namespace controller condition.
     *
     * @var string
     */
    public $type = null;
}


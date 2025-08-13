<?php

namespace Kubernetes\Model\Io\K8s\Api\Storagemigration\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * Describes the state of a migration at a certain point.
 */
class MigrationCondition extends AbstractModel
{
    /**
     * The last time this condition was updated.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastUpdateTime = null;

    /**
     * A human readable message indicating details about the transition.
     *
     * @var string
     */
    public $message = null;

    /**
     * The reason for the condition's last transition.
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
     * Type of the condition.
     *
     * @var string
     */
    public $type = null;
}


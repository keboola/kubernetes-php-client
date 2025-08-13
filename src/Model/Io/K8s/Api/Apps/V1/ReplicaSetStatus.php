<?php

namespace Kubernetes\Model\Io\K8s\Api\Apps\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ReplicaSetStatus represents the current status of a ReplicaSet.
 */
class ReplicaSetStatus extends AbstractModel
{
    /**
     * The number of available non-terminating pods (ready for at least
     * minReadySeconds) for this replica set.
     *
     * @var integer
     */
    public $availableReplicas = null;

    /**
     * Represents the latest available observations of a replica set's current state.
     *
     * @var ReplicaSetCondition[]
     */
    public $conditions = null;

    /**
     * The number of non-terminating pods that have labels matching the labels of the
     * pod template of the replicaset.
     *
     * @var integer
     */
    public $fullyLabeledReplicas = null;

    /**
     * ObservedGeneration reflects the generation of the most recently observed
     * ReplicaSet.
     *
     * @var integer
     */
    public $observedGeneration = null;

    /**
     * The number of non-terminating pods targeted by this ReplicaSet with a Ready
     * Condition.
     *
     * @var integer
     */
    public $readyReplicas = null;

    /**
     * Replicas is the most recently observed number of non-terminating pods. More
     * info: https://kubernetes.io/docs/concepts/workloads/controllers/replicaset
     *
     * @var integer
     */
    public $replicas = null;

    /**
     * The number of terminating pods for this replica set. Terminating pods have a
     * non-null .metadata.deletionTimestamp and have not yet reached the Failed or
     * Succeeded .status.phase.
     *
     * This is an alpha field. Enable DeploymentReplicaSetTerminatingReplicas to be
     * able to use this field.
     *
     * @var integer
     */
    public $terminatingReplicas = null;
}


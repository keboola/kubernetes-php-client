<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * PersistentVolumeClaimCondition contains details about state of pvc
 */
class PersistentVolumeClaimCondition extends AbstractModel
{
    /**
     * lastProbeTime is the time we probed the condition.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastProbeTime = null;

    /**
     * lastTransitionTime is the time the condition transitioned from one status to
     * another.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastTransitionTime = null;

    /**
     * message is the human-readable message indicating details about last transition.
     *
     * @var string
     */
    public $message = null;

    /**
     * reason is a unique, this should be a short, machine understandable string that
     * gives the reason for condition's last transition. If it reports "Resizing" that
     * means the underlying persistent volume is being resized.
     *
     * @var string
     */
    public $reason = null;

    /**
     * Status is the status of the condition. Can be True, False, Unknown. More info:
     * https://kubernetes.io/docs/reference/kubernetes-api/config-and-storage-resources/persistent-volume-claim-v1/#:~:text=state%20of%20pvc-,conditions.status,-(string)%2C%20required
     *
     * @var string
     */
    public $status = null;

    /**
     * Type is the type of the condition. More info:
     * https://kubernetes.io/docs/reference/kubernetes-api/config-and-storage-resources/persistent-volume-claim-v1/#:~:text=set%20to%20%27ResizeStarted%27.-,PersistentVolumeClaimCondition,-contains%20details%20about
     *
     * @var string
     */
    public $type = null;
}


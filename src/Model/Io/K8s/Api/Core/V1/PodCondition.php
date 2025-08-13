<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * PodCondition contains details for the current condition of this pod.
 */
class PodCondition extends AbstractModel
{
    /**
     * Last time we probed the condition.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastProbeTime = null;

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
     * If set, this represents the .metadata.generation that the pod condition was set
     * based upon. This is an alpha field. Enable PodObservedGenerationTracking to be
     * able to use this field.
     *
     * @var integer
     */
    public $observedGeneration = null;

    /**
     * Unique, one-word, CamelCase reason for the condition's last transition.
     *
     * @var string
     */
    public $reason = null;

    /**
     * Status is the status of the condition. Can be True, False, Unknown. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#pod-conditions
     *
     * @var string
     */
    public $status = null;

    /**
     * Type is the type of the condition. More info:
     * https://kubernetes.io/docs/concepts/workloads/pods/pod-lifecycle#pod-conditions
     *
     * @var string
     */
    public $type = null;
}


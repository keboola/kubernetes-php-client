<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * current status of a horizontal pod autoscaler
 */
class HorizontalPodAutoscalerStatus extends AbstractModel
{
    /**
     * currentCPUUtilizationPercentage is the current average CPU utilization over all
     * pods, represented as a percentage of requested CPU, e.g. 70 means that an
     * average pod is using now 70% of its requested CPU.
     *
     * @var integer
     */
    public $currentCPUUtilizationPercentage = null;

    /**
     * currentReplicas is the current number of replicas of pods managed by this
     * autoscaler.
     *
     * @var integer
     */
    public $currentReplicas = null;

    /**
     * desiredReplicas is the  desired number of replicas of pods managed by this
     * autoscaler.
     *
     * @var integer
     */
    public $desiredReplicas = null;

    /**
     * lastScaleTime is the last time the HorizontalPodAutoscaler scaled the number of
     * pods; used by the autoscaler to control how often the number of pods is changed.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $lastScaleTime = null;

    /**
     * observedGeneration is the most recent generation observed by this autoscaler.
     *
     * @var integer
     */
    public $observedGeneration = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ScaleStatus represents the current status of a scale subresource.
 */
class ScaleStatus extends AbstractModel
{
    /**
     * replicas is the actual number of observed instances of the scaled object.
     *
     * @var integer
     */
    public $replicas = null;

    /**
     * selector is the label query over pods that should match the replicas count. This
     * is same as the label selector but in the string format to avoid introspection by
     * clients. The string will be in the same format as the query-param syntax. More
     * info about label selectors:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/labels/
     *
     * @var string
     */
    public $selector = null;
}


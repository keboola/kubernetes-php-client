<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2;

use \KubernetesRuntime\AbstractModel;

/**
 * CrossVersionObjectReference contains enough information to let you identify the
 * referred resource.
 */
class CrossVersionObjectReference extends AbstractModel
{
    /**
     * apiVersion is the API version of the referent
     *
     * @var string
     */
    public $apiVersion = null;

    /**
     * kind is the kind of the referent; More info:
     * https://git.k8s.io/community/contributors/devel/sig-architecture/api-conventions.md#types-kinds
     *
     * @var string
     */
    public $kind = null;

    /**
     * name is the name of the referent; More info:
     * https://kubernetes.io/docs/concepts/overview/working-with-objects/names/#names
     *
     * @var string
     */
    public $name = null;
}


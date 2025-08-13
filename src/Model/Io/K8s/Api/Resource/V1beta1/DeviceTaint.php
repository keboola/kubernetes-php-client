<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * The device this taint is attached to has the "effect" on any claim which does
 * not tolerate the taint and, through the claim, to pods using the claim.
 */
class DeviceTaint extends AbstractModel
{
    /**
     * The effect of the taint on claims that do not tolerate the taint and through
     * such claims on the pods using them. Valid effects are NoSchedule and NoExecute.
     * PreferNoSchedule as used for nodes is not valid here.
     *
     * @var string
     */
    public $effect = null;

    /**
     * The taint key to be applied to a device. Must be a label name.
     *
     * @var string
     */
    public $key = null;

    /**
     * TimeAdded represents the time at which the taint was added. Added automatically
     * during create or update if not set.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $timeAdded = null;

    /**
     * The taint value corresponding to the taint key. Must be a label value.
     *
     * @var string
     */
    public $value = null;
}


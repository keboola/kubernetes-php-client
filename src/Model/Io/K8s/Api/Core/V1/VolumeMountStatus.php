<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * VolumeMountStatus shows status of volume mounts.
 */
class VolumeMountStatus extends AbstractModel
{
    /**
     * MountPath corresponds to the original VolumeMount.
     *
     * @var string
     */
    public $mountPath = null;

    /**
     * Name corresponds to the name of the original VolumeMount.
     *
     * @var string
     */
    public $name = null;

    /**
     * ReadOnly corresponds to the original VolumeMount.
     *
     * @var boolean
     */
    public $readOnly = null;

    /**
     * RecursiveReadOnly must be set to Disabled, Enabled, or unspecified (for
     * non-readonly mounts). An IfPossible value in the original VolumeMount must be
     * translated to Disabled or Enabled, depending on the mount result.
     *
     * @var string
     */
    public $recursiveReadOnly = null;
}


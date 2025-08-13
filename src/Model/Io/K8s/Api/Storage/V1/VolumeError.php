<?php

namespace Kubernetes\Model\Io\K8s\Api\Storage\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * VolumeError captures an error encountered during a volume operation.
 */
class VolumeError extends AbstractModel
{
    /**
     * errorCode is a numeric gRPC code representing the error encountered during
     * Attach or Detach operations.
     *
     * This is an optional, alpha field that requires the
     * MutableCSINodeAllocatableCount feature gate being enabled to be set.
     *
     * @var integer
     */
    public $errorCode = null;

    /**
     * message represents the error encountered during Attach or Detach operation. This
     * string may be logged, so it should not contain sensitive information.
     *
     * @var string
     */
    public $message = null;

    /**
     * time represents the time the error was encountered.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Time
     */
    public $time = null;
}


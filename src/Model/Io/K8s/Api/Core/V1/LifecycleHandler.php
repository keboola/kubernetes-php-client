<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * LifecycleHandler defines a specific action that should be taken in a lifecycle
 * hook. One and only one of the fields, except TCPSocket must be specified.
 */
class LifecycleHandler extends AbstractModel
{
    /**
     * Exec specifies a command to execute in the container.
     *
     * @var ExecAction
     */
    public $exec = null;

    /**
     * HTTPGet specifies an HTTP GET request to perform.
     *
     * @var HTTPGetAction
     */
    public $httpGet = null;

    /**
     * Sleep represents a duration that the container should sleep.
     *
     * @var SleepAction
     */
    public $sleep = null;

    /**
     * Deprecated. TCPSocket is NOT supported as a LifecycleHandler and kept for
     * backward compatibility. There is no validation of this field and lifecycle hooks
     * will fail at runtime when it is specified.
     *
     * @var TCPSocketAction
     */
    public $tcpSocket = null;
}


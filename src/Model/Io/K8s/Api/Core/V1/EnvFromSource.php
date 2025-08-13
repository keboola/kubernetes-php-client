<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * EnvFromSource represents the source of a set of ConfigMaps or Secrets
 */
class EnvFromSource extends AbstractModel
{
    /**
     * The ConfigMap to select from
     *
     * @var ConfigMapEnvSource
     */
    public $configMapRef = null;

    /**
     * Optional text to prepend to the name of each environment variable. Must be a
     * C_IDENTIFIER.
     *
     * @var string
     */
    public $prefix = null;

    /**
     * The Secret to select from
     *
     * @var SecretEnvSource
     */
    public $secretRef = null;
}


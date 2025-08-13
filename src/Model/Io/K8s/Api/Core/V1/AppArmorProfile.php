<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * AppArmorProfile defines a pod or container's AppArmor settings.
 */
class AppArmorProfile extends AbstractModel
{
    /**
     * localhostProfile indicates a profile loaded on the node that should be used. The
     * profile must be preconfigured on the node to work. Must match the loaded name of
     * the profile. Must be set if and only if type is "Localhost".
     *
     * @var string
     */
    public $localhostProfile = null;

    /**
     * type indicates which kind of AppArmor profile will be applied. Valid options
     * are:
     *   Localhost - a profile pre-loaded on the node.
     *   RuntimeDefault - the container runtime's default profile.
     *   Unconfined - no AppArmor enforcement.
     *
     * @var string
     */
    public $type = null;
}


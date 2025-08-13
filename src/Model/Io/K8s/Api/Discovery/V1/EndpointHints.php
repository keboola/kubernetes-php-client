<?php

namespace Kubernetes\Model\Io\K8s\Api\Discovery\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * EndpointHints provides hints describing how an endpoint should be consumed.
 */
class EndpointHints extends AbstractModel
{
    /**
     * forNodes indicates the node(s) this endpoint should be consumed by when using
     * topology aware routing. May contain a maximum of 8 entries. This is an Alpha
     * feature and is only used when the PreferSameTrafficDistribution feature gate is
     * enabled.
     *
     * @var ForNode[]
     */
    public $forNodes = null;

    /**
     * forZones indicates the zone(s) this endpoint should be consumed by when using
     * topology aware routing. May contain a maximum of 8 entries.
     *
     * @var ForZone[]
     */
    public $forZones = null;
}


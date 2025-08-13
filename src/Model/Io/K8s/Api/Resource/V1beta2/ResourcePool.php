<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1beta2;

use \KubernetesRuntime\AbstractModel;

/**
 * ResourcePool describes the pool that ResourceSlices belong to.
 */
class ResourcePool extends AbstractModel
{
    /**
     * Generation tracks the change in a pool over time. Whenever a driver changes
     * something about one or more of the resources in a pool, it must change the
     * generation in all ResourceSlices which are part of that pool. Consumers of
     * ResourceSlices should only consider resources from the pool with the highest
     * generation number. The generation may be reset by drivers, which should be fine
     * for consumers, assuming that all ResourceSlices in a pool are updated to match
     * or deleted.
     *
     * Combined with ResourceSliceCount, this mechanism enables consumers to detect
     * pools which are comprised of multiple ResourceSlices and are in an incomplete
     * state.
     *
     * @var integer
     */
    public $generation = null;

    /**
     * Name is used to identify the pool. For node-local devices, this is often the
     * node name, but this is not required.
     *
     * It must not be longer than 253 characters and must consist of one or more DNS
     * sub-domains separated by slashes. This field is immutable.
     *
     * @var string
     */
    public $name = null;

    /**
     * ResourceSliceCount is the total number of ResourceSlices in the pool at this
     * generation number. Must be greater than zero.
     *
     * Consumers can use this to check whether they have seen all ResourceSlices
     * belonging to the same pool.
     *
     * @var integer
     */
    public $resourceSliceCount = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * CounterSet defines a named set of counters that are available to be used by
 * devices defined in the ResourceSlice.
 *
 * The counters are not allocatable by themselves, but can be referenced by
 * devices. When a device is allocated, the portion of counters it uses will no
 * longer be available for use by other devices.
 */
class CounterSet extends AbstractModel
{
    /**
     * Counters defines the set of counters for this CounterSet The name of each
     * counter must be unique in that set and must be a DNS label.
     *
     * The maximum number of counters is 32.
     *
     * @var object
     */
    public $counters = null;

    /**
     * Name defines the name of the counter set. It must be a DNS label.
     *
     * @var string
     */
    public $name = null;
}


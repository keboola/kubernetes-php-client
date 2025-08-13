<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * NodeStatus is information about the current status of a node.
 */
class NodeStatus extends AbstractModel
{
    /**
     * List of addresses reachable to the node. Queried from cloud provider, if
     * available. More info:
     * https://kubernetes.io/docs/reference/node/node-status/#addresses Note: This
     * field is declared as mergeable, but the merge key is not sufficiently unique,
     * which can cause data corruption when it is merged. Callers should instead use a
     * full-replacement patch. See https://pr.k8s.io/79391 for an example. Consumers
     * should assume that addresses can change during the lifetime of a Node. However,
     * there are some exceptions where this may not be possible, such as Pods that
     * inherit a Node's address in its own status or consumers of the downward API
     * (status.hostIP).
     *
     * @var NodeAddress[]
     */
    public $addresses = null;

    /**
     * Allocatable represents the resources of a node that are available for
     * scheduling. Defaults to Capacity.
     *
     * @var object
     */
    public $allocatable = null;

    /**
     * Capacity represents the total resources of a node. More info:
     * https://kubernetes.io/docs/reference/node/node-status/#capacity
     *
     * @var object
     */
    public $capacity = null;

    /**
     * Conditions is an array of current observed node conditions. More info:
     * https://kubernetes.io/docs/reference/node/node-status/#condition
     *
     * @var NodeCondition[]
     */
    public $conditions = null;

    /**
     * Status of the config assigned to the node via the dynamic Kubelet config
     * feature.
     *
     * @var NodeConfigStatus
     */
    public $config = null;

    /**
     * Endpoints of daemons running on the Node.
     *
     * @var NodeDaemonEndpoints
     */
    public $daemonEndpoints = null;

    /**
     * Features describes the set of features implemented by the CRI implementation.
     *
     * @var NodeFeatures
     */
    public $features = null;

    /**
     * List of container images on this node
     *
     * @var ContainerImage[]
     */
    public $images = null;

    /**
     * Set of ids/uuids to uniquely identify the node. More info:
     * https://kubernetes.io/docs/reference/node/node-status/#info
     *
     * @var NodeSystemInfo
     */
    public $nodeInfo = null;

    /**
     * NodePhase is the recently observed lifecycle phase of the node. More info:
     * https://kubernetes.io/docs/concepts/nodes/node/#phase The field is never
     * populated, and now is deprecated.
     *
     * @var string
     */
    public $phase = null;

    /**
     * The available runtime handlers.
     *
     * @var NodeRuntimeHandler[]
     */
    public $runtimeHandlers = null;

    /**
     * List of volumes that are attached to the node.
     *
     * @var AttachedVolume[]
     */
    public $volumesAttached = null;

    /**
     * List of attachable volumes in use (mounted) by the node.
     *
     * @var string[]
     */
    public $volumesInUse = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Autoscaling\V2;

use \KubernetesRuntime\AbstractModel;

/**
 * MetricSpec specifies how to scale based on a single metric (only `type` and one
 * other matching field should be set at once).
 */
class MetricSpec extends AbstractModel
{
    /**
     * containerResource refers to a resource metric (such as those specified in
     * requests and limits) known to Kubernetes describing a single container in each
     * pod of the current scale target (e.g. CPU or memory). Such metrics are built in
     * to Kubernetes, and have special scaling options on top of those available to
     * normal per-pod metrics using the "pods" source. This is an alpha feature and can
     * be enabled by the HPAContainerMetrics feature flag.
     *
     * @var ContainerResourceMetricSource
     */
    public $containerResource = null;

    /**
     * external refers to a global metric that is not associated with any Kubernetes
     * object. It allows autoscaling based on information coming from components
     * running outside of cluster (for example length of queue in cloud messaging
     * service, or QPS from loadbalancer running outside of cluster).
     *
     * @var ExternalMetricSource
     */
    public $external = null;

    /**
     * object refers to a metric describing a single kubernetes object (for example,
     * hits-per-second on an Ingress object).
     *
     * @var ObjectMetricSource
     */
    public $object = null;

    /**
     * pods refers to a metric describing each pod in the current scale target (for
     * example, transactions-processed-per-second).  The values will be averaged
     * together before being compared to the target value.
     *
     * @var PodsMetricSource
     */
    public $pods = null;

    /**
     * resource refers to a resource metric (such as those specified in requests and
     * limits) known to Kubernetes describing each pod in the current scale target
     * (e.g. CPU or memory). Such metrics are built in to Kubernetes, and have special
     * scaling options on top of those available to normal per-pod metrics using the
     * "pods" source.
     *
     * @var ResourceMetricSource
     */
    public $resource = null;

    /**
     * type is the type of metric source.  It should be one of "ContainerResource",
     * "External", "Object", "Pods" or "Resource", each mapping to a matching field in
     * the object. Note: "ContainerResource" type is available on when the feature-gate
     * HPAContainerMetrics is enabled
     *
     * @var string
     */
    public $type = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Api\Core\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * Projection that may be projected along with other supported volume types.
 * Exactly one of these fields must be set.
 */
class VolumeProjection extends AbstractModel
{
    /**
     * ClusterTrustBundle allows a pod to access the `.spec.trustBundle` field of
     * ClusterTrustBundle objects in an auto-updating file.
     *
     * Alpha, gated by the ClusterTrustBundleProjection feature gate.
     *
     * ClusterTrustBundle objects can either be selected by name, or by the combination
     * of signer name and a label selector.
     *
     * Kubelet performs aggressive normalization of the PEM contents written into the
     * pod filesystem.  Esoteric PEM features such as inter-block comments and block
     * headers are stripped.  Certificates are deduplicated. The ordering of
     * certificates within the file is arbitrary, and Kubelet may change the order over
     * time.
     *
     * @var ClusterTrustBundleProjection
     */
    public $clusterTrustBundle = null;

    /**
     * configMap information about the configMap data to project
     *
     * @var ConfigMapProjection
     */
    public $configMap = null;

    /**
     * downwardAPI information about the downwardAPI data to project
     *
     * @var DownwardAPIProjection
     */
    public $downwardAPI = null;

    /**
     * secret information about the secret data to project
     *
     * @var SecretProjection
     */
    public $secret = null;

    /**
     * serviceAccountToken is information about the serviceAccountToken data to project
     *
     * @var ServiceAccountTokenProjection
     */
    public $serviceAccountToken = null;
}


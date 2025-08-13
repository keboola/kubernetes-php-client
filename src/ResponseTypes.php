<?php

namespace Kubernetes;

class ResponseTypes
{
    public const TYPES = [
        'getCoreAPIVersions' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIVersions',
        ],
        'getCoreV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listCoreV1ComponentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ComponentStatusList',
        ],
        'readCoreV1ComponentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ComponentStatus',
        ],
        'listCoreV1ConfigMapForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ConfigMapList',
        ],
        'listCoreV1EndpointsForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\EndpointsList',
        ],
        'listCoreV1EventForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\EventList',
        ],
        'listCoreV1LimitRangeForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\LimitRangeList',
        ],
        'listCoreV1Namespace' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\NamespaceList',
        ],
        'createCoreV1Namespace' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
        ],
        'createCoreV1NamespacedBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Binding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Binding',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Binding',
        ],
        'listCoreV1NamespacedConfigMap' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ConfigMapList',
        ],
        'createCoreV1NamespacedConfigMap' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ConfigMap',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ConfigMap',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ConfigMap',
        ],
        'deleteCoreV1CollectionNamespacedConfigMap' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedConfigMap' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ConfigMap',
        ],
        'replaceCoreV1NamespacedConfigMap' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ConfigMap',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ConfigMap',
        ],
        'deleteCoreV1NamespacedConfigMap' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1NamespacedConfigMap' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ConfigMap',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ConfigMap',
        ],
        'listCoreV1NamespacedEndpoints' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\EndpointsList',
        ],
        'createCoreV1NamespacedEndpoints' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Endpoints',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Endpoints',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Endpoints',
        ],
        'deleteCoreV1CollectionNamespacedEndpoints' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedEndpoints' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Endpoints',
        ],
        'replaceCoreV1NamespacedEndpoints' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Endpoints',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Endpoints',
        ],
        'deleteCoreV1NamespacedEndpoints' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1NamespacedEndpoints' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Endpoints',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Endpoints',
        ],
        'listCoreV1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\EventList',
        ],
        'createCoreV1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Event',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Event',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Event',
        ],
        'deleteCoreV1CollectionNamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Event',
        ],
        'replaceCoreV1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Event',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Event',
        ],
        'deleteCoreV1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Event',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Event',
        ],
        'listCoreV1NamespacedLimitRange' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\LimitRangeList',
        ],
        'createCoreV1NamespacedLimitRange' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\LimitRange',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\LimitRange',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\LimitRange',
        ],
        'deleteCoreV1CollectionNamespacedLimitRange' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedLimitRange' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\LimitRange',
        ],
        'replaceCoreV1NamespacedLimitRange' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\LimitRange',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\LimitRange',
        ],
        'deleteCoreV1NamespacedLimitRange' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1NamespacedLimitRange' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\LimitRange',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\LimitRange',
        ],
        'listCoreV1NamespacedPersistentVolumeClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaimList',
        ],
        'createCoreV1NamespacedPersistentVolumeClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
        ],
        'deleteCoreV1CollectionNamespacedPersistentVolumeClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedPersistentVolumeClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
        ],
        'replaceCoreV1NamespacedPersistentVolumeClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
        ],
        'deleteCoreV1NamespacedPersistentVolumeClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
        ],
        'patchCoreV1NamespacedPersistentVolumeClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
        ],
        'readCoreV1NamespacedPersistentVolumeClaimStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
        ],
        'replaceCoreV1NamespacedPersistentVolumeClaimStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
        ],
        'patchCoreV1NamespacedPersistentVolumeClaimStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaim',
        ],
        'listCoreV1NamespacedPod' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodList',
        ],
        'createCoreV1NamespacedPod' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
        ],
        'deleteCoreV1CollectionNamespacedPod' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedPod' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
        ],
        'replaceCoreV1NamespacedPod' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
        ],
        'deleteCoreV1NamespacedPod' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
        ],
        'patchCoreV1NamespacedPod' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
        ],
        'createCoreV1NamespacedPodBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Binding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Binding',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Binding',
        ],
        'readCoreV1NamespacedPodEphemeralcontainers' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
        ],
        'replaceCoreV1NamespacedPodEphemeralcontainers' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
        ],
        'patchCoreV1NamespacedPodEphemeralcontainers' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
        ],
        'createCoreV1NamespacedPodEviction' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1\\Eviction',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1\\Eviction',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1\\Eviction',
        ],
        'readCoreV1NamespacedPodResize' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
        ],
        'replaceCoreV1NamespacedPodResize' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
        ],
        'patchCoreV1NamespacedPodResize' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
        ],
        'readCoreV1NamespacedPodStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
        ],
        'replaceCoreV1NamespacedPodStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
        ],
        'patchCoreV1NamespacedPodStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Pod',
        ],
        'listCoreV1NamespacedPodTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodTemplateList',
        ],
        'createCoreV1NamespacedPodTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodTemplate',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodTemplate',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodTemplate',
        ],
        'deleteCoreV1CollectionNamespacedPodTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedPodTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodTemplate',
        ],
        'replaceCoreV1NamespacedPodTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodTemplate',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodTemplate',
        ],
        'deleteCoreV1NamespacedPodTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodTemplate',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodTemplate',
        ],
        'patchCoreV1NamespacedPodTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodTemplate',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodTemplate',
        ],
        'listCoreV1NamespacedReplicationController' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationControllerList',
        ],
        'createCoreV1NamespacedReplicationController' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
        ],
        'deleteCoreV1CollectionNamespacedReplicationController' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedReplicationController' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
        ],
        'replaceCoreV1NamespacedReplicationController' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
        ],
        'deleteCoreV1NamespacedReplicationController' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1NamespacedReplicationController' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
        ],
        'readCoreV1NamespacedReplicationControllerScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'replaceCoreV1NamespacedReplicationControllerScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'patchCoreV1NamespacedReplicationControllerScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'readCoreV1NamespacedReplicationControllerStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
        ],
        'replaceCoreV1NamespacedReplicationControllerStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
        ],
        'patchCoreV1NamespacedReplicationControllerStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationController',
        ],
        'listCoreV1NamespacedResourceQuota' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuotaList',
        ],
        'createCoreV1NamespacedResourceQuota' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
        ],
        'deleteCoreV1CollectionNamespacedResourceQuota' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedResourceQuota' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
        ],
        'replaceCoreV1NamespacedResourceQuota' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
        ],
        'deleteCoreV1NamespacedResourceQuota' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
        ],
        'patchCoreV1NamespacedResourceQuota' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
        ],
        'readCoreV1NamespacedResourceQuotaStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
        ],
        'replaceCoreV1NamespacedResourceQuotaStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
        ],
        'patchCoreV1NamespacedResourceQuotaStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuota',
        ],
        'listCoreV1NamespacedSecret' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\SecretList',
        ],
        'createCoreV1NamespacedSecret' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Secret',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Secret',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Secret',
        ],
        'deleteCoreV1CollectionNamespacedSecret' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedSecret' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Secret',
        ],
        'replaceCoreV1NamespacedSecret' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Secret',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Secret',
        ],
        'deleteCoreV1NamespacedSecret' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1NamespacedSecret' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Secret',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Secret',
        ],
        'listCoreV1NamespacedServiceAccount' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceAccountList',
        ],
        'createCoreV1NamespacedServiceAccount' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceAccount',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceAccount',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceAccount',
        ],
        'deleteCoreV1CollectionNamespacedServiceAccount' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedServiceAccount' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceAccount',
        ],
        'replaceCoreV1NamespacedServiceAccount' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceAccount',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceAccount',
        ],
        'deleteCoreV1NamespacedServiceAccount' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceAccount',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceAccount',
        ],
        'patchCoreV1NamespacedServiceAccount' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceAccount',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceAccount',
        ],
        'createCoreV1NamespacedServiceAccountToken' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authentication\\V1\\TokenRequest',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authentication\\V1\\TokenRequest',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authentication\\V1\\TokenRequest',
        ],
        'listCoreV1NamespacedService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceList',
        ],
        'createCoreV1NamespacedService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
        ],
        'deleteCoreV1CollectionNamespacedService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1NamespacedService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
        ],
        'replaceCoreV1NamespacedService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
        ],
        'deleteCoreV1NamespacedService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
        ],
        'patchCoreV1NamespacedService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
        ],
        'readCoreV1NamespacedServiceStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
        ],
        'replaceCoreV1NamespacedServiceStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
        ],
        'patchCoreV1NamespacedServiceStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Service',
        ],
        'readCoreV1Namespace' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
        ],
        'replaceCoreV1Namespace' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
        ],
        'deleteCoreV1Namespace' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1Namespace' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
        ],
        'replaceCoreV1NamespaceFinalize' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
        ],
        'readCoreV1NamespaceStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
        ],
        'replaceCoreV1NamespaceStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
        ],
        'patchCoreV1NamespaceStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\KubernetesNamespace',
        ],
        'listCoreV1Node' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\NodeList',
        ],
        'createCoreV1Node' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
        ],
        'deleteCoreV1CollectionNode' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1Node' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
        ],
        'replaceCoreV1Node' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
        ],
        'deleteCoreV1Node' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoreV1Node' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
        ],
        'readCoreV1NodeStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
        ],
        'replaceCoreV1NodeStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
        ],
        'patchCoreV1NodeStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\Node',
        ],
        'listCoreV1PersistentVolumeClaimForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeClaimList',
        ],
        'listCoreV1PersistentVolume' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolumeList',
        ],
        'createCoreV1PersistentVolume' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
        ],
        'deleteCoreV1CollectionPersistentVolume' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoreV1PersistentVolume' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
        ],
        'replaceCoreV1PersistentVolume' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
        ],
        'deleteCoreV1PersistentVolume' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
        ],
        'patchCoreV1PersistentVolume' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
        ],
        'readCoreV1PersistentVolumeStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
        ],
        'replaceCoreV1PersistentVolumeStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
        ],
        'patchCoreV1PersistentVolumeStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PersistentVolume',
        ],
        'listCoreV1PodForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodList',
        ],
        'listCoreV1PodTemplateForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\PodTemplateList',
        ],
        'listCoreV1ReplicationControllerForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ReplicationControllerList',
        ],
        'listCoreV1ResourceQuotaForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ResourceQuotaList',
        ],
        'listCoreV1SecretForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\SecretList',
        ],
        'listCoreV1ServiceAccountForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceAccountList',
        ],
        'listCoreV1ServiceForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Core\\V1\\ServiceList',
        ],
        'watchCoreV1ConfigMapListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1EndpointsListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1EventListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1LimitRangeListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespaceList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedConfigMapList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedConfigMap' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedEndpointsList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedEndpoints' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedEventList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedLimitRangeList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedLimitRange' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedPersistentVolumeClaimList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedPersistentVolumeClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedPodList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedPod' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedPodTemplateList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedPodTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedReplicationControllerList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedReplicationController' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedResourceQuotaList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedResourceQuota' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedSecretList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedSecret' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedServiceAccountList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedServiceAccount' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedServiceList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NamespacedService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1Namespace' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1NodeList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1Node' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1PersistentVolumeClaimListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1PersistentVolumeList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1PersistentVolume' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1PodListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1PodTemplateListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1ReplicationControllerListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1ResourceQuotaListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1SecretListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1ServiceAccountListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoreV1ServiceListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getAPIVersions' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroupList',
        ],
        'getAdmissionregistrationAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getAdmissionregistrationV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listAdmissionregistrationV1MutatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\MutatingWebhookConfigurationList',
        ],
        'createAdmissionregistrationV1MutatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\MutatingWebhookConfiguration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\MutatingWebhookConfiguration',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\MutatingWebhookConfiguration',
        ],
        'deleteAdmissionregistrationV1CollectionMutatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAdmissionregistrationV1MutatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\MutatingWebhookConfiguration',
        ],
        'replaceAdmissionregistrationV1MutatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\MutatingWebhookConfiguration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\MutatingWebhookConfiguration',
        ],
        'deleteAdmissionregistrationV1MutatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAdmissionregistrationV1MutatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\MutatingWebhookConfiguration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\MutatingWebhookConfiguration',
        ],
        'listAdmissionregistrationV1ValidatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicyList',
        ],
        'createAdmissionregistrationV1ValidatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicy',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicy',
        ],
        'deleteAdmissionregistrationV1CollectionValidatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAdmissionregistrationV1ValidatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicy',
        ],
        'replaceAdmissionregistrationV1ValidatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicy',
        ],
        'deleteAdmissionregistrationV1ValidatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAdmissionregistrationV1ValidatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicy',
        ],
        'readAdmissionregistrationV1ValidatingAdmissionPolicyStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicy',
        ],
        'replaceAdmissionregistrationV1ValidatingAdmissionPolicyStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicy',
        ],
        'patchAdmissionregistrationV1ValidatingAdmissionPolicyStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicy',
        ],
        'listAdmissionregistrationV1ValidatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicyBindingList',
        ],
        'createAdmissionregistrationV1ValidatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicyBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicyBinding',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicyBinding',
        ],
        'deleteAdmissionregistrationV1CollectionValidatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAdmissionregistrationV1ValidatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicyBinding',
        ],
        'replaceAdmissionregistrationV1ValidatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicyBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicyBinding',
        ],
        'deleteAdmissionregistrationV1ValidatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAdmissionregistrationV1ValidatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicyBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingAdmissionPolicyBinding',
        ],
        'listAdmissionregistrationV1ValidatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingWebhookConfigurationList',
        ],
        'createAdmissionregistrationV1ValidatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingWebhookConfiguration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingWebhookConfiguration',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingWebhookConfiguration',
        ],
        'deleteAdmissionregistrationV1CollectionValidatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAdmissionregistrationV1ValidatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingWebhookConfiguration',
        ],
        'replaceAdmissionregistrationV1ValidatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingWebhookConfiguration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingWebhookConfiguration',
        ],
        'deleteAdmissionregistrationV1ValidatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAdmissionregistrationV1ValidatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingWebhookConfiguration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1\\ValidatingWebhookConfiguration',
        ],
        'watchAdmissionregistrationV1MutatingWebhookConfigurationList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAdmissionregistrationV1MutatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAdmissionregistrationV1ValidatingAdmissionPolicyList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAdmissionregistrationV1ValidatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAdmissionregistrationV1ValidatingAdmissionPolicyBindingList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAdmissionregistrationV1ValidatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAdmissionregistrationV1ValidatingWebhookConfigurationList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAdmissionregistrationV1ValidatingWebhookConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getAdmissionregistrationV1alpha1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listAdmissionregistrationV1alpha1MutatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\MutatingAdmissionPolicyList',
        ],
        'createAdmissionregistrationV1alpha1MutatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\MutatingAdmissionPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\MutatingAdmissionPolicy',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\MutatingAdmissionPolicy',
        ],
        'deleteAdmissionregistrationV1alpha1CollectionMutatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAdmissionregistrationV1alpha1MutatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\MutatingAdmissionPolicy',
        ],
        'replaceAdmissionregistrationV1alpha1MutatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\MutatingAdmissionPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\MutatingAdmissionPolicy',
        ],
        'deleteAdmissionregistrationV1alpha1MutatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAdmissionregistrationV1alpha1MutatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\MutatingAdmissionPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\MutatingAdmissionPolicy',
        ],
        'listAdmissionregistrationV1alpha1MutatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\MutatingAdmissionPolicyBindingList',
        ],
        'createAdmissionregistrationV1alpha1MutatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\MutatingAdmissionPolicyBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\MutatingAdmissionPolicyBinding',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\MutatingAdmissionPolicyBinding',
        ],
        'deleteAdmissionregistrationV1alpha1CollectionMutatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAdmissionregistrationV1alpha1MutatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\MutatingAdmissionPolicyBinding',
        ],
        'replaceAdmissionregistrationV1alpha1MutatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\MutatingAdmissionPolicyBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\MutatingAdmissionPolicyBinding',
        ],
        'deleteAdmissionregistrationV1alpha1MutatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAdmissionregistrationV1alpha1MutatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\MutatingAdmissionPolicyBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1alpha1\\MutatingAdmissionPolicyBinding',
        ],
        'watchAdmissionregistrationV1alpha1MutatingAdmissionPolicyList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAdmissionregistrationV1alpha1MutatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAdmissionregistrationV1alpha1MutatingAdmissionPolicyBindingList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAdmissionregistrationV1alpha1MutatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getAdmissionregistrationV1beta1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listAdmissionregistrationV1beta1ValidatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicyList',
        ],
        'createAdmissionregistrationV1beta1ValidatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicy',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicy',
        ],
        'deleteAdmissionregistrationV1beta1CollectionValidatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAdmissionregistrationV1beta1ValidatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicy',
        ],
        'replaceAdmissionregistrationV1beta1ValidatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicy',
        ],
        'deleteAdmissionregistrationV1beta1ValidatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAdmissionregistrationV1beta1ValidatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicy',
        ],
        'readAdmissionregistrationV1beta1ValidatingAdmissionPolicyStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicy',
        ],
        'replaceAdmissionregistrationV1beta1ValidatingAdmissionPolicyStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicy',
        ],
        'patchAdmissionregistrationV1beta1ValidatingAdmissionPolicyStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicy',
        ],
        'listAdmissionregistrationV1beta1ValidatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicyBindingList',
        ],
        'createAdmissionregistrationV1beta1ValidatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicyBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicyBinding',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicyBinding',
        ],
        'deleteAdmissionregistrationV1beta1CollectionValidatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAdmissionregistrationV1beta1ValidatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicyBinding',
        ],
        'replaceAdmissionregistrationV1beta1ValidatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicyBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicyBinding',
        ],
        'deleteAdmissionregistrationV1beta1ValidatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAdmissionregistrationV1beta1ValidatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicyBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Admissionregistration\\V1beta1\\ValidatingAdmissionPolicyBinding',
        ],
        'watchAdmissionregistrationV1beta1ValidatingAdmissionPolicyList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAdmissionregistrationV1beta1ValidatingAdmissionPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAdmissionregistrationV1beta1ValidatingAdmissionPolicyBindingList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAdmissionregistrationV1beta1ValidatingAdmissionPolicyBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getApiextensionsAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getApiextensionsV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listApiextensionsV1CustomResourceDefinition' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1\\CustomResourceDefinitionList',
        ],
        'createApiextensionsV1CustomResourceDefinition' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1\\CustomResourceDefinition',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1\\CustomResourceDefinition',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1\\CustomResourceDefinition',
        ],
        'deleteApiextensionsV1CollectionCustomResourceDefinition' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readApiextensionsV1CustomResourceDefinition' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1\\CustomResourceDefinition',
        ],
        'replaceApiextensionsV1CustomResourceDefinition' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1\\CustomResourceDefinition',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1\\CustomResourceDefinition',
        ],
        'deleteApiextensionsV1CustomResourceDefinition' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchApiextensionsV1CustomResourceDefinition' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1\\CustomResourceDefinition',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1\\CustomResourceDefinition',
        ],
        'readApiextensionsV1CustomResourceDefinitionStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1\\CustomResourceDefinition',
        ],
        'replaceApiextensionsV1CustomResourceDefinitionStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1\\CustomResourceDefinition',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1\\CustomResourceDefinition',
        ],
        'patchApiextensionsV1CustomResourceDefinitionStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1\\CustomResourceDefinition',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Apiextensions_apiserver\\Pkg\\Apis\\Apiextensions\\V1\\CustomResourceDefinition',
        ],
        'watchApiextensionsV1CustomResourceDefinitionList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchApiextensionsV1CustomResourceDefinition' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getApiregistrationAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getApiregistrationV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listApiregistrationV1APIService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1\\APIServiceList',
        ],
        'createApiregistrationV1APIService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1\\APIService',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1\\APIService',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1\\APIService',
        ],
        'deleteApiregistrationV1CollectionAPIService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readApiregistrationV1APIService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1\\APIService',
        ],
        'replaceApiregistrationV1APIService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1\\APIService',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1\\APIService',
        ],
        'deleteApiregistrationV1APIService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchApiregistrationV1APIService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1\\APIService',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1\\APIService',
        ],
        'readApiregistrationV1APIServiceStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1\\APIService',
        ],
        'replaceApiregistrationV1APIServiceStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1\\APIService',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1\\APIService',
        ],
        'patchApiregistrationV1APIServiceStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1\\APIService',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Kube_aggregator\\Pkg\\Apis\\Apiregistration\\V1\\APIService',
        ],
        'watchApiregistrationV1APIServiceList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchApiregistrationV1APIService' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getAppsAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getAppsV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listAppsV1ControllerRevisionForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ControllerRevisionList',
        ],
        'listAppsV1DaemonSetForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSetList',
        ],
        'listAppsV1DeploymentForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DeploymentList',
        ],
        'listAppsV1NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ControllerRevisionList',
        ],
        'createAppsV1NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ControllerRevision',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ControllerRevision',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ControllerRevision',
        ],
        'deleteAppsV1CollectionNamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAppsV1NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ControllerRevision',
        ],
        'replaceAppsV1NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ControllerRevision',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ControllerRevision',
        ],
        'deleteAppsV1NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAppsV1NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ControllerRevision',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ControllerRevision',
        ],
        'listAppsV1NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSetList',
        ],
        'createAppsV1NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
        ],
        'deleteAppsV1CollectionNamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAppsV1NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
        ],
        'replaceAppsV1NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
        ],
        'deleteAppsV1NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAppsV1NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
        ],
        'readAppsV1NamespacedDaemonSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
        ],
        'replaceAppsV1NamespacedDaemonSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
        ],
        'patchAppsV1NamespacedDaemonSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DaemonSet',
        ],
        'listAppsV1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\DeploymentList',
        ],
        'createAppsV1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
        ],
        'deleteAppsV1CollectionNamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAppsV1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
        ],
        'replaceAppsV1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
        ],
        'deleteAppsV1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAppsV1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
        ],
        'readAppsV1NamespacedDeploymentScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'replaceAppsV1NamespacedDeploymentScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'patchAppsV1NamespacedDeploymentScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'readAppsV1NamespacedDeploymentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
        ],
        'replaceAppsV1NamespacedDeploymentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
        ],
        'patchAppsV1NamespacedDeploymentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\Deployment',
        ],
        'listAppsV1NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSetList',
        ],
        'createAppsV1NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
        ],
        'deleteAppsV1CollectionNamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAppsV1NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
        ],
        'replaceAppsV1NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
        ],
        'deleteAppsV1NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAppsV1NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
        ],
        'readAppsV1NamespacedReplicaSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'replaceAppsV1NamespacedReplicaSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'patchAppsV1NamespacedReplicaSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'readAppsV1NamespacedReplicaSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
        ],
        'replaceAppsV1NamespacedReplicaSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
        ],
        'patchAppsV1NamespacedReplicaSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSet',
        ],
        'listAppsV1NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSetList',
        ],
        'createAppsV1NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
        ],
        'deleteAppsV1CollectionNamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAppsV1NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
        ],
        'replaceAppsV1NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
        ],
        'deleteAppsV1NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAppsV1NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
        ],
        'readAppsV1NamespacedStatefulSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'replaceAppsV1NamespacedStatefulSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'patchAppsV1NamespacedStatefulSetScale' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\Scale',
        ],
        'readAppsV1NamespacedStatefulSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
        ],
        'replaceAppsV1NamespacedStatefulSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
        ],
        'patchAppsV1NamespacedStatefulSetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSet',
        ],
        'listAppsV1ReplicaSetForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\ReplicaSetList',
        ],
        'listAppsV1StatefulSetForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apps\\V1\\StatefulSetList',
        ],
        'watchAppsV1ControllerRevisionListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1DaemonSetListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1DeploymentListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1NamespacedControllerRevisionList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1NamespacedControllerRevision' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1NamespacedDaemonSetList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1NamespacedDaemonSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1NamespacedDeploymentList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1NamespacedDeployment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1NamespacedReplicaSetList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1NamespacedReplicaSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1NamespacedStatefulSetList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1NamespacedStatefulSet' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1ReplicaSetListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAppsV1StatefulSetListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getAuthenticationAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getAuthenticationV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'createAuthenticationV1SelfSubjectReview' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authentication\\V1\\SelfSubjectReview',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authentication\\V1\\SelfSubjectReview',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authentication\\V1\\SelfSubjectReview',
        ],
        'createAuthenticationV1TokenReview' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authentication\\V1\\TokenReview',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authentication\\V1\\TokenReview',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authentication\\V1\\TokenReview',
        ],
        'getAuthorizationAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getAuthorizationV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'createAuthorizationV1NamespacedLocalSubjectAccessReview' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\LocalSubjectAccessReview',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\LocalSubjectAccessReview',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\LocalSubjectAccessReview',
        ],
        'createAuthorizationV1SelfSubjectAccessReview' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\SelfSubjectAccessReview',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\SelfSubjectAccessReview',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\SelfSubjectAccessReview',
        ],
        'createAuthorizationV1SelfSubjectRulesReview' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\SelfSubjectRulesReview',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\SelfSubjectRulesReview',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\SelfSubjectRulesReview',
        ],
        'createAuthorizationV1SubjectAccessReview' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\SubjectAccessReview',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\SubjectAccessReview',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Authorization\\V1\\SubjectAccessReview',
        ],
        'getAutoscalingAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getAutoscalingV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listAutoscalingV1HorizontalPodAutoscalerForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscalerList',
        ],
        'listAutoscalingV1NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscalerList',
        ],
        'createAutoscalingV1NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
        ],
        'deleteAutoscalingV1CollectionNamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAutoscalingV1NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
        ],
        'replaceAutoscalingV1NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
        ],
        'deleteAutoscalingV1NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAutoscalingV1NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
        ],
        'readAutoscalingV1NamespacedHorizontalPodAutoscalerStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
        ],
        'replaceAutoscalingV1NamespacedHorizontalPodAutoscalerStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
        ],
        'patchAutoscalingV1NamespacedHorizontalPodAutoscalerStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V1\\HorizontalPodAutoscaler',
        ],
        'watchAutoscalingV1HorizontalPodAutoscalerListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAutoscalingV1NamespacedHorizontalPodAutoscalerList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAutoscalingV1NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getAutoscalingV2APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listAutoscalingV2HorizontalPodAutoscalerForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2\\HorizontalPodAutoscalerList',
        ],
        'listAutoscalingV2NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2\\HorizontalPodAutoscalerList',
        ],
        'createAutoscalingV2NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2\\HorizontalPodAutoscaler',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2\\HorizontalPodAutoscaler',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2\\HorizontalPodAutoscaler',
        ],
        'deleteAutoscalingV2CollectionNamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readAutoscalingV2NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2\\HorizontalPodAutoscaler',
        ],
        'replaceAutoscalingV2NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2\\HorizontalPodAutoscaler',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2\\HorizontalPodAutoscaler',
        ],
        'deleteAutoscalingV2NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchAutoscalingV2NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2\\HorizontalPodAutoscaler',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2\\HorizontalPodAutoscaler',
        ],
        'readAutoscalingV2NamespacedHorizontalPodAutoscalerStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2\\HorizontalPodAutoscaler',
        ],
        'replaceAutoscalingV2NamespacedHorizontalPodAutoscalerStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2\\HorizontalPodAutoscaler',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2\\HorizontalPodAutoscaler',
        ],
        'patchAutoscalingV2NamespacedHorizontalPodAutoscalerStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2\\HorizontalPodAutoscaler',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Autoscaling\\V2\\HorizontalPodAutoscaler',
        ],
        'watchAutoscalingV2HorizontalPodAutoscalerListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAutoscalingV2NamespacedHorizontalPodAutoscalerList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchAutoscalingV2NamespacedHorizontalPodAutoscaler' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getBatchAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getBatchV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listBatchV1CronJobForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\CronJobList',
        ],
        'listBatchV1JobForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\JobList',
        ],
        'listBatchV1NamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\CronJobList',
        ],
        'createBatchV1NamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\CronJob',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\CronJob',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\CronJob',
        ],
        'deleteBatchV1CollectionNamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readBatchV1NamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\CronJob',
        ],
        'replaceBatchV1NamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\CronJob',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\CronJob',
        ],
        'deleteBatchV1NamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchBatchV1NamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\CronJob',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\CronJob',
        ],
        'readBatchV1NamespacedCronJobStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\CronJob',
        ],
        'replaceBatchV1NamespacedCronJobStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\CronJob',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\CronJob',
        ],
        'patchBatchV1NamespacedCronJobStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\CronJob',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\CronJob',
        ],
        'listBatchV1NamespacedJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\JobList',
        ],
        'createBatchV1NamespacedJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
        ],
        'deleteBatchV1CollectionNamespacedJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readBatchV1NamespacedJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
        ],
        'replaceBatchV1NamespacedJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
        ],
        'deleteBatchV1NamespacedJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchBatchV1NamespacedJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
        ],
        'readBatchV1NamespacedJobStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
        ],
        'replaceBatchV1NamespacedJobStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
        ],
        'patchBatchV1NamespacedJobStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Batch\\V1\\Job',
        ],
        'watchBatchV1CronJobListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchBatchV1JobListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchBatchV1NamespacedCronJobList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchBatchV1NamespacedCronJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchBatchV1NamespacedJobList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchBatchV1NamespacedJob' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getCertificatesAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getCertificatesV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listCertificatesV1CertificateSigningRequest' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1\\CertificateSigningRequestList',
        ],
        'createCertificatesV1CertificateSigningRequest' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1\\CertificateSigningRequest',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1\\CertificateSigningRequest',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1\\CertificateSigningRequest',
        ],
        'deleteCertificatesV1CollectionCertificateSigningRequest' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCertificatesV1CertificateSigningRequest' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1\\CertificateSigningRequest',
        ],
        'replaceCertificatesV1CertificateSigningRequest' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1\\CertificateSigningRequest',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1\\CertificateSigningRequest',
        ],
        'deleteCertificatesV1CertificateSigningRequest' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCertificatesV1CertificateSigningRequest' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1\\CertificateSigningRequest',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1\\CertificateSigningRequest',
        ],
        'readCertificatesV1CertificateSigningRequestApproval' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1\\CertificateSigningRequest',
        ],
        'replaceCertificatesV1CertificateSigningRequestApproval' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1\\CertificateSigningRequest',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1\\CertificateSigningRequest',
        ],
        'patchCertificatesV1CertificateSigningRequestApproval' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1\\CertificateSigningRequest',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1\\CertificateSigningRequest',
        ],
        'readCertificatesV1CertificateSigningRequestStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1\\CertificateSigningRequest',
        ],
        'replaceCertificatesV1CertificateSigningRequestStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1\\CertificateSigningRequest',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1\\CertificateSigningRequest',
        ],
        'patchCertificatesV1CertificateSigningRequestStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1\\CertificateSigningRequest',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1\\CertificateSigningRequest',
        ],
        'watchCertificatesV1CertificateSigningRequestList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCertificatesV1CertificateSigningRequest' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getCertificatesV1alpha1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listCertificatesV1alpha1ClusterTrustBundle' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1alpha1\\ClusterTrustBundleList',
        ],
        'createCertificatesV1alpha1ClusterTrustBundle' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1alpha1\\ClusterTrustBundle',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1alpha1\\ClusterTrustBundle',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1alpha1\\ClusterTrustBundle',
        ],
        'deleteCertificatesV1alpha1CollectionClusterTrustBundle' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCertificatesV1alpha1ClusterTrustBundle' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1alpha1\\ClusterTrustBundle',
        ],
        'replaceCertificatesV1alpha1ClusterTrustBundle' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1alpha1\\ClusterTrustBundle',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1alpha1\\ClusterTrustBundle',
        ],
        'deleteCertificatesV1alpha1ClusterTrustBundle' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCertificatesV1alpha1ClusterTrustBundle' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1alpha1\\ClusterTrustBundle',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1alpha1\\ClusterTrustBundle',
        ],
        'watchCertificatesV1alpha1ClusterTrustBundleList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCertificatesV1alpha1ClusterTrustBundle' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getCertificatesV1beta1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listCertificatesV1beta1ClusterTrustBundle' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1beta1\\ClusterTrustBundleList',
        ],
        'createCertificatesV1beta1ClusterTrustBundle' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1beta1\\ClusterTrustBundle',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1beta1\\ClusterTrustBundle',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1beta1\\ClusterTrustBundle',
        ],
        'deleteCertificatesV1beta1CollectionClusterTrustBundle' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCertificatesV1beta1ClusterTrustBundle' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1beta1\\ClusterTrustBundle',
        ],
        'replaceCertificatesV1beta1ClusterTrustBundle' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1beta1\\ClusterTrustBundle',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1beta1\\ClusterTrustBundle',
        ],
        'deleteCertificatesV1beta1ClusterTrustBundle' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCertificatesV1beta1ClusterTrustBundle' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1beta1\\ClusterTrustBundle',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Certificates\\V1beta1\\ClusterTrustBundle',
        ],
        'watchCertificatesV1beta1ClusterTrustBundleList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCertificatesV1beta1ClusterTrustBundle' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getCoordinationAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getCoordinationV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listCoordinationV1LeaseForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1\\LeaseList',
        ],
        'listCoordinationV1NamespacedLease' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1\\LeaseList',
        ],
        'createCoordinationV1NamespacedLease' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1\\Lease',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1\\Lease',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1\\Lease',
        ],
        'deleteCoordinationV1CollectionNamespacedLease' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoordinationV1NamespacedLease' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1\\Lease',
        ],
        'replaceCoordinationV1NamespacedLease' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1\\Lease',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1\\Lease',
        ],
        'deleteCoordinationV1NamespacedLease' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoordinationV1NamespacedLease' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1\\Lease',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1\\Lease',
        ],
        'watchCoordinationV1LeaseListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoordinationV1NamespacedLeaseList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoordinationV1NamespacedLease' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getCoordinationV1alpha2APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listCoordinationV1alpha2LeaseCandidateForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1alpha2\\LeaseCandidateList',
        ],
        'listCoordinationV1alpha2NamespacedLeaseCandidate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1alpha2\\LeaseCandidateList',
        ],
        'createCoordinationV1alpha2NamespacedLeaseCandidate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1alpha2\\LeaseCandidate',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1alpha2\\LeaseCandidate',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1alpha2\\LeaseCandidate',
        ],
        'deleteCoordinationV1alpha2CollectionNamespacedLeaseCandidate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoordinationV1alpha2NamespacedLeaseCandidate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1alpha2\\LeaseCandidate',
        ],
        'replaceCoordinationV1alpha2NamespacedLeaseCandidate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1alpha2\\LeaseCandidate',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1alpha2\\LeaseCandidate',
        ],
        'deleteCoordinationV1alpha2NamespacedLeaseCandidate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoordinationV1alpha2NamespacedLeaseCandidate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1alpha2\\LeaseCandidate',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1alpha2\\LeaseCandidate',
        ],
        'watchCoordinationV1alpha2LeaseCandidateListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoordinationV1alpha2NamespacedLeaseCandidateList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoordinationV1alpha2NamespacedLeaseCandidate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getCoordinationV1beta1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listCoordinationV1beta1LeaseCandidateForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1beta1\\LeaseCandidateList',
        ],
        'listCoordinationV1beta1NamespacedLeaseCandidate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1beta1\\LeaseCandidateList',
        ],
        'createCoordinationV1beta1NamespacedLeaseCandidate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1beta1\\LeaseCandidate',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1beta1\\LeaseCandidate',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1beta1\\LeaseCandidate',
        ],
        'deleteCoordinationV1beta1CollectionNamespacedLeaseCandidate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readCoordinationV1beta1NamespacedLeaseCandidate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1beta1\\LeaseCandidate',
        ],
        'replaceCoordinationV1beta1NamespacedLeaseCandidate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1beta1\\LeaseCandidate',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1beta1\\LeaseCandidate',
        ],
        'deleteCoordinationV1beta1NamespacedLeaseCandidate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchCoordinationV1beta1NamespacedLeaseCandidate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1beta1\\LeaseCandidate',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Coordination\\V1beta1\\LeaseCandidate',
        ],
        'watchCoordinationV1beta1LeaseCandidateListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoordinationV1beta1NamespacedLeaseCandidateList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchCoordinationV1beta1NamespacedLeaseCandidate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getDiscoveryAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getDiscoveryV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listDiscoveryV1EndpointSliceForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Discovery\\V1\\EndpointSliceList',
        ],
        'listDiscoveryV1NamespacedEndpointSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Discovery\\V1\\EndpointSliceList',
        ],
        'createDiscoveryV1NamespacedEndpointSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Discovery\\V1\\EndpointSlice',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Discovery\\V1\\EndpointSlice',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Discovery\\V1\\EndpointSlice',
        ],
        'deleteDiscoveryV1CollectionNamespacedEndpointSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readDiscoveryV1NamespacedEndpointSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Discovery\\V1\\EndpointSlice',
        ],
        'replaceDiscoveryV1NamespacedEndpointSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Discovery\\V1\\EndpointSlice',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Discovery\\V1\\EndpointSlice',
        ],
        'deleteDiscoveryV1NamespacedEndpointSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchDiscoveryV1NamespacedEndpointSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Discovery\\V1\\EndpointSlice',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Discovery\\V1\\EndpointSlice',
        ],
        'watchDiscoveryV1EndpointSliceListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchDiscoveryV1NamespacedEndpointSliceList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchDiscoveryV1NamespacedEndpointSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getEventsAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getEventsV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listEventsV1EventForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Events\\V1\\EventList',
        ],
        'listEventsV1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Events\\V1\\EventList',
        ],
        'createEventsV1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Events\\V1\\Event',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Events\\V1\\Event',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Events\\V1\\Event',
        ],
        'deleteEventsV1CollectionNamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readEventsV1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Events\\V1\\Event',
        ],
        'replaceEventsV1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Events\\V1\\Event',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Events\\V1\\Event',
        ],
        'deleteEventsV1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchEventsV1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Events\\V1\\Event',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Events\\V1\\Event',
        ],
        'watchEventsV1EventListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchEventsV1NamespacedEventList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchEventsV1NamespacedEvent' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getFlowcontrolApiserverAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getFlowcontrolApiserverV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listFlowcontrolApiserverV1FlowSchema' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\FlowSchemaList',
        ],
        'createFlowcontrolApiserverV1FlowSchema' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\FlowSchema',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\FlowSchema',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\FlowSchema',
        ],
        'deleteFlowcontrolApiserverV1CollectionFlowSchema' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readFlowcontrolApiserverV1FlowSchema' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\FlowSchema',
        ],
        'replaceFlowcontrolApiserverV1FlowSchema' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\FlowSchema',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\FlowSchema',
        ],
        'deleteFlowcontrolApiserverV1FlowSchema' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchFlowcontrolApiserverV1FlowSchema' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\FlowSchema',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\FlowSchema',
        ],
        'readFlowcontrolApiserverV1FlowSchemaStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\FlowSchema',
        ],
        'replaceFlowcontrolApiserverV1FlowSchemaStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\FlowSchema',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\FlowSchema',
        ],
        'patchFlowcontrolApiserverV1FlowSchemaStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\FlowSchema',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\FlowSchema',
        ],
        'listFlowcontrolApiserverV1PriorityLevelConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\PriorityLevelConfigurationList',
        ],
        'createFlowcontrolApiserverV1PriorityLevelConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\PriorityLevelConfiguration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\PriorityLevelConfiguration',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\PriorityLevelConfiguration',
        ],
        'deleteFlowcontrolApiserverV1CollectionPriorityLevelConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readFlowcontrolApiserverV1PriorityLevelConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\PriorityLevelConfiguration',
        ],
        'replaceFlowcontrolApiserverV1PriorityLevelConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\PriorityLevelConfiguration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\PriorityLevelConfiguration',
        ],
        'deleteFlowcontrolApiserverV1PriorityLevelConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchFlowcontrolApiserverV1PriorityLevelConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\PriorityLevelConfiguration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\PriorityLevelConfiguration',
        ],
        'readFlowcontrolApiserverV1PriorityLevelConfigurationStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\PriorityLevelConfiguration',
        ],
        'replaceFlowcontrolApiserverV1PriorityLevelConfigurationStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\PriorityLevelConfiguration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\PriorityLevelConfiguration',
        ],
        'patchFlowcontrolApiserverV1PriorityLevelConfigurationStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\PriorityLevelConfiguration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Flowcontrol\\V1\\PriorityLevelConfiguration',
        ],
        'watchFlowcontrolApiserverV1FlowSchemaList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchFlowcontrolApiserverV1FlowSchema' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchFlowcontrolApiserverV1PriorityLevelConfigurationList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchFlowcontrolApiserverV1PriorityLevelConfiguration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getInternalApiserverAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getInternalApiserverV1alpha1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listInternalApiserverV1alpha1StorageVersion' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apiserverinternal\\V1alpha1\\StorageVersionList',
        ],
        'createInternalApiserverV1alpha1StorageVersion' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apiserverinternal\\V1alpha1\\StorageVersion',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apiserverinternal\\V1alpha1\\StorageVersion',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apiserverinternal\\V1alpha1\\StorageVersion',
        ],
        'deleteInternalApiserverV1alpha1CollectionStorageVersion' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readInternalApiserverV1alpha1StorageVersion' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apiserverinternal\\V1alpha1\\StorageVersion',
        ],
        'replaceInternalApiserverV1alpha1StorageVersion' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apiserverinternal\\V1alpha1\\StorageVersion',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apiserverinternal\\V1alpha1\\StorageVersion',
        ],
        'deleteInternalApiserverV1alpha1StorageVersion' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchInternalApiserverV1alpha1StorageVersion' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apiserverinternal\\V1alpha1\\StorageVersion',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apiserverinternal\\V1alpha1\\StorageVersion',
        ],
        'readInternalApiserverV1alpha1StorageVersionStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apiserverinternal\\V1alpha1\\StorageVersion',
        ],
        'replaceInternalApiserverV1alpha1StorageVersionStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apiserverinternal\\V1alpha1\\StorageVersion',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apiserverinternal\\V1alpha1\\StorageVersion',
        ],
        'patchInternalApiserverV1alpha1StorageVersionStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apiserverinternal\\V1alpha1\\StorageVersion',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Apiserverinternal\\V1alpha1\\StorageVersion',
        ],
        'watchInternalApiserverV1alpha1StorageVersionList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchInternalApiserverV1alpha1StorageVersion' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getNetworkingAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getNetworkingV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listNetworkingV1IngressClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\IngressClassList',
        ],
        'createNetworkingV1IngressClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\IngressClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\IngressClass',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\IngressClass',
        ],
        'deleteNetworkingV1CollectionIngressClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readNetworkingV1IngressClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\IngressClass',
        ],
        'replaceNetworkingV1IngressClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\IngressClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\IngressClass',
        ],
        'deleteNetworkingV1IngressClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchNetworkingV1IngressClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\IngressClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\IngressClass',
        ],
        'listNetworkingV1IngressForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\IngressList',
        ],
        'listNetworkingV1IPAddress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\IPAddressList',
        ],
        'createNetworkingV1IPAddress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\IPAddress',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\IPAddress',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\IPAddress',
        ],
        'deleteNetworkingV1CollectionIPAddress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readNetworkingV1IPAddress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\IPAddress',
        ],
        'replaceNetworkingV1IPAddress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\IPAddress',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\IPAddress',
        ],
        'deleteNetworkingV1IPAddress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchNetworkingV1IPAddress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\IPAddress',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\IPAddress',
        ],
        'listNetworkingV1NamespacedIngress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\IngressList',
        ],
        'createNetworkingV1NamespacedIngress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\Ingress',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\Ingress',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\Ingress',
        ],
        'deleteNetworkingV1CollectionNamespacedIngress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readNetworkingV1NamespacedIngress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\Ingress',
        ],
        'replaceNetworkingV1NamespacedIngress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\Ingress',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\Ingress',
        ],
        'deleteNetworkingV1NamespacedIngress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchNetworkingV1NamespacedIngress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\Ingress',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\Ingress',
        ],
        'readNetworkingV1NamespacedIngressStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\Ingress',
        ],
        'replaceNetworkingV1NamespacedIngressStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\Ingress',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\Ingress',
        ],
        'patchNetworkingV1NamespacedIngressStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\Ingress',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\Ingress',
        ],
        'listNetworkingV1NamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\NetworkPolicyList',
        ],
        'createNetworkingV1NamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\NetworkPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\NetworkPolicy',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\NetworkPolicy',
        ],
        'deleteNetworkingV1CollectionNamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readNetworkingV1NamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\NetworkPolicy',
        ],
        'replaceNetworkingV1NamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\NetworkPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\NetworkPolicy',
        ],
        'deleteNetworkingV1NamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchNetworkingV1NamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\NetworkPolicy',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\NetworkPolicy',
        ],
        'listNetworkingV1NetworkPolicyForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\NetworkPolicyList',
        ],
        'listNetworkingV1ServiceCIDR' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\ServiceCIDRList',
        ],
        'createNetworkingV1ServiceCIDR' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\ServiceCIDR',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\ServiceCIDR',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\ServiceCIDR',
        ],
        'deleteNetworkingV1CollectionServiceCIDR' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readNetworkingV1ServiceCIDR' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\ServiceCIDR',
        ],
        'replaceNetworkingV1ServiceCIDR' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\ServiceCIDR',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\ServiceCIDR',
        ],
        'deleteNetworkingV1ServiceCIDR' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchNetworkingV1ServiceCIDR' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\ServiceCIDR',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\ServiceCIDR',
        ],
        'readNetworkingV1ServiceCIDRStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\ServiceCIDR',
        ],
        'replaceNetworkingV1ServiceCIDRStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\ServiceCIDR',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\ServiceCIDR',
        ],
        'patchNetworkingV1ServiceCIDRStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\ServiceCIDR',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1\\ServiceCIDR',
        ],
        'watchNetworkingV1IngressClassList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchNetworkingV1IngressClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchNetworkingV1IngressListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchNetworkingV1IPAddressList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchNetworkingV1IPAddress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchNetworkingV1NamespacedIngressList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchNetworkingV1NamespacedIngress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchNetworkingV1NamespacedNetworkPolicyList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchNetworkingV1NamespacedNetworkPolicy' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchNetworkingV1NetworkPolicyListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchNetworkingV1ServiceCIDRList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchNetworkingV1ServiceCIDR' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getNetworkingV1beta1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listNetworkingV1beta1IPAddress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\IPAddressList',
        ],
        'createNetworkingV1beta1IPAddress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\IPAddress',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\IPAddress',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\IPAddress',
        ],
        'deleteNetworkingV1beta1CollectionIPAddress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readNetworkingV1beta1IPAddress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\IPAddress',
        ],
        'replaceNetworkingV1beta1IPAddress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\IPAddress',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\IPAddress',
        ],
        'deleteNetworkingV1beta1IPAddress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchNetworkingV1beta1IPAddress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\IPAddress',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\IPAddress',
        ],
        'listNetworkingV1beta1ServiceCIDR' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\ServiceCIDRList',
        ],
        'createNetworkingV1beta1ServiceCIDR' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\ServiceCIDR',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\ServiceCIDR',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\ServiceCIDR',
        ],
        'deleteNetworkingV1beta1CollectionServiceCIDR' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readNetworkingV1beta1ServiceCIDR' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\ServiceCIDR',
        ],
        'replaceNetworkingV1beta1ServiceCIDR' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\ServiceCIDR',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\ServiceCIDR',
        ],
        'deleteNetworkingV1beta1ServiceCIDR' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchNetworkingV1beta1ServiceCIDR' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\ServiceCIDR',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\ServiceCIDR',
        ],
        'readNetworkingV1beta1ServiceCIDRStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\ServiceCIDR',
        ],
        'replaceNetworkingV1beta1ServiceCIDRStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\ServiceCIDR',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\ServiceCIDR',
        ],
        'patchNetworkingV1beta1ServiceCIDRStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\ServiceCIDR',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Networking\\V1beta1\\ServiceCIDR',
        ],
        'watchNetworkingV1beta1IPAddressList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchNetworkingV1beta1IPAddress' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchNetworkingV1beta1ServiceCIDRList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchNetworkingV1beta1ServiceCIDR' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getNodeAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getNodeV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listNodeV1RuntimeClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Node\\V1\\RuntimeClassList',
        ],
        'createNodeV1RuntimeClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Node\\V1\\RuntimeClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Node\\V1\\RuntimeClass',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Node\\V1\\RuntimeClass',
        ],
        'deleteNodeV1CollectionRuntimeClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readNodeV1RuntimeClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Node\\V1\\RuntimeClass',
        ],
        'replaceNodeV1RuntimeClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Node\\V1\\RuntimeClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Node\\V1\\RuntimeClass',
        ],
        'deleteNodeV1RuntimeClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchNodeV1RuntimeClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Node\\V1\\RuntimeClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Node\\V1\\RuntimeClass',
        ],
        'watchNodeV1RuntimeClassList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchNodeV1RuntimeClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getPolicyAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getPolicyV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listPolicyV1NamespacedPodDisruptionBudget' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1\\PodDisruptionBudgetList',
        ],
        'createPolicyV1NamespacedPodDisruptionBudget' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1\\PodDisruptionBudget',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1\\PodDisruptionBudget',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1\\PodDisruptionBudget',
        ],
        'deletePolicyV1CollectionNamespacedPodDisruptionBudget' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readPolicyV1NamespacedPodDisruptionBudget' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1\\PodDisruptionBudget',
        ],
        'replacePolicyV1NamespacedPodDisruptionBudget' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1\\PodDisruptionBudget',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1\\PodDisruptionBudget',
        ],
        'deletePolicyV1NamespacedPodDisruptionBudget' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchPolicyV1NamespacedPodDisruptionBudget' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1\\PodDisruptionBudget',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1\\PodDisruptionBudget',
        ],
        'readPolicyV1NamespacedPodDisruptionBudgetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1\\PodDisruptionBudget',
        ],
        'replacePolicyV1NamespacedPodDisruptionBudgetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1\\PodDisruptionBudget',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1\\PodDisruptionBudget',
        ],
        'patchPolicyV1NamespacedPodDisruptionBudgetStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1\\PodDisruptionBudget',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1\\PodDisruptionBudget',
        ],
        'listPolicyV1PodDisruptionBudgetForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Policy\\V1\\PodDisruptionBudgetList',
        ],
        'watchPolicyV1NamespacedPodDisruptionBudgetList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchPolicyV1NamespacedPodDisruptionBudget' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchPolicyV1PodDisruptionBudgetListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getRbacAuthorizationAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getRbacAuthorizationV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listRbacAuthorizationV1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRoleBindingList',
        ],
        'createRbacAuthorizationV1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRoleBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRoleBinding',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRoleBinding',
        ],
        'deleteRbacAuthorizationV1CollectionClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readRbacAuthorizationV1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRoleBinding',
        ],
        'replaceRbacAuthorizationV1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRoleBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRoleBinding',
        ],
        'deleteRbacAuthorizationV1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchRbacAuthorizationV1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRoleBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRoleBinding',
        ],
        'listRbacAuthorizationV1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRoleList',
        ],
        'createRbacAuthorizationV1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRole',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRole',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRole',
        ],
        'deleteRbacAuthorizationV1CollectionClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readRbacAuthorizationV1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRole',
        ],
        'replaceRbacAuthorizationV1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRole',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRole',
        ],
        'deleteRbacAuthorizationV1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchRbacAuthorizationV1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRole',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\ClusterRole',
        ],
        'listRbacAuthorizationV1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleBindingList',
        ],
        'createRbacAuthorizationV1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleBinding',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleBinding',
        ],
        'deleteRbacAuthorizationV1CollectionNamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readRbacAuthorizationV1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleBinding',
        ],
        'replaceRbacAuthorizationV1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleBinding',
        ],
        'deleteRbacAuthorizationV1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchRbacAuthorizationV1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleBinding',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleBinding',
        ],
        'listRbacAuthorizationV1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleList',
        ],
        'createRbacAuthorizationV1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\Role',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\Role',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\Role',
        ],
        'deleteRbacAuthorizationV1CollectionNamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readRbacAuthorizationV1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\Role',
        ],
        'replaceRbacAuthorizationV1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\Role',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\Role',
        ],
        'deleteRbacAuthorizationV1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchRbacAuthorizationV1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\Role',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\Role',
        ],
        'listRbacAuthorizationV1RoleBindingForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleBindingList',
        ],
        'listRbacAuthorizationV1RoleForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Rbac\\V1\\RoleList',
        ],
        'watchRbacAuthorizationV1ClusterRoleBindingList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1ClusterRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1ClusterRoleList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1ClusterRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1NamespacedRoleBindingList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1NamespacedRoleBinding' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1NamespacedRoleList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1NamespacedRole' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1RoleBindingListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchRbacAuthorizationV1RoleListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getResourceAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getResourceV1alpha3APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listResourceV1alpha3DeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceClassList',
        ],
        'createResourceV1alpha3DeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceClass',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceClass',
        ],
        'deleteResourceV1alpha3CollectionDeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readResourceV1alpha3DeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceClass',
        ],
        'replaceResourceV1alpha3DeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceClass',
        ],
        'deleteResourceV1alpha3DeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceClass',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceClass',
        ],
        'patchResourceV1alpha3DeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceClass',
        ],
        'listResourceV1alpha3DeviceTaintRule' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceTaintRuleList',
        ],
        'createResourceV1alpha3DeviceTaintRule' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceTaintRule',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceTaintRule',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceTaintRule',
        ],
        'deleteResourceV1alpha3CollectionDeviceTaintRule' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readResourceV1alpha3DeviceTaintRule' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceTaintRule',
        ],
        'replaceResourceV1alpha3DeviceTaintRule' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceTaintRule',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceTaintRule',
        ],
        'deleteResourceV1alpha3DeviceTaintRule' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceTaintRule',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceTaintRule',
        ],
        'patchResourceV1alpha3DeviceTaintRule' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceTaintRule',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\DeviceTaintRule',
        ],
        'listResourceV1alpha3NamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaimList',
        ],
        'createResourceV1alpha3NamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaim',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaim',
        ],
        'deleteResourceV1alpha3CollectionNamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readResourceV1alpha3NamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaim',
        ],
        'replaceResourceV1alpha3NamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaim',
        ],
        'deleteResourceV1alpha3NamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaim',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaim',
        ],
        'patchResourceV1alpha3NamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaim',
        ],
        'readResourceV1alpha3NamespacedResourceClaimStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaim',
        ],
        'replaceResourceV1alpha3NamespacedResourceClaimStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaim',
        ],
        'patchResourceV1alpha3NamespacedResourceClaimStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaim',
        ],
        'listResourceV1alpha3NamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaimTemplateList',
        ],
        'createResourceV1alpha3NamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaimTemplate',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaimTemplate',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaimTemplate',
        ],
        'deleteResourceV1alpha3CollectionNamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readResourceV1alpha3NamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaimTemplate',
        ],
        'replaceResourceV1alpha3NamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaimTemplate',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaimTemplate',
        ],
        'deleteResourceV1alpha3NamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaimTemplate',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaimTemplate',
        ],
        'patchResourceV1alpha3NamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaimTemplate',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaimTemplate',
        ],
        'listResourceV1alpha3ResourceClaimForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaimList',
        ],
        'listResourceV1alpha3ResourceClaimTemplateForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceClaimTemplateList',
        ],
        'listResourceV1alpha3ResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceSliceList',
        ],
        'createResourceV1alpha3ResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceSlice',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceSlice',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceSlice',
        ],
        'deleteResourceV1alpha3CollectionResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readResourceV1alpha3ResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceSlice',
        ],
        'replaceResourceV1alpha3ResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceSlice',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceSlice',
        ],
        'deleteResourceV1alpha3ResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceSlice',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceSlice',
        ],
        'patchResourceV1alpha3ResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceSlice',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1alpha3\\ResourceSlice',
        ],
        'watchResourceV1alpha3DeviceClassList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1alpha3DeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1alpha3DeviceTaintRuleList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1alpha3DeviceTaintRule' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1alpha3NamespacedResourceClaimList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1alpha3NamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1alpha3NamespacedResourceClaimTemplateList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1alpha3NamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1alpha3ResourceClaimListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1alpha3ResourceClaimTemplateListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1alpha3ResourceSliceList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1alpha3ResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getResourceV1beta1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listResourceV1beta1DeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\DeviceClassList',
        ],
        'createResourceV1beta1DeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\DeviceClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\DeviceClass',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\DeviceClass',
        ],
        'deleteResourceV1beta1CollectionDeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readResourceV1beta1DeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\DeviceClass',
        ],
        'replaceResourceV1beta1DeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\DeviceClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\DeviceClass',
        ],
        'deleteResourceV1beta1DeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\DeviceClass',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\DeviceClass',
        ],
        'patchResourceV1beta1DeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\DeviceClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\DeviceClass',
        ],
        'listResourceV1beta1NamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaimList',
        ],
        'createResourceV1beta1NamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaim',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaim',
        ],
        'deleteResourceV1beta1CollectionNamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readResourceV1beta1NamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaim',
        ],
        'replaceResourceV1beta1NamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaim',
        ],
        'deleteResourceV1beta1NamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaim',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaim',
        ],
        'patchResourceV1beta1NamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaim',
        ],
        'readResourceV1beta1NamespacedResourceClaimStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaim',
        ],
        'replaceResourceV1beta1NamespacedResourceClaimStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaim',
        ],
        'patchResourceV1beta1NamespacedResourceClaimStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaim',
        ],
        'listResourceV1beta1NamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaimTemplateList',
        ],
        'createResourceV1beta1NamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaimTemplate',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaimTemplate',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaimTemplate',
        ],
        'deleteResourceV1beta1CollectionNamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readResourceV1beta1NamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaimTemplate',
        ],
        'replaceResourceV1beta1NamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaimTemplate',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaimTemplate',
        ],
        'deleteResourceV1beta1NamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaimTemplate',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaimTemplate',
        ],
        'patchResourceV1beta1NamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaimTemplate',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaimTemplate',
        ],
        'listResourceV1beta1ResourceClaimForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaimList',
        ],
        'listResourceV1beta1ResourceClaimTemplateForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceClaimTemplateList',
        ],
        'listResourceV1beta1ResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceSliceList',
        ],
        'createResourceV1beta1ResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceSlice',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceSlice',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceSlice',
        ],
        'deleteResourceV1beta1CollectionResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readResourceV1beta1ResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceSlice',
        ],
        'replaceResourceV1beta1ResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceSlice',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceSlice',
        ],
        'deleteResourceV1beta1ResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceSlice',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceSlice',
        ],
        'patchResourceV1beta1ResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceSlice',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta1\\ResourceSlice',
        ],
        'watchResourceV1beta1DeviceClassList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1beta1DeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1beta1NamespacedResourceClaimList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1beta1NamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1beta1NamespacedResourceClaimTemplateList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1beta1NamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1beta1ResourceClaimListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1beta1ResourceClaimTemplateListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1beta1ResourceSliceList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1beta1ResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getResourceV1beta2APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listResourceV1beta2DeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\DeviceClassList',
        ],
        'createResourceV1beta2DeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\DeviceClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\DeviceClass',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\DeviceClass',
        ],
        'deleteResourceV1beta2CollectionDeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readResourceV1beta2DeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\DeviceClass',
        ],
        'replaceResourceV1beta2DeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\DeviceClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\DeviceClass',
        ],
        'deleteResourceV1beta2DeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\DeviceClass',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\DeviceClass',
        ],
        'patchResourceV1beta2DeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\DeviceClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\DeviceClass',
        ],
        'listResourceV1beta2NamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaimList',
        ],
        'createResourceV1beta2NamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaim',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaim',
        ],
        'deleteResourceV1beta2CollectionNamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readResourceV1beta2NamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaim',
        ],
        'replaceResourceV1beta2NamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaim',
        ],
        'deleteResourceV1beta2NamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaim',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaim',
        ],
        'patchResourceV1beta2NamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaim',
        ],
        'readResourceV1beta2NamespacedResourceClaimStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaim',
        ],
        'replaceResourceV1beta2NamespacedResourceClaimStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaim',
        ],
        'patchResourceV1beta2NamespacedResourceClaimStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaim',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaim',
        ],
        'listResourceV1beta2NamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaimTemplateList',
        ],
        'createResourceV1beta2NamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaimTemplate',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaimTemplate',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaimTemplate',
        ],
        'deleteResourceV1beta2CollectionNamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readResourceV1beta2NamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaimTemplate',
        ],
        'replaceResourceV1beta2NamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaimTemplate',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaimTemplate',
        ],
        'deleteResourceV1beta2NamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaimTemplate',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaimTemplate',
        ],
        'patchResourceV1beta2NamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaimTemplate',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaimTemplate',
        ],
        'listResourceV1beta2ResourceClaimForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaimList',
        ],
        'listResourceV1beta2ResourceClaimTemplateForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceClaimTemplateList',
        ],
        'listResourceV1beta2ResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceSliceList',
        ],
        'createResourceV1beta2ResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceSlice',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceSlice',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceSlice',
        ],
        'deleteResourceV1beta2CollectionResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readResourceV1beta2ResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceSlice',
        ],
        'replaceResourceV1beta2ResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceSlice',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceSlice',
        ],
        'deleteResourceV1beta2ResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceSlice',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceSlice',
        ],
        'patchResourceV1beta2ResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceSlice',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Resource\\V1beta2\\ResourceSlice',
        ],
        'watchResourceV1beta2DeviceClassList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1beta2DeviceClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1beta2NamespacedResourceClaimList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1beta2NamespacedResourceClaim' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1beta2NamespacedResourceClaimTemplateList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1beta2NamespacedResourceClaimTemplate' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1beta2ResourceClaimListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1beta2ResourceClaimTemplateListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1beta2ResourceSliceList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchResourceV1beta2ResourceSlice' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getSchedulingAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getSchedulingV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listSchedulingV1PriorityClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Scheduling\\V1\\PriorityClassList',
        ],
        'createSchedulingV1PriorityClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Scheduling\\V1\\PriorityClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Scheduling\\V1\\PriorityClass',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Scheduling\\V1\\PriorityClass',
        ],
        'deleteSchedulingV1CollectionPriorityClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readSchedulingV1PriorityClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Scheduling\\V1\\PriorityClass',
        ],
        'replaceSchedulingV1PriorityClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Scheduling\\V1\\PriorityClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Scheduling\\V1\\PriorityClass',
        ],
        'deleteSchedulingV1PriorityClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchSchedulingV1PriorityClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Scheduling\\V1\\PriorityClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Scheduling\\V1\\PriorityClass',
        ],
        'watchSchedulingV1PriorityClassList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchSchedulingV1PriorityClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getStorageAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getStorageV1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listStorageV1CSIDriver' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSIDriverList',
        ],
        'createStorageV1CSIDriver' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSIDriver',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSIDriver',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSIDriver',
        ],
        'deleteStorageV1CollectionCSIDriver' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readStorageV1CSIDriver' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSIDriver',
        ],
        'replaceStorageV1CSIDriver' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSIDriver',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSIDriver',
        ],
        'deleteStorageV1CSIDriver' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSIDriver',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSIDriver',
        ],
        'patchStorageV1CSIDriver' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSIDriver',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSIDriver',
        ],
        'listStorageV1CSINode' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSINodeList',
        ],
        'createStorageV1CSINode' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSINode',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSINode',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSINode',
        ],
        'deleteStorageV1CollectionCSINode' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readStorageV1CSINode' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSINode',
        ],
        'replaceStorageV1CSINode' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSINode',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSINode',
        ],
        'deleteStorageV1CSINode' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSINode',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSINode',
        ],
        'patchStorageV1CSINode' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSINode',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSINode',
        ],
        'listStorageV1CSIStorageCapacityForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSIStorageCapacityList',
        ],
        'listStorageV1NamespacedCSIStorageCapacity' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSIStorageCapacityList',
        ],
        'createStorageV1NamespacedCSIStorageCapacity' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSIStorageCapacity',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSIStorageCapacity',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSIStorageCapacity',
        ],
        'deleteStorageV1CollectionNamespacedCSIStorageCapacity' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readStorageV1NamespacedCSIStorageCapacity' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSIStorageCapacity',
        ],
        'replaceStorageV1NamespacedCSIStorageCapacity' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSIStorageCapacity',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSIStorageCapacity',
        ],
        'deleteStorageV1NamespacedCSIStorageCapacity' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchStorageV1NamespacedCSIStorageCapacity' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSIStorageCapacity',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\CSIStorageCapacity',
        ],
        'listStorageV1StorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\StorageClassList',
        ],
        'createStorageV1StorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\StorageClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\StorageClass',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\StorageClass',
        ],
        'deleteStorageV1CollectionStorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readStorageV1StorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\StorageClass',
        ],
        'replaceStorageV1StorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\StorageClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\StorageClass',
        ],
        'deleteStorageV1StorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\StorageClass',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\StorageClass',
        ],
        'patchStorageV1StorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\StorageClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\StorageClass',
        ],
        'listStorageV1VolumeAttachment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\VolumeAttachmentList',
        ],
        'createStorageV1VolumeAttachment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\VolumeAttachment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\VolumeAttachment',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\VolumeAttachment',
        ],
        'deleteStorageV1CollectionVolumeAttachment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readStorageV1VolumeAttachment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\VolumeAttachment',
        ],
        'replaceStorageV1VolumeAttachment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\VolumeAttachment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\VolumeAttachment',
        ],
        'deleteStorageV1VolumeAttachment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\VolumeAttachment',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\VolumeAttachment',
        ],
        'patchStorageV1VolumeAttachment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\VolumeAttachment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\VolumeAttachment',
        ],
        'readStorageV1VolumeAttachmentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\VolumeAttachment',
        ],
        'replaceStorageV1VolumeAttachmentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\VolumeAttachment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\VolumeAttachment',
        ],
        'patchStorageV1VolumeAttachmentStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\VolumeAttachment',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1\\VolumeAttachment',
        ],
        'watchStorageV1CSIDriverList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchStorageV1CSIDriver' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchStorageV1CSINodeList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchStorageV1CSINode' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchStorageV1CSIStorageCapacityListForAllNamespaces' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchStorageV1NamespacedCSIStorageCapacityList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchStorageV1NamespacedCSIStorageCapacity' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchStorageV1StorageClassList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchStorageV1StorageClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchStorageV1VolumeAttachmentList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchStorageV1VolumeAttachment' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getStorageV1alpha1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listStorageV1alpha1VolumeAttributesClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1alpha1\\VolumeAttributesClassList',
        ],
        'createStorageV1alpha1VolumeAttributesClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1alpha1\\VolumeAttributesClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1alpha1\\VolumeAttributesClass',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1alpha1\\VolumeAttributesClass',
        ],
        'deleteStorageV1alpha1CollectionVolumeAttributesClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readStorageV1alpha1VolumeAttributesClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1alpha1\\VolumeAttributesClass',
        ],
        'replaceStorageV1alpha1VolumeAttributesClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1alpha1\\VolumeAttributesClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1alpha1\\VolumeAttributesClass',
        ],
        'deleteStorageV1alpha1VolumeAttributesClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1alpha1\\VolumeAttributesClass',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1alpha1\\VolumeAttributesClass',
        ],
        'patchStorageV1alpha1VolumeAttributesClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1alpha1\\VolumeAttributesClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1alpha1\\VolumeAttributesClass',
        ],
        'watchStorageV1alpha1VolumeAttributesClassList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchStorageV1alpha1VolumeAttributesClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getStorageV1beta1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listStorageV1beta1VolumeAttributesClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1beta1\\VolumeAttributesClassList',
        ],
        'createStorageV1beta1VolumeAttributesClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1beta1\\VolumeAttributesClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1beta1\\VolumeAttributesClass',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1beta1\\VolumeAttributesClass',
        ],
        'deleteStorageV1beta1CollectionVolumeAttributesClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readStorageV1beta1VolumeAttributesClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1beta1\\VolumeAttributesClass',
        ],
        'replaceStorageV1beta1VolumeAttributesClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1beta1\\VolumeAttributesClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1beta1\\VolumeAttributesClass',
        ],
        'deleteStorageV1beta1VolumeAttributesClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1beta1\\VolumeAttributesClass',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1beta1\\VolumeAttributesClass',
        ],
        'patchStorageV1beta1VolumeAttributesClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1beta1\\VolumeAttributesClass',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storage\\V1beta1\\VolumeAttributesClass',
        ],
        'watchStorageV1beta1VolumeAttributesClassList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchStorageV1beta1VolumeAttributesClass' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getStoragemigrationAPIGroup' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIGroup',
        ],
        'getStoragemigrationV1alpha1APIResources' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\APIResourceList',
        ],
        'listStoragemigrationV1alpha1StorageVersionMigration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storagemigration\\V1alpha1\\StorageVersionMigrationList',
        ],
        'createStoragemigrationV1alpha1StorageVersionMigration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storagemigration\\V1alpha1\\StorageVersionMigration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storagemigration\\V1alpha1\\StorageVersionMigration',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storagemigration\\V1alpha1\\StorageVersionMigration',
        ],
        'deleteStoragemigrationV1alpha1CollectionStorageVersionMigration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'readStoragemigrationV1alpha1StorageVersionMigration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storagemigration\\V1alpha1\\StorageVersionMigration',
        ],
        'replaceStoragemigrationV1alpha1StorageVersionMigration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storagemigration\\V1alpha1\\StorageVersionMigration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storagemigration\\V1alpha1\\StorageVersionMigration',
        ],
        'deleteStoragemigrationV1alpha1StorageVersionMigration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
            '202.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\Status',
        ],
        'patchStoragemigrationV1alpha1StorageVersionMigration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storagemigration\\V1alpha1\\StorageVersionMigration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storagemigration\\V1alpha1\\StorageVersionMigration',
        ],
        'readStoragemigrationV1alpha1StorageVersionMigrationStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storagemigration\\V1alpha1\\StorageVersionMigration',
        ],
        'replaceStoragemigrationV1alpha1StorageVersionMigrationStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storagemigration\\V1alpha1\\StorageVersionMigration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storagemigration\\V1alpha1\\StorageVersionMigration',
        ],
        'patchStoragemigrationV1alpha1StorageVersionMigrationStatus' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storagemigration\\V1alpha1\\StorageVersionMigration',
            '201.' => '\\Kubernetes\\Model\\Io\\K8s\\Api\\Storagemigration\\V1alpha1\\StorageVersionMigration',
        ],
        'watchStoragemigrationV1alpha1StorageVersionMigrationList' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'watchStoragemigrationV1alpha1StorageVersionMigration' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Apis\\Meta\\V1\\WatchEvent',
        ],
        'getCodeVersion' => [
            '200.' => '\\Kubernetes\\Model\\Io\\K8s\\Apimachinery\\Pkg\\Version\\Info',
        ],
    ];
}


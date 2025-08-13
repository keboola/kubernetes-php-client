<?php

namespace Kubernetes\Model\Io\K8s\Api\Storagemigration\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * Status of the storage version migration.
 */
class StorageVersionMigrationStatus extends AbstractModel
{
    /**
     * The latest available observations of the migration's current state.
     *
     * @var MigrationCondition[]
     */
    public $conditions = null;

    /**
     * ResourceVersion to compare with the GC cache for performing the migration. This
     * is the current resource version of given group, version and resource when
     * kube-controller-manager first observes this StorageVersionMigration resource.
     *
     * @var string
     */
    public $resourceVersion = null;
}


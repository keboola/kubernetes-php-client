<?php

namespace Kubernetes\Model\Io\K8s\Api\Storagemigration\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * Spec of the storage version migration.
 */
class StorageVersionMigrationSpec extends AbstractModel
{
    /**
     * The token used in the list options to get the next chunk of objects to migrate.
     * When the .status.conditions indicates the migration is "Running", users can use
     * this token to check the progress of the migration.
     *
     * @var string
     */
    public $continueToken = null;

    /**
     * The resource that is being migrated. The migrator sends requests to the endpoint
     * serving the resource. Immutable.
     *
     * @var GroupVersionResource
     */
    public $resource = null;
}


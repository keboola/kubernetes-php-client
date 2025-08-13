<?php

namespace Kubernetes\Model\Io\K8s\Api\Admissionregistration\V1alpha1;

use \KubernetesRuntime\AbstractModel;

/**
 * Mutation specifies the CEL expression which is used to apply the Mutation.
 */
class Mutation extends AbstractModel
{
    /**
     * applyConfiguration defines the desired configuration values of an object. The
     * configuration is applied to the admission object using [structured merge
     * diff](https://github.com/kubernetes-sigs/structured-merge-diff). A CEL
     * expression is used to create apply configuration.
     *
     * @var ApplyConfiguration
     */
    public $applyConfiguration = null;

    /**
     * jsonPatch defines a [JSON patch](https://jsonpatch.com/) operation to perform a
     * mutation to the object. A CEL expression is used to create the JSON patch.
     *
     * @var JSONPatch
     */
    public $jsonPatch = null;

    /**
     * patchType indicates the patch strategy used. Allowed values are
     * "ApplyConfiguration" and "JSONPatch". Required.
     *
     * @var string
     */
    public $patchType = null;
}


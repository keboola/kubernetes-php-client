<?php

namespace Kubernetes\Model\Io\K8s\Apiextensions_apiserver\Pkg\Apis\Apiextensions\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * SelectableField specifies the JSON path of a field that may be used with field
 * selectors.
 */
class SelectableField extends AbstractModel
{
    /**
     * jsonPath is a simple JSON path which is evaluated against each custom resource
     * to produce a field selector value. Only JSON paths without the array notation
     * are allowed. Must point to a field of type string, boolean or integer. Types
     * with enum values and strings with formats are allowed. If jsonPath refers to
     * absent field in a resource, the jsonPath evaluates to an empty string. Must not
     * point to metdata fields. Required.
     *
     * @var string
     */
    public $jsonPath = null;
}


<?php

namespace Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * FieldSelectorRequirement is a selector that contains values, a key, and an
 * operator that relates the key and values.
 */
class FieldSelectorRequirement extends AbstractModel
{
    /**
     * key is the field selector key that the requirement applies to.
     *
     * @var string
     */
    public $key = null;

    /**
     * operator represents a key's relationship to a set of values. Valid operators are
     * In, NotIn, Exists, DoesNotExist. The list of operators may grow in the future.
     *
     * @var string
     */
    public $operator = null;

    /**
     * values is an array of string values. If the operator is In or NotIn, the values
     * array must be non-empty. If the operator is Exists or DoesNotExist, the values
     * array must be empty.
     *
     * @var string[]
     */
    public $values = null;
}


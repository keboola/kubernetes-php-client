<?php

namespace Kubernetes\Model\Io\K8s\Api\Authorization\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * ResourceAttributes includes the authorization attributes available for resource
 * requests to the Authorizer interface
 */
class ResourceAttributes extends AbstractModel
{
    /**
     * fieldSelector describes the limitation on access based on field.  It can only
     * limit access, not broaden it.
     *
     * This field  is alpha-level. To use this field, you must enable the
     * `AuthorizeWithSelectors` feature gate (disabled by default).
     *
     * @var FieldSelectorAttributes
     */
    public $fieldSelector = null;

    /**
     * Group is the API Group of the Resource.  "*" means all.
     *
     * @var string
     */
    public $group = null;

    /**
     * labelSelector describes the limitation on access based on labels.  It can only
     * limit access, not broaden it.
     *
     * This field  is alpha-level. To use this field, you must enable the
     * `AuthorizeWithSelectors` feature gate (disabled by default).
     *
     * @var LabelSelectorAttributes
     */
    public $labelSelector = null;

    /**
     * Name is the name of the resource being requested for a "get" or deleted for a
     * "delete". "" (empty) means all.
     *
     * @var string
     */
    public $name = null;

    /**
     * Namespace is the namespace of the action being requested.  Currently, there is
     * no distinction between no namespace and all namespaces "" (empty) is defaulted
     * for LocalSubjectAccessReviews "" (empty) is empty for cluster-scoped resources
     * "" (empty) means "all" for namespace scoped resources from a SubjectAccessReview
     * or SelfSubjectAccessReview
     *
     * @var string
     */
    public $namespace = null;

    /**
     * Resource is one of the existing resource types.  "*" means all.
     *
     * @var string
     */
    public $resource = null;

    /**
     * Subresource is one of the existing resource types.  "" means none.
     *
     * @var string
     */
    public $subresource = null;

    /**
     * Verb is a kubernetes resource API verb, like: get, list, watch, create, update,
     * delete, proxy.  "*" means all.
     *
     * @var string
     */
    public $verb = null;

    /**
     * Version is the API Version of the Resource.  "*" means all.
     *
     * @var string
     */
    public $version = null;
}


<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1\RoleBindingList as RoleBindingList;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1\RoleBinding as TheRoleBinding;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class RoleBinding extends AbstractAPI
{
    /**
     * list or watch objects of kind RoleBinding
     *
     * @return RoleBindingList|mixed
     */
    public function listRbacAuthorizationV1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{namespace}/rolebindings",
        		[
        		]
        	),
        	'listRbacAuthorizationV1NamespacedRoleBinding'
        );
    }

    /**
     * create a RoleBinding
     *
     * @param TheRoleBinding $Model
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'fieldValidation'	string
     * fieldValidation instructs the server on how to handle objects in the request
     * (POST/PUT/PATCH) containing unknown or duplicate fields. Valid values are: -
     * Ignore: This will ignore any unknown fields that are silently dropped from the
     * object, and will ignore all but the last duplicate field that the decoder
     * encounters. This is the default behavior prior to v1.23. - Warn: This will send
     * a warning via the standard warning response header for each unknown field that
     * is dropped from the object, and for each duplicate field that is encountered.
     * The request will still succeed if there are no other errors, and will only
     * persist the last of any duplicate fields. This is the default in v1.23+ -
     * Strict: This will fail the request with a BadRequest error if any unknown fields
     * would be dropped from the object, or if any duplicate fields are present. The
     * error returned from the server will contain all unknown and duplicate fields
     * encountered.
     *
     * @return TheRoleBinding|mixed
     */
    public function createRbacAuthorizationV1(\Kubernetes\Model\Io\K8s\Api\Rbac\V1\RoleBinding $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{namespace}/rolebindings",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createRbacAuthorizationV1NamespacedRoleBinding'
        );
    }

    /**
     * delete collection of RoleBinding
     *
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return Status|mixed
     */
    public function deleteRbacAuthorizationV1Collection(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{namespace}/rolebindings",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteRbacAuthorizationV1CollectionNamespacedRoleBinding'
        );
    }

    /**
     * read the specified RoleBinding
     *
     * @param string $name name of the RoleBinding
     * @return TheRoleBinding|mixed
     */
    public function readRbacAuthorizationV1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{namespace}/rolebindings/{$name}",
        		[
        		]
        	),
        	'readRbacAuthorizationV1NamespacedRoleBinding'
        );
    }

    /**
     * replace the specified RoleBinding
     *
     * @param string $name name of the RoleBinding
     * @param TheRoleBinding $Model
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'fieldValidation'	string
     * fieldValidation instructs the server on how to handle objects in the request
     * (POST/PUT/PATCH) containing unknown or duplicate fields. Valid values are: -
     * Ignore: This will ignore any unknown fields that are silently dropped from the
     * object, and will ignore all but the last duplicate field that the decoder
     * encounters. This is the default behavior prior to v1.23. - Warn: This will send
     * a warning via the standard warning response header for each unknown field that
     * is dropped from the object, and for each duplicate field that is encountered.
     * The request will still succeed if there are no other errors, and will only
     * persist the last of any duplicate fields. This is the default in v1.23+ -
     * Strict: This will fail the request with a BadRequest error if any unknown fields
     * would be dropped from the object, or if any duplicate fields are present. The
     * error returned from the server will contain all unknown and duplicate fields
     * encountered.
     *
     * @return TheRoleBinding|mixed
     */
    public function replaceRbacAuthorizationV1(string $name, \Kubernetes\Model\Io\K8s\Api\Rbac\V1\RoleBinding $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{namespace}/rolebindings/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceRbacAuthorizationV1NamespacedRoleBinding'
        );
    }

    /**
     * delete a RoleBinding
     *
     * @param string $name name of the RoleBinding
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return Status|mixed
     */
    public function deleteRbacAuthorizationV1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{namespace}/rolebindings/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteRbacAuthorizationV1NamespacedRoleBinding'
        );
    }

    /**
     * partially update the specified RoleBinding
     *
     * @param string $name name of the RoleBinding
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     * 'fieldValidation'	string
     * fieldValidation instructs the server on how to handle objects in the request
     * (POST/PUT/PATCH) containing unknown or duplicate fields. Valid values are: -
     * Ignore: This will ignore any unknown fields that are silently dropped from the
     * object, and will ignore all but the last duplicate field that the decoder
     * encounters. This is the default behavior prior to v1.23. - Warn: This will send
     * a warning via the standard warning response header for each unknown field that
     * is dropped from the object, and for each duplicate field that is encountered.
     * The request will still succeed if there are no other errors, and will only
     * persist the last of any duplicate fields. This is the default in v1.23+ -
     * Strict: This will fail the request with a BadRequest error if any unknown fields
     * would be dropped from the object, or if any duplicate fields are present. The
     * error returned from the server will contain all unknown and duplicate fields
     * encountered.
     *
     * @return TheRoleBinding|mixed
     */
    public function patchRbacAuthorizationV1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{namespace}/rolebindings/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchRbacAuthorizationV1NamespacedRoleBinding'
        );
    }

    /**
     * list or watch objects of kind RoleBinding
     *
     * @return RoleBindingList|mixed
     */
    public function listRbacAuthorizationV1ForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/rolebindings",
        		[
        		]
        	),
        	'listRbacAuthorizationV1RoleBindingForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of RoleBinding. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1List()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/watch/namespaces/{namespace}/rolebindings",
        		[
        		]
        	),
        	'watchRbacAuthorizationV1NamespacedRoleBindingList'
        );
    }

    /**
     * watch changes to an object of kind RoleBinding. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the RoleBinding
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/watch/namespaces/{namespace}/rolebindings/{$name}",
        		[
        		]
        	),
        	'watchRbacAuthorizationV1NamespacedRoleBinding'
        );
    }

    /**
     * watch individual changes to a list of RoleBinding. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1ListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/watch/rolebindings",
        		[
        		]
        	),
        	'watchRbacAuthorizationV1RoleBindingListForAllNamespaces'
        );
    }
}


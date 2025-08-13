<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1\RoleList as RoleList;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1\Role as TheRole;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class Role extends AbstractAPI
{
    /**
     * list or watch objects of kind Role
     *
     * @return RoleList|mixed
     */
    public function listRbacAuthorizationV1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{namespace}/roles",
        		[
        		]
        	),
        	'listRbacAuthorizationV1NamespacedRole'
        );
    }

    /**
     * create a Role
     *
     * @param TheRole $Model
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
     * @return TheRole|mixed
     */
    public function createRbacAuthorizationV1(\Kubernetes\Model\Io\K8s\Api\Rbac\V1\Role $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{namespace}/roles",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createRbacAuthorizationV1NamespacedRole'
        );
    }

    /**
     * delete collection of Role
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
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{namespace}/roles",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteRbacAuthorizationV1CollectionNamespacedRole'
        );
    }

    /**
     * read the specified Role
     *
     * @param string $name name of the Role
     * @return TheRole|mixed
     */
    public function readRbacAuthorizationV1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{namespace}/roles/{$name}",
        		[
        		]
        	),
        	'readRbacAuthorizationV1NamespacedRole'
        );
    }

    /**
     * replace the specified Role
     *
     * @param string $name name of the Role
     * @param TheRole $Model
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
     * @return TheRole|mixed
     */
    public function replaceRbacAuthorizationV1(string $name, \Kubernetes\Model\Io\K8s\Api\Rbac\V1\Role $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{namespace}/roles/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceRbacAuthorizationV1NamespacedRole'
        );
    }

    /**
     * delete a Role
     *
     * @param string $name name of the Role
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
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{namespace}/roles/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteRbacAuthorizationV1NamespacedRole'
        );
    }

    /**
     * partially update the specified Role
     *
     * @param string $name name of the Role
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
     * @return TheRole|mixed
     */
    public function patchRbacAuthorizationV1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{namespace}/roles/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchRbacAuthorizationV1NamespacedRole'
        );
    }

    /**
     * list or watch objects of kind Role
     *
     * @return RoleList|mixed
     */
    public function listRbacAuthorizationV1ForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/roles",
        		[
        		]
        	),
        	'listRbacAuthorizationV1RoleForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Role. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1List()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/watch/namespaces/{namespace}/roles",
        		[
        		]
        	),
        	'watchRbacAuthorizationV1NamespacedRoleList'
        );
    }

    /**
     * watch changes to an object of kind Role. deprecated: use the 'watch' parameter
     * with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the Role
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/watch/namespaces/{namespace}/roles/{$name}",
        		[
        		]
        	),
        	'watchRbacAuthorizationV1NamespacedRole'
        );
    }

    /**
     * watch individual changes to a list of Role. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1ListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/watch/roles",
        		[
        		]
        	),
        	'watchRbacAuthorizationV1RoleListForAllNamespaces'
        );
    }
}


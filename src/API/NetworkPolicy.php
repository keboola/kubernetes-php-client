<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Networking\V1\NetworkPolicyList as NetworkPolicyList;
use \Kubernetes\Model\Io\K8s\Api\Networking\V1\NetworkPolicy as TheNetworkPolicy;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class NetworkPolicy extends AbstractAPI
{
    /**
     * list or watch objects of kind NetworkPolicy
     *
     * @return NetworkPolicyList|mixed
     */
    public function list()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1/namespaces/{namespace}/networkpolicies",
        		[
        		]
        	),
        	'listNetworkingV1NamespacedNetworkPolicy'
        );
    }

    /**
     * create a NetworkPolicy
     *
     * @param TheNetworkPolicy $Model
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
     * @return TheNetworkPolicy|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Networking\V1\NetworkPolicy $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/networking.k8s.io/v1/namespaces/{namespace}/networkpolicies",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createNetworkingV1NamespacedNetworkPolicy'
        );
    }

    /**
     * delete collection of NetworkPolicy
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
    public function deleteCollection(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/networking.k8s.io/v1/namespaces/{namespace}/networkpolicies",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteNetworkingV1CollectionNamespacedNetworkPolicy'
        );
    }

    /**
     * read the specified NetworkPolicy
     *
     * @param string $name name of the NetworkPolicy
     * @return TheNetworkPolicy|mixed
     */
    public function read(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1/namespaces/{namespace}/networkpolicies/{$name}",
        		[
        		]
        	),
        	'readNetworkingV1NamespacedNetworkPolicy'
        );
    }

    /**
     * replace the specified NetworkPolicy
     *
     * @param string $name name of the NetworkPolicy
     * @param TheNetworkPolicy $Model
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
     * @return TheNetworkPolicy|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Api\Networking\V1\NetworkPolicy $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/networking.k8s.io/v1/namespaces/{namespace}/networkpolicies/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceNetworkingV1NamespacedNetworkPolicy'
        );
    }

    /**
     * delete a NetworkPolicy
     *
     * @param string $name name of the NetworkPolicy
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return Status|mixed
     */
    public function delete(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/networking.k8s.io/v1/namespaces/{namespace}/networkpolicies/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteNetworkingV1NamespacedNetworkPolicy'
        );
    }

    /**
     * partially update the specified NetworkPolicy
     *
     * @param string $name name of the NetworkPolicy
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
     * @return TheNetworkPolicy|mixed
     */
    public function patch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/networking.k8s.io/v1/namespaces/{namespace}/networkpolicies/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchNetworkingV1NamespacedNetworkPolicy'
        );
    }

    /**
     * list or watch objects of kind NetworkPolicy
     *
     * @return NetworkPolicyList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1/networkpolicies",
        		[
        		]
        	),
        	'listNetworkingV1NetworkPolicyForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of NetworkPolicy. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1/watch/namespaces/{namespace}/networkpolicies",
        		[
        		]
        	),
        	'watchNetworkingV1NamespacedNetworkPolicyList'
        );
    }

    /**
     * watch changes to an object of kind NetworkPolicy. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the NetworkPolicy
     * @return WatchEvent|mixed
     */
    public function watch(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1/watch/namespaces/{namespace}/networkpolicies/{$name}",
        		[
        		]
        	),
        	'watchNetworkingV1NamespacedNetworkPolicy'
        );
    }

    /**
     * watch individual changes to a list of NetworkPolicy. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1/watch/networkpolicies",
        		[
        		]
        	),
        	'watchNetworkingV1NetworkPolicyListForAllNamespaces'
        );
    }
}


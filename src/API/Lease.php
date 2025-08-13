<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Coordination\V1\LeaseList as LeaseList;
use \Kubernetes\Model\Io\K8s\Api\Coordination\V1\Lease as TheLease;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class Lease extends AbstractAPI
{
    /**
     * list or watch objects of kind Lease
     *
     * @return LeaseList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1/leases",
        		[
        		]
        	),
        	'listCoordinationV1LeaseForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Lease
     *
     * @return LeaseList|mixed
     */
    public function list()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1/namespaces/{namespace}/leases",
        		[
        		]
        	),
        	'listCoordinationV1NamespacedLease'
        );
    }

    /**
     * create a Lease
     *
     * @param TheLease $Model
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
     * @return TheLease|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Coordination\V1\Lease $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/coordination.k8s.io/v1/namespaces/{namespace}/leases",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createCoordinationV1NamespacedLease'
        );
    }

    /**
     * delete collection of Lease
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
        		"/apis/coordination.k8s.io/v1/namespaces/{namespace}/leases",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteCoordinationV1CollectionNamespacedLease'
        );
    }

    /**
     * read the specified Lease
     *
     * @param string $name name of the Lease
     * @return TheLease|mixed
     */
    public function read(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1/namespaces/{namespace}/leases/{$name}",
        		[
        		]
        	),
        	'readCoordinationV1NamespacedLease'
        );
    }

    /**
     * replace the specified Lease
     *
     * @param string $name name of the Lease
     * @param TheLease $Model
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
     * @return TheLease|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Api\Coordination\V1\Lease $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/coordination.k8s.io/v1/namespaces/{namespace}/leases/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceCoordinationV1NamespacedLease'
        );
    }

    /**
     * delete a Lease
     *
     * @param string $name name of the Lease
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
        		"/apis/coordination.k8s.io/v1/namespaces/{namespace}/leases/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteCoordinationV1NamespacedLease'
        );
    }

    /**
     * partially update the specified Lease
     *
     * @param string $name name of the Lease
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
     * @return TheLease|mixed
     */
    public function patch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/coordination.k8s.io/v1/namespaces/{namespace}/leases/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchCoordinationV1NamespacedLease'
        );
    }

    /**
     * watch individual changes to a list of Lease. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1/watch/leases",
        		[
        		]
        	),
        	'watchCoordinationV1LeaseListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Lease. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1/watch/namespaces/{namespace}/leases",
        		[
        		]
        	),
        	'watchCoordinationV1NamespacedLeaseList'
        );
    }

    /**
     * watch changes to an object of kind Lease. deprecated: use the 'watch' parameter
     * with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the Lease
     * @return WatchEvent|mixed
     */
    public function watch(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1/watch/namespaces/{namespace}/leases/{$name}",
        		[
        		]
        	),
        	'watchCoordinationV1NamespacedLease'
        );
    }
}


<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Storage\V1\CSIStorageCapacityList as CSIStorageCapacityList;
use \Kubernetes\Model\Io\K8s\Api\Storage\V1\CSIStorageCapacity as TheCSIStorageCapacity;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class CSIStorageCapacity extends AbstractAPI
{
    /**
     * list or watch objects of kind CSIStorageCapacity
     *
     * @return CSIStorageCapacityList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1/csistoragecapacities",
        		[
        		]
        	),
        	'listStorageV1CSIStorageCapacityForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind CSIStorageCapacity
     *
     * @return CSIStorageCapacityList|mixed
     */
    public function list()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1/namespaces/{namespace}/csistoragecapacities",
        		[
        		]
        	),
        	'listStorageV1NamespacedCSIStorageCapacity'
        );
    }

    /**
     * create a CSIStorageCapacity
     *
     * @param TheCSIStorageCapacity $Model
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
     * @return TheCSIStorageCapacity|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Storage\V1\CSIStorageCapacity $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/storage.k8s.io/v1/namespaces/{namespace}/csistoragecapacities",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createStorageV1NamespacedCSIStorageCapacity'
        );
    }

    /**
     * delete collection of CSIStorageCapacity
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
        		"/apis/storage.k8s.io/v1/namespaces/{namespace}/csistoragecapacities",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteStorageV1CollectionNamespacedCSIStorageCapacity'
        );
    }

    /**
     * read the specified CSIStorageCapacity
     *
     * @param string $name name of the CSIStorageCapacity
     * @return TheCSIStorageCapacity|mixed
     */
    public function read(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1/namespaces/{namespace}/csistoragecapacities/{$name}",
        		[
        		]
        	),
        	'readStorageV1NamespacedCSIStorageCapacity'
        );
    }

    /**
     * replace the specified CSIStorageCapacity
     *
     * @param string $name name of the CSIStorageCapacity
     * @param TheCSIStorageCapacity $Model
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
     * @return TheCSIStorageCapacity|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Api\Storage\V1\CSIStorageCapacity $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/storage.k8s.io/v1/namespaces/{namespace}/csistoragecapacities/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceStorageV1NamespacedCSIStorageCapacity'
        );
    }

    /**
     * delete a CSIStorageCapacity
     *
     * @param string $name name of the CSIStorageCapacity
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
        		"/apis/storage.k8s.io/v1/namespaces/{namespace}/csistoragecapacities/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteStorageV1NamespacedCSIStorageCapacity'
        );
    }

    /**
     * partially update the specified CSIStorageCapacity
     *
     * @param string $name name of the CSIStorageCapacity
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
     * @return TheCSIStorageCapacity|mixed
     */
    public function patch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/storage.k8s.io/v1/namespaces/{namespace}/csistoragecapacities/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchStorageV1NamespacedCSIStorageCapacity'
        );
    }

    /**
     * watch individual changes to a list of CSIStorageCapacity. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1/watch/csistoragecapacities",
        		[
        		]
        	),
        	'watchStorageV1CSIStorageCapacityListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of CSIStorageCapacity. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1/watch/namespaces/{namespace}/csistoragecapacities",
        		[
        		]
        	),
        	'watchStorageV1NamespacedCSIStorageCapacityList'
        );
    }

    /**
     * watch changes to an object of kind CSIStorageCapacity. deprecated: use the
     * 'watch' parameter with a list operation instead, filtered to a single item with
     * the 'fieldSelector' parameter.
     *
     * @param string $name name of the CSIStorageCapacity
     * @return WatchEvent|mixed
     */
    public function watch(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1/watch/namespaces/{namespace}/csistoragecapacities/{$name}",
        		[
        		]
        	),
        	'watchStorageV1NamespacedCSIStorageCapacity'
        );
    }
}


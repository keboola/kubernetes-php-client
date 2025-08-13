<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Scheduling\V1\PriorityClassList as PriorityClassList;
use \Kubernetes\Model\Io\K8s\Api\Scheduling\V1\PriorityClass as ThePriorityClass;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class PriorityClass extends AbstractAPI
{
    /**
     * list or watch objects of kind PriorityClass
     *
     * @return PriorityClassList|mixed
     */
    public function list()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/scheduling.k8s.io/v1/priorityclasses",
        		[
        		]
        	),
        	'listSchedulingV1PriorityClass'
        );
    }

    /**
     * create a PriorityClass
     *
     * @param ThePriorityClass $Model
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
     * @return ThePriorityClass|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Scheduling\V1\PriorityClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/scheduling.k8s.io/v1/priorityclasses",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createSchedulingV1PriorityClass'
        );
    }

    /**
     * delete collection of PriorityClass
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
        		"/apis/scheduling.k8s.io/v1/priorityclasses",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteSchedulingV1CollectionPriorityClass'
        );
    }

    /**
     * read the specified PriorityClass
     *
     * @param string $name name of the PriorityClass
     * @return ThePriorityClass|mixed
     */
    public function read(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/scheduling.k8s.io/v1/priorityclasses/{$name}",
        		[
        		]
        	),
        	'readSchedulingV1PriorityClass'
        );
    }

    /**
     * replace the specified PriorityClass
     *
     * @param string $name name of the PriorityClass
     * @param ThePriorityClass $Model
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
     * @return ThePriorityClass|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Api\Scheduling\V1\PriorityClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/scheduling.k8s.io/v1/priorityclasses/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceSchedulingV1PriorityClass'
        );
    }

    /**
     * delete a PriorityClass
     *
     * @param string $name name of the PriorityClass
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
        		"/apis/scheduling.k8s.io/v1/priorityclasses/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteSchedulingV1PriorityClass'
        );
    }

    /**
     * partially update the specified PriorityClass
     *
     * @param string $name name of the PriorityClass
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
     * @return ThePriorityClass|mixed
     */
    public function patch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/scheduling.k8s.io/v1/priorityclasses/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchSchedulingV1PriorityClass'
        );
    }

    /**
     * watch individual changes to a list of PriorityClass. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/scheduling.k8s.io/v1/watch/priorityclasses",
        		[
        		]
        	),
        	'watchSchedulingV1PriorityClassList'
        );
    }

    /**
     * watch changes to an object of kind PriorityClass. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the PriorityClass
     * @return WatchEvent|mixed
     */
    public function watch(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/scheduling.k8s.io/v1/watch/priorityclasses/{$name}",
        		[
        		]
        	),
        	'watchSchedulingV1PriorityClass'
        );
    }
}


<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Policy\V1\PodDisruptionBudgetList as PodDisruptionBudgetList;
use \Kubernetes\Model\Io\K8s\Api\Policy\V1\PodDisruptionBudget as ThePodDisruptionBudget;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class PodDisruptionBudget extends AbstractAPI
{
    /**
     * list or watch objects of kind PodDisruptionBudget
     *
     * @return PodDisruptionBudgetList|mixed
     */
    public function list()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/policy/v1/namespaces/{namespace}/poddisruptionbudgets",
        		[
        		]
        	),
        	'listPolicyV1NamespacedPodDisruptionBudget'
        );
    }

    /**
     * create a PodDisruptionBudget
     *
     * @param ThePodDisruptionBudget $Model
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
     * @return ThePodDisruptionBudget|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Policy\V1\PodDisruptionBudget $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/policy/v1/namespaces/{namespace}/poddisruptionbudgets",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createPolicyV1NamespacedPodDisruptionBudget'
        );
    }

    /**
     * delete collection of PodDisruptionBudget
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
        		"/apis/policy/v1/namespaces/{namespace}/poddisruptionbudgets",
        		[
        			'query' => $queries,
        		]
        	),
        	'deletePolicyV1CollectionNamespacedPodDisruptionBudget'
        );
    }

    /**
     * read the specified PodDisruptionBudget
     *
     * @param string $name name of the PodDisruptionBudget
     * @return ThePodDisruptionBudget|mixed
     */
    public function read(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/policy/v1/namespaces/{namespace}/poddisruptionbudgets/{$name}",
        		[
        		]
        	),
        	'readPolicyV1NamespacedPodDisruptionBudget'
        );
    }

    /**
     * replace the specified PodDisruptionBudget
     *
     * @param string $name name of the PodDisruptionBudget
     * @param ThePodDisruptionBudget $Model
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
     * @return ThePodDisruptionBudget|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Api\Policy\V1\PodDisruptionBudget $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/policy/v1/namespaces/{namespace}/poddisruptionbudgets/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replacePolicyV1NamespacedPodDisruptionBudget'
        );
    }

    /**
     * delete a PodDisruptionBudget
     *
     * @param string $name name of the PodDisruptionBudget
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
        		"/apis/policy/v1/namespaces/{namespace}/poddisruptionbudgets/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deletePolicyV1NamespacedPodDisruptionBudget'
        );
    }

    /**
     * partially update the specified PodDisruptionBudget
     *
     * @param string $name name of the PodDisruptionBudget
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
     * @return ThePodDisruptionBudget|mixed
     */
    public function patch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/policy/v1/namespaces/{namespace}/poddisruptionbudgets/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchPolicyV1NamespacedPodDisruptionBudget'
        );
    }

    /**
     * read status of the specified PodDisruptionBudget
     *
     * @param string $name name of the PodDisruptionBudget
     * @return ThePodDisruptionBudget|mixed
     */
    public function readStatus(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/policy/v1/namespaces/{namespace}/poddisruptionbudgets/{$name}/status",
        		[
        		]
        	),
        	'readPolicyV1NamespacedPodDisruptionBudgetStatus'
        );
    }

    /**
     * replace status of the specified PodDisruptionBudget
     *
     * @param string $name name of the PodDisruptionBudget
     * @param ThePodDisruptionBudget $Model
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
     * @return ThePodDisruptionBudget|mixed
     */
    public function replaceStatus(string $name, \Kubernetes\Model\Io\K8s\Api\Policy\V1\PodDisruptionBudget $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/policy/v1/namespaces/{namespace}/poddisruptionbudgets/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replacePolicyV1NamespacedPodDisruptionBudgetStatus'
        );
    }

    /**
     * partially update status of the specified PodDisruptionBudget
     *
     * @param string $name name of the PodDisruptionBudget
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
     * @return ThePodDisruptionBudget|mixed
     */
    public function patchStatus(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/policy/v1/namespaces/{namespace}/poddisruptionbudgets/{$name}/status",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchPolicyV1NamespacedPodDisruptionBudgetStatus'
        );
    }

    /**
     * list or watch objects of kind PodDisruptionBudget
     *
     * @return PodDisruptionBudgetList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/policy/v1/poddisruptionbudgets",
        		[
        		]
        	),
        	'listPolicyV1PodDisruptionBudgetForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of PodDisruptionBudget. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/policy/v1/watch/namespaces/{namespace}/poddisruptionbudgets",
        		[
        		]
        	),
        	'watchPolicyV1NamespacedPodDisruptionBudgetList'
        );
    }

    /**
     * watch changes to an object of kind PodDisruptionBudget. deprecated: use the
     * 'watch' parameter with a list operation instead, filtered to a single item with
     * the 'fieldSelector' parameter.
     *
     * @param string $name name of the PodDisruptionBudget
     * @return WatchEvent|mixed
     */
    public function watch(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/policy/v1/watch/namespaces/{namespace}/poddisruptionbudgets/{$name}",
        		[
        		]
        	),
        	'watchPolicyV1NamespacedPodDisruptionBudget'
        );
    }

    /**
     * watch individual changes to a list of PodDisruptionBudget. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/policy/v1/watch/poddisruptionbudgets",
        		[
        		]
        	),
        	'watchPolicyV1PodDisruptionBudgetListForAllNamespaces'
        );
    }
}


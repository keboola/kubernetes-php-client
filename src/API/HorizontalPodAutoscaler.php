<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\HorizontalPodAutoscalerList as HorizontalPodAutoscalerList;
use \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\HorizontalPodAutoscaler as TheHorizontalPodAutoscaler;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Autoscaling\V2\HorizontalPodAutoscalerList as HorizontalPodAutoscalerListV2;
use \Kubernetes\Model\Io\K8s\Api\Autoscaling\V2\HorizontalPodAutoscaler as TheHorizontalPodAutoscalerV2;

class HorizontalPodAutoscaler extends AbstractAPI
{
    /**
     * list or watch objects of kind HorizontalPodAutoscaler
     *
     * @return HorizontalPodAutoscalerList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v1/horizontalpodautoscalers",
        		[
        		]
        	),
        	'listAutoscalingV1HorizontalPodAutoscalerForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind HorizontalPodAutoscaler
     *
     * @return HorizontalPodAutoscalerList|mixed
     */
    public function list()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers",
        		[
        		]
        	),
        	'listAutoscalingV1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * create a HorizontalPodAutoscaler
     *
     * @param TheHorizontalPodAutoscaler $Model
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
     * @return TheHorizontalPodAutoscaler|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\HorizontalPodAutoscaler $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createAutoscalingV1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * delete collection of HorizontalPodAutoscaler
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
        		"/apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteAutoscalingV1CollectionNamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * read the specified HorizontalPodAutoscaler
     *
     * @param string $name name of the HorizontalPodAutoscaler
     * @return TheHorizontalPodAutoscaler|mixed
     */
    public function read(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{$name}",
        		[
        		]
        	),
        	'readAutoscalingV1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * replace the specified HorizontalPodAutoscaler
     *
     * @param string $name name of the HorizontalPodAutoscaler
     * @param TheHorizontalPodAutoscaler $Model
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
     * @return TheHorizontalPodAutoscaler|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\HorizontalPodAutoscaler $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceAutoscalingV1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * delete a HorizontalPodAutoscaler
     *
     * @param string $name name of the HorizontalPodAutoscaler
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
        		"/apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteAutoscalingV1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * partially update the specified HorizontalPodAutoscaler
     *
     * @param string $name name of the HorizontalPodAutoscaler
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
     * @return TheHorizontalPodAutoscaler|mixed
     */
    public function patch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchAutoscalingV1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * read status of the specified HorizontalPodAutoscaler
     *
     * @param string $name name of the HorizontalPodAutoscaler
     * @return TheHorizontalPodAutoscaler|mixed
     */
    public function readStatus(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{$name}/status",
        		[
        		]
        	),
        	'readAutoscalingV1NamespacedHorizontalPodAutoscalerStatus'
        );
    }

    /**
     * replace status of the specified HorizontalPodAutoscaler
     *
     * @param string $name name of the HorizontalPodAutoscaler
     * @param TheHorizontalPodAutoscaler $Model
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
     * @return TheHorizontalPodAutoscaler|mixed
     */
    public function replaceStatus(string $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V1\HorizontalPodAutoscaler $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceAutoscalingV1NamespacedHorizontalPodAutoscalerStatus'
        );
    }

    /**
     * partially update status of the specified HorizontalPodAutoscaler
     *
     * @param string $name name of the HorizontalPodAutoscaler
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
     * @return TheHorizontalPodAutoscaler|mixed
     */
    public function patchStatus(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/autoscaling/v1/namespaces/{namespace}/horizontalpodautoscalers/{$name}/status",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchAutoscalingV1NamespacedHorizontalPodAutoscalerStatus'
        );
    }

    /**
     * watch individual changes to a list of HorizontalPodAutoscaler. deprecated: use
     * the 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v1/watch/horizontalpodautoscalers",
        		[
        		]
        	),
        	'watchAutoscalingV1HorizontalPodAutoscalerListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of HorizontalPodAutoscaler. deprecated: use
     * the 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v1/watch/namespaces/{namespace}/horizontalpodautoscalers",
        		[
        		]
        	),
        	'watchAutoscalingV1NamespacedHorizontalPodAutoscalerList'
        );
    }

    /**
     * watch changes to an object of kind HorizontalPodAutoscaler. deprecated: use the
     * 'watch' parameter with a list operation instead, filtered to a single item with
     * the 'fieldSelector' parameter.
     *
     * @param string $name name of the HorizontalPodAutoscaler
     * @return WatchEvent|mixed
     */
    public function watch(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v1/watch/namespaces/{namespace}/horizontalpodautoscalers/{$name}",
        		[
        		]
        	),
        	'watchAutoscalingV1NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * list or watch objects of kind HorizontalPodAutoscaler
     *
     * @return HorizontalPodAutoscalerListV2|mixed
     */
    public function listForAllNamespacesAutoscalingV2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v2/horizontalpodautoscalers",
        		[
        		]
        	),
        	'listAutoscalingV2HorizontalPodAutoscalerForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind HorizontalPodAutoscaler
     *
     * @return HorizontalPodAutoscalerListV2|mixed
     */
    public function listAutoscalingV2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v2/namespaces/{namespace}/horizontalpodautoscalers",
        		[
        		]
        	),
        	'listAutoscalingV2NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * create a HorizontalPodAutoscaler
     *
     * @param TheHorizontalPodAutoscalerV2 $Model
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
     * @return TheHorizontalPodAutoscalerV2|mixed
     */
    public function createAutoscalingV2(\Kubernetes\Model\Io\K8s\Api\Autoscaling\V2\HorizontalPodAutoscaler $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/autoscaling/v2/namespaces/{namespace}/horizontalpodautoscalers",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createAutoscalingV2NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * delete collection of HorizontalPodAutoscaler
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
    public function deleteCollectionAutoscalingV2(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/autoscaling/v2/namespaces/{namespace}/horizontalpodautoscalers",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteAutoscalingV2CollectionNamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * read the specified HorizontalPodAutoscaler
     *
     * @param string $name name of the HorizontalPodAutoscaler
     * @return TheHorizontalPodAutoscalerV2|mixed
     */
    public function readAutoscalingV2(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v2/namespaces/{namespace}/horizontalpodautoscalers/{$name}",
        		[
        		]
        	),
        	'readAutoscalingV2NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * replace the specified HorizontalPodAutoscaler
     *
     * @param string $name name of the HorizontalPodAutoscaler
     * @param TheHorizontalPodAutoscalerV2 $Model
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
     * @return TheHorizontalPodAutoscalerV2|mixed
     */
    public function replaceAutoscalingV2(string $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V2\HorizontalPodAutoscaler $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/autoscaling/v2/namespaces/{namespace}/horizontalpodautoscalers/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceAutoscalingV2NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * delete a HorizontalPodAutoscaler
     *
     * @param string $name name of the HorizontalPodAutoscaler
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return Status|mixed
     */
    public function deleteAutoscalingV2(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/autoscaling/v2/namespaces/{namespace}/horizontalpodautoscalers/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteAutoscalingV2NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * partially update the specified HorizontalPodAutoscaler
     *
     * @param string $name name of the HorizontalPodAutoscaler
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
     * @return TheHorizontalPodAutoscalerV2|mixed
     */
    public function patchAutoscalingV2(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/autoscaling/v2/namespaces/{namespace}/horizontalpodautoscalers/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchAutoscalingV2NamespacedHorizontalPodAutoscaler'
        );
    }

    /**
     * read status of the specified HorizontalPodAutoscaler
     *
     * @param string $name name of the HorizontalPodAutoscaler
     * @return TheHorizontalPodAutoscalerV2|mixed
     */
    public function readStatusAutoscalingV2(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v2/namespaces/{namespace}/horizontalpodautoscalers/{$name}/status",
        		[
        		]
        	),
        	'readAutoscalingV2NamespacedHorizontalPodAutoscalerStatus'
        );
    }

    /**
     * replace status of the specified HorizontalPodAutoscaler
     *
     * @param string $name name of the HorizontalPodAutoscaler
     * @param TheHorizontalPodAutoscalerV2 $Model
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
     * @return TheHorizontalPodAutoscalerV2|mixed
     */
    public function replaceStatusAutoscalingV2(string $name, \Kubernetes\Model\Io\K8s\Api\Autoscaling\V2\HorizontalPodAutoscaler $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/autoscaling/v2/namespaces/{namespace}/horizontalpodautoscalers/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceAutoscalingV2NamespacedHorizontalPodAutoscalerStatus'
        );
    }

    /**
     * partially update status of the specified HorizontalPodAutoscaler
     *
     * @param string $name name of the HorizontalPodAutoscaler
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
     * @return TheHorizontalPodAutoscalerV2|mixed
     */
    public function patchStatusAutoscalingV2(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/autoscaling/v2/namespaces/{namespace}/horizontalpodautoscalers/{$name}/status",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchAutoscalingV2NamespacedHorizontalPodAutoscalerStatus'
        );
    }

    /**
     * watch individual changes to a list of HorizontalPodAutoscaler. deprecated: use
     * the 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesAutoscalingV2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v2/watch/horizontalpodautoscalers",
        		[
        		]
        	),
        	'watchAutoscalingV2HorizontalPodAutoscalerListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of HorizontalPodAutoscaler. deprecated: use
     * the 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListAutoscalingV2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v2/watch/namespaces/{namespace}/horizontalpodautoscalers",
        		[
        		]
        	),
        	'watchAutoscalingV2NamespacedHorizontalPodAutoscalerList'
        );
    }

    /**
     * watch changes to an object of kind HorizontalPodAutoscaler. deprecated: use the
     * 'watch' parameter with a list operation instead, filtered to a single item with
     * the 'fieldSelector' parameter.
     *
     * @param string $name name of the HorizontalPodAutoscaler
     * @return WatchEvent|mixed
     */
    public function watchAutoscalingV2(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/autoscaling/v2/watch/namespaces/{namespace}/horizontalpodautoscalers/{$name}",
        		[
        		]
        	),
        	'watchAutoscalingV2NamespacedHorizontalPodAutoscaler'
        );
    }
}


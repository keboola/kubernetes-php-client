<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\PodTemplateList as PodTemplateList;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\PodTemplate as ThePodTemplate;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class PodTemplate extends AbstractAPI
{
    /**
     * list or watch objects of kind PodTemplate
     *
     * @return PodTemplateList|mixed
     */
    public function list()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{namespace}/podtemplates",
        		[
        		]
        	),
        	'listCoreV1NamespacedPodTemplate'
        );
    }

    /**
     * create a PodTemplate
     *
     * @param ThePodTemplate $Model
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
     * @return ThePodTemplate|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Core\V1\PodTemplate $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{namespace}/podtemplates",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createCoreV1NamespacedPodTemplate'
        );
    }

    /**
     * delete collection of PodTemplate
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
        		"/api/v1/namespaces/{namespace}/podtemplates",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteCoreV1CollectionNamespacedPodTemplate'
        );
    }

    /**
     * read the specified PodTemplate
     *
     * @param string $name name of the PodTemplate
     * @return ThePodTemplate|mixed
     */
    public function read(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{namespace}/podtemplates/{$name}",
        		[
        		]
        	),
        	'readCoreV1NamespacedPodTemplate'
        );
    }

    /**
     * replace the specified PodTemplate
     *
     * @param string $name name of the PodTemplate
     * @param ThePodTemplate $Model
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
     * @return ThePodTemplate|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Api\Core\V1\PodTemplate $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{namespace}/podtemplates/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceCoreV1NamespacedPodTemplate'
        );
    }

    /**
     * delete a PodTemplate
     *
     * @param string $name name of the PodTemplate
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return ThePodTemplate|mixed
     */
    public function delete(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{namespace}/podtemplates/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteCoreV1NamespacedPodTemplate'
        );
    }

    /**
     * partially update the specified PodTemplate
     *
     * @param string $name name of the PodTemplate
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
     * @return ThePodTemplate|mixed
     */
    public function patch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{namespace}/podtemplates/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchCoreV1NamespacedPodTemplate'
        );
    }

    /**
     * list or watch objects of kind PodTemplate
     *
     * @return PodTemplateList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/podtemplates",
        		[
        		]
        	),
        	'listCoreV1PodTemplateForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of PodTemplate. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{namespace}/podtemplates",
        		[
        		]
        	),
        	'watchCoreV1NamespacedPodTemplateList'
        );
    }

    /**
     * watch changes to an object of kind PodTemplate. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the PodTemplate
     * @return WatchEvent|mixed
     */
    public function watch(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{namespace}/podtemplates/{$name}",
        		[
        		]
        	),
        	'watchCoreV1NamespacedPodTemplate'
        );
    }

    /**
     * watch individual changes to a list of PodTemplate. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/podtemplates",
        		[
        		]
        	),
        	'watchCoreV1PodTemplateListForAllNamespaces'
        );
    }
}


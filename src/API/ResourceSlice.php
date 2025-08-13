<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1alpha3\ResourceSliceList as ResourceSliceList;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1alpha3\ResourceSlice as TheResourceSlice;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1beta1\ResourceSliceList as ResourceSliceListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1beta1\ResourceSlice as TheResourceSliceV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1beta2\ResourceSliceList as ResourceSliceListV1beta2;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1beta2\ResourceSlice as TheResourceSliceV1beta2;

class ResourceSlice extends AbstractAPI
{
    /**
     * list or watch objects of kind ResourceSlice
     *
     * @return ResourceSliceList|mixed
     */
    public function list()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha3/resourceslices",
        		[
        		]
        	),
        	'listResourceV1alpha3ResourceSlice'
        );
    }

    /**
     * create a ResourceSlice
     *
     * @param TheResourceSlice $Model
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
     * @return TheResourceSlice|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Resource\V1alpha3\ResourceSlice $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/resource.k8s.io/v1alpha3/resourceslices",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createResourceV1alpha3ResourceSlice'
        );
    }

    /**
     * delete collection of ResourceSlice
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
        		"/apis/resource.k8s.io/v1alpha3/resourceslices",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1alpha3CollectionResourceSlice'
        );
    }

    /**
     * read the specified ResourceSlice
     *
     * @param string $name name of the ResourceSlice
     * @return TheResourceSlice|mixed
     */
    public function read(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha3/resourceslices/{$name}",
        		[
        		]
        	),
        	'readResourceV1alpha3ResourceSlice'
        );
    }

    /**
     * replace the specified ResourceSlice
     *
     * @param string $name name of the ResourceSlice
     * @param TheResourceSlice $Model
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
     * @return TheResourceSlice|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Api\Resource\V1alpha3\ResourceSlice $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/resource.k8s.io/v1alpha3/resourceslices/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceResourceV1alpha3ResourceSlice'
        );
    }

    /**
     * delete a ResourceSlice
     *
     * @param string $name name of the ResourceSlice
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return TheResourceSlice|mixed
     */
    public function delete(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/resource.k8s.io/v1alpha3/resourceslices/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1alpha3ResourceSlice'
        );
    }

    /**
     * partially update the specified ResourceSlice
     *
     * @param string $name name of the ResourceSlice
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
     * @return TheResourceSlice|mixed
     */
    public function patch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/resource.k8s.io/v1alpha3/resourceslices/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchResourceV1alpha3ResourceSlice'
        );
    }

    /**
     * watch individual changes to a list of ResourceSlice. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha3/watch/resourceslices",
        		[
        		]
        	),
        	'watchResourceV1alpha3ResourceSliceList'
        );
    }

    /**
     * watch changes to an object of kind ResourceSlice. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the ResourceSlice
     * @return WatchEvent|mixed
     */
    public function watch(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha3/watch/resourceslices/{$name}",
        		[
        		]
        	),
        	'watchResourceV1alpha3ResourceSlice'
        );
    }

    /**
     * list or watch objects of kind ResourceSlice
     *
     * @return ResourceSliceListV1beta1|mixed
     */
    public function listResourceV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta1/resourceslices",
        		[
        		]
        	),
        	'listResourceV1beta1ResourceSlice'
        );
    }

    /**
     * create a ResourceSlice
     *
     * @param TheResourceSliceV1beta1 $Model
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
     * @return TheResourceSliceV1beta1|mixed
     */
    public function createResourceV1beta1(\Kubernetes\Model\Io\K8s\Api\Resource\V1beta1\ResourceSlice $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/resource.k8s.io/v1beta1/resourceslices",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createResourceV1beta1ResourceSlice'
        );
    }

    /**
     * delete collection of ResourceSlice
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
    public function deleteCollectionResourceV1beta1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/resource.k8s.io/v1beta1/resourceslices",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1beta1CollectionResourceSlice'
        );
    }

    /**
     * read the specified ResourceSlice
     *
     * @param string $name name of the ResourceSlice
     * @return TheResourceSliceV1beta1|mixed
     */
    public function readResourceV1beta1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta1/resourceslices/{$name}",
        		[
        		]
        	),
        	'readResourceV1beta1ResourceSlice'
        );
    }

    /**
     * replace the specified ResourceSlice
     *
     * @param string $name name of the ResourceSlice
     * @param TheResourceSliceV1beta1 $Model
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
     * @return TheResourceSliceV1beta1|mixed
     */
    public function replaceResourceV1beta1(string $name, \Kubernetes\Model\Io\K8s\Api\Resource\V1beta1\ResourceSlice $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/resource.k8s.io/v1beta1/resourceslices/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceResourceV1beta1ResourceSlice'
        );
    }

    /**
     * delete a ResourceSlice
     *
     * @param string $name name of the ResourceSlice
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return TheResourceSliceV1beta1|mixed
     */
    public function deleteResourceV1beta1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/resource.k8s.io/v1beta1/resourceslices/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1beta1ResourceSlice'
        );
    }

    /**
     * partially update the specified ResourceSlice
     *
     * @param string $name name of the ResourceSlice
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
     * @return TheResourceSliceV1beta1|mixed
     */
    public function patchResourceV1beta1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/resource.k8s.io/v1beta1/resourceslices/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchResourceV1beta1ResourceSlice'
        );
    }

    /**
     * watch individual changes to a list of ResourceSlice. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListResourceV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta1/watch/resourceslices",
        		[
        		]
        	),
        	'watchResourceV1beta1ResourceSliceList'
        );
    }

    /**
     * watch changes to an object of kind ResourceSlice. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the ResourceSlice
     * @return WatchEvent|mixed
     */
    public function watchResourceV1beta1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta1/watch/resourceslices/{$name}",
        		[
        		]
        	),
        	'watchResourceV1beta1ResourceSlice'
        );
    }

    /**
     * list or watch objects of kind ResourceSlice
     *
     * @return ResourceSliceListV1beta2|mixed
     */
    public function listResourceV1beta2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta2/resourceslices",
        		[
        		]
        	),
        	'listResourceV1beta2ResourceSlice'
        );
    }

    /**
     * create a ResourceSlice
     *
     * @param TheResourceSliceV1beta2 $Model
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
     * @return TheResourceSliceV1beta2|mixed
     */
    public function createResourceV1beta2(\Kubernetes\Model\Io\K8s\Api\Resource\V1beta2\ResourceSlice $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/resource.k8s.io/v1beta2/resourceslices",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createResourceV1beta2ResourceSlice'
        );
    }

    /**
     * delete collection of ResourceSlice
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
    public function deleteCollectionResourceV1beta2(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/resource.k8s.io/v1beta2/resourceslices",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1beta2CollectionResourceSlice'
        );
    }

    /**
     * read the specified ResourceSlice
     *
     * @param string $name name of the ResourceSlice
     * @return TheResourceSliceV1beta2|mixed
     */
    public function readResourceV1beta2(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta2/resourceslices/{$name}",
        		[
        		]
        	),
        	'readResourceV1beta2ResourceSlice'
        );
    }

    /**
     * replace the specified ResourceSlice
     *
     * @param string $name name of the ResourceSlice
     * @param TheResourceSliceV1beta2 $Model
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
     * @return TheResourceSliceV1beta2|mixed
     */
    public function replaceResourceV1beta2(string $name, \Kubernetes\Model\Io\K8s\Api\Resource\V1beta2\ResourceSlice $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/resource.k8s.io/v1beta2/resourceslices/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceResourceV1beta2ResourceSlice'
        );
    }

    /**
     * delete a ResourceSlice
     *
     * @param string $name name of the ResourceSlice
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return TheResourceSliceV1beta2|mixed
     */
    public function deleteResourceV1beta2(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/resource.k8s.io/v1beta2/resourceslices/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1beta2ResourceSlice'
        );
    }

    /**
     * partially update the specified ResourceSlice
     *
     * @param string $name name of the ResourceSlice
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
     * @return TheResourceSliceV1beta2|mixed
     */
    public function patchResourceV1beta2(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/resource.k8s.io/v1beta2/resourceslices/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchResourceV1beta2ResourceSlice'
        );
    }

    /**
     * watch individual changes to a list of ResourceSlice. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListResourceV1beta2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta2/watch/resourceslices",
        		[
        		]
        	),
        	'watchResourceV1beta2ResourceSliceList'
        );
    }

    /**
     * watch changes to an object of kind ResourceSlice. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the ResourceSlice
     * @return WatchEvent|mixed
     */
    public function watchResourceV1beta2(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta2/watch/resourceslices/{$name}",
        		[
        		]
        	),
        	'watchResourceV1beta2ResourceSlice'
        );
    }
}


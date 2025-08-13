<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1alpha3\DeviceClassList as DeviceClassList;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1alpha3\DeviceClass as TheDeviceClass;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1beta1\DeviceClassList as DeviceClassListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1beta1\DeviceClass as TheDeviceClassV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1beta2\DeviceClassList as DeviceClassListV1beta2;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1beta2\DeviceClass as TheDeviceClassV1beta2;

class DeviceClass extends AbstractAPI
{
    /**
     * list or watch objects of kind DeviceClass
     *
     * @return DeviceClassList|mixed
     */
    public function list()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha3/deviceclasses",
        		[
        		]
        	),
        	'listResourceV1alpha3DeviceClass'
        );
    }

    /**
     * create a DeviceClass
     *
     * @param TheDeviceClass $Model
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
     * @return TheDeviceClass|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Resource\V1alpha3\DeviceClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/resource.k8s.io/v1alpha3/deviceclasses",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createResourceV1alpha3DeviceClass'
        );
    }

    /**
     * delete collection of DeviceClass
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
        		"/apis/resource.k8s.io/v1alpha3/deviceclasses",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1alpha3CollectionDeviceClass'
        );
    }

    /**
     * read the specified DeviceClass
     *
     * @param string $name name of the DeviceClass
     * @return TheDeviceClass|mixed
     */
    public function read(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha3/deviceclasses/{$name}",
        		[
        		]
        	),
        	'readResourceV1alpha3DeviceClass'
        );
    }

    /**
     * replace the specified DeviceClass
     *
     * @param string $name name of the DeviceClass
     * @param TheDeviceClass $Model
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
     * @return TheDeviceClass|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Api\Resource\V1alpha3\DeviceClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/resource.k8s.io/v1alpha3/deviceclasses/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceResourceV1alpha3DeviceClass'
        );
    }

    /**
     * delete a DeviceClass
     *
     * @param string $name name of the DeviceClass
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return TheDeviceClass|mixed
     */
    public function delete(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/resource.k8s.io/v1alpha3/deviceclasses/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1alpha3DeviceClass'
        );
    }

    /**
     * partially update the specified DeviceClass
     *
     * @param string $name name of the DeviceClass
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
     * @return TheDeviceClass|mixed
     */
    public function patch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/resource.k8s.io/v1alpha3/deviceclasses/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchResourceV1alpha3DeviceClass'
        );
    }

    /**
     * watch individual changes to a list of DeviceClass. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha3/watch/deviceclasses",
        		[
        		]
        	),
        	'watchResourceV1alpha3DeviceClassList'
        );
    }

    /**
     * watch changes to an object of kind DeviceClass. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the DeviceClass
     * @return WatchEvent|mixed
     */
    public function watch(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha3/watch/deviceclasses/{$name}",
        		[
        		]
        	),
        	'watchResourceV1alpha3DeviceClass'
        );
    }

    /**
     * list or watch objects of kind DeviceClass
     *
     * @return DeviceClassListV1beta1|mixed
     */
    public function listResourceV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta1/deviceclasses",
        		[
        		]
        	),
        	'listResourceV1beta1DeviceClass'
        );
    }

    /**
     * create a DeviceClass
     *
     * @param TheDeviceClassV1beta1 $Model
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
     * @return TheDeviceClassV1beta1|mixed
     */
    public function createResourceV1beta1(\Kubernetes\Model\Io\K8s\Api\Resource\V1beta1\DeviceClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/resource.k8s.io/v1beta1/deviceclasses",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createResourceV1beta1DeviceClass'
        );
    }

    /**
     * delete collection of DeviceClass
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
        		"/apis/resource.k8s.io/v1beta1/deviceclasses",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1beta1CollectionDeviceClass'
        );
    }

    /**
     * read the specified DeviceClass
     *
     * @param string $name name of the DeviceClass
     * @return TheDeviceClassV1beta1|mixed
     */
    public function readResourceV1beta1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta1/deviceclasses/{$name}",
        		[
        		]
        	),
        	'readResourceV1beta1DeviceClass'
        );
    }

    /**
     * replace the specified DeviceClass
     *
     * @param string $name name of the DeviceClass
     * @param TheDeviceClassV1beta1 $Model
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
     * @return TheDeviceClassV1beta1|mixed
     */
    public function replaceResourceV1beta1(string $name, \Kubernetes\Model\Io\K8s\Api\Resource\V1beta1\DeviceClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/resource.k8s.io/v1beta1/deviceclasses/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceResourceV1beta1DeviceClass'
        );
    }

    /**
     * delete a DeviceClass
     *
     * @param string $name name of the DeviceClass
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return TheDeviceClassV1beta1|mixed
     */
    public function deleteResourceV1beta1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/resource.k8s.io/v1beta1/deviceclasses/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1beta1DeviceClass'
        );
    }

    /**
     * partially update the specified DeviceClass
     *
     * @param string $name name of the DeviceClass
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
     * @return TheDeviceClassV1beta1|mixed
     */
    public function patchResourceV1beta1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/resource.k8s.io/v1beta1/deviceclasses/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchResourceV1beta1DeviceClass'
        );
    }

    /**
     * watch individual changes to a list of DeviceClass. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListResourceV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta1/watch/deviceclasses",
        		[
        		]
        	),
        	'watchResourceV1beta1DeviceClassList'
        );
    }

    /**
     * watch changes to an object of kind DeviceClass. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the DeviceClass
     * @return WatchEvent|mixed
     */
    public function watchResourceV1beta1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta1/watch/deviceclasses/{$name}",
        		[
        		]
        	),
        	'watchResourceV1beta1DeviceClass'
        );
    }

    /**
     * list or watch objects of kind DeviceClass
     *
     * @return DeviceClassListV1beta2|mixed
     */
    public function listResourceV1beta2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta2/deviceclasses",
        		[
        		]
        	),
        	'listResourceV1beta2DeviceClass'
        );
    }

    /**
     * create a DeviceClass
     *
     * @param TheDeviceClassV1beta2 $Model
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
     * @return TheDeviceClassV1beta2|mixed
     */
    public function createResourceV1beta2(\Kubernetes\Model\Io\K8s\Api\Resource\V1beta2\DeviceClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/resource.k8s.io/v1beta2/deviceclasses",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createResourceV1beta2DeviceClass'
        );
    }

    /**
     * delete collection of DeviceClass
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
        		"/apis/resource.k8s.io/v1beta2/deviceclasses",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1beta2CollectionDeviceClass'
        );
    }

    /**
     * read the specified DeviceClass
     *
     * @param string $name name of the DeviceClass
     * @return TheDeviceClassV1beta2|mixed
     */
    public function readResourceV1beta2(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta2/deviceclasses/{$name}",
        		[
        		]
        	),
        	'readResourceV1beta2DeviceClass'
        );
    }

    /**
     * replace the specified DeviceClass
     *
     * @param string $name name of the DeviceClass
     * @param TheDeviceClassV1beta2 $Model
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
     * @return TheDeviceClassV1beta2|mixed
     */
    public function replaceResourceV1beta2(string $name, \Kubernetes\Model\Io\K8s\Api\Resource\V1beta2\DeviceClass $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/resource.k8s.io/v1beta2/deviceclasses/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceResourceV1beta2DeviceClass'
        );
    }

    /**
     * delete a DeviceClass
     *
     * @param string $name name of the DeviceClass
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return TheDeviceClassV1beta2|mixed
     */
    public function deleteResourceV1beta2(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/resource.k8s.io/v1beta2/deviceclasses/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1beta2DeviceClass'
        );
    }

    /**
     * partially update the specified DeviceClass
     *
     * @param string $name name of the DeviceClass
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
     * @return TheDeviceClassV1beta2|mixed
     */
    public function patchResourceV1beta2(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/resource.k8s.io/v1beta2/deviceclasses/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchResourceV1beta2DeviceClass'
        );
    }

    /**
     * watch individual changes to a list of DeviceClass. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListResourceV1beta2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta2/watch/deviceclasses",
        		[
        		]
        	),
        	'watchResourceV1beta2DeviceClassList'
        );
    }

    /**
     * watch changes to an object of kind DeviceClass. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the DeviceClass
     * @return WatchEvent|mixed
     */
    public function watchResourceV1beta2(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta2/watch/deviceclasses/{$name}",
        		[
        		]
        	),
        	'watchResourceV1beta2DeviceClass'
        );
    }
}


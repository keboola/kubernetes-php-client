<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Networking\V1\ServiceCIDRList as ServiceCIDRList;
use \Kubernetes\Model\Io\K8s\Api\Networking\V1\ServiceCIDR as TheServiceCIDR;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Networking\V1beta1\ServiceCIDRList as ServiceCIDRListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Networking\V1beta1\ServiceCIDR as TheServiceCIDRV1beta1;

class ServiceCIDR extends AbstractAPI
{
    /**
     * list or watch objects of kind ServiceCIDR
     *
     * @return ServiceCIDRList|mixed
     */
    public function list()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1/servicecidrs",
        		[
        		]
        	),
        	'listNetworkingV1ServiceCIDR'
        );
    }

    /**
     * create a ServiceCIDR
     *
     * @param TheServiceCIDR $Model
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
     * @return TheServiceCIDR|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Networking\V1\ServiceCIDR $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/networking.k8s.io/v1/servicecidrs",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createNetworkingV1ServiceCIDR'
        );
    }

    /**
     * delete collection of ServiceCIDR
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
        		"/apis/networking.k8s.io/v1/servicecidrs",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteNetworkingV1CollectionServiceCIDR'
        );
    }

    /**
     * read the specified ServiceCIDR
     *
     * @param string $name name of the ServiceCIDR
     * @return TheServiceCIDR|mixed
     */
    public function read(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1/servicecidrs/{$name}",
        		[
        		]
        	),
        	'readNetworkingV1ServiceCIDR'
        );
    }

    /**
     * replace the specified ServiceCIDR
     *
     * @param string $name name of the ServiceCIDR
     * @param TheServiceCIDR $Model
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
     * @return TheServiceCIDR|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Api\Networking\V1\ServiceCIDR $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/networking.k8s.io/v1/servicecidrs/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceNetworkingV1ServiceCIDR'
        );
    }

    /**
     * delete a ServiceCIDR
     *
     * @param string $name name of the ServiceCIDR
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
        		"/apis/networking.k8s.io/v1/servicecidrs/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteNetworkingV1ServiceCIDR'
        );
    }

    /**
     * partially update the specified ServiceCIDR
     *
     * @param string $name name of the ServiceCIDR
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
     * @return TheServiceCIDR|mixed
     */
    public function patch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/networking.k8s.io/v1/servicecidrs/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchNetworkingV1ServiceCIDR'
        );
    }

    /**
     * read status of the specified ServiceCIDR
     *
     * @param string $name name of the ServiceCIDR
     * @return TheServiceCIDR|mixed
     */
    public function readStatus(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1/servicecidrs/{$name}/status",
        		[
        		]
        	),
        	'readNetworkingV1ServiceCIDRStatus'
        );
    }

    /**
     * replace status of the specified ServiceCIDR
     *
     * @param string $name name of the ServiceCIDR
     * @param TheServiceCIDR $Model
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
     * @return TheServiceCIDR|mixed
     */
    public function replaceStatus(string $name, \Kubernetes\Model\Io\K8s\Api\Networking\V1\ServiceCIDR $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/networking.k8s.io/v1/servicecidrs/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceNetworkingV1ServiceCIDRStatus'
        );
    }

    /**
     * partially update status of the specified ServiceCIDR
     *
     * @param string $name name of the ServiceCIDR
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
     * @return TheServiceCIDR|mixed
     */
    public function patchStatus(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/networking.k8s.io/v1/servicecidrs/{$name}/status",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchNetworkingV1ServiceCIDRStatus'
        );
    }

    /**
     * watch individual changes to a list of ServiceCIDR. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1/watch/servicecidrs",
        		[
        		]
        	),
        	'watchNetworkingV1ServiceCIDRList'
        );
    }

    /**
     * watch changes to an object of kind ServiceCIDR. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the ServiceCIDR
     * @return WatchEvent|mixed
     */
    public function watch(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1/watch/servicecidrs/{$name}",
        		[
        		]
        	),
        	'watchNetworkingV1ServiceCIDR'
        );
    }

    /**
     * list or watch objects of kind ServiceCIDR
     *
     * @return ServiceCIDRListV1beta1|mixed
     */
    public function listNetworkingV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1beta1/servicecidrs",
        		[
        		]
        	),
        	'listNetworkingV1beta1ServiceCIDR'
        );
    }

    /**
     * create a ServiceCIDR
     *
     * @param TheServiceCIDRV1beta1 $Model
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
     * @return TheServiceCIDRV1beta1|mixed
     */
    public function createNetworkingV1beta1(\Kubernetes\Model\Io\K8s\Api\Networking\V1beta1\ServiceCIDR $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/networking.k8s.io/v1beta1/servicecidrs",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createNetworkingV1beta1ServiceCIDR'
        );
    }

    /**
     * delete collection of ServiceCIDR
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
    public function deleteCollectionNetworkingV1beta1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/networking.k8s.io/v1beta1/servicecidrs",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteNetworkingV1beta1CollectionServiceCIDR'
        );
    }

    /**
     * read the specified ServiceCIDR
     *
     * @param string $name name of the ServiceCIDR
     * @return TheServiceCIDRV1beta1|mixed
     */
    public function readNetworkingV1beta1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1beta1/servicecidrs/{$name}",
        		[
        		]
        	),
        	'readNetworkingV1beta1ServiceCIDR'
        );
    }

    /**
     * replace the specified ServiceCIDR
     *
     * @param string $name name of the ServiceCIDR
     * @param TheServiceCIDRV1beta1 $Model
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
     * @return TheServiceCIDRV1beta1|mixed
     */
    public function replaceNetworkingV1beta1(string $name, \Kubernetes\Model\Io\K8s\Api\Networking\V1beta1\ServiceCIDR $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/networking.k8s.io/v1beta1/servicecidrs/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceNetworkingV1beta1ServiceCIDR'
        );
    }

    /**
     * delete a ServiceCIDR
     *
     * @param string $name name of the ServiceCIDR
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return Status|mixed
     */
    public function deleteNetworkingV1beta1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/networking.k8s.io/v1beta1/servicecidrs/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteNetworkingV1beta1ServiceCIDR'
        );
    }

    /**
     * partially update the specified ServiceCIDR
     *
     * @param string $name name of the ServiceCIDR
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
     * @return TheServiceCIDRV1beta1|mixed
     */
    public function patchNetworkingV1beta1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/networking.k8s.io/v1beta1/servicecidrs/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchNetworkingV1beta1ServiceCIDR'
        );
    }

    /**
     * read status of the specified ServiceCIDR
     *
     * @param string $name name of the ServiceCIDR
     * @return TheServiceCIDRV1beta1|mixed
     */
    public function readStatusNetworkingV1beta1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1beta1/servicecidrs/{$name}/status",
        		[
        		]
        	),
        	'readNetworkingV1beta1ServiceCIDRStatus'
        );
    }

    /**
     * replace status of the specified ServiceCIDR
     *
     * @param string $name name of the ServiceCIDR
     * @param TheServiceCIDRV1beta1 $Model
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
     * @return TheServiceCIDRV1beta1|mixed
     */
    public function replaceStatusNetworkingV1beta1(string $name, \Kubernetes\Model\Io\K8s\Api\Networking\V1beta1\ServiceCIDR $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/networking.k8s.io/v1beta1/servicecidrs/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceNetworkingV1beta1ServiceCIDRStatus'
        );
    }

    /**
     * partially update status of the specified ServiceCIDR
     *
     * @param string $name name of the ServiceCIDR
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
     * @return TheServiceCIDRV1beta1|mixed
     */
    public function patchStatusNetworkingV1beta1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/networking.k8s.io/v1beta1/servicecidrs/{$name}/status",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchNetworkingV1beta1ServiceCIDRStatus'
        );
    }

    /**
     * watch individual changes to a list of ServiceCIDR. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListNetworkingV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1beta1/watch/servicecidrs",
        		[
        		]
        	),
        	'watchNetworkingV1beta1ServiceCIDRList'
        );
    }

    /**
     * watch changes to an object of kind ServiceCIDR. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the ServiceCIDR
     * @return WatchEvent|mixed
     */
    public function watchNetworkingV1beta1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/networking.k8s.io/v1beta1/watch/servicecidrs/{$name}",
        		[
        		]
        	),
        	'watchNetworkingV1beta1ServiceCIDR'
        );
    }
}


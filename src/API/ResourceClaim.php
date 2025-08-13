<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1alpha3\ResourceClaimList as ResourceClaimList;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1alpha3\ResourceClaim as TheResourceClaim;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1beta1\ResourceClaimList as ResourceClaimListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1beta1\ResourceClaim as TheResourceClaimV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1beta2\ResourceClaimList as ResourceClaimListV1beta2;
use \Kubernetes\Model\Io\K8s\Api\Resource\V1beta2\ResourceClaim as TheResourceClaimV1beta2;

class ResourceClaim extends AbstractAPI
{
    /**
     * list or watch objects of kind ResourceClaim
     *
     * @return ResourceClaimList|mixed
     */
    public function list()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha3/namespaces/{namespace}/resourceclaims",
        		[
        		]
        	),
        	'listResourceV1alpha3NamespacedResourceClaim'
        );
    }

    /**
     * create a ResourceClaim
     *
     * @param TheResourceClaim $Model
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
     * @return TheResourceClaim|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Resource\V1alpha3\ResourceClaim $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/resource.k8s.io/v1alpha3/namespaces/{namespace}/resourceclaims",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createResourceV1alpha3NamespacedResourceClaim'
        );
    }

    /**
     * delete collection of ResourceClaim
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
        		"/apis/resource.k8s.io/v1alpha3/namespaces/{namespace}/resourceclaims",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1alpha3CollectionNamespacedResourceClaim'
        );
    }

    /**
     * read the specified ResourceClaim
     *
     * @param string $name name of the ResourceClaim
     * @return TheResourceClaim|mixed
     */
    public function read(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha3/namespaces/{namespace}/resourceclaims/{$name}",
        		[
        		]
        	),
        	'readResourceV1alpha3NamespacedResourceClaim'
        );
    }

    /**
     * replace the specified ResourceClaim
     *
     * @param string $name name of the ResourceClaim
     * @param TheResourceClaim $Model
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
     * @return TheResourceClaim|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Api\Resource\V1alpha3\ResourceClaim $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/resource.k8s.io/v1alpha3/namespaces/{namespace}/resourceclaims/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceResourceV1alpha3NamespacedResourceClaim'
        );
    }

    /**
     * delete a ResourceClaim
     *
     * @param string $name name of the ResourceClaim
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return TheResourceClaim|mixed
     */
    public function delete(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/resource.k8s.io/v1alpha3/namespaces/{namespace}/resourceclaims/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1alpha3NamespacedResourceClaim'
        );
    }

    /**
     * partially update the specified ResourceClaim
     *
     * @param string $name name of the ResourceClaim
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
     * @return TheResourceClaim|mixed
     */
    public function patch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/resource.k8s.io/v1alpha3/namespaces/{namespace}/resourceclaims/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchResourceV1alpha3NamespacedResourceClaim'
        );
    }

    /**
     * read status of the specified ResourceClaim
     *
     * @param string $name name of the ResourceClaim
     * @return TheResourceClaim|mixed
     */
    public function readStatus(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha3/namespaces/{namespace}/resourceclaims/{$name}/status",
        		[
        		]
        	),
        	'readResourceV1alpha3NamespacedResourceClaimStatus'
        );
    }

    /**
     * replace status of the specified ResourceClaim
     *
     * @param string $name name of the ResourceClaim
     * @param TheResourceClaim $Model
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
     * @return TheResourceClaim|mixed
     */
    public function replaceStatus(string $name, \Kubernetes\Model\Io\K8s\Api\Resource\V1alpha3\ResourceClaim $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/resource.k8s.io/v1alpha3/namespaces/{namespace}/resourceclaims/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceResourceV1alpha3NamespacedResourceClaimStatus'
        );
    }

    /**
     * partially update status of the specified ResourceClaim
     *
     * @param string $name name of the ResourceClaim
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
     * @return TheResourceClaim|mixed
     */
    public function patchStatus(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/resource.k8s.io/v1alpha3/namespaces/{namespace}/resourceclaims/{$name}/status",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchResourceV1alpha3NamespacedResourceClaimStatus'
        );
    }

    /**
     * list or watch objects of kind ResourceClaim
     *
     * @return ResourceClaimList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha3/resourceclaims",
        		[
        		]
        	),
        	'listResourceV1alpha3ResourceClaimForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of ResourceClaim. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha3/watch/namespaces/{namespace}/resourceclaims",
        		[
        		]
        	),
        	'watchResourceV1alpha3NamespacedResourceClaimList'
        );
    }

    /**
     * watch changes to an object of kind ResourceClaim. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the ResourceClaim
     * @return WatchEvent|mixed
     */
    public function watch(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha3/watch/namespaces/{namespace}/resourceclaims/{$name}",
        		[
        		]
        	),
        	'watchResourceV1alpha3NamespacedResourceClaim'
        );
    }

    /**
     * watch individual changes to a list of ResourceClaim. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1alpha3/watch/resourceclaims",
        		[
        		]
        	),
        	'watchResourceV1alpha3ResourceClaimListForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind ResourceClaim
     *
     * @return ResourceClaimListV1beta1|mixed
     */
    public function listResourceV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta1/namespaces/{namespace}/resourceclaims",
        		[
        		]
        	),
        	'listResourceV1beta1NamespacedResourceClaim'
        );
    }

    /**
     * create a ResourceClaim
     *
     * @param TheResourceClaimV1beta1 $Model
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
     * @return TheResourceClaimV1beta1|mixed
     */
    public function createResourceV1beta1(\Kubernetes\Model\Io\K8s\Api\Resource\V1beta1\ResourceClaim $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/resource.k8s.io/v1beta1/namespaces/{namespace}/resourceclaims",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createResourceV1beta1NamespacedResourceClaim'
        );
    }

    /**
     * delete collection of ResourceClaim
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
        		"/apis/resource.k8s.io/v1beta1/namespaces/{namespace}/resourceclaims",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1beta1CollectionNamespacedResourceClaim'
        );
    }

    /**
     * read the specified ResourceClaim
     *
     * @param string $name name of the ResourceClaim
     * @return TheResourceClaimV1beta1|mixed
     */
    public function readResourceV1beta1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta1/namespaces/{namespace}/resourceclaims/{$name}",
        		[
        		]
        	),
        	'readResourceV1beta1NamespacedResourceClaim'
        );
    }

    /**
     * replace the specified ResourceClaim
     *
     * @param string $name name of the ResourceClaim
     * @param TheResourceClaimV1beta1 $Model
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
     * @return TheResourceClaimV1beta1|mixed
     */
    public function replaceResourceV1beta1(string $name, \Kubernetes\Model\Io\K8s\Api\Resource\V1beta1\ResourceClaim $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/resource.k8s.io/v1beta1/namespaces/{namespace}/resourceclaims/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceResourceV1beta1NamespacedResourceClaim'
        );
    }

    /**
     * delete a ResourceClaim
     *
     * @param string $name name of the ResourceClaim
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return TheResourceClaimV1beta1|mixed
     */
    public function deleteResourceV1beta1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/resource.k8s.io/v1beta1/namespaces/{namespace}/resourceclaims/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1beta1NamespacedResourceClaim'
        );
    }

    /**
     * partially update the specified ResourceClaim
     *
     * @param string $name name of the ResourceClaim
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
     * @return TheResourceClaimV1beta1|mixed
     */
    public function patchResourceV1beta1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/resource.k8s.io/v1beta1/namespaces/{namespace}/resourceclaims/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchResourceV1beta1NamespacedResourceClaim'
        );
    }

    /**
     * read status of the specified ResourceClaim
     *
     * @param string $name name of the ResourceClaim
     * @return TheResourceClaimV1beta1|mixed
     */
    public function readStatusResourceV1beta1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta1/namespaces/{namespace}/resourceclaims/{$name}/status",
        		[
        		]
        	),
        	'readResourceV1beta1NamespacedResourceClaimStatus'
        );
    }

    /**
     * replace status of the specified ResourceClaim
     *
     * @param string $name name of the ResourceClaim
     * @param TheResourceClaimV1beta1 $Model
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
     * @return TheResourceClaimV1beta1|mixed
     */
    public function replaceStatusResourceV1beta1(string $name, \Kubernetes\Model\Io\K8s\Api\Resource\V1beta1\ResourceClaim $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/resource.k8s.io/v1beta1/namespaces/{namespace}/resourceclaims/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceResourceV1beta1NamespacedResourceClaimStatus'
        );
    }

    /**
     * partially update status of the specified ResourceClaim
     *
     * @param string $name name of the ResourceClaim
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
     * @return TheResourceClaimV1beta1|mixed
     */
    public function patchStatusResourceV1beta1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/resource.k8s.io/v1beta1/namespaces/{namespace}/resourceclaims/{$name}/status",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchResourceV1beta1NamespacedResourceClaimStatus'
        );
    }

    /**
     * list or watch objects of kind ResourceClaim
     *
     * @return ResourceClaimListV1beta1|mixed
     */
    public function listForAllNamespacesResourceV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta1/resourceclaims",
        		[
        		]
        	),
        	'listResourceV1beta1ResourceClaimForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of ResourceClaim. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListResourceV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta1/watch/namespaces/{namespace}/resourceclaims",
        		[
        		]
        	),
        	'watchResourceV1beta1NamespacedResourceClaimList'
        );
    }

    /**
     * watch changes to an object of kind ResourceClaim. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the ResourceClaim
     * @return WatchEvent|mixed
     */
    public function watchResourceV1beta1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta1/watch/namespaces/{namespace}/resourceclaims/{$name}",
        		[
        		]
        	),
        	'watchResourceV1beta1NamespacedResourceClaim'
        );
    }

    /**
     * watch individual changes to a list of ResourceClaim. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesResourceV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta1/watch/resourceclaims",
        		[
        		]
        	),
        	'watchResourceV1beta1ResourceClaimListForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind ResourceClaim
     *
     * @return ResourceClaimListV1beta2|mixed
     */
    public function listResourceV1beta2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta2/namespaces/{namespace}/resourceclaims",
        		[
        		]
        	),
        	'listResourceV1beta2NamespacedResourceClaim'
        );
    }

    /**
     * create a ResourceClaim
     *
     * @param TheResourceClaimV1beta2 $Model
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
     * @return TheResourceClaimV1beta2|mixed
     */
    public function createResourceV1beta2(\Kubernetes\Model\Io\K8s\Api\Resource\V1beta2\ResourceClaim $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/resource.k8s.io/v1beta2/namespaces/{namespace}/resourceclaims",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createResourceV1beta2NamespacedResourceClaim'
        );
    }

    /**
     * delete collection of ResourceClaim
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
        		"/apis/resource.k8s.io/v1beta2/namespaces/{namespace}/resourceclaims",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1beta2CollectionNamespacedResourceClaim'
        );
    }

    /**
     * read the specified ResourceClaim
     *
     * @param string $name name of the ResourceClaim
     * @return TheResourceClaimV1beta2|mixed
     */
    public function readResourceV1beta2(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta2/namespaces/{namespace}/resourceclaims/{$name}",
        		[
        		]
        	),
        	'readResourceV1beta2NamespacedResourceClaim'
        );
    }

    /**
     * replace the specified ResourceClaim
     *
     * @param string $name name of the ResourceClaim
     * @param TheResourceClaimV1beta2 $Model
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
     * @return TheResourceClaimV1beta2|mixed
     */
    public function replaceResourceV1beta2(string $name, \Kubernetes\Model\Io\K8s\Api\Resource\V1beta2\ResourceClaim $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/resource.k8s.io/v1beta2/namespaces/{namespace}/resourceclaims/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceResourceV1beta2NamespacedResourceClaim'
        );
    }

    /**
     * delete a ResourceClaim
     *
     * @param string $name name of the ResourceClaim
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return TheResourceClaimV1beta2|mixed
     */
    public function deleteResourceV1beta2(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/resource.k8s.io/v1beta2/namespaces/{namespace}/resourceclaims/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteResourceV1beta2NamespacedResourceClaim'
        );
    }

    /**
     * partially update the specified ResourceClaim
     *
     * @param string $name name of the ResourceClaim
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
     * @return TheResourceClaimV1beta2|mixed
     */
    public function patchResourceV1beta2(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/resource.k8s.io/v1beta2/namespaces/{namespace}/resourceclaims/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchResourceV1beta2NamespacedResourceClaim'
        );
    }

    /**
     * read status of the specified ResourceClaim
     *
     * @param string $name name of the ResourceClaim
     * @return TheResourceClaimV1beta2|mixed
     */
    public function readStatusResourceV1beta2(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta2/namespaces/{namespace}/resourceclaims/{$name}/status",
        		[
        		]
        	),
        	'readResourceV1beta2NamespacedResourceClaimStatus'
        );
    }

    /**
     * replace status of the specified ResourceClaim
     *
     * @param string $name name of the ResourceClaim
     * @param TheResourceClaimV1beta2 $Model
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
     * @return TheResourceClaimV1beta2|mixed
     */
    public function replaceStatusResourceV1beta2(string $name, \Kubernetes\Model\Io\K8s\Api\Resource\V1beta2\ResourceClaim $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/resource.k8s.io/v1beta2/namespaces/{namespace}/resourceclaims/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceResourceV1beta2NamespacedResourceClaimStatus'
        );
    }

    /**
     * partially update status of the specified ResourceClaim
     *
     * @param string $name name of the ResourceClaim
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
     * @return TheResourceClaimV1beta2|mixed
     */
    public function patchStatusResourceV1beta2(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/resource.k8s.io/v1beta2/namespaces/{namespace}/resourceclaims/{$name}/status",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchResourceV1beta2NamespacedResourceClaimStatus'
        );
    }

    /**
     * list or watch objects of kind ResourceClaim
     *
     * @return ResourceClaimListV1beta2|mixed
     */
    public function listForAllNamespacesResourceV1beta2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta2/resourceclaims",
        		[
        		]
        	),
        	'listResourceV1beta2ResourceClaimForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of ResourceClaim. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListResourceV1beta2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta2/watch/namespaces/{namespace}/resourceclaims",
        		[
        		]
        	),
        	'watchResourceV1beta2NamespacedResourceClaimList'
        );
    }

    /**
     * watch changes to an object of kind ResourceClaim. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the ResourceClaim
     * @return WatchEvent|mixed
     */
    public function watchResourceV1beta2(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta2/watch/namespaces/{namespace}/resourceclaims/{$name}",
        		[
        		]
        	),
        	'watchResourceV1beta2NamespacedResourceClaim'
        );
    }

    /**
     * watch individual changes to a list of ResourceClaim. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesResourceV1beta2()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/resource.k8s.io/v1beta2/watch/resourceclaims",
        		[
        		]
        	),
        	'watchResourceV1beta2ResourceClaimListForAllNamespaces'
        );
    }
}


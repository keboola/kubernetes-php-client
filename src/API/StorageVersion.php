<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Apiserverinternal\V1alpha1\StorageVersionList as StorageVersionList;
use \Kubernetes\Model\Io\K8s\Api\Apiserverinternal\V1alpha1\StorageVersion as TheStorageVersion;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class StorageVersion extends AbstractAPI
{
    /**
     * list or watch objects of kind StorageVersion
     *
     * @return StorageVersionList|mixed
     */
    public function listInternalApiserverV1alpha1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/storageversions",
        		[
        		]
        	),
        	'listInternalApiserverV1alpha1StorageVersion'
        );
    }

    /**
     * create a StorageVersion
     *
     * @param TheStorageVersion $Model
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
     * @return TheStorageVersion|mixed
     */
    public function createInternalApiserverV1alpha1(\Kubernetes\Model\Io\K8s\Api\Apiserverinternal\V1alpha1\StorageVersion $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/storageversions",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createInternalApiserverV1alpha1StorageVersion'
        );
    }

    /**
     * delete collection of StorageVersion
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
    public function deleteInternalApiserverV1alpha1Collection(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/storageversions",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteInternalApiserverV1alpha1CollectionStorageVersion'
        );
    }

    /**
     * read the specified StorageVersion
     *
     * @param string $name name of the StorageVersion
     * @return TheStorageVersion|mixed
     */
    public function readInternalApiserverV1alpha1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/storageversions/{$name}",
        		[
        		]
        	),
        	'readInternalApiserverV1alpha1StorageVersion'
        );
    }

    /**
     * replace the specified StorageVersion
     *
     * @param string $name name of the StorageVersion
     * @param TheStorageVersion $Model
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
     * @return TheStorageVersion|mixed
     */
    public function replaceInternalApiserverV1alpha1(string $name, \Kubernetes\Model\Io\K8s\Api\Apiserverinternal\V1alpha1\StorageVersion $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/storageversions/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceInternalApiserverV1alpha1StorageVersion'
        );
    }

    /**
     * delete a StorageVersion
     *
     * @param string $name name of the StorageVersion
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return Status|mixed
     */
    public function deleteInternalApiserverV1alpha1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/storageversions/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteInternalApiserverV1alpha1StorageVersion'
        );
    }

    /**
     * partially update the specified StorageVersion
     *
     * @param string $name name of the StorageVersion
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
     * @return TheStorageVersion|mixed
     */
    public function patchInternalApiserverV1alpha1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/storageversions/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchInternalApiserverV1alpha1StorageVersion'
        );
    }

    /**
     * read status of the specified StorageVersion
     *
     * @param string $name name of the StorageVersion
     * @return TheStorageVersion|mixed
     */
    public function readInternalApiserverV1alpha1Status(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/storageversions/{$name}/status",
        		[
        		]
        	),
        	'readInternalApiserverV1alpha1StorageVersionStatus'
        );
    }

    /**
     * replace status of the specified StorageVersion
     *
     * @param string $name name of the StorageVersion
     * @param TheStorageVersion $Model
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
     * @return TheStorageVersion|mixed
     */
    public function replaceInternalApiserverV1alpha1Status(string $name, \Kubernetes\Model\Io\K8s\Api\Apiserverinternal\V1alpha1\StorageVersion $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/storageversions/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceInternalApiserverV1alpha1StorageVersionStatus'
        );
    }

    /**
     * partially update status of the specified StorageVersion
     *
     * @param string $name name of the StorageVersion
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
     * @return TheStorageVersion|mixed
     */
    public function patchInternalApiserverV1alpha1Status(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/storageversions/{$name}/status",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchInternalApiserverV1alpha1StorageVersionStatus'
        );
    }

    /**
     * watch individual changes to a list of StorageVersion. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchInternalApiserverV1alpha1List()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/watch/storageversions",
        		[
        		]
        	),
        	'watchInternalApiserverV1alpha1StorageVersionList'
        );
    }

    /**
     * watch changes to an object of kind StorageVersion. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the StorageVersion
     * @return WatchEvent|mixed
     */
    public function watchInternalApiserverV1alpha1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/internal.apiserver.k8s.io/v1alpha1/watch/storageversions/{$name}",
        		[
        		]
        	),
        	'watchInternalApiserverV1alpha1StorageVersion'
        );
    }
}


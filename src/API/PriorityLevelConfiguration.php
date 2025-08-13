<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1\PriorityLevelConfigurationList as PriorityLevelConfigurationList;
use \Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1\PriorityLevelConfiguration as ThePriorityLevelConfiguration;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class PriorityLevelConfiguration extends AbstractAPI
{
    /**
     * list or watch objects of kind PriorityLevelConfiguration
     *
     * @return PriorityLevelConfigurationList|mixed
     */
    public function listFlowcontrolApiserverV1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/prioritylevelconfigurations",
        		[
        		]
        	),
        	'listFlowcontrolApiserverV1PriorityLevelConfiguration'
        );
    }

    /**
     * create a PriorityLevelConfiguration
     *
     * @param ThePriorityLevelConfiguration $Model
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
     * @return ThePriorityLevelConfiguration|mixed
     */
    public function createFlowcontrolApiserverV1(\Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1\PriorityLevelConfiguration $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/prioritylevelconfigurations",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createFlowcontrolApiserverV1PriorityLevelConfiguration'
        );
    }

    /**
     * delete collection of PriorityLevelConfiguration
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
    public function deleteFlowcontrolApiserverV1Collection(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/prioritylevelconfigurations",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteFlowcontrolApiserverV1CollectionPriorityLevelConfiguration'
        );
    }

    /**
     * read the specified PriorityLevelConfiguration
     *
     * @param string $name name of the PriorityLevelConfiguration
     * @return ThePriorityLevelConfiguration|mixed
     */
    public function readFlowcontrolApiserverV1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/prioritylevelconfigurations/{$name}",
        		[
        		]
        	),
        	'readFlowcontrolApiserverV1PriorityLevelConfiguration'
        );
    }

    /**
     * replace the specified PriorityLevelConfiguration
     *
     * @param string $name name of the PriorityLevelConfiguration
     * @param ThePriorityLevelConfiguration $Model
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
     * @return ThePriorityLevelConfiguration|mixed
     */
    public function replaceFlowcontrolApiserverV1(string $name, \Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1\PriorityLevelConfiguration $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/prioritylevelconfigurations/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceFlowcontrolApiserverV1PriorityLevelConfiguration'
        );
    }

    /**
     * delete a PriorityLevelConfiguration
     *
     * @param string $name name of the PriorityLevelConfiguration
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return Status|mixed
     */
    public function deleteFlowcontrolApiserverV1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/prioritylevelconfigurations/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteFlowcontrolApiserverV1PriorityLevelConfiguration'
        );
    }

    /**
     * partially update the specified PriorityLevelConfiguration
     *
     * @param string $name name of the PriorityLevelConfiguration
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
     * @return ThePriorityLevelConfiguration|mixed
     */
    public function patchFlowcontrolApiserverV1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/prioritylevelconfigurations/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchFlowcontrolApiserverV1PriorityLevelConfiguration'
        );
    }

    /**
     * read status of the specified PriorityLevelConfiguration
     *
     * @param string $name name of the PriorityLevelConfiguration
     * @return ThePriorityLevelConfiguration|mixed
     */
    public function readFlowcontrolApiserverV1Status(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/prioritylevelconfigurations/{$name}/status",
        		[
        		]
        	),
        	'readFlowcontrolApiserverV1PriorityLevelConfigurationStatus'
        );
    }

    /**
     * replace status of the specified PriorityLevelConfiguration
     *
     * @param string $name name of the PriorityLevelConfiguration
     * @param ThePriorityLevelConfiguration $Model
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
     * @return ThePriorityLevelConfiguration|mixed
     */
    public function replaceFlowcontrolApiserverV1Status(string $name, \Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1\PriorityLevelConfiguration $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/prioritylevelconfigurations/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceFlowcontrolApiserverV1PriorityLevelConfigurationStatus'
        );
    }

    /**
     * partially update status of the specified PriorityLevelConfiguration
     *
     * @param string $name name of the PriorityLevelConfiguration
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
     * @return ThePriorityLevelConfiguration|mixed
     */
    public function patchFlowcontrolApiserverV1Status(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/prioritylevelconfigurations/{$name}/status",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchFlowcontrolApiserverV1PriorityLevelConfigurationStatus'
        );
    }

    /**
     * watch individual changes to a list of PriorityLevelConfiguration. deprecated:
     * use the 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchFlowcontrolApiserverV1List()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/watch/prioritylevelconfigurations",
        		[
        		]
        	),
        	'watchFlowcontrolApiserverV1PriorityLevelConfigurationList'
        );
    }

    /**
     * watch changes to an object of kind PriorityLevelConfiguration. deprecated: use
     * the 'watch' parameter with a list operation instead, filtered to a single item
     * with the 'fieldSelector' parameter.
     *
     * @param string $name name of the PriorityLevelConfiguration
     * @return WatchEvent|mixed
     */
    public function watchFlowcontrolApiserverV1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/watch/prioritylevelconfigurations/{$name}",
        		[
        		]
        	),
        	'watchFlowcontrolApiserverV1PriorityLevelConfiguration'
        );
    }
}


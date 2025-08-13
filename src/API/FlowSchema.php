<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1\FlowSchemaList as FlowSchemaList;
use \Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1\FlowSchema as TheFlowSchema;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class FlowSchema extends AbstractAPI
{
    /**
     * list or watch objects of kind FlowSchema
     *
     * @return FlowSchemaList|mixed
     */
    public function listFlowcontrolApiserverV1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/flowschemas",
        		[
        		]
        	),
        	'listFlowcontrolApiserverV1FlowSchema'
        );
    }

    /**
     * create a FlowSchema
     *
     * @param TheFlowSchema $Model
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
     * @return TheFlowSchema|mixed
     */
    public function createFlowcontrolApiserverV1(\Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1\FlowSchema $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/flowschemas",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createFlowcontrolApiserverV1FlowSchema'
        );
    }

    /**
     * delete collection of FlowSchema
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
        		"/apis/flowcontrol.apiserver.k8s.io/v1/flowschemas",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteFlowcontrolApiserverV1CollectionFlowSchema'
        );
    }

    /**
     * read the specified FlowSchema
     *
     * @param string $name name of the FlowSchema
     * @return TheFlowSchema|mixed
     */
    public function readFlowcontrolApiserverV1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/flowschemas/{$name}",
        		[
        		]
        	),
        	'readFlowcontrolApiserverV1FlowSchema'
        );
    }

    /**
     * replace the specified FlowSchema
     *
     * @param string $name name of the FlowSchema
     * @param TheFlowSchema $Model
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
     * @return TheFlowSchema|mixed
     */
    public function replaceFlowcontrolApiserverV1(string $name, \Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1\FlowSchema $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/flowschemas/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceFlowcontrolApiserverV1FlowSchema'
        );
    }

    /**
     * delete a FlowSchema
     *
     * @param string $name name of the FlowSchema
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
        		"/apis/flowcontrol.apiserver.k8s.io/v1/flowschemas/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteFlowcontrolApiserverV1FlowSchema'
        );
    }

    /**
     * partially update the specified FlowSchema
     *
     * @param string $name name of the FlowSchema
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
     * @return TheFlowSchema|mixed
     */
    public function patchFlowcontrolApiserverV1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/flowschemas/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchFlowcontrolApiserverV1FlowSchema'
        );
    }

    /**
     * read status of the specified FlowSchema
     *
     * @param string $name name of the FlowSchema
     * @return TheFlowSchema|mixed
     */
    public function readFlowcontrolApiserverV1Status(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/flowschemas/{$name}/status",
        		[
        		]
        	),
        	'readFlowcontrolApiserverV1FlowSchemaStatus'
        );
    }

    /**
     * replace status of the specified FlowSchema
     *
     * @param string $name name of the FlowSchema
     * @param TheFlowSchema $Model
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
     * @return TheFlowSchema|mixed
     */
    public function replaceFlowcontrolApiserverV1Status(string $name, \Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1\FlowSchema $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/flowschemas/{$name}/status",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceFlowcontrolApiserverV1FlowSchemaStatus'
        );
    }

    /**
     * partially update status of the specified FlowSchema
     *
     * @param string $name name of the FlowSchema
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
     * @return TheFlowSchema|mixed
     */
    public function patchFlowcontrolApiserverV1Status(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/flowschemas/{$name}/status",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchFlowcontrolApiserverV1FlowSchemaStatus'
        );
    }

    /**
     * watch individual changes to a list of FlowSchema. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchFlowcontrolApiserverV1List()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/watch/flowschemas",
        		[
        		]
        	),
        	'watchFlowcontrolApiserverV1FlowSchemaList'
        );
    }

    /**
     * watch changes to an object of kind FlowSchema. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the FlowSchema
     * @return WatchEvent|mixed
     */
    public function watchFlowcontrolApiserverV1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/flowcontrol.apiserver.k8s.io/v1/watch/flowschemas/{$name}",
        		[
        		]
        	),
        	'watchFlowcontrolApiserverV1FlowSchema'
        );
    }
}


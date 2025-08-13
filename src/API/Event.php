<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\EventList as EventList;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\Event as TheEvent;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Events\V1\EventList as EventListV1;
use \Kubernetes\Model\Io\K8s\Api\Events\V1\Event as TheEventV1;

class Event extends AbstractAPI
{
    /**
     * list or watch objects of kind Event
     *
     * @return EventList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/events",
        		[
        		]
        	),
        	'listCoreV1EventForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Event
     *
     * @return EventList|mixed
     */
    public function list()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{namespace}/events",
        		[
        		]
        	),
        	'listCoreV1NamespacedEvent'
        );
    }

    /**
     * create an Event
     *
     * @param TheEvent $Model
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
     * @return TheEvent|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Core\V1\Event $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{namespace}/events",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createCoreV1NamespacedEvent'
        );
    }

    /**
     * delete collection of Event
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
        		"/api/v1/namespaces/{namespace}/events",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteCoreV1CollectionNamespacedEvent'
        );
    }

    /**
     * read the specified Event
     *
     * @param string $name name of the Event
     * @return TheEvent|mixed
     */
    public function read(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{namespace}/events/{$name}",
        		[
        		]
        	),
        	'readCoreV1NamespacedEvent'
        );
    }

    /**
     * replace the specified Event
     *
     * @param string $name name of the Event
     * @param TheEvent $Model
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
     * @return TheEvent|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Api\Core\V1\Event $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{namespace}/events/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceCoreV1NamespacedEvent'
        );
    }

    /**
     * delete an Event
     *
     * @param string $name name of the Event
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
        		"/api/v1/namespaces/{namespace}/events/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteCoreV1NamespacedEvent'
        );
    }

    /**
     * partially update the specified Event
     *
     * @param string $name name of the Event
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
     * @return TheEvent|mixed
     */
    public function patch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{namespace}/events/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchCoreV1NamespacedEvent'
        );
    }

    /**
     * watch individual changes to a list of Event. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/events",
        		[
        		]
        	),
        	'watchCoreV1EventListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Event. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{namespace}/events",
        		[
        		]
        	),
        	'watchCoreV1NamespacedEventList'
        );
    }

    /**
     * watch changes to an object of kind Event. deprecated: use the 'watch' parameter
     * with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the Event
     * @return WatchEvent|mixed
     */
    public function watch(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{namespace}/events/{$name}",
        		[
        		]
        	),
        	'watchCoreV1NamespacedEvent'
        );
    }

    /**
     * list or watch objects of kind Event
     *
     * @return EventListV1|mixed
     */
    public function listForAllNamespacesEventsV1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1/events",
        		[
        		]
        	),
        	'listEventsV1EventForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind Event
     *
     * @return EventListV1|mixed
     */
    public function listEventsV1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1/namespaces/{namespace}/events",
        		[
        		]
        	),
        	'listEventsV1NamespacedEvent'
        );
    }

    /**
     * create an Event
     *
     * @param TheEventV1 $Model
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
     * @return TheEventV1|mixed
     */
    public function createEventsV1(\Kubernetes\Model\Io\K8s\Api\Events\V1\Event $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/events.k8s.io/v1/namespaces/{namespace}/events",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createEventsV1NamespacedEvent'
        );
    }

    /**
     * delete collection of Event
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
    public function deleteCollectionEventsV1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/events.k8s.io/v1/namespaces/{namespace}/events",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteEventsV1CollectionNamespacedEvent'
        );
    }

    /**
     * read the specified Event
     *
     * @param string $name name of the Event
     * @return TheEventV1|mixed
     */
    public function readEventsV1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1/namespaces/{namespace}/events/{$name}",
        		[
        		]
        	),
        	'readEventsV1NamespacedEvent'
        );
    }

    /**
     * replace the specified Event
     *
     * @param string $name name of the Event
     * @param TheEventV1 $Model
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
     * @return TheEventV1|mixed
     */
    public function replaceEventsV1(string $name, \Kubernetes\Model\Io\K8s\Api\Events\V1\Event $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/events.k8s.io/v1/namespaces/{namespace}/events/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceEventsV1NamespacedEvent'
        );
    }

    /**
     * delete an Event
     *
     * @param string $name name of the Event
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return Status|mixed
     */
    public function deleteEventsV1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/events.k8s.io/v1/namespaces/{namespace}/events/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteEventsV1NamespacedEvent'
        );
    }

    /**
     * partially update the specified Event
     *
     * @param string $name name of the Event
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
     * @return TheEventV1|mixed
     */
    public function patchEventsV1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/events.k8s.io/v1/namespaces/{namespace}/events/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchEventsV1NamespacedEvent'
        );
    }

    /**
     * watch individual changes to a list of Event. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesEventsV1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1/watch/events",
        		[
        		]
        	),
        	'watchEventsV1EventListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Event. deprecated: use the 'watch'
     * parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListEventsV1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1/watch/namespaces/{namespace}/events",
        		[
        		]
        	),
        	'watchEventsV1NamespacedEventList'
        );
    }

    /**
     * watch changes to an object of kind Event. deprecated: use the 'watch' parameter
     * with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the Event
     * @return WatchEvent|mixed
     */
    public function watchEventsV1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/events.k8s.io/v1/watch/namespaces/{namespace}/events/{$name}",
        		[
        		]
        	),
        	'watchEventsV1NamespacedEvent'
        );
    }
}


<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Coordination\V1alpha2\LeaseCandidateList as LeaseCandidateList;
use \Kubernetes\Model\Io\K8s\Api\Coordination\V1alpha2\LeaseCandidate as TheLeaseCandidate;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;
use \Kubernetes\Model\Io\K8s\Api\Coordination\V1beta1\LeaseCandidateList as LeaseCandidateListV1beta1;
use \Kubernetes\Model\Io\K8s\Api\Coordination\V1beta1\LeaseCandidate as TheLeaseCandidateV1beta1;

class LeaseCandidate extends AbstractAPI
{
    /**
     * list or watch objects of kind LeaseCandidate
     *
     * @return LeaseCandidateList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1alpha2/leasecandidates",
        		[
        		]
        	),
        	'listCoordinationV1alpha2LeaseCandidateForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind LeaseCandidate
     *
     * @return LeaseCandidateList|mixed
     */
    public function list()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1alpha2/namespaces/{namespace}/leasecandidates",
        		[
        		]
        	),
        	'listCoordinationV1alpha2NamespacedLeaseCandidate'
        );
    }

    /**
     * create a LeaseCandidate
     *
     * @param TheLeaseCandidate $Model
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
     * @return TheLeaseCandidate|mixed
     */
    public function create(\Kubernetes\Model\Io\K8s\Api\Coordination\V1alpha2\LeaseCandidate $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/coordination.k8s.io/v1alpha2/namespaces/{namespace}/leasecandidates",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createCoordinationV1alpha2NamespacedLeaseCandidate'
        );
    }

    /**
     * delete collection of LeaseCandidate
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
        		"/apis/coordination.k8s.io/v1alpha2/namespaces/{namespace}/leasecandidates",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteCoordinationV1alpha2CollectionNamespacedLeaseCandidate'
        );
    }

    /**
     * read the specified LeaseCandidate
     *
     * @param string $name name of the LeaseCandidate
     * @return TheLeaseCandidate|mixed
     */
    public function read(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1alpha2/namespaces/{namespace}/leasecandidates/{$name}",
        		[
        		]
        	),
        	'readCoordinationV1alpha2NamespacedLeaseCandidate'
        );
    }

    /**
     * replace the specified LeaseCandidate
     *
     * @param string $name name of the LeaseCandidate
     * @param TheLeaseCandidate $Model
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
     * @return TheLeaseCandidate|mixed
     */
    public function replace(string $name, \Kubernetes\Model\Io\K8s\Api\Coordination\V1alpha2\LeaseCandidate $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/coordination.k8s.io/v1alpha2/namespaces/{namespace}/leasecandidates/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceCoordinationV1alpha2NamespacedLeaseCandidate'
        );
    }

    /**
     * delete a LeaseCandidate
     *
     * @param string $name name of the LeaseCandidate
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
        		"/apis/coordination.k8s.io/v1alpha2/namespaces/{namespace}/leasecandidates/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteCoordinationV1alpha2NamespacedLeaseCandidate'
        );
    }

    /**
     * partially update the specified LeaseCandidate
     *
     * @param string $name name of the LeaseCandidate
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
     * @return TheLeaseCandidate|mixed
     */
    public function patch(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/coordination.k8s.io/v1alpha2/namespaces/{namespace}/leasecandidates/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchCoordinationV1alpha2NamespacedLeaseCandidate'
        );
    }

    /**
     * watch individual changes to a list of LeaseCandidate. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1alpha2/watch/leasecandidates",
        		[
        		]
        	),
        	'watchCoordinationV1alpha2LeaseCandidateListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of LeaseCandidate. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1alpha2/watch/namespaces/{namespace}/leasecandidates",
        		[
        		]
        	),
        	'watchCoordinationV1alpha2NamespacedLeaseCandidateList'
        );
    }

    /**
     * watch changes to an object of kind LeaseCandidate. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the LeaseCandidate
     * @return WatchEvent|mixed
     */
    public function watch(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1alpha2/watch/namespaces/{namespace}/leasecandidates/{$name}",
        		[
        		]
        	),
        	'watchCoordinationV1alpha2NamespacedLeaseCandidate'
        );
    }

    /**
     * list or watch objects of kind LeaseCandidate
     *
     * @return LeaseCandidateListV1beta1|mixed
     */
    public function listForAllNamespacesCoordinationV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1beta1/leasecandidates",
        		[
        		]
        	),
        	'listCoordinationV1beta1LeaseCandidateForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind LeaseCandidate
     *
     * @return LeaseCandidateListV1beta1|mixed
     */
    public function listCoordinationV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1beta1/namespaces/{namespace}/leasecandidates",
        		[
        		]
        	),
        	'listCoordinationV1beta1NamespacedLeaseCandidate'
        );
    }

    /**
     * create a LeaseCandidate
     *
     * @param TheLeaseCandidateV1beta1 $Model
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
     * @return TheLeaseCandidateV1beta1|mixed
     */
    public function createCoordinationV1beta1(\Kubernetes\Model\Io\K8s\Api\Coordination\V1beta1\LeaseCandidate $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/coordination.k8s.io/v1beta1/namespaces/{namespace}/leasecandidates",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'createCoordinationV1beta1NamespacedLeaseCandidate'
        );
    }

    /**
     * delete collection of LeaseCandidate
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
    public function deleteCollectionCoordinationV1beta1(array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/coordination.k8s.io/v1beta1/namespaces/{namespace}/leasecandidates",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteCoordinationV1beta1CollectionNamespacedLeaseCandidate'
        );
    }

    /**
     * read the specified LeaseCandidate
     *
     * @param string $name name of the LeaseCandidate
     * @return TheLeaseCandidateV1beta1|mixed
     */
    public function readCoordinationV1beta1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1beta1/namespaces/{namespace}/leasecandidates/{$name}",
        		[
        		]
        	),
        	'readCoordinationV1beta1NamespacedLeaseCandidate'
        );
    }

    /**
     * replace the specified LeaseCandidate
     *
     * @param string $name name of the LeaseCandidate
     * @param TheLeaseCandidateV1beta1 $Model
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
     * @return TheLeaseCandidateV1beta1|mixed
     */
    public function replaceCoordinationV1beta1(string $name, \Kubernetes\Model\Io\K8s\Api\Coordination\V1beta1\LeaseCandidate $Model, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/coordination.k8s.io/v1beta1/namespaces/{namespace}/leasecandidates/{$name}",
        		[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	),
        	'replaceCoordinationV1beta1NamespacedLeaseCandidate'
        );
    }

    /**
     * delete a LeaseCandidate
     *
     * @param string $name name of the LeaseCandidate
     * @param array $queries options:
     * 'dryRun'	string
     * When present, indicates that modifications should not be persisted. An invalid
     * or unrecognized dryRun directive will result in an error response and no further
     * processing of the request. Valid values are: - All: all dry run stages will be
     * processed
     *
     * @return Status|mixed
     */
    public function deleteCoordinationV1beta1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/coordination.k8s.io/v1beta1/namespaces/{namespace}/leasecandidates/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'deleteCoordinationV1beta1NamespacedLeaseCandidate'
        );
    }

    /**
     * partially update the specified LeaseCandidate
     *
     * @param string $name name of the LeaseCandidate
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
     * @return TheLeaseCandidateV1beta1|mixed
     */
    public function patchCoordinationV1beta1(string $name, array $queries = [])
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/coordination.k8s.io/v1beta1/namespaces/{namespace}/leasecandidates/{$name}",
        		[
        			'query' => $queries,
        		]
        	),
        	'patchCoordinationV1beta1NamespacedLeaseCandidate'
        );
    }

    /**
     * watch individual changes to a list of LeaseCandidate. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespacesCoordinationV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1beta1/watch/leasecandidates",
        		[
        		]
        	),
        	'watchCoordinationV1beta1LeaseCandidateListForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of LeaseCandidate. deprecated: use the
     * 'watch' parameter with a list operation instead.
     *
     * @return WatchEvent|mixed
     */
    public function watchListCoordinationV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1beta1/watch/namespaces/{namespace}/leasecandidates",
        		[
        		]
        	),
        	'watchCoordinationV1beta1NamespacedLeaseCandidateList'
        );
    }

    /**
     * watch changes to an object of kind LeaseCandidate. deprecated: use the 'watch'
     * parameter with a list operation instead, filtered to a single item with the
     * 'fieldSelector' parameter.
     *
     * @param string $name name of the LeaseCandidate
     * @return WatchEvent|mixed
     */
    public function watchCoordinationV1beta1(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/coordination.k8s.io/v1beta1/watch/namespaces/{namespace}/leasecandidates/{$name}",
        		[
        		]
        	),
        	'watchCoordinationV1beta1NamespacedLeaseCandidate'
        );
    }
}


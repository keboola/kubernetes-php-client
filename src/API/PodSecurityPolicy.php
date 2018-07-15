<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\PodSecurityPolicyList as PodSecurityPolicyList;
use \Kubernetes\Model\Io\K8s\Api\Extensions\V1beta1\PodSecurityPolicy as PodSecurityPolicy;
use \Kubernetes\Model\Io\K8s\Api\Policy\V1beta1\PodSecurityPolicyList as PodSecurityPolicyList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Policy\V1beta1\PodSecurityPolicy as PodSecurityPolicy;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class PodSecurityPolicy extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind PodSecurityPolicy
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return PodSecurityPolicyList|mixed
     */
    public function list(array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/podsecuritypolicies"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listExtensionsV1beta1PodSecurityPolicy'
        );
    }

    /**
     * create a PodSecurityPolicy
     *
     * @param PodSecurityPolicy $Model
     * @return PodSecurityPolicy|mixed
     */
    public function create(\PodSecurityPolicy $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/extensions/v1beta1/podsecuritypolicies"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createExtensionsV1beta1PodSecurityPolicy'
        );
    }

    /**
     * delete collection of PodSecurityPolicy
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection(array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/extensions/v1beta1/podsecuritypolicies"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteExtensionsV1beta1CollectionPodSecurityPolicy'
        );
    }

    /**
     * read the specified PodSecurityPolicy
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return PodSecurityPolicy|mixed
     */
    public function read($name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/podsecuritypolicies/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readExtensionsV1beta1PodSecurityPolicy'
        );
    }

    /**
     * replace the specified PodSecurityPolicy
     *
     * @param $name
     * @param PodSecurityPolicy $Model
     * @return PodSecurityPolicy|mixed
     */
    public function replace($name, \PodSecurityPolicy $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/extensions/v1beta1/podsecuritypolicies/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceExtensionsV1beta1PodSecurityPolicy'
        );
    }

    /**
     * delete a PodSecurityPolicy
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function delete($name, \DeleteOptions $Model, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/extensions/v1beta1/podsecuritypolicies/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteExtensionsV1beta1PodSecurityPolicy'
        );
    }

    /**
     * partially update the specified PodSecurityPolicy
     *
     * @param $name
     * @param Patch $Model
     * @return PodSecurityPolicy|mixed
     */
    public function patch($name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/extensions/v1beta1/podsecuritypolicies/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchExtensionsV1beta1PodSecurityPolicy'
        );
    }

    /**
     * watch individual changes to a list of PodSecurityPolicy
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/podsecuritypolicies"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1PodSecurityPolicyList'
        );
    }

    /**
     * watch changes to an object of kind PodSecurityPolicy
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/extensions/v1beta1/watch/podsecuritypolicies/{$name}"
        		,[
        		]
        	)
        	, 'watchExtensionsV1beta1PodSecurityPolicy'
        );
    }

    /**
     * list or watch objects of kind PodSecurityPolicy
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return PodSecurityPolicyList|mixed
     */
    public function listPolicyV1beta1(array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/policy/v1beta1/podsecuritypolicies"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listPolicyV1beta1PodSecurityPolicy'
        );
    }

    /**
     * create a PodSecurityPolicy
     *
     * @param PodSecurityPolicy $Model
     * @return PodSecurityPolicy|mixed
     */
    public function createPolicyV1beta1(\PodSecurityPolicy $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/policy/v1beta1/podsecuritypolicies"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createPolicyV1beta1PodSecurityPolicy'
        );
    }

    /**
     * delete collection of PodSecurityPolicy
     *
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @configkey continue	string
     * @configkey fieldSelector	string
     * @configkey includeUninitialized	boolean
     * @configkey labelSelector	string
     * @configkey limit	integer
     * @configkey resourceVersion	string
     * @configkey timeoutSeconds	integer
     * @configkey watch	boolean
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollectionPolicyV1beta1(array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/policy/v1beta1/podsecuritypolicies"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deletePolicyV1beta1CollectionPodSecurityPolicy'
        );
    }

    /**
     * read the specified PodSecurityPolicy
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return PodSecurityPolicy|mixed
     */
    public function readPolicyV1beta1($name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/policy/v1beta1/podsecuritypolicies/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readPolicyV1beta1PodSecurityPolicy'
        );
    }

    /**
     * replace the specified PodSecurityPolicy
     *
     * @param $name
     * @param PodSecurityPolicy $Model
     * @return PodSecurityPolicy|mixed
     */
    public function replacePolicyV1beta1($name, \PodSecurityPolicy $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/policy/v1beta1/podsecuritypolicies/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replacePolicyV1beta1PodSecurityPolicy'
        );
    }

    /**
     * delete a PodSecurityPolicy
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function deletePolicyV1beta1($name, \DeleteOptions $Model, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/policy/v1beta1/podsecuritypolicies/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deletePolicyV1beta1PodSecurityPolicy'
        );
    }

    /**
     * partially update the specified PodSecurityPolicy
     *
     * @param $name
     * @param Patch $Model
     * @return PodSecurityPolicy|mixed
     */
    public function patchPolicyV1beta1($name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/policy/v1beta1/podsecuritypolicies/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchPolicyV1beta1PodSecurityPolicy'
        );
    }

    /**
     * watch individual changes to a list of PodSecurityPolicy
     *
     * @return WatchEvent|mixed
     */
    public function watchListPolicyV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/policy/v1beta1/watch/podsecuritypolicies"
        		,[
        		]
        	)
        	, 'watchPolicyV1beta1PodSecurityPolicyList'
        );
    }

    /**
     * watch changes to an object of kind PodSecurityPolicy
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchPolicyV1beta1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/policy/v1beta1/watch/podsecuritypolicies/{$name}"
        		,[
        		]
        	)
        	, 'watchPolicyV1beta1PodSecurityPolicy'
        );
    }


}


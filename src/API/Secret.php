<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\Secret as Secret;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\SecretList as SecretList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class Secret extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind Secret
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
     * @param string $namespace
     * @param array $queries
     * @return SecretList|mixed
     */
    public function list(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/secrets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listCoreV1NamespacedSecret'
        );
    }

    /**
     * create a Secret
     *
     * @param string $namespace
     * @param Secret $Model
     * @return Secret|mixed
     */
    public function create(string $namespace = 'default', \Secret $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{$namespace}/secrets"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createCoreV1NamespacedSecret'
        );
    }

    /**
     * delete collection of Secret
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
     * @param string $namespace
     * @param array $queries
     * @return Status|mixed
     */
    public function deleteCollection(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/secrets"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1CollectionNamespacedSecret'
        );
    }

    /**
     * read the specified Secret
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param string $namespace
     * @param $name
     * @param array $queries
     * @return Secret|mixed
     */
    public function read(string $namespace = 'default', $name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{$namespace}/secrets/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readCoreV1NamespacedSecret'
        );
    }

    /**
     * replace the specified Secret
     *
     * @param string $namespace
     * @param $name
     * @param Secret $Model
     * @return Secret|mixed
     */
    public function replace(string $namespace = 'default', $name, \Secret $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{$namespace}/secrets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceCoreV1NamespacedSecret'
        );
    }

    /**
     * delete a Secret
     *
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @configkey gracePeriodSeconds	integer
     * @configkey orphanDependents	boolean
     * @configkey propagationPolicy	string
     * @param string $namespace
     * @param $name
     * @param DeleteOptions $Model
     * @param array $queries
     * @return Status|mixed
     */
    public function delete(string $namespace = 'default', $name, \DeleteOptions $Model, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{$namespace}/secrets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteCoreV1NamespacedSecret'
        );
    }

    /**
     * partially update the specified Secret
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return Secret|mixed
     */
    public function patch(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{$namespace}/secrets/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchCoreV1NamespacedSecret'
        );
    }

    /**
     * list or watch objects of kind Secret
     *
     * @return SecretList|mixed
     */
    public function listForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/secrets"
        		,[
        		]
        	)
        	, 'listCoreV1SecretForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of Secret
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchList(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/secrets"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedSecretList'
        );
    }

    /**
     * watch changes to an object of kind Secret
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/namespaces/{$namespace}/secrets/{$name}"
        		,[
        		]
        	)
        	, 'watchCoreV1NamespacedSecret'
        );
    }

    /**
     * watch individual changes to a list of Secret
     *
     * @return WatchEvent|mixed
     */
    public function watchListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/watch/secrets"
        		,[
        		]
        	)
        	, 'watchCoreV1SecretListForAllNamespaces'
        );
    }


}


<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Rbac\V1\RoleBinding as RoleBinding;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1\RoleBindingList as RoleBindingList;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1alpha1\RoleBinding as RoleBinding;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1alpha1\RoleBindingList as RoleBindingList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1beta1\RoleBinding as RoleBinding;
use \Kubernetes\Model\Io\K8s\Api\Rbac\V1beta1\RoleBindingList as RoleBindingList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class RoleBinding extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind RoleBinding
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
     * @return RoleBindingList|mixed
     */
    public function listRbacAuthorizationV1(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{$namespace}/rolebindings"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listRbacAuthorizationV1NamespacedRoleBinding'
        );
    }

    /**
     * create a RoleBinding
     *
     * @param string $namespace
     * @param RoleBinding $Model
     * @return RoleBinding|mixed
     */
    public function createRbacAuthorizationV1(string $namespace = 'default', \RoleBinding $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{$namespace}/rolebindings"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createRbacAuthorizationV1NamespacedRoleBinding'
        );
    }

    /**
     * delete collection of RoleBinding
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
    public function deleteRbacAuthorizationV1Collection(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{$namespace}/rolebindings"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1CollectionNamespacedRoleBinding'
        );
    }

    /**
     * read the specified RoleBinding
     *
     * @param string $namespace
     * @param $name
     * @return RoleBinding|mixed
     */
    public function readRbacAuthorizationV1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{$namespace}/rolebindings/{$name}"
        		,[
        		]
        	)
        	, 'readRbacAuthorizationV1NamespacedRoleBinding'
        );
    }

    /**
     * replace the specified RoleBinding
     *
     * @param string $namespace
     * @param $name
     * @param RoleBinding $Model
     * @return RoleBinding|mixed
     */
    public function replaceRbacAuthorizationV1(string $namespace = 'default', $name, \RoleBinding $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{$namespace}/rolebindings/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceRbacAuthorizationV1NamespacedRoleBinding'
        );
    }

    /**
     * delete a RoleBinding
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
    public function deleteRbacAuthorizationV1(string $namespace = 'default', $name, \DeleteOptions $Model, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{$namespace}/rolebindings/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1NamespacedRoleBinding'
        );
    }

    /**
     * partially update the specified RoleBinding
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return RoleBinding|mixed
     */
    public function patchRbacAuthorizationV1(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/rbac.authorization.k8s.io/v1/namespaces/{$namespace}/rolebindings/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchRbacAuthorizationV1NamespacedRoleBinding'
        );
    }

    /**
     * list or watch objects of kind RoleBinding
     *
     * @return RoleBindingList|mixed
     */
    public function listRbacAuthorizationV1ForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/rolebindings"
        		,[
        		]
        	)
        	, 'listRbacAuthorizationV1RoleBindingForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of RoleBinding
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1List(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/watch/namespaces/{$namespace}/rolebindings"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1NamespacedRoleBindingList'
        );
    }

    /**
     * watch changes to an object of kind RoleBinding
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/watch/namespaces/{$namespace}/rolebindings/{$name}"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1NamespacedRoleBinding'
        );
    }

    /**
     * watch individual changes to a list of RoleBinding
     *
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1ListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1/watch/rolebindings"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1RoleBindingListForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind RoleBinding
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
     * @return RoleBindingList|mixed
     */
    public function listRbacAuthorizationV1alpha1(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/namespaces/{$namespace}/rolebindings"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listRbacAuthorizationV1alpha1NamespacedRoleBinding'
        );
    }

    /**
     * create a RoleBinding
     *
     * @param string $namespace
     * @param RoleBinding $Model
     * @return RoleBinding|mixed
     */
    public function createRbacAuthorizationV1alpha1(string $namespace = 'default', \RoleBinding $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/namespaces/{$namespace}/rolebindings"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createRbacAuthorizationV1alpha1NamespacedRoleBinding'
        );
    }

    /**
     * delete collection of RoleBinding
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
    public function deleteRbacAuthorizationV1alpha1Collection(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/namespaces/{$namespace}/rolebindings"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1alpha1CollectionNamespacedRoleBinding'
        );
    }

    /**
     * read the specified RoleBinding
     *
     * @param string $namespace
     * @param $name
     * @return RoleBinding|mixed
     */
    public function readRbacAuthorizationV1alpha1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/namespaces/{$namespace}/rolebindings/{$name}"
        		,[
        		]
        	)
        	, 'readRbacAuthorizationV1alpha1NamespacedRoleBinding'
        );
    }

    /**
     * replace the specified RoleBinding
     *
     * @param string $namespace
     * @param $name
     * @param RoleBinding $Model
     * @return RoleBinding|mixed
     */
    public function replaceRbacAuthorizationV1alpha1(string $namespace = 'default', $name, \RoleBinding $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/namespaces/{$namespace}/rolebindings/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceRbacAuthorizationV1alpha1NamespacedRoleBinding'
        );
    }

    /**
     * delete a RoleBinding
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
    public function deleteRbacAuthorizationV1alpha1(string $namespace = 'default', $name, \DeleteOptions $Model, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/namespaces/{$namespace}/rolebindings/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1alpha1NamespacedRoleBinding'
        );
    }

    /**
     * partially update the specified RoleBinding
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return RoleBinding|mixed
     */
    public function patchRbacAuthorizationV1alpha1(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/namespaces/{$namespace}/rolebindings/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchRbacAuthorizationV1alpha1NamespacedRoleBinding'
        );
    }

    /**
     * list or watch objects of kind RoleBinding
     *
     * @return RoleBindingList|mixed
     */
    public function listRbacAuthorizationV1alpha1ForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/rolebindings"
        		,[
        		]
        	)
        	, 'listRbacAuthorizationV1alpha1RoleBindingForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of RoleBinding
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1alpha1List(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/watch/namespaces/{$namespace}/rolebindings"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1alpha1NamespacedRoleBindingList'
        );
    }

    /**
     * watch changes to an object of kind RoleBinding
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1alpha1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/watch/namespaces/{$namespace}/rolebindings/{$name}"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1alpha1NamespacedRoleBinding'
        );
    }

    /**
     * watch individual changes to a list of RoleBinding
     *
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1alpha1ListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1alpha1/watch/rolebindings"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1alpha1RoleBindingListForAllNamespaces'
        );
    }

    /**
     * list or watch objects of kind RoleBinding
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
     * @return RoleBindingList|mixed
     */
    public function listRbacAuthorizationV1beta1(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{$namespace}/rolebindings"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listRbacAuthorizationV1beta1NamespacedRoleBinding'
        );
    }

    /**
     * create a RoleBinding
     *
     * @param string $namespace
     * @param RoleBinding $Model
     * @return RoleBinding|mixed
     */
    public function createRbacAuthorizationV1beta1(string $namespace = 'default', \RoleBinding $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{$namespace}/rolebindings"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createRbacAuthorizationV1beta1NamespacedRoleBinding'
        );
    }

    /**
     * delete collection of RoleBinding
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
    public function deleteRbacAuthorizationV1beta1Collection(string $namespace = 'default', array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{$namespace}/rolebindings"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1beta1CollectionNamespacedRoleBinding'
        );
    }

    /**
     * read the specified RoleBinding
     *
     * @param string $namespace
     * @param $name
     * @return RoleBinding|mixed
     */
    public function readRbacAuthorizationV1beta1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{$namespace}/rolebindings/{$name}"
        		,[
        		]
        	)
        	, 'readRbacAuthorizationV1beta1NamespacedRoleBinding'
        );
    }

    /**
     * replace the specified RoleBinding
     *
     * @param string $namespace
     * @param $name
     * @param RoleBinding $Model
     * @return RoleBinding|mixed
     */
    public function replaceRbacAuthorizationV1beta1(string $namespace = 'default', $name, \RoleBinding $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{$namespace}/rolebindings/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceRbacAuthorizationV1beta1NamespacedRoleBinding'
        );
    }

    /**
     * delete a RoleBinding
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
    public function deleteRbacAuthorizationV1beta1(string $namespace = 'default', $name, \DeleteOptions $Model, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{$namespace}/rolebindings/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteRbacAuthorizationV1beta1NamespacedRoleBinding'
        );
    }

    /**
     * partially update the specified RoleBinding
     *
     * @param string $namespace
     * @param $name
     * @param Patch $Model
     * @return RoleBinding|mixed
     */
    public function patchRbacAuthorizationV1beta1(string $namespace = 'default', $name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/rbac.authorization.k8s.io/v1beta1/namespaces/{$namespace}/rolebindings/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchRbacAuthorizationV1beta1NamespacedRoleBinding'
        );
    }

    /**
     * list or watch objects of kind RoleBinding
     *
     * @return RoleBindingList|mixed
     */
    public function listRbacAuthorizationV1beta1ForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1beta1/rolebindings"
        		,[
        		]
        	)
        	, 'listRbacAuthorizationV1beta1RoleBindingForAllNamespaces'
        );
    }

    /**
     * watch individual changes to a list of RoleBinding
     *
     * @param string $namespace
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1beta1List(string $namespace = 'default')
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1beta1/watch/namespaces/{$namespace}/rolebindings"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1beta1NamespacedRoleBindingList'
        );
    }

    /**
     * watch changes to an object of kind RoleBinding
     *
     * @param string $namespace
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1beta1(string $namespace = 'default', $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1beta1/watch/namespaces/{$namespace}/rolebindings/{$name}"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1beta1NamespacedRoleBinding'
        );
    }

    /**
     * watch individual changes to a list of RoleBinding
     *
     * @return WatchEvent|mixed
     */
    public function watchRbacAuthorizationV1beta1ListForAllNamespaces()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/rbac.authorization.k8s.io/v1beta1/watch/rolebindings"
        		,[
        		]
        	)
        	, 'watchRbacAuthorizationV1beta1RoleBindingListForAllNamespaces'
        );
    }


}


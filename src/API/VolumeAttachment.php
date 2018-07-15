<?php

namespace Kubernetes\API;

use \Kubernetes\Model\Io\K8s\Api\Storage\V1alpha1\VolumeAttachmentList as VolumeAttachmentList;
use \Kubernetes\Model\Io\K8s\Api\Storage\V1alpha1\VolumeAttachment as VolumeAttachment;
use \Kubernetes\Model\Io\K8s\Api\Storage\V1beta1\VolumeAttachmentList as VolumeAttachmentList;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\DeleteOptions as DeleteOptions;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Status as Status;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\Patch as Patch;
use \Kubernetes\Model\Io\K8s\Api\Storage\V1beta1\VolumeAttachment as VolumeAttachment;
use \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\WatchEvent as WatchEvent;

class VolumeAttachment extends \Kubernetes\AbstractAPI
{

    /**
     * list or watch objects of kind VolumeAttachment
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
     * @return VolumeAttachmentList|mixed
     */
    public function list(array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1alpha1/volumeattachments"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listStorageV1alpha1VolumeAttachment'
        );
    }

    /**
     * create a VolumeAttachment
     *
     * @param VolumeAttachment $Model
     * @return VolumeAttachment|mixed
     */
    public function create(\VolumeAttachment $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/storage.k8s.io/v1alpha1/volumeattachments"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createStorageV1alpha1VolumeAttachment'
        );
    }

    /**
     * delete collection of VolumeAttachment
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
        		"/apis/storage.k8s.io/v1alpha1/volumeattachments"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1alpha1CollectionVolumeAttachment'
        );
    }

    /**
     * read the specified VolumeAttachment
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return VolumeAttachment|mixed
     */
    public function read($name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1alpha1/volumeattachments/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readStorageV1alpha1VolumeAttachment'
        );
    }

    /**
     * replace the specified VolumeAttachment
     *
     * @param $name
     * @param VolumeAttachment $Model
     * @return VolumeAttachment|mixed
     */
    public function replace($name, \VolumeAttachment $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/storage.k8s.io/v1alpha1/volumeattachments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceStorageV1alpha1VolumeAttachment'
        );
    }

    /**
     * delete a VolumeAttachment
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
        		"/apis/storage.k8s.io/v1alpha1/volumeattachments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1alpha1VolumeAttachment'
        );
    }

    /**
     * partially update the specified VolumeAttachment
     *
     * @param $name
     * @param Patch $Model
     * @return VolumeAttachment|mixed
     */
    public function patch($name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/storage.k8s.io/v1alpha1/volumeattachments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchStorageV1alpha1VolumeAttachment'
        );
    }

    /**
     * watch individual changes to a list of VolumeAttachment
     *
     * @return WatchEvent|mixed
     */
    public function watchList()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1alpha1/watch/volumeattachments"
        		,[
        		]
        	)
        	, 'watchStorageV1alpha1VolumeAttachmentList'
        );
    }

    /**
     * watch changes to an object of kind VolumeAttachment
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watch($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1alpha1/watch/volumeattachments/{$name}"
        		,[
        		]
        	)
        	, 'watchStorageV1alpha1VolumeAttachment'
        );
    }

    /**
     * list or watch objects of kind VolumeAttachment
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
     * @return VolumeAttachmentList|mixed
     */
    public function listStorageV1beta1(array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1beta1/volumeattachments"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'listStorageV1beta1VolumeAttachment'
        );
    }

    /**
     * create a VolumeAttachment
     *
     * @param VolumeAttachment $Model
     * @return VolumeAttachment|mixed
     */
    public function createStorageV1beta1(\VolumeAttachment $Model)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/apis/storage.k8s.io/v1beta1/volumeattachments"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'createStorageV1beta1VolumeAttachment'
        );
    }

    /**
     * delete collection of VolumeAttachment
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
    public function deleteCollectionStorageV1beta1(array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/storage.k8s.io/v1beta1/volumeattachments"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1beta1CollectionVolumeAttachment'
        );
    }

    /**
     * read the specified VolumeAttachment
     *
     * @configkey exact	boolean
     * @configkey export	boolean
     * @configkey exact	boolean
     * @configkey export	boolean
     * @param $name
     * @param array $queries
     * @return VolumeAttachment|mixed
     */
    public function readStorageV1beta1($name, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1beta1/volumeattachments/{$name}"
        		,[
        			'query' => $queries,
        		]
        	)
        	, 'readStorageV1beta1VolumeAttachment'
        );
    }

    /**
     * replace the specified VolumeAttachment
     *
     * @param $name
     * @param VolumeAttachment $Model
     * @return VolumeAttachment|mixed
     */
    public function replaceStorageV1beta1($name, \VolumeAttachment $Model)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/apis/storage.k8s.io/v1beta1/volumeattachments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'replaceStorageV1beta1VolumeAttachment'
        );
    }

    /**
     * delete a VolumeAttachment
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
    public function deleteStorageV1beta1($name, \DeleteOptions $Model, array $queries)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/apis/storage.k8s.io/v1beta1/volumeattachments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        			'query' => $queries,
        		]
        	)
        	, 'deleteStorageV1beta1VolumeAttachment'
        );
    }

    /**
     * partially update the specified VolumeAttachment
     *
     * @param $name
     * @param Patch $Model
     * @return VolumeAttachment|mixed
     */
    public function patchStorageV1beta1($name, \Patch $Model)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/apis/storage.k8s.io/v1beta1/volumeattachments/{$name}"
        		,[
        			'json' => $Model->getArrayCopy(),
        		]
        	)
        	, 'patchStorageV1beta1VolumeAttachment'
        );
    }

    /**
     * watch individual changes to a list of VolumeAttachment
     *
     * @return WatchEvent|mixed
     */
    public function watchListStorageV1beta1()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1beta1/watch/volumeattachments"
        		,[
        		]
        	)
        	, 'watchStorageV1beta1VolumeAttachmentList'
        );
    }

    /**
     * watch changes to an object of kind VolumeAttachment
     *
     * @param $name
     * @return WatchEvent|mixed
     */
    public function watchStorageV1beta1($name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/apis/storage.k8s.io/v1beta1/watch/volumeattachments/{$name}"
        		,[
        		]
        	)
        	, 'watchStorageV1beta1VolumeAttachment'
        );
    }


}


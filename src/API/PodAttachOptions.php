<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;

class PodAttachOptions extends AbstractAPI
{
    /**
     * connect GET requests to attach of Pod
     *
     * @param string $name name of the PodAttachOptions
     * @return string|mixed
     */
    public function connectGetPodAttach(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{namespace}/pods/{$name}/attach",
        		[
        		]
        	),
        	'connectCoreV1GetNamespacedPodAttach'
        );
    }

    /**
     * connect POST requests to attach of Pod
     *
     * @param string $name name of the PodAttachOptions
     * @return string|mixed
     */
    public function connectPostPodAttach(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{namespace}/pods/{$name}/attach",
        		[
        		]
        	),
        	'connectCoreV1PostNamespacedPodAttach'
        );
    }
}


<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;

class PodExecOptions extends AbstractAPI
{
    /**
     * connect GET requests to exec of Pod
     *
     * @param string $name name of the PodExecOptions
     * @return string|mixed
     */
    public function connectGetPodExec(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{namespace}/pods/{$name}/exec",
        		[
        		]
        	),
        	'connectCoreV1GetNamespacedPodExec'
        );
    }

    /**
     * connect POST requests to exec of Pod
     *
     * @param string $name name of the PodExecOptions
     * @return string|mixed
     */
    public function connectPostPodExec(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{namespace}/pods/{$name}/exec",
        		[
        		]
        	),
        	'connectCoreV1PostNamespacedPodExec'
        );
    }
}


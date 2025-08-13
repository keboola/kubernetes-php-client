<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;

class PodPortForwardOptions extends AbstractAPI
{
    /**
     * connect GET requests to portforward of Pod
     *
     * @param string $name name of the PodPortForwardOptions
     * @return string|mixed
     */
    public function connectGetPodPortforward(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{namespace}/pods/{$name}/portforward",
        		[
        		]
        	),
        	'connectCoreV1GetNamespacedPodPortforward'
        );
    }

    /**
     * connect POST requests to portforward of Pod
     *
     * @param string $name name of the PodPortForwardOptions
     * @return string|mixed
     */
    public function connectPostPodPortforward(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{namespace}/pods/{$name}/portforward",
        		[
        		]
        	),
        	'connectCoreV1PostNamespacedPodPortforward'
        );
    }
}


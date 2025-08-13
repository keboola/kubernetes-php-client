<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\ComponentStatusList as ComponentStatusList;
use \Kubernetes\Model\Io\K8s\Api\Core\V1\ComponentStatus as TheComponentStatus;

class ComponentStatus extends AbstractAPI
{
    /**
     * list objects of kind ComponentStatus
     *
     * @return ComponentStatusList|mixed
     */
    public function list()
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/componentstatuses",
        		[
        		]
        	),
        	'listCoreV1ComponentStatus'
        );
    }

    /**
     * read the specified ComponentStatus
     *
     * @param string $name name of the ComponentStatus
     * @return TheComponentStatus|mixed
     */
    public function read(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/componentstatuses/{$name}",
        		[
        		]
        	),
        	'readCoreV1ComponentStatus'
        );
    }
}


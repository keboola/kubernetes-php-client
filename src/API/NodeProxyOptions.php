<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;

class NodeProxyOptions extends AbstractAPI
{
    /**
     * connect GET requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @return string|mixed
     */
    public function connectGetNodeProxy(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/nodes/{$name}/proxy",
        		[
        		]
        	),
        	'connectCoreV1GetNodeProxy'
        );
    }

    /**
     * connect PUT requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @return string|mixed
     */
    public function connectPutNodeProxy(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/nodes/{$name}/proxy",
        		[
        		]
        	),
        	'connectCoreV1PutNodeProxy'
        );
    }

    /**
     * connect POST requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @return string|mixed
     */
    public function connectPostNodeProxy(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/nodes/{$name}/proxy",
        		[
        		]
        	),
        	'connectCoreV1PostNodeProxy'
        );
    }

    /**
     * connect DELETE requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @return string|mixed
     */
    public function connectDeleteNodeProxy(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/nodes/{$name}/proxy",
        		[
        		]
        	),
        	'connectCoreV1DeleteNodeProxy'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @return string|mixed
     */
    public function connectOptionsNodeProxy(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/nodes/{$name}/proxy",
        		[
        		]
        	),
        	'connectCoreV1OptionsNodeProxy'
        );
    }

    /**
     * connect HEAD requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @return string|mixed
     */
    public function connectHeadNodeProxy(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/nodes/{$name}/proxy",
        		[
        		]
        	),
        	'connectCoreV1HeadNodeProxy'
        );
    }

    /**
     * connect PATCH requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @return string|mixed
     */
    public function connectPatchNodeProxy(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/nodes/{$name}/proxy",
        		[
        		]
        	),
        	'connectCoreV1PatchNodeProxy'
        );
    }

    /**
     * connect GET requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @return string|mixed
     */
    public function connectGetNodeProxyWithPath(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/nodes/{$name}/proxy/{path}",
        		[
        		]
        	),
        	'connectCoreV1GetNodeProxyWithPath'
        );
    }

    /**
     * connect PUT requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @return string|mixed
     */
    public function connectPutNodeProxyWithPath(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/nodes/{$name}/proxy/{path}",
        		[
        		]
        	),
        	'connectCoreV1PutNodeProxyWithPath'
        );
    }

    /**
     * connect POST requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @return string|mixed
     */
    public function connectPostNodeProxyWithPath(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/nodes/{$name}/proxy/{path}",
        		[
        		]
        	),
        	'connectCoreV1PostNodeProxyWithPath'
        );
    }

    /**
     * connect DELETE requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @return string|mixed
     */
    public function connectDeleteNodeProxyWithPath(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/nodes/{$name}/proxy/{path}",
        		[
        		]
        	),
        	'connectCoreV1DeleteNodeProxyWithPath'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @return string|mixed
     */
    public function connectOptionsNodeProxyWithPath(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/nodes/{$name}/proxy/{path}",
        		[
        		]
        	),
        	'connectCoreV1OptionsNodeProxyWithPath'
        );
    }

    /**
     * connect HEAD requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @return string|mixed
     */
    public function connectHeadNodeProxyWithPath(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/nodes/{$name}/proxy/{path}",
        		[
        		]
        	),
        	'connectCoreV1HeadNodeProxyWithPath'
        );
    }

    /**
     * connect PATCH requests to proxy of Node
     *
     * @param string $name name of the NodeProxyOptions
     * @return string|mixed
     */
    public function connectPatchNodeProxyWithPath(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/nodes/{$name}/proxy/{path}",
        		[
        		]
        	),
        	'connectCoreV1PatchNodeProxyWithPath'
        );
    }
}


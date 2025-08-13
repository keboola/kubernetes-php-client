<?php

namespace Kubernetes\API;

use \KubernetesRuntime\AbstractAPI;

class ServiceProxyOptions extends AbstractAPI
{
    /**
     * connect GET requests to proxy of Service
     *
     * @param string $name name of the ServiceProxyOptions
     * @return string|mixed
     */
    public function connectGetServiceProxy(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{namespace}/services/{$name}/proxy",
        		[
        		]
        	),
        	'connectCoreV1GetNamespacedServiceProxy'
        );
    }

    /**
     * connect PUT requests to proxy of Service
     *
     * @param string $name name of the ServiceProxyOptions
     * @return string|mixed
     */
    public function connectPutServiceProxy(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{namespace}/services/{$name}/proxy",
        		[
        		]
        	),
        	'connectCoreV1PutNamespacedServiceProxy'
        );
    }

    /**
     * connect POST requests to proxy of Service
     *
     * @param string $name name of the ServiceProxyOptions
     * @return string|mixed
     */
    public function connectPostServiceProxy(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{namespace}/services/{$name}/proxy",
        		[
        		]
        	),
        	'connectCoreV1PostNamespacedServiceProxy'
        );
    }

    /**
     * connect DELETE requests to proxy of Service
     *
     * @param string $name name of the ServiceProxyOptions
     * @return string|mixed
     */
    public function connectDeleteServiceProxy(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{namespace}/services/{$name}/proxy",
        		[
        		]
        	),
        	'connectCoreV1DeleteNamespacedServiceProxy'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Service
     *
     * @param string $name name of the ServiceProxyOptions
     * @return string|mixed
     */
    public function connectOptionsServiceProxy(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/namespaces/{namespace}/services/{$name}/proxy",
        		[
        		]
        	),
        	'connectCoreV1OptionsNamespacedServiceProxy'
        );
    }

    /**
     * connect HEAD requests to proxy of Service
     *
     * @param string $name name of the ServiceProxyOptions
     * @return string|mixed
     */
    public function connectHeadServiceProxy(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/namespaces/{namespace}/services/{$name}/proxy",
        		[
        		]
        	),
        	'connectCoreV1HeadNamespacedServiceProxy'
        );
    }

    /**
     * connect PATCH requests to proxy of Service
     *
     * @param string $name name of the ServiceProxyOptions
     * @return string|mixed
     */
    public function connectPatchServiceProxy(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{namespace}/services/{$name}/proxy",
        		[
        		]
        	),
        	'connectCoreV1PatchNamespacedServiceProxy'
        );
    }

    /**
     * connect GET requests to proxy of Service
     *
     * @param string $name name of the ServiceProxyOptions
     * @return string|mixed
     */
    public function connectGetServiceProxyWithPath(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('get',
        		"/api/v1/namespaces/{namespace}/services/{$name}/proxy/{path}",
        		[
        		]
        	),
        	'connectCoreV1GetNamespacedServiceProxyWithPath'
        );
    }

    /**
     * connect PUT requests to proxy of Service
     *
     * @param string $name name of the ServiceProxyOptions
     * @return string|mixed
     */
    public function connectPutServiceProxyWithPath(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('put',
        		"/api/v1/namespaces/{namespace}/services/{$name}/proxy/{path}",
        		[
        		]
        	),
        	'connectCoreV1PutNamespacedServiceProxyWithPath'
        );
    }

    /**
     * connect POST requests to proxy of Service
     *
     * @param string $name name of the ServiceProxyOptions
     * @return string|mixed
     */
    public function connectPostServiceProxyWithPath(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('post',
        		"/api/v1/namespaces/{namespace}/services/{$name}/proxy/{path}",
        		[
        		]
        	),
        	'connectCoreV1PostNamespacedServiceProxyWithPath'
        );
    }

    /**
     * connect DELETE requests to proxy of Service
     *
     * @param string $name name of the ServiceProxyOptions
     * @return string|mixed
     */
    public function connectDeleteServiceProxyWithPath(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('delete',
        		"/api/v1/namespaces/{namespace}/services/{$name}/proxy/{path}",
        		[
        		]
        	),
        	'connectCoreV1DeleteNamespacedServiceProxyWithPath'
        );
    }

    /**
     * connect OPTIONS requests to proxy of Service
     *
     * @param string $name name of the ServiceProxyOptions
     * @return string|mixed
     */
    public function connectOptionsServiceProxyWithPath(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('options',
        		"/api/v1/namespaces/{namespace}/services/{$name}/proxy/{path}",
        		[
        		]
        	),
        	'connectCoreV1OptionsNamespacedServiceProxyWithPath'
        );
    }

    /**
     * connect HEAD requests to proxy of Service
     *
     * @param string $name name of the ServiceProxyOptions
     * @return string|mixed
     */
    public function connectHeadServiceProxyWithPath(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('head',
        		"/api/v1/namespaces/{namespace}/services/{$name}/proxy/{path}",
        		[
        		]
        	),
        	'connectCoreV1HeadNamespacedServiceProxyWithPath'
        );
    }

    /**
     * connect PATCH requests to proxy of Service
     *
     * @param string $name name of the ServiceProxyOptions
     * @return string|mixed
     */
    public function connectPatchServiceProxyWithPath(string $name)
    {
        return $this->parseResponse(
        	$this->client->request('patch',
        		"/api/v1/namespaces/{namespace}/services/{$name}/proxy/{path}",
        		[
        		]
        	),
        	'connectCoreV1PatchNamespacedServiceProxyWithPath'
        );
    }
}


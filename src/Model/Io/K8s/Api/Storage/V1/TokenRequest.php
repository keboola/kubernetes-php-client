<?php

namespace Kubernetes\Model\Io\K8s\Api\Storage\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * TokenRequest contains parameters of a service account token.
 */
class TokenRequest extends AbstractModel
{
    /**
     * audience is the intended audience of the token in "TokenRequestSpec". It will
     * default to the audiences of kube apiserver.
     *
     * @var string
     */
    public $audience = null;

    /**
     * expirationSeconds is the duration of validity of the token in
     * "TokenRequestSpec". It has the same default value of "ExpirationSeconds" in
     * "TokenRequestSpec".
     *
     * @var integer
     */
    public $expirationSeconds = null;
}


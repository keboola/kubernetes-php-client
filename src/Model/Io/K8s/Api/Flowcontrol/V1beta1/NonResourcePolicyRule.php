<?php

namespace Kubernetes\Model\Io\K8s\Api\Flowcontrol\V1beta1;

use \KubernetesRuntime\AbstractModel;

/**
 * NonResourcePolicyRule is a predicate that matches non-resource requests
 * according to their verb and the target non-resource URL. A NonResourcePolicyRule
 * matches a request if and only if both (a) at least one member of verbs matches
 * the request and (b) at least one member of nonResourceURLs matches the request.
 */
class NonResourcePolicyRule extends AbstractModel
{
    /**
     * `nonResourceURLs` is a set of url prefixes that a user should have access to and
     * may not be empty. For example:
     *   - "/healthz" is legal
     *   - "/hea*" is illegal
     *   - "/hea" is legal but matches nothing
     *   - "/hea/*" also matches nothing
     *   - "/healthz/*" matches all per-component health checks.
     * "*" matches all non-resource urls. if it is present, it must be the only entry.
     * Required.
     *
     * @var string[]
     */
    public $nonResourceURLs = null;

    /**
     * `verbs` is a list of matching verbs and may not be empty. "*" matches all verbs.
     * If it is present, it must be the only entry. Required.
     *
     * @var string[]
     */
    public $verbs = null;
}


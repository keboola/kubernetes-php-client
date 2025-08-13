<?php

namespace Kubernetes\Model\Io\K8s\Api\Coordination\V1;

use \KubernetesRuntime\AbstractModel;

/**
 * LeaseSpec is a specification of a Lease.
 */
class LeaseSpec extends AbstractModel
{
    /**
     * acquireTime is a time when the current lease was acquired.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\MicroTime
     */
    public $acquireTime = null;

    /**
     * holderIdentity contains the identity of the holder of a current lease. If
     * Coordinated Leader Election is used, the holder identity must be equal to the
     * elected LeaseCandidate.metadata.name field.
     *
     * @var string
     */
    public $holderIdentity = null;

    /**
     * leaseDurationSeconds is a duration that candidates for a lease need to wait to
     * force acquire it. This is measured against the time of last observed renewTime.
     *
     * @var integer
     */
    public $leaseDurationSeconds = null;

    /**
     * leaseTransitions is the number of transitions of a lease between holders.
     *
     * @var integer
     */
    public $leaseTransitions = null;

    /**
     * PreferredHolder signals to a lease holder that the lease has a more optimal
     * holder and should be given up. This field can only be set if Strategy is also
     * set.
     *
     * @var string
     */
    public $preferredHolder = null;

    /**
     * renewTime is a time when the current holder of a lease has last updated the
     * lease.
     *
     * @var \Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Apis\Meta\V1\MicroTime
     */
    public $renewTime = null;

    /**
     * Strategy indicates the strategy for picking the leader for coordinated leader
     * election. If the field is not specified, there is no active coordination for
     * this lease. (Alpha) Using this field requires the CoordinatedLeaderElection
     * feature gate to be enabled.
     *
     * @var string
     */
    public $strategy = null;
}


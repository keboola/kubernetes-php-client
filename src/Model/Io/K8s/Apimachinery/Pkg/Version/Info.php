<?php

namespace Kubernetes\Model\Io\K8s\Apimachinery\Pkg\Version;

use \KubernetesRuntime\AbstractModel;

/**
 * Info contains versioning information. how we'll want to distribute that
 * information.
 */
class Info extends AbstractModel
{
    /**
     * @var string
     */
    public $buildDate = null;

    /**
     * @var string
     */
    public $compiler = null;

    /**
     * EmulationMajor is the major version of the emulation version
     *
     * @var string
     */
    public $emulationMajor = null;

    /**
     * EmulationMinor is the minor version of the emulation version
     *
     * @var string
     */
    public $emulationMinor = null;

    /**
     * @var string
     */
    public $gitCommit = null;

    /**
     * @var string
     */
    public $gitTreeState = null;

    /**
     * @var string
     */
    public $gitVersion = null;

    /**
     * @var string
     */
    public $goVersion = null;

    /**
     * Major is the major version of the binary version
     *
     * @var string
     */
    public $major = null;

    /**
     * MinCompatibilityMajor is the major version of the minimum compatibility version
     *
     * @var string
     */
    public $minCompatibilityMajor = null;

    /**
     * MinCompatibilityMinor is the minor version of the minimum compatibility version
     *
     * @var string
     */
    public $minCompatibilityMinor = null;

    /**
     * Minor is the minor version of the binary version
     *
     * @var string
     */
    public $minor = null;

    /**
     * @var string
     */
    public $platform = null;
}


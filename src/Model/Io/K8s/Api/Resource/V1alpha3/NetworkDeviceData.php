<?php

namespace Kubernetes\Model\Io\K8s\Api\Resource\V1alpha3;

use \KubernetesRuntime\AbstractModel;

/**
 * NetworkDeviceData provides network-related details for the allocated device.
 * This information may be filled by drivers or other components to configure or
 * identify the device within a network context.
 */
class NetworkDeviceData extends AbstractModel
{
    /**
     * HardwareAddress represents the hardware address (e.g. MAC Address) of the
     * device's network interface.
     *
     * Must not be longer than 128 characters.
     *
     * @var string
     */
    public $hardwareAddress = null;

    /**
     * InterfaceName specifies the name of the network interface associated with the
     * allocated device. This might be the name of a physical or virtual network
     * interface being configured in the pod.
     *
     * Must not be longer than 256 characters.
     *
     * @var string
     */
    public $interfaceName = null;

    /**
     * IPs lists the network addresses assigned to the device's network interface. This
     * can include both IPv4 and IPv6 addresses. The IPs are in the CIDR notation,
     * which includes both the address and the associated subnet mask. e.g.:
     * "192.0.2.5/24" for IPv4 and "2001:db8::5/64" for IPv6.
     *
     * Must not contain more than 16 entries.
     *
     * @var string[]
     */
    public $ips = null;
}


<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Used to report the status of a piece of a multiple piece shipment which is no longer traveling with the rest of the packages in the shipment or has not been accounted for.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TrackReconciliation
    extends AbstractComplexType
{
    protected $_name = 'TrackReconciliation';

    /**
     * An identifier for this type of status.
     *
     * @param string $Status
     * return TrackReconciliation
     */
    public function setStatus($status)
    {
        $this->Status = $status;
        return $this;
    }
    
    /**
     * A human-readable description of this status.
     *
     * @param string $Description
     * return TrackReconciliation
     */
    public function setDescription($description)
    {
        $this->Description = $description;
        return $this;
    }
    

    
}
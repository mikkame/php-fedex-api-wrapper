<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data that governs data payload language/translations.  The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Package Movement Information Service
 */
class TransactionDetail
    extends AbstractComplexType
{
    protected $_name = 'TransactionDetail';

    /**
     * Free form text to be echoed back in the reply. Used to match requests and replies.
     *
     * @param string $CustomerTransactionId
     * return TransactionDetail
     */
    public function setCustomerTransactionId($customerTransactionId)
    {
        $this->CustomerTransactionId = $customerTransactionId;
        return $this;
    }
    
    /**
     * Governs data payload language/translations (contrasted with ClientDetail.localization, which governs Notification.localizedMessage language selection).
     *
     * @param Localization $Localization
     * return TransactionDetail
     */
    public function setLocalization(Localization $localization)
    {
        $this->Localization = $localization;
        return $this;
    }
    

    
}
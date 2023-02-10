<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Device action result
*/
class DeviceActionResult implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new deviceActionResult and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceActionResult {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deleteUserFromSharedAppleDeviceActionResult': return new DeleteUserFromSharedAppleDeviceActionResult();
                case '#microsoft.graph.locateDeviceActionResult': return new LocateDeviceActionResult();
                case '#microsoft.graph.remoteLockActionResult': return new RemoteLockActionResult();
                case '#microsoft.graph.resetPasscodeActionResult': return new ResetPasscodeActionResult();
                case '#microsoft.graph.windowsDefenderScanActionResult': return new WindowsDefenderScanActionResult();
            }
        }
        return new DeviceActionResult();
    }

    /**
     * Gets the actionName property value. Action name
     * @return string|null
    */
    public function getActionName(): ?string {
        return $this->getBackingStore()->get('actionName');
    }

    /**
     * Gets the actionState property value. State of the action on the device
     * @return ActionState|null
    */
    public function getActionState(): ?ActionState {
        return $this->getBackingStore()->get('actionState');
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionName' => fn(ParseNode $n) => $o->setActionName($n->getStringValue()),
            'actionState' => fn(ParseNode $n) => $o->setActionState($n->getEnumValue(ActionState::class)),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the lastUpdatedDateTime property value. Time the action state was last updated
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastUpdatedDateTime');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the startDateTime property value. Time the action was initiated
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actionName', $this->getActionName());
        $writer->writeEnumValue('actionState', $this->getActionState());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionName property value. Action name
     * @param string|null $value Value to set for the actionName property.
    */
    public function setActionName(?string $value): void {
        $this->getBackingStore()->set('actionName', $value);
    }

    /**
     * Sets the actionState property value. State of the action on the device
     * @param ActionState|null $value Value to set for the actionState property.
    */
    public function setActionState(?ActionState $value): void {
        $this->getBackingStore()->set('actionState', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the lastUpdatedDateTime property value. Time the action state was last updated
     * @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the startDateTime property value. Time the action was initiated
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

}

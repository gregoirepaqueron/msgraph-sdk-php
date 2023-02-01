<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Represents diagnostics status.
*/
class ManagedAppDiagnosticStatus implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new managedAppDiagnosticStatus and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedAppDiagnosticStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedAppDiagnosticStatus {
        return new ManagedAppDiagnosticStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
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
            'mitigationInstruction' => fn(ParseNode $n) => $o->setMitigationInstruction($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
            'validationName' => fn(ParseNode $n) => $o->setValidationName($n->getStringValue()),
        ];
    }

    /**
     * Gets the mitigationInstruction property value. Instruction on how to mitigate a failed validation
     * @return string|null
    */
    public function getMitigationInstruction(): ?string {
        return $this->getBackingStore()->get('mitigationInstruction');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the state property value. The state of the operation
     * @return string|null
    */
    public function getState(): ?string {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Gets the validationName property value. The validation friendly name
     * @return string|null
    */
    public function getValidationName(): ?string {
        return $this->getBackingStore()->get('validationName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('mitigationInstruction', $this->getMitigationInstruction());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('state', $this->getState());
        $writer->writeStringValue('validationName', $this->getValidationName());
        $writer->writeAdditionalData($this->getAdditionalData());
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
     * Sets the mitigationInstruction property value. Instruction on how to mitigate a failed validation
     * @param string|null $value Value to set for the mitigationInstruction property.
    */
    public function setMitigationInstruction(?string $value): void {
        $this->getBackingStore()->set('mitigationInstruction', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the state property value. The state of the operation
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the validationName property value. The validation friendly name
     * @param string|null $value Value to set for the validationName property.
    */
    public function setValidationName(?string $value): void {
        $this->getBackingStore()->set('validationName', $value);
    }

}
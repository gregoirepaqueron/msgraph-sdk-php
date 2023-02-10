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
 * Color in RGB.
*/
class RgbColor implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new rgbColor and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RgbColor
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RgbColor {
        return new RgbColor();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the b property value. Blue value
     * @return string|null
    */
    public function getB(): ?string {
        return $this->getBackingStore()->get('b');
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
            'b' => fn(ParseNode $n) => $o->setB($n->getStringValue()),
            'g' => fn(ParseNode $n) => $o->setG($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'r' => fn(ParseNode $n) => $o->setR($n->getStringValue()),
        ];
    }

    /**
     * Gets the g property value. Green value
     * @return string|null
    */
    public function getG(): ?string {
        return $this->getBackingStore()->get('g');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the r property value. Red value
     * @return string|null
    */
    public function getR(): ?string {
        return $this->getBackingStore()->get('r');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('b', $this->getB());
        $writer->writeStringValue('g', $this->getG());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('r', $this->getR());
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
     * Sets the b property value. Blue value
     * @param string|null $value Value to set for the b property.
    */
    public function setB(?string $value): void {
        $this->getBackingStore()->set('b', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the g property value. Green value
     * @param string|null $value Value to set for the g property.
    */
    public function setG(?string $value): void {
        $this->getBackingStore()->set('g', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the r property value. Red value
     * @param string|null $value Value to set for the r property.
    */
    public function setR(?string $value): void {
        $this->getBackingStore()->set('r', $value);
    }

}

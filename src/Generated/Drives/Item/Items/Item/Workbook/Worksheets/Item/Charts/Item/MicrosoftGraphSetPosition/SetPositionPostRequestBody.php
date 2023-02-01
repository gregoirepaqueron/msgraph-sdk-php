<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Worksheets\Item\Charts\Item\MicrosoftGraphSetPosition;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SetPositionPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new setPositionPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SetPositionPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SetPositionPostRequestBody {
        return new SetPositionPostRequestBody();
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
     * Gets the endCell property value. 
     * @return Json|null
    */
    public function getEndCell(): ?Json {
        return $this->getBackingStore()->get('endCell');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'endCell' => fn(ParseNode $n) => $o->setEndCell($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'startCell' => fn(ParseNode $n) => $o->setStartCell($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the startCell property value. 
     * @return Json|null
    */
    public function getStartCell(): ?Json {
        return $this->getBackingStore()->get('startCell');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('endCell', $this->getEndCell());
        $writer->writeObjectValue('startCell', $this->getStartCell());
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
     * Sets the endCell property value. 
     * @param Json|null $value Value to set for the endCell property.
    */
    public function setEndCell(?Json $value): void {
        $this->getBackingStore()->set('endCell', $value);
    }

    /**
     * Sets the startCell property value. 
     * @param Json|null $value Value to set for the startCell property.
    */
    public function setStartCell(?Json $value): void {
        $this->getBackingStore()->set('startCell', $value);
    }

}
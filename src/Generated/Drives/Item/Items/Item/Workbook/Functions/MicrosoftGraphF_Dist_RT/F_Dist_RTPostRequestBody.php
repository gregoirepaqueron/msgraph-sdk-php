<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphF_Dist_RT;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class F_Dist_RTPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new f_Dist_RTPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return F_Dist_RTPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): F_Dist_RTPostRequestBody {
        return new F_Dist_RTPostRequestBody();
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
     * Gets the degFreedom1 property value. 
     * @return Json|null
    */
    public function getDegFreedom1(): ?Json {
        return $this->getBackingStore()->get('degFreedom1');
    }

    /**
     * Gets the degFreedom2 property value. 
     * @return Json|null
    */
    public function getDegFreedom2(): ?Json {
        return $this->getBackingStore()->get('degFreedom2');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'degFreedom1' => fn(ParseNode $n) => $o->setDegFreedom1($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'degFreedom2' => fn(ParseNode $n) => $o->setDegFreedom2($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'x' => fn(ParseNode $n) => $o->setX($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the x property value. 
     * @return Json|null
    */
    public function getX(): ?Json {
        return $this->getBackingStore()->get('x');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('degFreedom1', $this->getDegFreedom1());
        $writer->writeObjectValue('degFreedom2', $this->getDegFreedom2());
        $writer->writeObjectValue('x', $this->getX());
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
     * Sets the degFreedom1 property value. 
     * @param Json|null $value Value to set for the degFreedom1 property.
    */
    public function setDegFreedom1(?Json $value): void {
        $this->getBackingStore()->set('degFreedom1', $value);
    }

    /**
     * Sets the degFreedom2 property value. 
     * @param Json|null $value Value to set for the degFreedom2 property.
    */
    public function setDegFreedom2(?Json $value): void {
        $this->getBackingStore()->set('degFreedom2', $value);
    }

    /**
     * Sets the x property value. 
     * @param Json|null $value Value to set for the x property.
    */
    public function setX(?Json $value): void {
        $this->getBackingStore()->set('x', $value);
    }

}
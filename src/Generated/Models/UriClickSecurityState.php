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

class UriClickSecurityState implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new uriClickSecurityState and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UriClickSecurityState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UriClickSecurityState {
        return new UriClickSecurityState();
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
     * Gets the clickAction property value. 
     * @return string|null
    */
    public function getClickAction(): ?string {
        return $this->getBackingStore()->get('clickAction');
    }

    /**
     * Gets the clickDateTime property value. 
     * @return DateTime|null
    */
    public function getClickDateTime(): ?DateTime {
        return $this->getBackingStore()->get('clickDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'clickAction' => fn(ParseNode $n) => $o->setClickAction($n->getStringValue()),
            'clickDateTime' => fn(ParseNode $n) => $o->setClickDateTime($n->getDateTimeValue()),
            'id' => fn(ParseNode $n) => $o->setId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sourceId' => fn(ParseNode $n) => $o->setSourceId($n->getStringValue()),
            'uriDomain' => fn(ParseNode $n) => $o->setUriDomain($n->getStringValue()),
            'verdict' => fn(ParseNode $n) => $o->setVerdict($n->getStringValue()),
        ];
    }

    /**
     * Gets the id property value. 
     * @return string|null
    */
    public function getId(): ?string {
        return $this->getBackingStore()->get('id');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the sourceId property value. 
     * @return string|null
    */
    public function getSourceId(): ?string {
        return $this->getBackingStore()->get('sourceId');
    }

    /**
     * Gets the uriDomain property value. 
     * @return string|null
    */
    public function getUriDomain(): ?string {
        return $this->getBackingStore()->get('uriDomain');
    }

    /**
     * Gets the verdict property value. 
     * @return string|null
    */
    public function getVerdict(): ?string {
        return $this->getBackingStore()->get('verdict');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('clickAction', $this->getClickAction());
        $writer->writeDateTimeValue('clickDateTime', $this->getClickDateTime());
        $writer->writeStringValue('id', $this->getId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('sourceId', $this->getSourceId());
        $writer->writeStringValue('uriDomain', $this->getUriDomain());
        $writer->writeStringValue('verdict', $this->getVerdict());
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
     * Sets the clickAction property value. 
     * @param string|null $value Value to set for the clickAction property.
    */
    public function setClickAction(?string $value): void {
        $this->getBackingStore()->set('clickAction', $value);
    }

    /**
     * Sets the clickDateTime property value. 
     * @param DateTime|null $value Value to set for the clickDateTime property.
    */
    public function setClickDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('clickDateTime', $value);
    }

    /**
     * Sets the id property value. 
     * @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value): void {
        $this->getBackingStore()->set('id', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sourceId property value. 
     * @param string|null $value Value to set for the sourceId property.
    */
    public function setSourceId(?string $value): void {
        $this->getBackingStore()->set('sourceId', $value);
    }

    /**
     * Sets the uriDomain property value. 
     * @param string|null $value Value to set for the uriDomain property.
    */
    public function setUriDomain(?string $value): void {
        $this->getBackingStore()->set('uriDomain', $value);
    }

    /**
     * Sets the verdict property value. 
     * @param string|null $value Value to set for the verdict property.
    */
    public function setVerdict(?string $value): void {
        $this->getBackingStore()->set('verdict', $value);
    }

}
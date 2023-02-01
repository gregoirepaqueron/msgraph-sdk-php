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
use Psr\Http\Message\StreamInterface;

class SelfSignedCertificate implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SelfSignedCertificate and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SelfSignedCertificate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SelfSignedCertificate {
        return new SelfSignedCertificate();
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
     * Gets the customKeyIdentifier property value. 
     * @return StreamInterface|null
    */
    public function getCustomKeyIdentifier(): ?StreamInterface {
        return $this->getBackingStore()->get('customKeyIdentifier');
    }

    /**
     * Gets the displayName property value. 
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the endDateTime property value. 
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->getBackingStore()->get('endDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'customKeyIdentifier' => fn(ParseNode $n) => $o->setCustomKeyIdentifier($n->getBinaryContent()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'key' => fn(ParseNode $n) => $o->setKey($n->getBinaryContent()),
            'keyId' => fn(ParseNode $n) => $o->setKeyId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'thumbprint' => fn(ParseNode $n) => $o->setThumbprint($n->getStringValue()),
            'type' => fn(ParseNode $n) => $o->setType($n->getStringValue()),
            'usage' => fn(ParseNode $n) => $o->setUsage($n->getStringValue()),
        ];
    }

    /**
     * Gets the key property value. 
     * @return StreamInterface|null
    */
    public function getKey(): ?StreamInterface {
        return $this->getBackingStore()->get('key');
    }

    /**
     * Gets the keyId property value. 
     * @return string|null
    */
    public function getKeyId(): ?string {
        return $this->getBackingStore()->get('keyId');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the startDateTime property value. 
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Gets the thumbprint property value. 
     * @return string|null
    */
    public function getThumbprint(): ?string {
        return $this->getBackingStore()->get('thumbprint');
    }

    /**
     * Gets the type property value. 
     * @return string|null
    */
    public function getType(): ?string {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Gets the usage property value. 
     * @return string|null
    */
    public function getUsage(): ?string {
        return $this->getBackingStore()->get('usage');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('customKeyIdentifier', $this->getCustomKeyIdentifier());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeBinaryContent('key', $this->getKey());
        $writer->writeStringValue('keyId', $this->getKeyId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeStringValue('thumbprint', $this->getThumbprint());
        $writer->writeStringValue('type', $this->getType());
        $writer->writeStringValue('usage', $this->getUsage());
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
     * Sets the customKeyIdentifier property value. 
     * @param StreamInterface|null $value Value to set for the customKeyIdentifier property.
    */
    public function setCustomKeyIdentifier(?StreamInterface $value): void {
        $this->getBackingStore()->set('customKeyIdentifier', $value);
    }

    /**
     * Sets the displayName property value. 
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the endDateTime property value. 
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the key property value. 
     * @param StreamInterface|null $value Value to set for the key property.
    */
    public function setKey(?StreamInterface $value): void {
        $this->getBackingStore()->set('key', $value);
    }

    /**
     * Sets the keyId property value. 
     * @param string|null $value Value to set for the keyId property.
    */
    public function setKeyId(?string $value): void {
        $this->getBackingStore()->set('keyId', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the startDateTime property value. 
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the thumbprint property value. 
     * @param string|null $value Value to set for the thumbprint property.
    */
    public function setThumbprint(?string $value): void {
        $this->getBackingStore()->set('thumbprint', $value);
    }

    /**
     * Sets the type property value. 
     * @param string|null $value Value to set for the type property.
    */
    public function setType(?string $value): void {
        $this->getBackingStore()->set('type', $value);
    }

    /**
     * Sets the usage property value. 
     * @param string|null $value Value to set for the usage property.
    */
    public function setUsage(?string $value): void {
        $this->getBackingStore()->set('usage', $value);
    }

}
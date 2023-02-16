<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ChangeNotificationEncryptedContent implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new changeNotificationEncryptedContent and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChangeNotificationEncryptedContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChangeNotificationEncryptedContent {
        return new ChangeNotificationEncryptedContent();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
     * Gets the data property value. Base64-encoded encrypted data that produces a full resource respresented as JSON. The data has been encrypted with the provided dataKey using an AES/CBC/PKCS5PADDING cipher suite.
     * @return string|null
    */
    public function getData(): ?string {
        return $this->getBackingStore()->get('data');
    }

    /**
     * Gets the dataKey property value. Base64-encoded symmetric key generated by Microsoft Graph to encrypt the data value and to generate the data signature. This key is encrypted with the certificate public key that was provided during the subscription. It must be decrypted with the certificate private key before it can be used to decrypt the data or verify the signature. This key has been encrypted with the following cipher suite: RSA/ECB/OAEPWithSHA1AndMGF1Padding.
     * @return string|null
    */
    public function getDataKey(): ?string {
        return $this->getBackingStore()->get('dataKey');
    }

    /**
     * Gets the dataSignature property value. Base64-encoded HMAC-SHA256 hash of the data for validation purposes.
     * @return string|null
    */
    public function getDataSignature(): ?string {
        return $this->getBackingStore()->get('dataSignature');
    }

    /**
     * Gets the encryptionCertificateId property value. ID of the certificate used to encrypt the dataKey.
     * @return string|null
    */
    public function getEncryptionCertificateId(): ?string {
        return $this->getBackingStore()->get('encryptionCertificateId');
    }

    /**
     * Gets the encryptionCertificateThumbprint property value. Hexadecimal representation of the thumbprint of the certificate used to encrypt the dataKey.
     * @return string|null
    */
    public function getEncryptionCertificateThumbprint(): ?string {
        return $this->getBackingStore()->get('encryptionCertificateThumbprint');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'data' => fn(ParseNode $n) => $o->setData($n->getStringValue()),
            'dataKey' => fn(ParseNode $n) => $o->setDataKey($n->getStringValue()),
            'dataSignature' => fn(ParseNode $n) => $o->setDataSignature($n->getStringValue()),
            'encryptionCertificateId' => fn(ParseNode $n) => $o->setEncryptionCertificateId($n->getStringValue()),
            'encryptionCertificateThumbprint' => fn(ParseNode $n) => $o->setEncryptionCertificateThumbprint($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('data', $this->getData());
        $writer->writeStringValue('dataKey', $this->getDataKey());
        $writer->writeStringValue('dataSignature', $this->getDataSignature());
        $writer->writeStringValue('encryptionCertificateId', $this->getEncryptionCertificateId());
        $writer->writeStringValue('encryptionCertificateThumbprint', $this->getEncryptionCertificateThumbprint());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the data property value. Base64-encoded encrypted data that produces a full resource respresented as JSON. The data has been encrypted with the provided dataKey using an AES/CBC/PKCS5PADDING cipher suite.
     * @param string|null $value Value to set for the data property.
    */
    public function setData(?string $value): void {
        $this->getBackingStore()->set('data', $value);
    }

    /**
     * Sets the dataKey property value. Base64-encoded symmetric key generated by Microsoft Graph to encrypt the data value and to generate the data signature. This key is encrypted with the certificate public key that was provided during the subscription. It must be decrypted with the certificate private key before it can be used to decrypt the data or verify the signature. This key has been encrypted with the following cipher suite: RSA/ECB/OAEPWithSHA1AndMGF1Padding.
     * @param string|null $value Value to set for the dataKey property.
    */
    public function setDataKey(?string $value): void {
        $this->getBackingStore()->set('dataKey', $value);
    }

    /**
     * Sets the dataSignature property value. Base64-encoded HMAC-SHA256 hash of the data for validation purposes.
     * @param string|null $value Value to set for the dataSignature property.
    */
    public function setDataSignature(?string $value): void {
        $this->getBackingStore()->set('dataSignature', $value);
    }

    /**
     * Sets the encryptionCertificateId property value. ID of the certificate used to encrypt the dataKey.
     * @param string|null $value Value to set for the encryptionCertificateId property.
    */
    public function setEncryptionCertificateId(?string $value): void {
        $this->getBackingStore()->set('encryptionCertificateId', $value);
    }

    /**
     * Sets the encryptionCertificateThumbprint property value. Hexadecimal representation of the thumbprint of the certificate used to encrypt the dataKey.
     * @param string|null $value Value to set for the encryptionCertificateThumbprint property.
    */
    public function setEncryptionCertificateThumbprint(?string $value): void {
        $this->getBackingStore()->set('encryptionCertificateThumbprint', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}

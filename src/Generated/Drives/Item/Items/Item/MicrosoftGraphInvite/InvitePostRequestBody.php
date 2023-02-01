<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\MicrosoftGraphInvite;

use Microsoft\Graph\Generated\Models\DriveRecipient;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class InvitePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new invitePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvitePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvitePostRequestBody {
        return new InvitePostRequestBody();
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
     * Gets the expirationDateTime property value. 
     * @return string|null
    */
    public function getExpirationDateTime(): ?string {
        return $this->getBackingStore()->get('expirationDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getStringValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'password' => fn(ParseNode $n) => $o->setPassword($n->getStringValue()),
            'recipients' => fn(ParseNode $n) => $o->setRecipients($n->getCollectionOfObjectValues([DriveRecipient::class, 'createFromDiscriminatorValue'])),
            'requireSignIn' => fn(ParseNode $n) => $o->setRequireSignIn($n->getBooleanValue()),
            'retainInheritedPermissions' => fn(ParseNode $n) => $o->setRetainInheritedPermissions($n->getBooleanValue()),
            'roles' => fn(ParseNode $n) => $o->setRoles($n->getCollectionOfPrimitiveValues()),
            'sendInvitation' => fn(ParseNode $n) => $o->setSendInvitation($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the message property value. 
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->getBackingStore()->get('message');
    }

    /**
     * Gets the password property value. 
     * @return string|null
    */
    public function getPassword(): ?string {
        return $this->getBackingStore()->get('password');
    }

    /**
     * Gets the recipients property value. 
     * @return array<DriveRecipient>|null
    */
    public function getRecipients(): ?array {
        return $this->getBackingStore()->get('recipients');
    }

    /**
     * Gets the requireSignIn property value. 
     * @return bool|null
    */
    public function getRequireSignIn(): ?bool {
        return $this->getBackingStore()->get('requireSignIn');
    }

    /**
     * Gets the retainInheritedPermissions property value. 
     * @return bool|null
    */
    public function getRetainInheritedPermissions(): ?bool {
        return $this->getBackingStore()->get('retainInheritedPermissions');
    }

    /**
     * Gets the roles property value. 
     * @return array<string>|null
    */
    public function getRoles(): ?array {
        return $this->getBackingStore()->get('roles');
    }

    /**
     * Gets the sendInvitation property value. 
     * @return bool|null
    */
    public function getSendInvitation(): ?bool {
        return $this->getBackingStore()->get('sendInvitation');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('password', $this->getPassword());
        $writer->writeCollectionOfObjectValues('recipients', $this->getRecipients());
        $writer->writeBooleanValue('requireSignIn', $this->getRequireSignIn());
        $writer->writeBooleanValue('retainInheritedPermissions', $this->getRetainInheritedPermissions());
        $writer->writeCollectionOfPrimitiveValues('roles', $this->getRoles());
        $writer->writeBooleanValue('sendInvitation', $this->getSendInvitation());
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
     * Sets the expirationDateTime property value. 
     * @param string|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?string $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the message property value. 
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->getBackingStore()->set('message', $value);
    }

    /**
     * Sets the password property value. 
     * @param string|null $value Value to set for the password property.
    */
    public function setPassword(?string $value): void {
        $this->getBackingStore()->set('password', $value);
    }

    /**
     * Sets the recipients property value. 
     * @param array<DriveRecipient>|null $value Value to set for the recipients property.
    */
    public function setRecipients(?array $value): void {
        $this->getBackingStore()->set('recipients', $value);
    }

    /**
     * Sets the requireSignIn property value. 
     * @param bool|null $value Value to set for the requireSignIn property.
    */
    public function setRequireSignIn(?bool $value): void {
        $this->getBackingStore()->set('requireSignIn', $value);
    }

    /**
     * Sets the retainInheritedPermissions property value. 
     * @param bool|null $value Value to set for the retainInheritedPermissions property.
    */
    public function setRetainInheritedPermissions(?bool $value): void {
        $this->getBackingStore()->set('retainInheritedPermissions', $value);
    }

    /**
     * Sets the roles property value. 
     * @param array<string>|null $value Value to set for the roles property.
    */
    public function setRoles(?array $value): void {
        $this->getBackingStore()->set('roles', $value);
    }

    /**
     * Sets the sendInvitation property value. 
     * @param bool|null $value Value to set for the sendInvitation property.
    */
    public function setSendInvitation(?bool $value): void {
        $this->getBackingStore()->set('sendInvitation', $value);
    }

}
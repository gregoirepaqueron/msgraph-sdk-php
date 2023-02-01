<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UserTrainingEventInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new userTrainingEventInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserTrainingEventInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserTrainingEventInfo {
        return new UserTrainingEventInfo();
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
     * Gets the displayName property value. Display name of the training.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'latestTrainingStatus' => fn(ParseNode $n) => $o->setLatestTrainingStatus($n->getEnumValue(TrainingStatus::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'trainingAssignedProperties' => fn(ParseNode $n) => $o->setTrainingAssignedProperties($n->getObjectValue([UserTrainingContentEventInfo::class, 'createFromDiscriminatorValue'])),
            'trainingCompletedProperties' => fn(ParseNode $n) => $o->setTrainingCompletedProperties($n->getObjectValue([UserTrainingContentEventInfo::class, 'createFromDiscriminatorValue'])),
            'trainingUpdatedProperties' => fn(ParseNode $n) => $o->setTrainingUpdatedProperties($n->getObjectValue([UserTrainingContentEventInfo::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the latestTrainingStatus property value. Latest status of the training assigned to the user. Possible values are: unknown, assigned, inProgress, completed, overdue, unknownFutureValue.
     * @return TrainingStatus|null
    */
    public function getLatestTrainingStatus(): ?TrainingStatus {
        return $this->getBackingStore()->get('latestTrainingStatus');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the trainingAssignedProperties property value. Event details of the training when it was assigned to the user.
     * @return UserTrainingContentEventInfo|null
    */
    public function getTrainingAssignedProperties(): ?UserTrainingContentEventInfo {
        return $this->getBackingStore()->get('trainingAssignedProperties');
    }

    /**
     * Gets the trainingCompletedProperties property value. Event details of the training when it was completed by the user.
     * @return UserTrainingContentEventInfo|null
    */
    public function getTrainingCompletedProperties(): ?UserTrainingContentEventInfo {
        return $this->getBackingStore()->get('trainingCompletedProperties');
    }

    /**
     * Gets the trainingUpdatedProperties property value. Event details of the training when it was updated/in-progress by the user.
     * @return UserTrainingContentEventInfo|null
    */
    public function getTrainingUpdatedProperties(): ?UserTrainingContentEventInfo {
        return $this->getBackingStore()->get('trainingUpdatedProperties');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('latestTrainingStatus', $this->getLatestTrainingStatus());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('trainingAssignedProperties', $this->getTrainingAssignedProperties());
        $writer->writeObjectValue('trainingCompletedProperties', $this->getTrainingCompletedProperties());
        $writer->writeObjectValue('trainingUpdatedProperties', $this->getTrainingUpdatedProperties());
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
     * Sets the displayName property value. Display name of the training.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the latestTrainingStatus property value. Latest status of the training assigned to the user. Possible values are: unknown, assigned, inProgress, completed, overdue, unknownFutureValue.
     * @param TrainingStatus|null $value Value to set for the latestTrainingStatus property.
    */
    public function setLatestTrainingStatus(?TrainingStatus $value): void {
        $this->getBackingStore()->set('latestTrainingStatus', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the trainingAssignedProperties property value. Event details of the training when it was assigned to the user.
     * @param UserTrainingContentEventInfo|null $value Value to set for the trainingAssignedProperties property.
    */
    public function setTrainingAssignedProperties(?UserTrainingContentEventInfo $value): void {
        $this->getBackingStore()->set('trainingAssignedProperties', $value);
    }

    /**
     * Sets the trainingCompletedProperties property value. Event details of the training when it was completed by the user.
     * @param UserTrainingContentEventInfo|null $value Value to set for the trainingCompletedProperties property.
    */
    public function setTrainingCompletedProperties(?UserTrainingContentEventInfo $value): void {
        $this->getBackingStore()->set('trainingCompletedProperties', $value);
    }

    /**
     * Sets the trainingUpdatedProperties property value. Event details of the training when it was updated/in-progress by the user.
     * @param UserTrainingContentEventInfo|null $value Value to set for the trainingUpdatedProperties property.
    */
    public function setTrainingUpdatedProperties(?UserTrainingContentEventInfo $value): void {
        $this->getBackingStore()->set('trainingUpdatedProperties', $value);
    }

}
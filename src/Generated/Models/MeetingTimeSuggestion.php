<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MeetingTimeSuggestion implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new meetingTimeSuggestion and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MeetingTimeSuggestion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MeetingTimeSuggestion {
        return new MeetingTimeSuggestion();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the attendeeAvailability property value. An array that shows the availability status of each attendee for this meeting suggestion.
     * @return array<AttendeeAvailability>|null
    */
    public function getAttendeeAvailability(): ?array {
        return $this->getBackingStore()->get('attendeeAvailability');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the confidence property value. A percentage that represents the likelhood of all the attendees attending.
     * @return float|null
    */
    public function getConfidence(): ?float {
        return $this->getBackingStore()->get('confidence');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attendeeAvailability' => fn(ParseNode $n) => $o->setAttendeeAvailability($n->getCollectionOfObjectValues([AttendeeAvailability::class, 'createFromDiscriminatorValue'])),
            'confidence' => fn(ParseNode $n) => $o->setConfidence($n->getFloatValue()),
            'locations' => fn(ParseNode $n) => $o->setLocations($n->getCollectionOfObjectValues([Location::class, 'createFromDiscriminatorValue'])),
            'meetingTimeSlot' => fn(ParseNode $n) => $o->setMeetingTimeSlot($n->getObjectValue([TimeSlot::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'order' => fn(ParseNode $n) => $o->setOrder($n->getIntegerValue()),
            'organizerAvailability' => fn(ParseNode $n) => $o->setOrganizerAvailability($n->getEnumValue(FreeBusyStatus::class)),
            'suggestionReason' => fn(ParseNode $n) => $o->setSuggestionReason($n->getStringValue()),
        ];
    }

    /**
     * Gets the locations property value. An array that specifies the name and geographic location of each meeting location for this meeting suggestion.
     * @return array<Location>|null
    */
    public function getLocations(): ?array {
        return $this->getBackingStore()->get('locations');
    }

    /**
     * Gets the meetingTimeSlot property value. A time period suggested for the meeting.
     * @return TimeSlot|null
    */
    public function getMeetingTimeSlot(): ?TimeSlot {
        return $this->getBackingStore()->get('meetingTimeSlot');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the order property value. Order of meeting time suggestions sorted by their computed confidence value from high to low, then by chronology if there are suggestions with the same confidence.
     * @return int|null
    */
    public function getOrder(): ?int {
        return $this->getBackingStore()->get('order');
    }

    /**
     * Gets the organizerAvailability property value. Availability of the meeting organizer for this meeting suggestion. The possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
     * @return FreeBusyStatus|null
    */
    public function getOrganizerAvailability(): ?FreeBusyStatus {
        return $this->getBackingStore()->get('organizerAvailability');
    }

    /**
     * Gets the suggestionReason property value. Reason for suggesting the meeting time.
     * @return string|null
    */
    public function getSuggestionReason(): ?string {
        return $this->getBackingStore()->get('suggestionReason');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('attendeeAvailability', $this->getAttendeeAvailability());
        $writer->writeFloatValue('confidence', $this->getConfidence());
        $writer->writeCollectionOfObjectValues('locations', $this->getLocations());
        $writer->writeObjectValue('meetingTimeSlot', $this->getMeetingTimeSlot());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('order', $this->getOrder());
        $writer->writeEnumValue('organizerAvailability', $this->getOrganizerAvailability());
        $writer->writeStringValue('suggestionReason', $this->getSuggestionReason());
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
     * Sets the attendeeAvailability property value. An array that shows the availability status of each attendee for this meeting suggestion.
     * @param array<AttendeeAvailability>|null $value Value to set for the attendeeAvailability property.
    */
    public function setAttendeeAvailability(?array $value): void {
        $this->getBackingStore()->set('attendeeAvailability', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the confidence property value. A percentage that represents the likelhood of all the attendees attending.
     * @param float|null $value Value to set for the confidence property.
    */
    public function setConfidence(?float $value): void {
        $this->getBackingStore()->set('confidence', $value);
    }

    /**
     * Sets the locations property value. An array that specifies the name and geographic location of each meeting location for this meeting suggestion.
     * @param array<Location>|null $value Value to set for the locations property.
    */
    public function setLocations(?array $value): void {
        $this->getBackingStore()->set('locations', $value);
    }

    /**
     * Sets the meetingTimeSlot property value. A time period suggested for the meeting.
     * @param TimeSlot|null $value Value to set for the meetingTimeSlot property.
    */
    public function setMeetingTimeSlot(?TimeSlot $value): void {
        $this->getBackingStore()->set('meetingTimeSlot', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the order property value. Order of meeting time suggestions sorted by their computed confidence value from high to low, then by chronology if there are suggestions with the same confidence.
     * @param int|null $value Value to set for the order property.
    */
    public function setOrder(?int $value): void {
        $this->getBackingStore()->set('order', $value);
    }

    /**
     * Sets the organizerAvailability property value. Availability of the meeting organizer for this meeting suggestion. The possible values are: free, tentative, busy, oof, workingElsewhere, unknown.
     * @param FreeBusyStatus|null $value Value to set for the organizerAvailability property.
    */
    public function setOrganizerAvailability(?FreeBusyStatus $value): void {
        $this->getBackingStore()->set('organizerAvailability', $value);
    }

    /**
     * Sets the suggestionReason property value. Reason for suggesting the meeting time.
     * @param string|null $value Value to set for the suggestionReason property.
    */
    public function setSuggestionReason(?string $value): void {
        $this->getBackingStore()->set('suggestionReason', $value);
    }

}

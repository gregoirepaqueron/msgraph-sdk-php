<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DirectoryObject extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $deletedDateTime Date and time when this object was deleted. Always null when the object hasn't been deleted.
    */
    private ?DateTime $deletedDateTime = null;
    
    /**
     * Instantiates a new directoryObject and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DirectoryObject
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DirectoryObject {
        $mappingValueNode = ParseNode::getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.directoryObject': return new DirectoryObject();
            }
        }
        return new DirectoryObject();
    }

    /**
     * Gets the deletedDateTime property value. Date and time when this object was deleted. Always null when the object hasn't been deleted.
     * @return DateTime|null
    */
    public function getDeletedDateTime(): ?DateTime {
        return $this->deletedDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deletedDateTime' => function (ParseNode $n) use ($o) { $o->setDeletedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('deletedDateTime', $this->deletedDateTime);
    }

    /**
     * Sets the deletedDateTime property value. Date and time when this object was deleted. Always null when the object hasn't been deleted.
     *  @param DateTime|null $value Value to set for the deletedDateTime property.
    */
    public function setDeletedDateTime(?DateTime $value ): void {
        $this->deletedDateTime = $value;
    }

}
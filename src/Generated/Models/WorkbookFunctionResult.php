<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookFunctionResult extends Entity implements Parsable 
{
    /**
     * Instantiates a new WorkbookFunctionResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookFunctionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookFunctionResult {
        return new WorkbookFunctionResult();
    }

    /**
     * Gets the error property value. 
     * @return string|null
    */
    public function getError(): ?string {
        return $this->getBackingStore()->get('error');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'error' => fn(ParseNode $n) => $o->setError($n->getStringValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the value property value. 
     * @return Json|null
    */
    public function getValue(): ?Json {
        return $this->getBackingStore()->get('value');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('error', $this->getError());
        $writer->writeObjectValue('value', $this->getValue());
    }

    /**
     * Sets the error property value. 
     * @param string|null $value Value to set for the error property.
    */
    public function setError(?string $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the value property value. 
     * @param Json|null $value Value to set for the value property.
    */
    public function setValue(?Json $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}

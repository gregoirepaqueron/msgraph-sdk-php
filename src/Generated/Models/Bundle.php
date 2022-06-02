<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Bundle implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var Album|null $album If the bundle is an [album][], then the album property is included */
    private ?Album $album = null;
    
    /** @var int|null $childCount Number of children contained immediately within this container. */
    private ?int $childCount = null;
    
    /**
     * Instantiates a new bundle and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Bundle
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Bundle {
        return new Bundle();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the album property value. If the bundle is an [album][], then the album property is included
     * @return Album|null
    */
    public function getAlbum(): ?Album {
        return $this->album;
    }

    /**
     * Gets the childCount property value. Number of children contained immediately within this container.
     * @return int|null
    */
    public function getChildCount(): ?int {
        return $this->childCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'album' => function (self $o, ParseNode $n) { $o->setAlbum($n->getObjectValue(Album::class)); },
            'childCount' => function (self $o, ParseNode $n) { $o->setChildCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('album', $this->album);
        $writer->writeIntegerValue('childCount', $this->childCount);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the album property value. If the bundle is an [album][], then the album property is included
     *  @param Album|null $value Value to set for the album property.
    */
    public function setAlbum(?Album $value ): void {
        $this->album = $value;
    }

    /**
     * Sets the childCount property value. Number of children contained immediately within this container.
     *  @param int|null $value Value to set for the childCount property.
    */
    public function setChildCount(?int $value ): void {
        $this->childCount = $value;
    }

}
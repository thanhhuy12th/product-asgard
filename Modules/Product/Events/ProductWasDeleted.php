<?php

namespace Modules\Product\Events;

use Modules\Media\Contracts\DeletingMedia;

class ProductWasDeleted implements DeletingMedia
{
    /**
     * @var string
     */
    private $productClass;
    /**
     * @var int
     */
    private $productId;

    public function __construct($productId, $productClass)
    {
        $this->productClass = $productClass;
        $this->productId = $productId;
    }

    /**
     * Get the entity ID
     * @return int
     */
    public function getEntityId()
    {
        return $this->productId;
    }

    /**
     * Get the class name the imageables
     * @return string
     */
    public function getClassName()
    {
        return $this->productClass;
    }
}

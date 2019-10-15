<?php

namespace Modules\Product\Events;

use Modules\Product\Entities\Product;
use Modules\Media\Contracts\StoringMedia;

class ProductWasCreated implements StoringMedia
{
    /**
     * @var array
     */
    public $data;
    /**
     * @var Post
     */
    public $product;

    public function __construct($product, array $data)
    {
        $this->data = $data;
        $this->product = $product;
    }

    /**
     * Return the entity
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function getEntity()
    {
        return $this->product;
    }

    /**
     * Return the ALL data sent
     * @return array
     */
    public function getSubmissionData()
    {
        return $this->data;
    }
}

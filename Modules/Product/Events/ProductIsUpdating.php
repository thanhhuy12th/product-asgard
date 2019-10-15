<?php

namespace Modules\Product\Events;

use Modules\Product\Entities\Product;
use Modules\Core\Contracts\EntityIsChanging;
use Modules\Core\Events\AbstractEntityHook;

class ProductIsUpdating extends AbstractEntityHook implements EntityIsChanging
{
    /**
     * @var Product
     */
    private $product;

    public function __construct(Product $product, array $data)
    {
        parent::__construct($data);

        $this->product = $product;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }
}

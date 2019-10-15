<?php

namespace Modules\Product\Repositories\Eloquent;

use Modules\Product\Repositories\ProductRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;
use Modules\Product\Events\ProductIsCreating;
use Modules\Product\Events\ProductWasCreated;
use Modules\Product\Events\ProductIsUpdating;
use Modules\Product\Events\ProductWasUpdated;
use Modules\Product\Events\ProductWasDeleted;

class EloquentProductRepository extends EloquentBaseRepository implements ProductRepository
{
	/**
     * Create a product
     * @param  array $data
     * @return Product
     */
    public function create($data)
    {
    	
        event($event = new ProductIsCreating($data));
        $product = $this->model->create($event->getAttributes());

   

        event(new ProductWasCreated($product, $data));

        return $product;
    }


    public function destroy($model)
    {

        event(new ProductWasDeleted($model->id, get_class($model)));

        return $model->delete();
    }

    /**
     * Update a product
     * @param $product
     * @param  array $data
     * @return mixed
     */
    public function update($product, $data)
    {
       
        event($event = new ProductIsUpdating($product, $data));
        $product->update($event->getAttributes());

        event(new ProductWasUpdated($product, $data));

        return $product;
    }
}

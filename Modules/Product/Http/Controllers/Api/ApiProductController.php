<?php

namespace Modules\Product\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Product;
use Modules\Product\Repositories\ProductRepository;



class ApiProductController extends Controller
{
    /**
     * @var ProductRepository
     */
    private $product;

    public function __construct(ProductRepository $product)
    {

        $this->product = $product;
    }


    public function get_all()
    {
        $products = $this->product->paginate(10);
        //dd($products);
        return response()->json([
            'code' => 200,
            'count' => $products->count(),
            'data' => $products,
        ]);
    }

   
}

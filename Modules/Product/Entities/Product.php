<?php

namespace Modules\Product\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\Media\Support\Traits\MediaRelation;

class Product extends Model
{
    use Translatable, MediaRelation;
    
    protected $fillable = [
    	'product_name',
    	'price',
    ];
    public $translatedAttributes = ['title','description'];

    protected $table = 'product__products';


    public function getFeatureImageAttribute()
    {
    	$feature_image =  $this->filesByZone('feature_image')->first();
        
        if ($feature_image === null) {
            return '';
        }

        return $feature_image;
    }
}

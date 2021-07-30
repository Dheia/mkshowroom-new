<?php namespace Jlh\Showroom\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Sortable;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'jlh_showroom_category';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    // public $attachOne  = [
    //     'image_cat' => 'System\Models\File',
    //     'image_header' => 'System\Models\File'
    // ];
}

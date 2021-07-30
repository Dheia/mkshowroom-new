<?php namespace Jlh\Homeslider\Models;

use Model;

/**
 * Model
 */
class Homeslider extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Sortable;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'jlh_homeslider_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

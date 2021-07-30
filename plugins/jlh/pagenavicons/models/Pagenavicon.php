<?php namespace Jlh\PageNavIcons\Models;

use Model;

/**
 * Model
 */
class Pagenavicon extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'jlh_pagenavicons_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

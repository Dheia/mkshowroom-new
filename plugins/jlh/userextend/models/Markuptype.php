<?php namespace Jlh\Userextend\Models;

use Model;

/**
 * Model
 */
class Markuptype extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'jlh_userextend_markup_type';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

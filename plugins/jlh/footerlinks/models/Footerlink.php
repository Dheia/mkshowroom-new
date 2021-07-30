<?php namespace Jlh\FooterLinks\Models;

use Model;

/**
 * Model
 */
class Footerlink extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    use \October\Rain\Database\Traits\Sortable;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'jlh_footerlinks_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}

<?php namespace Jlh\Userextend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddMarkupFields extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->string('markup_type_id')->nullabel();
            
        });
    }

    public function down()
    {
        Schema::table('users', function($table)
        {
            $table->dropColumn([
                'markup_type_id',
                
            ]);
        });
    }
}


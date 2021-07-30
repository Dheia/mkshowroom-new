<?php namespace Jlh\Userextend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJlhUserextendMarkupType extends Migration
{
    public function up()
    {
        Schema::table('jlh_userextend_markup_type', function($table)
        {
            $table->boolean('is_active')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jlh_userextend_markup_type', function($table)
        {
            $table->dropColumn('is_active');
        });
    }
}

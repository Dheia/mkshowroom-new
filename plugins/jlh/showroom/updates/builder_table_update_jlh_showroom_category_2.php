<?php namespace Jlh\Showroom\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJlhShowroomCategory2 extends Migration
{
    public function up()
    {
        Schema::table('jlh_showroom_category', function($table)
        {
            $table->string('name_description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jlh_showroom_category', function($table)
        {
            $table->dropColumn('name_description');
        });
    }
}

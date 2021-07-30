<?php namespace Jlh\Showroom\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJlhShowroomCategory extends Migration
{
    public function up()
    {
        Schema::table('jlh_showroom_category', function($table)
        {
            $table->string('image_cat')->nullable();
            $table->string('header_image_cat')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jlh_showroom_category', function($table)
        {
            $table->dropColumn('image_cat');
            $table->dropColumn('header_image_cat');
        });
    }
}

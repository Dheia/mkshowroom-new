<?php namespace Jlh\Homeslider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJlhHomeslider extends Migration
{
    public function up()
    {
        Schema::table('jlh_homeslider_', function($table)
        {
            $table->string('photo')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jlh_homeslider_', function($table)
        {
            $table->dropColumn('photo');
        });
    }
}

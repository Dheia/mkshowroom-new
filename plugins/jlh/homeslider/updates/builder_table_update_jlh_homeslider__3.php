<?php namespace Jlh\Homeslider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJlhHomeslider3 extends Migration
{
    public function up()
    {
        Schema::table('jlh_homeslider_', function($table)
        {
            $table->string('image', 191)->nullable(false)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('jlh_homeslider_', function($table)
        {
            $table->string('image', 191)->nullable()->default(null)->change();
        });
    }
}

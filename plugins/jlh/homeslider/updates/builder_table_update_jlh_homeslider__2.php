<?php namespace Jlh\Homeslider\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJlhHomeslider2 extends Migration
{
    public function up()
    {
        Schema::table('jlh_homeslider_', function($table)
        {
            $table->renameColumn('photo', 'image');
        });
    }
    
    public function down()
    {
        Schema::table('jlh_homeslider_', function($table)
        {
            $table->renameColumn('image', 'photo');
        });
    }
}

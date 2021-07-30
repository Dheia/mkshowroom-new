<?php namespace Jlh\PageNavIcons\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJlhPagenavicons extends Migration
{
    public function up()
    {
        Schema::table('jlh_pagenavicons_', function($table)
        {
            $table->renameColumn('ico', 'icon');
        });
    }
    
    public function down()
    {
        Schema::table('jlh_pagenavicons_', function($table)
        {
            $table->renameColumn('icon', 'ico');
        });
    }
}
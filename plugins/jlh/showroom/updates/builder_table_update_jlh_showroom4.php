<?php namespace Jlh\Showroom\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJlhShowroom4 extends Migration
{
    public function up()
    {
        Schema::table('jlh_showroom_', function($table)
        {
            $table->integer('qty_ttl')->nullable();
            $table->integer('qty_avail')->nullable();
            $table->double('kcost', 7, 2)->nullable();
            $table->string('lotno')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('jlh_showroom_', function($table)
        {
            $table->dropColumn('qty_ttl');
            $table->dropColumn('qty_avail');
            $table->dropColumn('kcost');
            $table->dropColumn('lotno');
        });
    }
}
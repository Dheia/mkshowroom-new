<?php namespace Jlh\Userextend\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddStoreId extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {
            $table->integer('store_id')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function($table)
        {
            $table->dropColumn('store_id');
        });
    }

}

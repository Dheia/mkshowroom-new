<?php namespace Jlh\Showroom\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJlhShowroom extends Migration
{
    public function up()
    {
        Schema::create('jlh_showroom_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id_shw')->unsigned();
            $table->string('stylekey')->nullable();
            $table->string('upc')->nullable();
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->string('img4')->nullable();
            $table->string('webretail')->nullable();
            $table->string('saleonly')->nullable();
            $table->string('mtl_yellow')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jlh_showroom_');
    }
}

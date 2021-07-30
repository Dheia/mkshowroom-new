<?php namespace Jlh\Showroom\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJlhShowroomCategory extends Migration
{
    public function up()
    {
        Schema::create('jlh_showroom_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->integer('sort_order')->nullable();
            $table->boolean('is_active')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jlh_showroom_category');
    }
}

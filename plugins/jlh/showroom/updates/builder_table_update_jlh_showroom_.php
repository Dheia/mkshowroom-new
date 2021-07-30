<?php namespace Jlh\Showroom\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJlhShowroom extends Migration
{
    public function up()
    {
        Schema::table('jlh_showroom_', function($table)
        {
            $table->string('mtl_white', 1)->nullable();
            $table->string('mtl_pt', 1)->nullable();
            $table->string('mtl_14k', 1)->nullable();
            $table->string('mtl_18k', 1)->nullable();
            $table->string('mtl_20k', 1)->nullable();
            $table->string('dia_with', 1)->nullable();
            $table->string('category')->nullable();
            $table->string('subcat1')->nullable();
            $table->string('subcat2')->nullable();
            $table->string('subcat3')->nullable();
            $table->string('subcat4')->nullable();
            $table->string('subcat5')->nullable();
            $table->integer('length')->nullable();
            $table->string('ladies', 1)->nullable();
            $table->string('mens', 1)->nullable();
            $table->string('saddle', 1)->nullable();
            $table->string('clr_grn', 1)->nullable();
            $table->decimal('dia_wt', 2, 2)->nullable();
            $table->string('clr_laven', 1)->nullable();
            $table->string('clr_red', 1)->nullable();
            $table->string('clr_yel', 1)->nullable();
            $table->string('clr_white', 1)->nullable();
            $table->string('cl_mix', 1)->nullable();
            $table->string('clr_ice', 1)->nullable();
            $table->string('clr_multu', 1)->nullable();
            $table->string('mtl_yellow', 1)->change();
        });
    }
    
    public function down()
    {
        Schema::table('jlh_showroom_', function($table)
        {
            $table->dropColumn('mtl_white');
            $table->dropColumn('mtl_pt');
            $table->dropColumn('mtl_14k');
            $table->dropColumn('mtl_18k');
            $table->dropColumn('mtl_20k');
            $table->dropColumn('dia_with');
            $table->dropColumn('category');
            $table->dropColumn('subcat1');
            $table->dropColumn('subcat2');
            $table->dropColumn('subcat3');
            $table->dropColumn('subcat4');
            $table->dropColumn('subcat5');
            $table->dropColumn('length');
            $table->dropColumn('ladies');
            $table->dropColumn('mens');
            $table->dropColumn('saddle');
            $table->dropColumn('clr_grn');
            $table->dropColumn('dia_wt');
            $table->dropColumn('clr_laven');
            $table->dropColumn('clr_red');
            $table->dropColumn('clr_yel');
            $table->dropColumn('clr_white');
            $table->dropColumn('cl_mix');
            $table->dropColumn('clr_ice');
            $table->dropColumn('clr_multu');
            $table->string('mtl_yellow', 191)->change();
        });
    }
}

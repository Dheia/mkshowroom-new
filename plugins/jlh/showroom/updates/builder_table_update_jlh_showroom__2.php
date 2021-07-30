<?php namespace Jlh\Showroom\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJlhShowroom2 extends Migration
{
    public function up()
    {
        Schema::table('jlh_showroom_', function($table)
        {
            $table->string('clr_black', 1)->nullable();
            $table->string('clr_grey', 1)->nullable();
            $table->string('clr_lapis', 1)->nullable();
            $table->string('clr_water', 1)->nullable();
            $table->string('shp_oval', 1)->nullable();
            $table->string('shp_round', 1)->nullable();
            $table->string('shp_marqis', 1)->nullable();
            $table->string('shp_pear', 1)->nullable();
            $table->string('shp_heart', 1)->nullable();
            $table->string('shp_other', 1)->nullable();
            $table->string('stonesize')->nullable();
            $table->string('kwrd_china', 1)->nullable();
            $table->string('kwrd_ftach', 1);
            $table->string('kwrd_ovstk', 1);
            $table->string('kwrd_cout', 1);
            $table->string('kwrd_carvd', 1);
            $table->renameColumn('clr_multu', 'clr_multi');
        });
    }
    
    public function down()
    {
        Schema::table('jlh_showroom_', function($table)
        {
            $table->dropColumn('clr_black');
            $table->dropColumn('clr_grey');
            $table->dropColumn('clr_lapis');
            $table->dropColumn('clr_water');
            $table->dropColumn('shp_oval');
            $table->dropColumn('shp_round');
            $table->dropColumn('shp_marqis');
            $table->dropColumn('shp_pear');
            $table->dropColumn('shp_heart');
            $table->dropColumn('shp_other');
            $table->dropColumn('stonesize');
            $table->dropColumn('kwrd_china');
            $table->dropColumn('kwrd_ftach');
            $table->dropColumn('kwrd_ovstk');
            $table->dropColumn('kwrd_cout');
            $table->dropColumn('kwrd_carvd');
            $table->renameColumn('clr_multi', 'clr_multu');
        });
    }
}

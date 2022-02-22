<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryidColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //     up() → add the new column first, and then call it
    // again and set to be a foreign key

    // • down() is the reverse of up(), because up is
    // create column and create foreign key. The down
    // should be dropForeignKey dan dropColumn. The
    // order also reversed. Doing dropForeignKey first,
    // then dropColumn
    public function up()
    {
        //creating foreign key
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //creating down
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
}

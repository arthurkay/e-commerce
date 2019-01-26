<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
        });

        DB::table('categories')->insert([
        [
            'name' => 'Software'
        ],
        [
            'name' => 'Vehicles'
        ],
        [
            'name' => 'Accomodation'
        ],
        [
            'name' => 'Mining'
        ],
        [
            'name' => 'Water Exploration'
        ],
        [
            'name' => 'Investments'
        ],
        [
            'name' => 'Consultancy'
        ],
        [
            'name' => 'Database Management'
        ],
        [
            'name' => 'Clothes'
        ],
        [
            'name' => 'Household Fittings'
        ]
    ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}

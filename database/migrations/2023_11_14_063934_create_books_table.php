<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("Title");
            $table->enum("Genre",['Drama','Historical','Dystopia','Fantasy','Fiction','Horror','Mystery','Poetry','Magical Realism','Sci-Fi','Western','Epic','Fable','Mythology','Thriller','Tragedy','Romance','Satire','Comedy']);
            $table->string("Author");
            $table->integer("Pages");
            $table->date("Publication_Date")->nullable();
            $table->integer("Price");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}

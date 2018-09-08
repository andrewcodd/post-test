<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('tests', function (Blueprint $table) {
          $table->increments('id');
          $table->unsignedInteger('user_id');
          $table->foreign('user_id')->references('id')->on('users');
          $table->decimal('1A0111', 8, 0)->default(0);
          $table->decimal('1A0112', 8, 0)->default(0);
          $table->decimal('1A0113', 8, 0)->default(0);
          $table->decimal('1A0121', 8, 0)->default(0);
          $table->decimal('1A0122', 8, 0)->default(0);
          $table->decimal('1A0123', 8, 0)->default(0);
          $table->decimal('1A0211', 8, 0)->default(0);
          $table->decimal('1A0212', 8, 0)->default(0);
          $table->decimal('1A0213', 8, 0)->default(0);
          $table->decimal('1A0221', 8, 0)->default(0);
          $table->decimal('1A0222', 8, 0)->default(0);
          $table->decimal('1A0223', 8, 0)->default(0);
          $table->decimal('1A0311', 8, 0)->default(0);
          $table->decimal('1A0312', 8, 0)->default(0);
          $table->decimal('1A0313', 8, 0)->default(0);
          $table->decimal('1A0321', 8, 0)->default(0);
          $table->decimal('1A0322', 8, 0)->default(0);
          $table->decimal('1A0323', 8, 0)->default(0);
          $table->decimal('1A0411', 8, 0)->default(0);
          $table->decimal('1A0412', 8, 0)->default(0);
          $table->decimal('1A0413', 8, 0)->default(0);
          $table->decimal('1A0421', 8, 0)->default(0);
          $table->decimal('1A0422', 8, 0)->default(0);
          $table->decimal('1A0423', 8, 0)->default(0);
          $table->decimal('1A0511', 8, 0)->default(0);
          $table->decimal('1A0512', 8, 0)->default(0);
          $table->decimal('1A0513', 8, 0)->default(0);
          $table->decimal('1A0521', 8, 0)->default(0);
          $table->decimal('1A0522', 8, 0)->default(0);
          $table->decimal('1A0523', 8, 0)->default(0);
          $table->decimal('1A0611', 8, 0)->default(0);
          $table->decimal('1A0612', 8, 0)->default(0);
          $table->decimal('1A0613', 8, 0)->default(0);
          $table->decimal('1A0621', 8, 0)->default(0);
          $table->decimal('1A0622', 8, 0)->default(0);
          $table->decimal('1A0623', 8, 0)->default(0);
          $table->text('_token');
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
        Schema::dropIfExists('tests');
    }
}

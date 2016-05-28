<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cache_id');
            $table->string('email', 191)->nullable();
            $table->string('name', 191)->nullable();
            $table->text('comment')->nullable();
            $table->text('feedback')->nullable();
            $table->text('extra')->nullable();
            $table->timestamps();
            $table->timestamp('hidden_at')->nullable();
            $table->softDeletes();

            $table->foreign('cache_id')->references('id')->on('caches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('claims');
    }
}

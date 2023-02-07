<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dogs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id'); //Add:user_id
            $table->string('name', 20); // なまえ
            $table->string('breed', 20); // 犬種
            $table->boolean('gender'); // 性別
            $table->tinyInteger('age'); // 年齢
            $table->tinyInteger('weight'); // 体重
            $table->boolean('fix'); // 避妊去勢
            $table->string('food', 20); // 市販フード
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
        Schema::dropIfExists('dogs');
    }
};

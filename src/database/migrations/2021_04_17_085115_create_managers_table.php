<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('managers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255)->default('')->comment('組織名');
            $table->string('email', 255)->unique()->comment('メールアドレス');
            $table->string('password', 255)->comment('ハッシュ化したパスワード');
            $table->string('tel', 255)->default('')->comment('担当者の電話番号、ハイフンなし');
            $table->string('address', 255)->default('')->comment('住所');
            $table->string('officer', 255)->default('')->comment('代表者名');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('managers');
    }
}

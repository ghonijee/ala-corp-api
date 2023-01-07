<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     *   type varchar
  name varchar
  number varchar
  opening_balance double(15,4)
  bank_name varchar
  bank_phone varchar
  bank_address varchar
  enabled boolean
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->string('type')->nullable();
            $table->string('name');
            $table->string('number');
            $table->double('balance', 15, 4)->default(0.0);
            $table->string('bank_name')->nullable();
            $table->string('bank_phone')->nullable();
            $table->string('bank_address')->nullable();
            $table->boolean('enabled')->default(true);
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
    }
};

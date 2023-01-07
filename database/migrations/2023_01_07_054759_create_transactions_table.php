<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *   type varchar
  number varchar
  paid_at timestamp
  amount double(15,4)
  account_id integer [default: null, ref: > accounts.id]
  contact_id integer [default: null, ref: > contacts.id]
  category_id integer [default: null, ref: > categories.id]
  description text
  payment_method varchar
  parent_id integer
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id');
            $table->string('type')->nullable();
            $table->string('number')->nullable();
            $table->timestamp('paid_at')->nullable();
            $table->double('amount', 15, 4)->default(0.0);
            $table->unsignedBigInteger('account_id')->nullable();
            $table->unsignedBigInteger('contact_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->text('description')->nullable();
            $table->string('payment_method')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
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

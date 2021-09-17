<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('token_no');
            $table->string('title');
            $table->string('name');
            $table->string('dob')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('cnic')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('visit_datetime')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('doctor_name')->nullable();
            $table->string('amount')->nullable();
            $table->string('injury')->nullable();
            $table->text('notes')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('image')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    // id, token_no, title, name, email, phone no, cnic, address, injury, gender(male,female), visit datetime, marital_status(single, married) ,doctor_name, amount_charge, decriptiopn, blood_group, amount,dob

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}

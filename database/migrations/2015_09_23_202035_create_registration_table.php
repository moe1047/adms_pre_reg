<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('city')->nullable();;
            $table->timestamps();
        });
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('location')->nullable();;
            $table->timestamps();
        });

        Schema::create('registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('mid_name');
            $table->string('last_name');
            $table->integer('department_id')->unsigned();

            $table->char('gender');

            $table->date('DOB')->nullable();;

            $table->bigInteger('mobile');
            $table->string('email');
            $table->string('image',200)->nullable();
            $table->integer('user_id')->unsigned();
            $table->string('session');
            $table->integer('admission_no')->unsigned();

            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('department_id')
                ->references('id')
                ->on('departments')
                ->onDelete('cascade');
        });
        Schema::create('registration_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('registration_id')->unsigned();
            $table->string('city')->nullable();
            $table->integer('region_id')->unsigned();
            $table->integer('school_id')->unsigned();
            $table->string('academic_year');
            $table->string('roll_no')->nullable();
            $table->string('payment_type');
            $table->string('transaction_no');

            $table->string('certificate_no');//letters iyo num

            $table->string('grade');

            $table->string('on_basis_of')->nullable();
            $table->string('registration_amount');
            $table->longText('remark')->nullable();
            $table->string('receipt_no')->nullable();

            $table->timestamps();

            $table->foreign('registration_id')
                ->references('id')
                ->on('registrations')
                ->onDelete('cascade');

            $table->foreign('school_id')
                ->references('id')
                ->on('schools')
                ->onDelete('cascade');

            $table->foreign('region_id')
                ->references('id')
                ->on('regions')
                ->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('registration_details');
        Schema::drop('schools');
        Schema::drop('registrations');
        Schema::drop('regions');
    }
}

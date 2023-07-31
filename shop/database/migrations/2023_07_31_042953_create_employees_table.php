<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->text('address')->nullable();
            $table->string('contact')->nullable();
            $table->enum("gender",array("male","female","other"));
            $table->string('info')->nullable();        
            $table->date('dob');
            $table->double('salary', 8, 2);
            $table->enum("status",array("active","suspended","expired"));
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
        Schema::dropIfExists('employees');
    }
}

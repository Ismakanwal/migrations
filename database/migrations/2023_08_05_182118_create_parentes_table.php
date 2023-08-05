<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('parentes', function (Blueprint $table) {
            $table->id();
               
            $table->string('CNIC');
            $table->unsignedBigInteger('user_id');
           
            $table->foreign('user_id')->references('id')->on('users')  ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students')
            ->onUpdate('cascade')->onDelete('cascade');
            
          
      
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parentes');
    }
};

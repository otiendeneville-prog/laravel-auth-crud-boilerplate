<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('ideas',function(Blueprint $table){
        $table->id();
        $table->text('description');
        $table->string('state')->default('pending');
        $table ->timestamps();
        $table ->foreignIdFor(user::class)->constrained->cascadeonDelete();
        $table->string('state')->nullable();
        });
    }
    public function down(): void
    {
         Schema::dropIfExist('Idea');
    }
};




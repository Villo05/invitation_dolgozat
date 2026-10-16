<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('event_id')->constrained('events');
            $table->string('status');
            $table->timestamps();
        });
        DB::table('tickets')->insert([
        [
            'user_id'=>'1',
            'event_id'=>'3',
            'status'=>'jo',
        ],
        [
            'user_id'=>'2',
            'event_id'=>'2',
            'status'=>'ervenyes',
        ],
        [
            'user_id'=>'3',
            'event_id'=>'1',
            'status'=>'foglalt',
        ]
    ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }

    
};

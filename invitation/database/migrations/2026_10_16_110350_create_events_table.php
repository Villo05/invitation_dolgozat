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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->datetime('time');
            $table->text('address');
            $table->foreignId('trader_id')->constrained('traders');
            $table->timestamps();
        });
        DB::table('events')->insert([
        [
            'name'=>fake()->words(2,true),
            'time'=>fake()->dataTimeBetween('now','+1 year'),
            'adress'=>fake()->address(),
            'trader_id'=>fake()->numberBetween(1,3)
        ]
    ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }

};

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
        DB::table('tickets')->insert([
        [
            'name'=>'Marika',
            'time'=>'2020.11.20.',
            'adress'=>'város, utca 23',
            'trader_id'=> '1'
        ],
        [
            'name'=>'Lajos',
            'time'=>'2025.12.20.',
            'adress'=>'város, utca 8',
            'trader_id'=> '2'
        ],
        [
            'name'=>'Dani',
            'time'=>'2019.11.5.',
            'adress'=>'város, utca 6',
            'trader_id'=> '1'
        ],
        
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

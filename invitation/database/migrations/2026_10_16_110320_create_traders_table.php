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
        Schema::create('traders', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->text('description');
            $table->string('country',50);
            $table->timestamps();
        });
        DB::table('traders')->insert([
        [
            'name'=>'Marika',
            'description'=>'fgfgh',
            'country'=>'fsf',
        ],
        [
            'name'=>'Marika',
            'description'=>'rgegw',
            'country'=>'eff',
        ],
        [
            'name'=>'Marika',
            'description'=>'ewe',
            'country'=>'flk',
        ],
        
    ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traders');
    }
};

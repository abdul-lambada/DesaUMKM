<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('map_points', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type', ['umkm', 'wisata', 'layanan', 'event']);
            $table->decimal('lat', 10, 8);
            $table->decimal('lng', 11, 8);
            $table->bigInteger('related_id')->nullable();
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
        Schema::dropIfExists('map_points');
    }
}; 
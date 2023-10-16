<?php

use App\Models\Setting;
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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });


       Setting::create([
        'key' => '_site_name',
        'label' => 'Site Name',
        'value' => 'Sukacode Community',
        'type' => 'text'
       ]);

        Setting::create([
          'key' => '_site_description',
          'label' => 'Site Description',
          'value' => 'Sukacode Community is a community for programmers, developers, and designers to share and learn programming knowledge.',
          'type' => 'text'
         ]);

       Setting::create([
        'key' => '_location',
        'label' => 'Site Location',
        'value' => 'Karawang, Jawa Barat, Indonesia',
        'type' => 'text'
       ]);

        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

<?php

use App\Models\setting;
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

        setting::create([
            'key' => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'Website Sederhana',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_location',
            'label' => 'Alamat Rumah',
            'value' => 'Tibubeneng, JL. Raya Padonan',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://www.Instagram.com/gdpdede2',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_facebook',
            'label' => 'facebook',
            'value' => 'https://www.facebook.com/pande.praditya',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_github',
            'label' => 'Youtube',
            'value' => 'https://www.github.com/PandePraditya',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_linkedin',
            'label' => 'Youtube',
            'value' => 'https://www.linkedin.com/in/pande-praditya',
            'type' => 'text',
        ]);
        setting::create([
            'key' => '_site_description',
            'label' => 'Site Description',
            'value' => 'Website sederhana, dengan admin filament, untuk situs sederhana',
            'type' => 'text',
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

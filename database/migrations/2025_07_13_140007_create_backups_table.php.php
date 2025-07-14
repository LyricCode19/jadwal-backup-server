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
      Schema::create('backups', function (Blueprint $table) {
        $table->id();
        $table->foreignId('lembaga_id')->constrained()->onDelete('cascade');
        $table->string('nama_file');
        $table->text('catatan')->nullable();
        $table->string('lokasi_path')->nullable(); // contoh: /storage/backups/xxx.zip
        $table->timestamp('uploaded_at');
        $table->timestamps();
      });
     }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

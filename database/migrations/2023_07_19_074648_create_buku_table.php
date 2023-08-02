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
        Schema::create('buku', function (Blueprint $table) {
            $table->increments('id_buku');
            $table->string('kode_buku');
            $table->string('judul');
            $table->string('pengarang');
            $table->string('kategori');
            $table->timestamp('created_at');
          // $table->datetime('updated_at');
            $table->datetime('updated_at')->default(now());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};

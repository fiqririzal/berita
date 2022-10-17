<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('gambar');
            $table->string('slug');
            $table->text('isi');
            $table->unsignedBigInteger('kategori_id');
            $table->timestamps();

            $table->foreign('kategori_id')
                ->references('id')
                ->on('kategori')
                ->onUpdate(DB::raw('NO ACTION'))
                ->onDelete(DB::raw('NO ACTION'));
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita');
    }
}

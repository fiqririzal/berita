<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $table ="berita";
    protected $fillable =["judul","gambar","slug","isi"];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

}

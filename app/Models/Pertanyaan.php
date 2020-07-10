<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    //customisasi nama tabel
    protected $table = 'pertanyaan';
    
    protected $fillable = ['judul','isi','tag','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function jawaban()
    {
        return $this->hasMany('App\Models\Pertanyaan','pertanyaan_id');
    }

    public function poin()
    {
        return $this->hasMany('App\Models\Poin','pertanyaan_id');
    }

    public function komentarpertanyaan()
    {
        return $this->hasMany('App\Models\KomentarPertanyaan','pertanyaan_id');
    }
}

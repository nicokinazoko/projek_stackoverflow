<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    //customisasi nama tabel
    protected $table = 'jawaban';
    
    protected $fillable = ['isi','user_id','pertanyaan_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function komentarjawaban()
    {
        return $this->hasMany('App\Models\KomentarJawaban','jawaban_id');
    }

    public function poin()
    {
        return $this->hasMany('App\Models\Poin','jawaban_id');
    }

    public function pertanyaan()
    {
        return $this->belongsTo('App\Models\Pertanyaan','pertanyaan_id');
    }
}

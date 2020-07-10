<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KomentarJawaban extends Model
{
    protected $table = 'komentar_jawaban';
    protected $fillable = ['isi','user_id','jawaban_id'];

    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function jawaban()
    {
        return $this->belongsTo('App\Models\Jawaban','jawaban_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KomentarPertanyaan extends Model
{
    protected $table = 'komentar_pertanyaan';
    protected $fillable = ['isi','user_id','pertanyaan_id'];

    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function pertanyaan()
    {
        return $this->belongsTo('App\Models\Pertanyaan','pertanyaan_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poin extends Model
{
    protected $table = 'poin';
    protected $guarded = [];
    public $timestamps = false;

    public function user()
    {
        return belongsTo('App\User');
    }

    public function jawaban()
    {
        return belongsTo('App\Models\Jawaban','jawaban_id');
    }

    public function pertanyaan()
    {
        return belongsTo('App\Models\Pertanyaan','pertanyaan_id');
    }
}

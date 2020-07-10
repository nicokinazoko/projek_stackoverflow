<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //relasi one to many -> jawaban
    public function jawaban()
    {
        return $this->hasMany('App\Models\Jawaban');
    }
    
    
    //relasi one to many -> pertanyaan
    public function pertanyaan()
    {
        return $this->hasMany('App\Models\Pertanyaan');
    }
    
    
    //relasi one to many -> komentar_jawaban
    public function komentarjawaban()
    {
        return $this->hasMany('App\Models\KomentarJawaban');
    }
    
    
    //relasi one to many -> komentar_pertanyaan
    public function komentarpertanyaan()
    {
        return $this->hasMany('App\Models\KomentarPertanyaan');
    }
    
    
    //relasi one to many -> poin
    public function poin()
    {
        return $this->hasMany('App\Models\Poin');
    }
}

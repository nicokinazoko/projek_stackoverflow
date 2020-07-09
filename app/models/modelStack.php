<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class modelStack extends Model
{
    //ambil data semua pertanyaan
    public static function getAllPertanyaan()
    {
        $pertanyaan                 =   DB::table('pertanyaan')->get();
        return $pertanyaan;
    }

    //ambil data semua jawaban
    public static function getAllJawaban()
    {
        $jawaban                    =   DB::table('jawaban')->get();
        return $jawaban;
    }

    //ambil data semua user
    public static function getAllUsers()
    {
        $user                       =   DB::table('user_stack')->get();
        return $user;
    }

    //input data
    public static function savePertanyaan($data)
    {
        $new_pertanyaan             =   DB::table('pertanyaan')->insert($data);
        return $new_pertanyaan;
    }

    public static function saveJawaban($data)
    {
        $new_jawaban                =   DB::table('jawaban')->insert($data);
        return $new_jawaban;
    }

    public static function saveUser($data)
    {
        $new_user                   =   DB::table('user')->insert($data);
        return $new_user;
    }

    //delete data
    public static function deletePertanyaan($id_delete)
    {
        $delete_pertanyaan          =   DB::table('pertanyaan')->where('id_pertanyaan',$id_delete)->delete();
        return $delete_pertanyaan;
    }

    public static function deleteJawaban($id_delete)
    {
        $delete_jawaban             =   DB::table('jawaban')->where('id_jawaban',$id_delete)->delete();
        return $delete_jawaban;
    }

    public static function deleteUser($id_delete)
    {
        $delete_user                =   DB::table('user')->where('id_user',$id_delete)->delete();
        return $delete_user;
    }

    // -----------------------------------------------------------------------------------
    //ambil data pertanyaan dari id pertanyaan
    public static function Pertanyaan_getbyIdPertanyaan($id_cari)
    {
        $pertanyaan                 =   DB::table('pertanyaan')->where('id_pertanyaan', $id_cari);
        return $pertanyaan;
    }
    // -----------------------------------------------------------------------------------
    //ambil data dari tabel jawaban dari id jawaban
    public static function Jawaban_getbyIdJawaban($id_cari)
    {
        $jawaban                    =   DB::table('jawaban')->where('id_jawaban',$id_cari);
        return $jawaban;
    }

    //ambil data dari tabel jawaban dari id user
    public static function Jawaban_getbyidUser($id_cari)
    {
        $jawaban                    =   DB::table('jawaban')->where('id_user',$id_cari);
        return $jawaban;
    }

    //ambil data dari tabel jawaban dari id pertanyaan
    public static function Jawaban_getbyidPertanyaan($id_cari)
    {
        $jawaban                    =   DB::table('jawaban')->where('id_pertanyaan',$id_cari);
        return $jawaban;
    }

    // -----------------------------------------------------------------------------------
    //ambil data dari tabel kolom pertanyaan dari id komentar pertanyaan
    public static function Kom_Pertanyaan_getbyid($id_cari)
    {
        $kom_pertanyaan             =   DB::table('komentar_pertanyaan')->where('id_komentar_pertanyaan',$id_cari);
        return $kom_pertanyaan;
    }

    //ambil data dari tabel kolom pernyataan dari id user
    public static function Kom_Pertanyaan_getbyidUser($id_cari)
    {
        $kom_pertanyaan             =   DB::table('komentar_pertanyaan')->where('id_user',$id_cari);
        return $kom_pertanyaan;
    }

    //ambil data dari tabel kolom pernyataan dari id pertanyaan
    public static function Kom_Pertanyaan_getbyidPertanyaan($id_cari)
    {
        $kom_pertanyaan             =   DB::table('komentar_pertanyaan')->where('id_pertanyaan',$id_cari);
        return $kom_pertanyaan;
    }

    // -----------------------------------------------------------------------------------
    //ambil data dari kolom jawaban dari id jawaban
    public static function Kom_Jawaban_getbyid($id_cari)
    {
        $kom_jawaban                =   DB::table('komentar_jawaban')->where('id_komentar_jawaban',$id_cari);
        return $kom_jawaban;
    }

    //ambil data dari tabel kolom jawaban dari id user
    public static function Kom_Jawaban_getbyidUser($id_cari)
    {
        $kom_jawaban                =   DB::table('komentar_jawaban')->where('id_user',$id_cari);
        return $kom_jawaban;
    }

    //ambil data dari tabel kolom jawaban dari id pertanyaan
    public static function Kom_Jawaban_getbyidPertanyaan($id_cari)
    {
        $kom_jawaban                =   DB::table('komentar_jawaban')->where('id_pertanyaan',$id_cari);
        return $kom_jawaban;
    }

    // -----------------------------------------------------------------------------------
    //ambil data user dari id user
    public static function User_getbyidUser($id_cari)
    {
        $user                       =   DB::table('user_stack')->where('id_user',$id_cari);
        return $user;
    }

    // -----------------------------------------------------------------------------------
    public static function poin_getbyidPoin($id_cari)
    {
        $poin                       =   DB::table('poin')->where('id_poin',$id_cari);
        return $poin;
    }

    public static function poin_getbyidUser($id_cari)
    {
        $poin                       =   DB::table('poin')->where('id_user',$id_cari);
        return $poin;
    }

    public static function poin_getbyidJawaban($id_cari)
    {
        $poin                       =   DB::table('poin')->where('id_jawaban',$id_cari);
        return $poin;
    }




}

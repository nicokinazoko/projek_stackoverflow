<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class modelStack
{
    public static function getAllPertanyaan()
    {
        $pertanyaan = DB::table('pertanyaan')->get();
        return $pertanyaan;
    }
    public static function getAllJawaban()
    {
        $jawaban = DB::table('jawaban')->get();
        return $jawaban;
    }
    public static function getAllUsers()
    {
        $user = DB::table('users')->get();
        return $user;
    }

    public static function find_by_id($id){
        $users = DB::table('users')->where('id',$id)->first();
        return $users;
    }

    public static function deletePertanyaan($id)
    {
        $articel = DB::table('pertanyaan')->where('id', $id)->delete();
        return $articel;
    }
    public static function deleteJawaban($id)
    {
        $articel = DB::table('jawaban')->where('id', $id)->delete();
        return $articel;
    }
    public static function deleteUser($id)
    {
        $articel = DB::table('users')->where('id', $id)->delete();
        return $articel;
    }

    public static function savePertanyaan($data){
        $new_pertanyaan = DB::table('pertanyaan')->insert($data);
        return $new_pertanyaan;
    }

    // public static function update($id,$request){
    //     $articel = DB::table('articels')
    //         ->where('id',$id)
    //         ->update([
    //             'judul' => $request["judul"],
    //             'isi' => $request["isi"],
    //             'tag' => $request["tag"],
    //             'slug' => $request["slug"]
    //         ]);
    //     return $articel;
    // }
}

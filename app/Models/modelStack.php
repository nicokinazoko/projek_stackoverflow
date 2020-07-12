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
    public static function getJawaban_byid($id)
    {
        $jawaban = DB::table('jawaban')->where('pertanyaan_id', $id)->get();
        return $jawaban;
    }

    public static function Jawaban_findbyid($id)
    {
        $jawaban = DB::table('jawaban')->where('id', $id)->first();
        return $jawaban;
    }

    public static function UpdateJawaban($id, $request)
    {
        $jawaban = DB::table('jawaban')
            ->where('id', $id)
            ->update([
                'isi' => $request["isi"],
                'user_id' => $request["user_id"],
                'pertanyaan_id' => $request["pertanyaan_id"]
            ]);
        return $jawaban;
    }

    public static function getAllUsers()
    {
        $user = DB::table('users')->get();
        return $user;
    }

    public static function find_by_id($id)
    {
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        return $pertanyaan;
    }

    public static function deletePertanyaan($id)
    {
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->delete();
        return $pertanyaan;
    }
    public static function deleteJawaban($id)
    {
        $jawaban = DB::table('jawaban')->where('id', $id)->delete();
        return $jawaban;
    }
    public static function deleteUser($id)
    {
        $articel = DB::table('users')->where('id', $id)->delete();
        return $articel;
    }

    public static function savePertanyaan($data)
    {
        $new_pertanyaan = DB::table('pertanyaan')->insert($data);
        return $new_pertanyaan;
    }

    public static function saveJawaban($data)
    {
        $new_jawaban = DB::table('jawaban')->insert($data);
        return $new_jawaban;
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

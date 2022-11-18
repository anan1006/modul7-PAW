<?php

namespace App\Models;
 
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\MahasiswaController;

class MahasiswaModel extends Model
{
    public function allData(){
        return DB::table('tbl_mahasiswa')->get();
    }

    public function detailData($id){
        return DB::table('tbl_mahasiswa')->where('id',$id)->first();
    }

    public function tambahData($data){
        DB::table('tbl_mahasiswa')->insert($data);
    }

    public function editData($id, $data){
        DB::table('tbl_mahasiswa')->where('id',$id)->update($data);
    }

    public function hapus($id){
        DB::table('tbl_mahasiswa')
        ->where('id',$id)
        ->delete();
    }
}

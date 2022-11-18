<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MahasiswaModel;



class MahasiswaController extends Controller
{
    public function __construct(){
        $this->MahasiswaModel = new MahasiswaModel();
    }

    public function index(){
        $data = [
            'mahasiswa' => $this -> MahasiswaModel -> allData(),
            'title' => "Home",
        ];
        return view('home', $data);
    }

    public function add(){
        $data = [
            'title' => 'Tambah Data',
        ];
        return view('tambah', $data);
    }

    public function tambah(){
        Request()->validate([
            'nama_mhs' => 'required',
            'nim' => 'required',
            'email' => 'required',
            'alamat' => 'required',
        ]);

        $data = [
            'nama_mhs' => Request()->nama_mhs,
            'nim' => Request()->nim,
            'email' => Request()->email,
            'alamat' => Request()->alamat,
        ];

        $this->MahasiswaModel->tambahData($data);
        return redirect()->route('mahasiswa')->with('pesan','Data Berhasil Ditambahkan');
    }

    public function edit($id){
        if(!$this->MahasiswaModel->detailData($id)){
            abort(404);
        }

        $data = [
            'title'=>'Edit',
            'mhs' => $this->MahasiswaModel->detailData($id),
        ];
        return view('editmhs',$data);
    }

    public function editData($id){
        Request()->validate([
            'nama_mhs' => 'required',
            'nim' => 'required',
            'email' => 'required',
            'alamat' => 'required',
        ]);

        $data = [
            'nama_mhs' => Request()->nama_mhs,
            'nim' => Request()->nim,
            'email' => Request()->email,
            'alamat' => Request()->alamat,
        ];

        $this->MahasiswaModel->editData($id,$data);
        return redirect()->route('mahasiswa')->with('pesan','Data Berhasil Diubah');
    }

    public function hapus($id){
        $this->MahasiswaModel->hapus($id);
        return redirect()->route('mahasiswa')->with('pesan','Data Berhasil Dihapus');
    }

}

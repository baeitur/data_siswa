<?php

namespace App\Controllers;

use App\Models\DataSiswaModel;
use App\Controllers\BaseController;

class DataSiswa extends BaseController
{

    public function __construct()
    {
        $this->dataSiswaModel = new DataSiswaModel();
    }

    public function index()
    {
        $data_siswa = $this->dataSiswaModel->getDataSiswa();

        $data = [
            'title' => 'Kelompok 3 | Data Siswa',
            'data_siswa' => $data_siswa
        ];

        //dd($data_siswa);
        return view('data_siswa/index', $data);
    }

    public function add()
    {

        $data = [
            'title' => 'Kelompok 3 | Tambah Data Siswa',
            'validation' => \Config\Services::validation(),
        ];

        return view('data_siswa/add', $data);
    }

    public function simpan()
    {
        $validasi = [
            'nis' => [
                'rules' => 'required|is_unique[siswa.nis]',
                'errors' => [
                    'required' => 'NIS harus di isi',
                    'is_unique' => 'NIS sudah terdaftar'
                ]
            ],
            'nama_siswa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Siswa harus di isi'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis Kelamin harus di isi'
                ]
            ],
            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat Lahir harus di isi'
                ]
            ],
            'tgl_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal Lahir harus di isi'
                ]
            ],

            'image' => [
                'rules' => 'max_size[image,1024]|is_image[image]|mime_in[image,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran gambar telalu besar',
                    'mime_in' => 'File yang di upload bukan gambar',
                    'is_image' => 'File yang di upload bukan gambar'
                ]
            ]
        ];

        if (!$this->validate($validasi)) {
            return redirect()->to('/data_siswa/add')->withInput();
        }

        //cara nangkap form type file
        $img = $this->request->getFile('image');
        // genered nama file
        $nama_img = $img->getRandomName();
        // pindah file
        $img->move("img/img_siswa/", $nama_img);

        $data_siswa = [
            'nis'           => $this->request->getVar('nis'),
            'nama_siswa'    => $this->request->getVar('nama_siswa'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'tempat_lahir'  => $this->request->getVar('tempat_lahir'),
            'tgl_lahir'     => $this->request->getVar('tgl_lahir'),
            'agama'         => $this->request->getVar('agama'),
            'alamat'        => $this->request->getVar('alamat'),
            'asal_sekolah'  => $this->request->getVar('asal_sekolah'),
            'nama_ayah'     => $this->request->getVar('nama_ayah'),
            'nama_ibu'      => $this->request->getVar('nama_ibu'),
            'image'         => $nama_img,
        ];


        $this->dataSiswaModel->save($data_siswa);

        session()->setFlashdata('pesan', 'Data berhasil di simpan');

        return redirect()->to('/data_siswa');
    }

    public function delete($id)
    {
        $this->dataSiswaModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil di hapus');
        return redirect()->to('/data_siswa');
    }
}

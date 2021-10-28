<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Database\Query;

use CodeIgniter\Model;

class DataSiswaModel extends Model
{
    protected $table = 'siswa';
    protected $useTimestamps = true;
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id',
        'nis',
        'nama_siswa',
        'jenis_kelamin',
        'tempat_lahir',
        'tgl_lahir',
        'agama',
        'alamat',
        'asal_sekolah',
        'nama_ayah',
        'nama_ibu',
        'image',
        'created_at',
        'updated_at'
    ];

    public function getDataSiswa($id = false)
    {
        if ($id == false) {
            $builder = $this->findAll();
            return $builder;
        }
        $builder = $this->where(['id' => $id])->first();
        return $builder;
    }
}

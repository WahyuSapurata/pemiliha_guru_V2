<?php

namespace App\Models;

use CodeIgniter\Model;

class M_alternatif extends Model
{
    protected $table      = 'alternatif';
    protected $primaryKey = 'id_alternatif';
    // protected $useTimestamps = true;
    protected $allowedFields = ['id_data', 'ipk', 'pendidikan', 'tkd', 'wawancara'];

    public function join_alternatif()
    {
        $query = $this->db->table('alternatif')
            ->join('data', 'alternatif.id_data = data.id_data')
            ->where('data.id_data = alternatif.id_data')
            ->get();
        return $query->getResultArray();
    }
}

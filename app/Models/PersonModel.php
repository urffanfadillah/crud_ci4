<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonModel extends Model
{
    protected $table = 'person';
    public function getPerson($id = false)
    {
        if ($id === false) {
            return $this->table('person')
                ->get()
                ->getResultArray();
        } else {
            return $this->table('person')
                ->where('id', $id)
                ->get()
                ->getRowArray();
        }
    }
    public function insert_person($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
    public function update_person($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['id' => $id]);
    }
    public function delete_person($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }
}

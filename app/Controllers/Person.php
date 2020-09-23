<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PersonModel;

class Person extends Controller
{
    public function __construct()
    {
        $this->person = new PersonModel();
    }
    public function index()
    {
        $data['person'] = $this->person->getPerson();
        return view('person/index', $data);
    }
    public function create()
    {
        return view('person/create');
    }
    public function store()
    {
        $name = $this->request->getPost('person_name');
        $email = $this->request->getPost('email');
        $alamat = $this->request->getPost('alamat');

        $data = [
            'person_name' => $name,
            'email' => $email,
            'alamat' => $alamat
        ];

        $simpan = $this->person->insert_person($data);
        if ($simpan) {
            session()->setFlashdata('success', 'Person sudah berhasil di buat!');
            return redirect()->to(base_url('person'));
        }
    }
    public function edit($id)
    {
        $data['person'] = $this->person->getPerson($id);
        return view('person/edit', $data);
    }
    public function update($id)
    {
        $name = $this->request->getPost('person_name');
        $email = $this->request->getPost('email');
        $alamat = $this->request->getPost('alamat');

        $data = [
            'person_name' => $name,
            'email' => $email,
            'alamat' => $alamat
        ];

        $ubah = $this->person->update_person($data, $id);
        if ($ubah) {
            session()->setFlashdata('info', 'Person sudah berhasil di ubah!');
            return redirect()->to(base_url('person'));
        }
    }
    public function delete($id)
    {
        $hapus = $this->person->delete_person($id);

        if ($hapus) {
            session()->setFlashdata('warning', 'Person Berhasil di hapus');
            return redirect()->to(base_url('person'));
        }
    }
}

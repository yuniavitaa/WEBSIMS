<?php

namespace App\Controllers;

use App\Models\M_Form;

class Payment extends BaseController
{
    protected $M_Form;
    public function __construct()
    {
        $this->M_Form = new M_Form();
    }
    public function index()
    {
        $data = [
            'provinsi' => $this->M_Form->AllProvinsi(),
           ];
           $id_provinsi = $this->request->getPost('id_provinsi'); // Atau sesuaikan dengan data yang dikirimkan
           if ($id_provinsi) {
               $data['kabupaten'] = $this->M_Form->AllKabupaten($id_provinsi); // Mendapatkan data kabupaten berdasarkan provinsi
           } else {
               $data['kabupaten'] = []; // Atau inisialisasi sebagai array kosong
           }
       
           $data['validation'] = \Config\Services::validation();
           return view('frontend_form_payment', $data);
        }
        

    public function simpan()
{
    $rules = [
        'id_provinsi' => 'required'
    ];

    if (!$this->validate($rules)) {
        return redirect()->back()->withInput()->with('validation', $this->validator);
    }
    }

    public function Kabupaten()
    {
        $id_provinsi = $this->request->getPost('id_provinsi');
        $kab = $this->M_Form->AllKabupaten($id_provinsi);
        echo '<option value="">--Pilih Kabupaten/Kota--</option>';
        foreach ($kab as $key => $k) {
            echo "<option value=" . $k['id_kabupaten'] . ">" . $k['nama_kabupaten'] . "</option>";
        }
    }

    public function Kecamatan()
    {
        $id_kabupaten = $this->request->getPost('id_kabupaten');
        $kec = $this->M_Form->AllKecamatan($id_kabupaten);
        echo '<option value="">--Pilih Kecamatan--</option>';
        foreach ($kec as $key => $k) {
            echo "<option value=" . $k['id_kecamatan'] . ">" . $k['nama_kecamatan'] . "</option>";
        }
    } 
}

<?php

namespace App\Controllers;

use App\Models\PendaftaranAnggotaModel;

class PendaftaranAnggota extends BaseController
{
    public function index()
    {
        return view('pendaftaran_anggota');
    }

    public function kirim()
    {
        $validation = $this->validate([
            'namaLengkap' => 'required',
            'email' => 'required|valid_email',
            'nomorHp' => 'required|numeric',
            'domisili' => 'required',
            'perusahaan' => 'permit_empty',
            'jabatan' => 'permit_empty',
            'alamatPerusahaan' => 'permit_empty',
            'id_type' => 'required|in_list[ktp,sims,pasport]',
            'nomor_id' => 'required', // Validasi nomor ID
            'gender' => 'required|in_list[laki-laki,perempuan]',
            'payment_method' => 'required|in_list[transfer,gopay,shoppepay,dana]',
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('gagal', 'Silakan periksa kembali isian Anda!');
        }

        $data = [
            'nama_lengkap' => $this->request->getPost('namaLengkap'),
            'email' => $this->request->getPost('email'),
            'nomor_hp' => $this->request->getPost('nomorHp'),
            'domisili' => $this->request->getPost('domisili'),
            'perusahaan' => $this->request->getPost('perusahaan'),
            'jabatan' => $this->request->getPost('jabatan'),
            'alamat_perusahaan' => $this->request->getPost('alamatPerusahaan'),
            'id_type' => $this->request->getPost('id_type'),
            'nomor_id' => $this->request->getPost('nomor_id'),
            'gender' => $this->request->getPost('gender'),
            'payment_method' => $this->request->getPost('payment_method'),
        ];

        $model = new PendaftaranAnggotaModel();
        if ($model->save($data)) {
            return redirect()->back()->with('sukses', 'Data berhasil dikirim!');
        } else {
            return redirect()->back()->withInput()->with('gagal', 'Terjadi kesalahan saat menyimpan data.');
        }
    }
}

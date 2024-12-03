<?php

namespace App\Controllers;

use App\Models\PendaftaranAnggotaModel;

class PendaftaranAnggota extends BaseController
{
    public function index()
    {
        // Mengambil data pengguna yang login dari session
        $userData = session()->get();

        // Cek apakah pengguna sudah login
        if (!isset($userData['logged_in']) || !$userData['logged_in']) {
            return redirect()->to('/login');  // Arahkan ke halaman login jika tidak ada sesi login
        }

        // Kirim data pengguna yang login ke tampilan form pendaftaran
        $data = [
            'title' => 'Form Pendaftaran Anggota',
            'email' => $userData['email'],  // Email pengguna yang login
            'nama_lengkap' => $userData['fullname'] ?? '',  // Nama lengkap pengguna yang ada di session
            'nomor_hp' => '',  // Kosongkan atau sesuaikan dengan data pengguna jika perlu
            'domisili' => '',  // Kosongkan atau sesuaikan dengan data pengguna jika perlu
        ];

        // Tampilkan halaman form pendaftaran dengan data yang sudah ada
        return view('pendaftaran_anggota', $data);
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
            'nomor_id' => 'required',
            'gender' => 'required|in_list[laki-laki,perempuan]',
            'payment_method' => 'required|in_list[transfer,gopay,shoppepay,dana]',
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('gagal', 'Silakan periksa kembali isian Anda!');
        }

        $data = [
            'nama_lengkap' => $this->request->getPost('fullname'),
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
            // Tambah notifikasi
            $notifikasi = session()->get('notifikasi') ?? 0;
            session()->set('notifikasi', $notifikasi + 1);

            return redirect()->back()->with('sukses', 'Data berhasil dikirim!');
        } else {
            return redirect()->back()->withInput()->with('gagal', 'Terjadi kesalahan saat menyimpan data.');
        }
    }

    public function prosesUploadBukti()
    {
        $validation = $this->validate([
            'pendaftaran_id' => 'required|integer',
            'nama' => 'required',
            'email' => 'required|valid_email',
            'nomor_hp' => 'required|numeric',
            'payment_method' => 'required|in_list[transfer,gopay,shoppepay,dana]',
            'bukti_pembayaran' => 'uploaded[bukti_pembayaran]|max_size[bukti_pembayaran,2048]|is_image[bukti_pembayaran]|mime_in[bukti_pembayaran,image/png,image/jpg,image/jpeg]',
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('gagal', 'Silakan periksa kembali isian Anda!');
        }

        // Menangani file upload
        $file = $this->request->getFile('bukti_pembayaran');
        if ($file->isValid() && !$file->hasMoved()) {
            $fileName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $fileName);

            // Data yang akan disimpan ke database
            $model = new \App\Models\BuktiPembayaranModel();
            $model->save([
                'pendaftaran_id' => $this->request->getPost('pendaftaran_id'),
                'nama' => $this->request->getPost('nama'),
                'email' => $this->request->getPost('email'),
                'nomor_hp' => $this->request->getPost('nomor_hp'),
                'payment_method' => $this->request->getPost('payment_method'),
                'bukti_pembayaran' => $fileName,
            ]);
            session()->set('notifikasi', session()->get('notifikasi') - 1);

            return redirect()->back()->with('sukses', 'Bukti pembayaran berhasil diupload!');
        } else {
            return redirect()->back()->withInput()->with('gagal', 'Gagal mengupload bukti pembayaran.');
        }
    }
}

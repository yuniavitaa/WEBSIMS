<?php

namespace App\Controllers;

use App\Models\ContactUsModel;

class ContactUs extends BaseController
{
    public function contact_us()
    {
        return view('frontend_contact_us');
    }

    public function saveMessage()
    {
        $model = new ContactUsModel();

        // Ambil data dari POST
        $data = [
            'keperluan' => $this->request->getPost('keperluan'),
            'pesan'     => $this->request->getPost('pesan'),
        ];

        // Insert ke database
        if ($model->insert($data)) {
            // Kembalikan response sukses (dalam format JSON)
            return $this->response->setJSON(['status' => 'success', 'message' => 'Pesan berhasil dikirim']);
        } else {
            // Kembalikan response error
            return $this->response->setJSON(['status' => 'error', 'message' => 'Pesan gagal dikirim']);
        }
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class BuktiPembayaranModel extends Model
{
    protected $table = 'bukti_pembayaran';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'pendaftaran_id', 
        'nama', 
        'email', 
        'nomor_hp', 
        'payment_method', 
        'bukti_pembayaran', 
        'created_at', 
        'updated_at'
    ];
    protected $useTimestamps = true;  // Mengaktifkan pengisian otomatis untuk created_at dan updated_at
}

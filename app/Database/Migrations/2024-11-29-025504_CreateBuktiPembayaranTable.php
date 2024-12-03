<?php


namespace App\Database\Migrations;


use CodeIgniter\Database\Migration;


class CreateBuktiPembayaranTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => [
                'type'           => 'INT',
                'unsigned'      => true,
                'auto_increment' => true,
            ],
            'pendaftaran_id' => [
                'type'           => 'INT',
                'unsigned'      => true,
            ],
            'nama'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'email'         => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'nomor_hp'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
            ],
            'payment_method' => [
                'type'           => 'ENUM',
                'constraint'     => ['transfer', 'gopay', 'shoppepay', 'dana'],
            ],
            'bukti_pembayaran' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'created_at'    => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at'    => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);

        // Menambahkan primary key
        $this->forge->addPrimaryKey('id');

        // Menambahkan foreign key ke tabel pendaftaran_anggota
        $this->forge->addForeignKey('pendaftaran_id', 'pendaftaran_anggota', 'id', 'CASCADE', 'CASCADE');

        // Membuat tabel
        $this->forge->createTable('bukti_pembayaran');
    }


    public function down()
    {
        $this->forge->dropTable('bukti_pembayaran');
    }
}

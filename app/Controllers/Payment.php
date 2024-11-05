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
}


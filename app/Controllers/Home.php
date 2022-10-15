<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Home';
        echo view('home/home', $data);
        echo view('admin/tambah-data/tambah_data');
    }

    public function blocked_admin()
    {
        $data['title'] = 'Eror 404';
        return view('eror/blocked-admin', $data);
    }

    public function blocked_ketua()
    {
        $data['title'] = 'Eror 404';
        return view('eror/blocked-ketua', $data);
    }
}

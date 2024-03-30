<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Unipdu Press',
            //'tes' => ['satu', 'dua', 'tiga']
        ];
        return view ('page/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | Unipdu Press',
        ];
        return view ('page/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'alamat' => [
                ['tipe' => 'Rumah','alamat' => 'Desa Kendalsari,Sugihwaras','kota' => 'Jombang',],
                ['tipe' => 'Kantor','alamat' => 'Kompleks Ponpes Darul Ulum Peterongan','kota' => 'Jombang',]
            ]
        ];
        return view ('page/contact', $data);
    }


}
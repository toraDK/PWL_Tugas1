<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function food(){
        $data = [
            "food" => [
                "Nasi Goreng",
                "Rendang",
                "Sate Ayam",
                "Soto Ayam",
                "Gado-Gado"
            ],
            "beverage" => [
                "Es Teh Manis",
                "Kopi Susu",
                "Jus Alpukat",
                "Wedang Jahe",
                "Es Cendol"
            ]
        ];

        return view('products', $data);
    }

    public function beauty(){
        $data = [
            "beauty" => [
                "skincare",
                "Makeup",
                "Vitamin",
                "Obat Herbal",
                "Haircare"
            ]
        ];

        return view('products', $data);
    }

    public function home(){
        $data = [
            "home" => [
                "Sabun Cuci Piring",
                "Detergen",
                "Vitamin",
                "Pembersih Kaca",
                "Desinfektan"
            ]
        ];

        return view('products', $data);
    }

    public function baby(){
        $data = [
            "baby" => [
                "Popok Bayi",
                "Tisu Basah Bayi",
                "Bedak",
                "Susu Formula",
                "Minyak Telon"
            ]
        ];

        return view('products', $data);
    }
}

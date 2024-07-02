<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show() {
        $products = [
                'AGN' => 'https://cdn.myanimelist.net/images/anime/12/39497.jpg',
                'AGD' => 'Boku No Pico',
                'AGP' => 'Rating: 1/10',
                'AMN' => 'https://qph.cf2.quoracdn.net/main-qimg-5a4c947674b62192740823431b2cc41a-lq',
                'AMD' => 'Morphosis',
                'AMP' => 'Rating 10/10',
                'GCN' => 'https://upload.wikimedia.org/wikipedia/en/5/5a/Boku_no_Hero_Academia_Volume_1.png',
                'GCD' => 'Boku No Hero Academia',
                'GCP' => 'Rating: 10/10',
        ];
        return view('/shoes', $products);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show() {
        $products = [
                'AGN' => 'Air Gordan F1',
                'AGD' => 'First Gordan Air Force Shoe by Nike.',
                'AGP' => 39.99,
                'AMN' => 'Adiddas M2 Black',
                'AMD' => 'Adiddas Second Version of M.',
                'AMP' => 19.99,
                'GCN' => 'Gucci Wild Leopard',
                'GCD' => 'Gucci Shoe leopard version.',
                'GCP' => 14.99,
        ];
        return view('/shoes', $products);
    }
}

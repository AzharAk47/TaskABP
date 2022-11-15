<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product = Product::all();
        return view('product.index', compact('product'));
    }
    public function create(){
        return view ("product.create");
    }
    public function store(Request $req){
        Product::create($req->all());
        return redirect()->route('product')->with('success', 'Produk Berhasil di Tambahkan');
    }
    public function edit(){
        return view ("product.edit");
    }
}

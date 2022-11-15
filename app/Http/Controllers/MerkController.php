<?php

namespace App\Http\Controllers;

use App\Models\Merk;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $merk = Merk::all();
        return view('Merk/index') ->with([
            'merk' => $merk
        ]);
    }
    public function create()
    {
        return view('Merk/create');
    }
    
    public function store(Request $request)
    {
        $name = $request->post('name');
    
        $merk = new Brand();
        $merk->name = $name;
        $merk->save();
    
        return redirect(route('Merk.index'))->withMessage('Data berhasil ditambahkan!');
    }
    public function edit($id)
    {
        $merk = Merk::findOrFail($id);
    
        return view('Merk/edit')->with([
            'merk' => $merk
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $name = $request->post('name');
        $address = $request->post('address');
    
        $merk = Merk::findOrFail($id);
        $merk->name = $name;
        $merk->address = $address;
        $merk->save();
    
        return redirect(route('Merk.index'))->withMessage('Data berhasil diupdate!');
    }
    public function show($id){
	    $merke = Merk::findOrFail($id);

	    return view('Merk/tampil')->with([
		    'merk' => $merk
	    ]);
    }
    public function destroy($id){
	    $merk = Merk::findOrFail($id);
	    $merk->delete();
        return redirect(route('Merk.index'))->withMessage('Data berhasil dihapus!');
    }
}



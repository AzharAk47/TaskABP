<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function index(){
        $warehouse = Warehouse::all();
        return view('Gudangku/index') ->with([
            'warehouse' => $warehouse
        ]);
    }
    public function create()
    {
        return view('Gudangku/create');
    }
    
    public function store(Request $request)
    {
        $name = $request->post('name');
        $address = $request->post('address');
    
        $warehouse = new Warehouse();
        $warehouse->name = $name;
        $warehouse->address = $address;
        $warehouse->save();
    
        return redirect(route('Gudangku.index'))->withMessage('Data berhasil ditambahkan!');
    }
    public function edit($id)
    {
        $warehouse = Warehouse::findOrFail($id);
    
        return view('Gudangku/edit')->with([
            'warehouse' => $warehouse
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $name = $request->post('name');
        $address = $request->post('address');
    
        $warehouse = Warehouse::findOrFail($id);
        $warehouse->name = $name;
        $warehouse->address = $address;
        $warehouse->save();
    
        return redirect(route('Gudangku.index'))->withMessage('Data berhasil diupdate!');
    }
    public function show($id){
	    $warehouse = Warehouse::findOrFail($id);

	    return view('Gudangku/tampil')->with([
		    'warehouse' => $warehouse
	    ]);
    }
    public function destroy($id){
	    $warehouse = Warehouse::findOrFail($id);
	    $warehouse->delete();
        return redirect(route('Gudangku.index'))->withMessage('Data berhasil dihapus!');
    }
}

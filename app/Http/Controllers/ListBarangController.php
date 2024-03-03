<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Laravel\Prompts\table;

class ListBarangController extends Controller
{

    public function getData()
    {
     //logika untuk mendapatkan array data
    $dataBarang = [
        ['id' => 1, 'nama' => 'Beras Pandan Wangi', 'harga' => 15000],
        ['id' => 2, 'nama' => 'Tepung Terigu', 'harga' => 20000],
        ['id' => 3, 'nama' => 'Baygon Cair', 'harga' => 13500],
        ['id' => 4, 'nama' => 'Penyedap Royco', 'harga' => 3200],
        ['id' => 5, 'nama' => 'Minyak Goreng', 'harga' => 14000],
    ];

    return $dataBarang;
    }
    // function tampilkan($id, $nama){
    //     return view('list_barang', ['id' => $id, 'nama' => $nama]);

    public function tampilkan(){
        $data = $this->getData();
        return view('list_barang', compact('data'));
    }
}

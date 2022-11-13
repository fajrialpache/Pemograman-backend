<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public $animals = ["Ayam", "ikan", "kucing"];
    public function index()
    {
        echo "Menampilkan data hewan" . "</br>";
        foreach ($this->animals as $hewan) {
            echo "-" . $hewan . "</br>";
        }
    }

    public function store(Request $request)
    {
        echo "Menambahkan Hewan baru" . "</br>";
        $data = $request->only('hewan');
        array_push($this->animals, $data["hewan"]);
        $this->index();
    }

    public function update(Request $request, $id)
    {
        echo "Mengubah Hewan baru" . "</br>";
        $data = $request->only('hewan');
        $this->animals[$id] = $data['hewan'];
        $this->index();
    }

    public function destroy($id)
    {
        echo "Menghapus Hewan" . "</br>";
        unset($this->animals[$id]);
        $this->index();
    }
}

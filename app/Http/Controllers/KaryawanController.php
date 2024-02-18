<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\DashboardController;

class KaryawanController extends Controller
{
    public function index(Request $request)
    {
        $karyawan = DB::table('karyawan')->get();

        $name = DB::select("SELECT name FROM karyawan");
        $age = DB::select("SELECT age FROM karyawan");
        $alamat = DB::select("SELECT alamat FROM karyawan");
        $telp = DB::select("SELECT telp FROM karyawan");

        return view('karyawan.index', compact('karyawan', 'name', 'age', 'alamat', 'telp'));
    }

    public function create(Karyawan $karyawan)
    {
        return view('karyawan.create', compact('karyawan'));
    }

    public function store(Request $request, Karyawan $karyawan)
    {
        Karyawan::create([
            'name'=>$request->name,
            'age'=>$request->age,
            'alamat'=>$request->alamat,
            'telp'=>$request->telp
        ]);

        return redirect()->route('karyawan.index')->with('message', 'Data Berhasil Ditambah');
    }

    public function edit(Karyawan $karyawan)
    {
        return view('karyawan.edit', compact('karyawan'));
    }

    public function update(Request $request, Karyawan $karyawan)
    {
        $karyawan->update([
            'name'=>$request->name,
            'age'=>$request->age,
            'alamat'=>$request->alamat,
            'telp'=>$request->telp
        ]);
        return redirect()->route('karyawan.index')->with('message', 'Data Berhasil Di Update');
    }

    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();
        return redirect()->route('karyawan.index')->with('message', 'Data Berhasil Dihapus');
    }
}

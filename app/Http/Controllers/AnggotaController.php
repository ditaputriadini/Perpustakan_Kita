<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AnggotaExport;
use PDF;

//panggil model BukuModel
use App\Models\AnggotaModel;

class AnggotaController extends Controller
{
    //method untuk tampil data anggota
    public function anggotatampil()
    {
        $dataanggota = AnggotaModel::orderby('nim', 'ASC')
        ->paginate(10);

        return view('halaman.view_anggota',['anggota'=>$dataanggota]);
    }

    //method untuk tambah data anggota
    public function anggotatambah(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama_anggota' => 'required',
            'prodi' => 'required',
            'hp' => 'required'
        ]);

        AnggotaModel::create([
            'nim' => $request->nim,
            'nama_anggota' => $request->nama_anggota,
            'prodi' => $request->prodi,
            'hp' => $request->hp
        ]);

        return redirect('/anggota');
    }

     //method untuk hapus data anggota
     public function anggotahapus($id_anggota)
     {
         $dataanggota=AnggotaModel::find($id_anggota);
         $dataanggota->delete();

         return redirect()->back();
     }

     //method untuk edit data anggota
    public function anggotaedit($id_anggota, Request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama_anggota' => 'required',
            'prodi' => 'required',
            'hp' => 'required'
        ]);

        $id_anggota = AnggotaModel::find($id_anggota);
        $id_anggota->nim   = $request->nim;
        $id_anggota->nama_anggota      = $request->nama_anggota;
        $id_anggota->prodi  = $request->prodi;
        $id_anggota->hp   = $request->hp;

        $id_anggota->save();

        return redirect()->back();
    }

    public function ExportExcel()
    {
        return Excel::download(new AnggotaExport, 'anggota.xlsx');
    }

    public function ExportPdf()
    {
        $anggota = AnggotaModel::all();

        $pdf = PDF::loadView('export_pdf_anggota', compact('anggota'));

        return $pdf->download('anggota.pdf');
    }
}

<?php

namespace App\Exports;

use App\Models\AnggotaModel;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AnggotaExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return AnggotaModel::all(); // Ambil semua data dari tabel 'anggota'
    }

    public function headings(): array
    {
        return [
            'id_anggota',
            'nim',
            'nama_anggota',
            'prodi',
            'hp',
            'created_at',
            'updated_at',
        ];
    }

    public function createPDF()
    {
        $pdf = PDF::loadView('exports.buku', ['data' => $this->collection()]);
        return $pdf->download('buku.pdf');
    }
}
// class BukuExport implements FromView, WithStyles, ShouldAutoSize
// {
//     public function styles(Worksheet $sheet)
//     {
//         return [
//             1 => ['font' => ['bold' => true]],
//         ];
//     }

//     public function view(): View
//     {
//         return view('export_excel', [
//             'buku' => BukuModel::all()
//         ]);
//     }

// }

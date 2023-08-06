<?php

namespace App\Exports;

use App\Models\PinjamModel;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PinjamExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return PinjamModel::all(); // Ambil semua data dari tabel 'peminjaman'
    }

    public function headings(): array
    {
        return [
            'id_pinjam',
            'id_petugas',
            'id_anggota',
            'id_buku',
            'created_at',
            'updated_at',
        ];
    }

    public function createPDF()
    {
        $pdf = PDF::loadView('exports.pinjam', ['data' => $this->collection()]);
        return $pdf->download('pinjam.pdf');
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

<?php

namespace App\Exports;

use App\Models\BukuModel;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BukuExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return BukuModel::all(); // Ambil semua data dari tabel 'buku'
    }

    public function headings(): array
    {
        return [
            'id_buku',
            'kode_buku',
            'judul',
            'pengarang',
            'kategori',
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

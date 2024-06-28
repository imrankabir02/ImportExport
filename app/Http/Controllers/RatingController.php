<?php

namespace App\Http\Controllers;

use PDF;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Rating;
use Illuminate\Http\Request;
use App\Exports\RatingExport;
use App\Imports\RatingImport;
use Maatwebsite\Excel\Facades\Excel;

class RatingController extends Controller
{
    public function index()
    {
        $ratings = Rating::paginate(50);
        return view('ratings.index', compact('ratings'));
    }
    public function showUploadForm()
    {
        return view('ratings.upload');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx',
        ]);

        Excel::import(new RatingImport, $request->file('file'));

        return redirect()->route('ratings.index')->with('success', 'Rating data imported successfully.');
    }

    public function exportCsv()
    {
        return Excel::download(new RatingExport, 'ratings.csv');
    }

    public function exportPdf()
    {
        // Increase execution time
        set_time_limit(300);

        // Fetch the ratings with optimization
        $ratings = Rating::limit(1000)->get(); // Limit the number of records

        // Load view and convert to HTML
        $html = view('ratings.pdf', compact('ratings'))->render();

        // Initialize Dompdf with options
        $options = new Options();
        $options->set('defaultFont', 'Courier');
        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);

        // Set paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        return $dompdf->stream('ratings.pdf');
    }
}

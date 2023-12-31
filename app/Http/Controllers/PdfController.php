<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\Models\Manager;
use Illuminate\Support\Facades\View;


class PdfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function generatePDF()
    {
        $data= Manager::all(); // Votre tableau de données
        $y=$data->count();
        $x = Manager::where('total', '!=', null)->sum('total');

        $pdf = PDF::loadView('pdf.template', ['data' => $data,'x'=>$x,'y'=>$y]);

        return $pdf->download('tableau.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

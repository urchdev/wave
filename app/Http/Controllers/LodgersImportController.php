<?php

namespace App\Http\Controllers;

use App\Models\Lodger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Excel;
use App\Imports\LodgersImport;

class LodgersImportController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function importForm()
    {
        return view('/vendor/voyager/vendor/import-excel-csv-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function import(Request $request)
    {
        //Excel::readdir()
        try{
            Excel::import(new lodgersImport, $request->file);
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            $failures = $e->failures();
            foreach ($failures as $failure) {
                $failure->row(); // row that went wrong
                $failure->attribute(); // either heading key (if using heading row concern) or column index
                $failure->errors(); // Actual error messages from Laravel validator
                $failure->values(); // The values of the row that has failed.
            }           
        }
        $saveDetails = [
                'success' => 1,
                'message' => 'File successfully imported!', 
            ];
        return redirect()->back()->with($saveDetails);
    }    

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lodger  $lodger
     * @return \Illuminate\Http\Response
     */
    public function show(Lodger $lodger)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lodger  $lodger
     * @return \Illuminate\Http\Response
     */
    public function edit(Lodger $lodger)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lodger  $lodger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lodger $lodger)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lodger  $lodger
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lodger $lodger)
    {
        //
    }

}


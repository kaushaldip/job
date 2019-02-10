<?php

namespace App\Http\Controllers\Hospital;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CV;
use App\Document;;
use Storage;

class HospitalController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('hospital');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hospital.home');
    }
    public function download_resume(CV $cv)
    {
        $file = Storage::disk('local')->getDriver()->getAdapter()->applyPathPrefix($cv->file);
        return response()->download($file,$cv->client_file,[]);
    }
    public function download_document(Document $document)
    {
        $file = Storage::disk('local')->getDriver()->getAdapter()->applyPathPrefix($document->file);
        return response()->download($file,$document->client_file,[]);
    }
}

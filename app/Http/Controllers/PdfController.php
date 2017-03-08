<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use File;
use Mail;
use Jenssegers\Date\Date;
class PdfController extends Controller
{
    public function index(Request $request){
        Date::setLocale('fr');

        $request =$request->toArray();
        $request['date'] = Date::now()->format('j F Y ');
        if($request['gender'] == 1){
            $request['final_gender'] = '';
        }else{
            $request['final_gender'] = 'e';
        }
        $pdf = PDF::loadView('view',array('data' => $request));
       

        return $pdf->download("filename.pdf");

        /*return view('view',array('data' => $request));*/

    }
}

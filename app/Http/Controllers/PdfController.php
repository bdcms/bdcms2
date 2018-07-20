<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB; 
use Session;
use Redirect;
class PdfController extends Controller
{
    public function makePDF(){
    	$data['check'] = 'hello';
    	$pdf = PDF::loadView('pdf.userpdf', $data);
		return $pdf->download('userpdf.pdf');
    }
    public function Print_Report(){ 
    	$data = DB::table('cars')
    			->join('carnames','cars.carname_id','=','carnames.id') 
    			->join('users','cars.owner_id','=','users.id')
    			->select('carnames.car_name','users.*','cars.*')
    			->where('cars.car_status',1)
    			->orderBy('cars.id', 'DESC')
    			->get();
    	$pdf = PDF::loadView('pdf.report', ['data'=>$data]);
		return $pdf->setPaper('a4','Landscape')->stream('userpdf.pdf');
    }

    public function owner_Report(){ 
        $owner = DB::table('users') 
                ->where('role_id',2) 
                ->where('pub_status',1)
                ->orderBy('id', 'DESC')
                ->get();
        $pdf = PDF::loadView('pdf.owner_report', ['owner'=>$owner]);
        return $pdf->setPaper('a4','Landscape')->stream('userpdf.pdf');
    }
    public function Driver_Report(){ 
        $data = DB::table('users') 
                ->where('role_id',3) 
                ->where('pub_status',1)
                ->orderBy('id', 'DESC')
                ->get();
        $pdf = PDF::loadView('pdf.owner_report', ['driver'=>$data]);
        return $pdf->setPaper('a4','Landscape')->stream('userpdf.pdf');
    }



}//Class Exit

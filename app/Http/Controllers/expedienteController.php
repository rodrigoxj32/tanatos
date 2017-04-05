<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Laracasts\Flash\Flash;
use App\Expediente;
use DB;

class expedienteController extends Controller
{
    public function show(Request $request){
        $expediente = DB::table('expediente')
        	->join("usuario","expediente.id","=","usuario.id")
            ->get();

        return view('expediente.index');

    }


    public function create(){



        
        return view('expediente.create');
        
        
    }

    public function index(){
        $expediente = DB::table('expediente')
        	->join("usuario","expediente.id","=","usuario.id")
            ->get();

        return view('expediente.index')->with('expedientes',$expediente);

    }

    public function verExpediente($id){
        $expedientes = Expediente::where("id","=",$id)->get();

        return view('expediente.vista')
        ->with('expedientes',$expediente);

    }

    

    public function destroy($id){

        $expediente = Expediente::where('id','=',$id)->get();

        foreach ($expediente as $exp) {
            $exp->id=null;
            $exp->save();
        }

        $expediente = Expediente::where('id', '=', $id)->delete();

        flash('Se ha borrado el expediente', 'danger' );

        return redirect()->route('expediente.index');

    
    }

    
}

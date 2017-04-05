<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Laracasts\Flash\Flash;
use App\Expediente;
use App\Cita;
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

    public function verExpedientes($id){
        $expedientes = Cita::where('idexpediente','=',$id)->get();

        $consulta = DB::table('expediente')
        	->join("usuario","expediente.id","=","usuario.id")
        	->join("estadocivil","usuario.idestadocivil","=","estadocivil.id")
        	->where('expediente.id','=',$id)
            ->get();

        $consulta2 = DB::table('expediente')
    	->join("historialclinico","expediente.idhistorialclinico","=","historialclinico.id")
    	->where('expediente.id','=',$id)
        ->get();

        return view('expediente.vista')
        ->with('expedientes',$expedientes)
        ->with('consulta',$consulta)
        ->with('consulta2',$consulta2);

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

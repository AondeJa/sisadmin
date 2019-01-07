<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carro;

class CarroController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $carros = Carro::all()->sortByDesc('dataEhora');
        return view('welcome',compact('carros'));
    }

    public function showReportes(){
        $carros = Carro::all()->sortByDesc('dataEhora');
        return view('reportes',compact('carros'));
    }

    public function analise(){
        $carros = Carro::all()->sortByDesc('dataEhora');
        return view('analise',compact('carros'));
    }

    public function update($id)
    {
        $car = Carro::findOrFail($id);
        $car->status = 'S';
        $car->save();
        return redirect()->back();
    }

    public function show($id){
        $car = Carro::findOrFail($id);
        return view('reporte_detalhado',compact('car'));
    }

    public function destroy($id)
    {
        $car = Carro::findOrFail($id);
        $car->delete();
        return redirect()->back();
    }

}

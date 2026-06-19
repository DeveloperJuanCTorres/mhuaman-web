<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Benefit;
use App\Models\Company;
use App\Models\Consultancy;
use App\Models\Evolution;
use App\Models\Item;
use App\Models\Team;
use App\Models\Technique;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SolicitudConsultoriaMail;
use App\Models\Course;
use App\Models\Customer;
use App\Models\Taxonomy;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $company = Company::first();
        $banners = Banner::all();
        $beneficio = Benefit::first();
        $clientes = Customer::all();
        $cursos = Course::with(['specialist.degree'])->where('active', 1)->limit(3)->get();
        return view('home', compact('company', 'banners', 'beneficio', 'clientes','cursos'));
    }

    public function about()
    {
        $company = Company::first();
        $nosotros = Item::first();
        $evolutions = Evolution::all();
        $equipo = Team::all();
        return view('about', compact('company', 'nosotros', 'evolutions', 'equipo'));
    }

    public function cursos()
    {
        $company = Company::first();
        $categorias = Taxonomy::all();
        $cursos = Course::with(['specialist.degree'])->where('active', 1)->get();
        return view('cursos', compact('company', 'cursos', 'categorias'));
    }

    public function clientes()
    {
        $company = Company::first();
        $clientes = Customer::all();
        return view('clientes', compact('company', 'clientes'));
    }

    public function consultoria()
    {
        $company = Company::first();
        $principal =Technique::first();
        $consultorias = Consultancy::all();
        return view('consultoria', compact('company', 'principal', 'consultorias'));
    }

    public function checkout()
    {
        $company = Company::first();
        return view('checkout', compact('company'));
    }

    public function enviar(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'servicio' => 'required',
            'mensaje' => 'required'
        ]);

        Mail::to('consultorias@mhcapacitaciones.com')->send(new SolicitudConsultoriaMail($request->all()));

        return back()->with('success', true);
    }
}

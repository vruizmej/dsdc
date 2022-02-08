<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicamento;

class MedicamentoController extends Controller
{
    public function index()
    {
        $medicamento = Medicamento::all();

        return view('medicamento.index', ['medicamento' => $medicamento]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Salario as Salario;
use App\Models\Colaborador as Colaborador;
use App\Http\Requests\SalarioRequest as SalarioRequest;

class SalarioController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\SalaryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalarioRequest $request, $id)
    {
        try {
            $colaborador = Colaborador::findOrFail($id);

            Salario::create(array_merge($request->all(), [
                'colaborador_id' => $id
            ]));
            
            return response()->json([
                "message" => "Salary record created successfully."
            ], 201);

        } catch(Exception $e) {
            return response()->json([
                "message" => "Salary could not be created.",
                "validation" => $e->getMessage()
            ], 400);
        }
    }
}

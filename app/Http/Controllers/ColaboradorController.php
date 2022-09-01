<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colaborador as Colaborador;
use App\Models\Salario as Salario;
use App\Http\Resources\ColaboradorResource as ColaboradorResource;
use App\Http\Requests\ColaboradorStoreRequest as ColaboradorStoreRequest;
use App\Http\Requests\ColaboradorUpdateRequest as ColaboradorUpdateRequest;
use Exception;

class ColaboradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colaboradores = Colaborador::paginate(10);
        return ColaboradorResource::collection($colaboradores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\ColaboradorStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ColaboradorStoreRequest $request)
    {
        try {
            Colaborador::create($request->all());
            
            return response()->json([
                "message" => "Employee record created successfully."
            ], 201);

        } catch(Exception $e) {
            return response()->json([
                "message" => "Employee could not be created.",
                "validation" => $e->getMessage()
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $colaborador = Colaborador::where('id', $id)
            ->orWhere('cpf', $id)->firstOrFail();

            $colaborador->salarios;

            return response($colaborador, 200);
        } catch(Exception $e) {
            return response()->json([
                "message" => "Employee not found.",
                "error" => $e->getMessage()
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ColaboradorUpdateRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ColaboradorUpdateRequest $request, $id)
    {
        try {
            $colaborador = Colaborador::findOrFail($request->id);
            $colaborador->update($request->all());
            
            return response()->json([
                "message" => "Employee record updated successfully."
            ], 200);

        } catch(Exception $e) {
            return response()->json([
                "message" => "Employee could not be updated.",
                "validation" => $e->getMessage()
            ], 400);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $colaborador = Colaborador::findOrFail($id);
            
            $colaborador->delete();
            
            return response()->json([
                "message" => "Employee record deleted successfully."
            ], 200);

        } catch(Exception $e) {
            return response()->json([
                "message" => "Employee could not be deleted.",
                "error" => $e->getMessage()
            ], 400);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers; 
use DateTime;


class CustomersController extends Controller
{
    
    public function get($id)
    {
        $clientes = Customers::find($id);
        return $clientes ? $clientes : 'não encontrado' ;
    }

    public function list()
    {
        
        $clientes = Customers::get();
        return $clientes;
    }

    public function create(Request $request)
    {

        $data_us = DateTime::createFromFormat('d/m/Y', $request->input('data_de_nascimento'));

        $array_insert = [
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'telefone' => $request->input('telefone'),
            'data_de_nascimento' => $data_us->format('Y-m-d'), // $request->input('data_de_nascimento'),
            'endereco' => $request->input('endereco'),
            'complemento' => $request->input('complemento'),
            'bairro' => $request->input('bairro'),
            'cep' => $request->input('cep')
        ];

        return Customers::create($array_insert);
    }

    public function alter(Request $request)
    {

        $customerObj = Customers::where('email',$request->input('email'))->first();
        $arrayUpdate = $request->input();
        unset($arrayUpdate['email']);
        
        if(!is_null($arrayUpdate['data_de_nascimento'])){
            $arrayUpdate['data_de_nascimento'] = DateTime::createFromFormat('d/m/Y', $arrayUpdate['data_de_nascimento'])->format('Y-m-d');
        } 

        return $customerObj->update($arrayUpdate);
    }

    public function delete(Request $request)
    {
        $customerObj = Customers::where('email',$request->input('email'))->first();

        return $customerObj->delete();
    }

}
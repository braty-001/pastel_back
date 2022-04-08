<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use DateTime;

class OrdersController extends Controller
{
    public function get($id)
    {
        $order = Orders::find($id);

        return $order ? $order : 'não encontrado' ;
    }

    public function list()
    {
        $orders = Orders::get();
        
        return $orders;
    }

    public function create(Request $request)
    {

        $array_insert = [
            'id_do_cliente' => $request->input('id_do_cliente'),
            'id_do_produto' => $request->input('id_do_produto'),
            'data_da_criacao' =>  DateTime::createFromFormat('d/m/Y', $arrayUpdate['data_da_criacao'])->format('Y-m-d')
        ];

        return Orders::create($array_insert);
    }

    public function alter(Request $request)
    {
        $orderObj = Orders::find($id);
        $arrayUpdate = $request->input();

        return $orderObj->update($arrayUpdate);
    }

    public function delete(Request $request)
    {
        $orderObj = Products::find($id);

        return $orderObj->delete();
    }

}

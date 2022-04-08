<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Response;

class ProductsController extends Controller
{
    public function get($id)
    {
        $product = Products::find($id);
        $product->foto = Image::make($product->foto);

        return $product ? $product : 'não encontrado' ;
    }

    public function list()
    {
        $products = Products::get();
        foreach ($products as $product) {
            $product->foto = Image::make($product->foto);
        }

        return $products;
    }

    public function create(Request $request)
    {

        if(!$request->hasFile('foto')){
            return false;
        }else{

            $image = $request->file('foto');
            $imageType = $image->getClientOriginalExtension();
            $image = (string) Image::make($request->file('foto'))->
                resize(300,null,function ($constraint){
                    $constraint->aspectRatio();
                })->encode($image->getClientOriginalExtension());
            $imageBd = base64_encode($image);
        }

        $array_insert = [
            'nome' => $request->input('nome'),
            'preco' => str_replace(',', '.', $request->input('preco')),
            'foto' => $imageBd,
            'tipo_foto' => $imageType
        ];

        return Products::create($array_insert);
    }

    public function alter(Request $request)
    {
        $productObj = Products::find($id);
        $arrayUpdate = $request->input();

        return $productObj->update($arrayUpdate);
    }

    public function delete(Request $request)
    {
        $productObj = Products::find($id);

        return $productObj->delete();
    }

}

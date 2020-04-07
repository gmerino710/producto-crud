<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;
use Dotenv\Validator;
use Illuminate\Auth\Events\Validated;

class Productos extends Controller
{


    public function inicio()
    {
        $productos = Producto::all();
        $data = array('produc'=>$productos);

       return view($view='App',$data);
    }


    public function store()
    {
        return view($view='Store');
    }

    public function save(Request $request)
    {/*
        $v = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
            */


        $prod = new Producto();

                $prod->nombre = $request->nombre;
                $prod->precio = $request->precio;
                $prod->existencia = $request->existencia;

                $this->validate($request, [
                    'nombre' => 'required|unique:producto|max:40',
                    'precio' => 'required|numeric',
                    'existencia' => 'required|numeric|max:200',
                ]);


                $prod->save();




        return redirect('');
    }


    public function destroy($id = null)
    {
        if ($id == null) {
            return redirect('');
        }else {
            $prod = Producto::find($id);
            $prod->delete();
            return redirect('');

        }

    }

    public function act(Request $request , $id = null)
    {
            if ($id == null and $request == null) {
                return redirect('');
             } else {
                $prod = Producto::where('id','=',$id)->first();

                $prod->nombre = $request->nombre;
                $prod->precio = $request->precio;
                $prod->existencia = $request->existencia;

               $this->validate($request, [
                    'nombre' => 'required|max:40',
                        'precio' => 'required|numeric|',
                    'existencia' => 'required|numeric|max:200',
                ]);


                $prod->save();

                return redirect('');
            }
    }



    public function edit($id = null, Request $request)
    {
        $producto = Producto::where('id','=',$id)->first();

        $data= array('old'=>$producto);

        if ($id == null) {
            return redirect('');
        }else {


            return view($view='Store',$data);

             }


    }



}

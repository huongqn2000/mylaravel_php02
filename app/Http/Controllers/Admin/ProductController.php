<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate();

        return view('backend.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.products.index');
    }

    public function data()
    {
        $products = Product::select(['id','name', 'description', 'price', 'created_at','updated_at']);

        return DataTables::of($products->get())
            ->addColumn('actions',function($product) {
                $actions = '<a href='. route('products.show', $product->id) .' title="view product"> View </a>
                        <a href='. route('products.edit', $product->id) .' title="update product"> Update </a>
                        <a href="javascript:;" class="delete link-danger" data-id="'.$product->id.'" title="delete product"> Delete </a>';
                return $actions;
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');

        Product::create(['name' => $name]);

        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return __FUNCTION__;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        if ($product)
        {
            return view('backend.products.edit', compact('product'));
        }

        return redirect(route('products.index'))
            ->with('msg', 'Cannot find the product');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if ($product)
        {
            $product->name = $request->input('name');
            $product->save();
        }

        return redirect(route('products.index'))
            ->with('msg', 'Update successful!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect(route('products.index'))
            ->with('msg', 'Delete successful!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $products = Products::paginate(4);
        $posts = Products::orderBy('product_code', 'asc')->paginate(5);
        return view('products.index', compact('products'), ['user' => $user])
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create()
    {
        $user = Auth::user();

        return view('products.create', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'product_code' => 'required',
            'product_name' => 'required',
            'product_category' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);

        Products::create($request->all());
        return redirect()->route('products.index', ['user' => $user])
            ->with('success', 'Products Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * 
     */
    public function show($product_id)
    {
        $user = Auth::user();

        $products = Products::find($product_id);
        // return view('products.detail', compact('Products'), ['user' => $user]);
        return view('products.detail', array(
            'products' => $products,
            'user' => $user,
        ));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * 
     */
    public function edit($product_code)
    {
        $user = Auth::user();

        $products = Products::find($product_code);
        return view('products.edit', compact('products'), ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * 
     */
    public function update(Request $request, $product_id)
    {
        $user = Auth::user();

        $request->validate([
            'product_code' => 'required',
            'product_name' => 'required',
            'product_category' => 'required',
            'price' => 'required',
            'quantity' => 'required',
        ]);

        Products::find($product_id)->update($request->all());
        return redirect()->route('products.index', ['user' => $user])
            ->with('success', 'Products Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     */
    public function destroy($product_id)
    {
        $user = Auth::user();

        Products::find($product_id)->delete();
        return redirect()->route('products.index', ['user' => $user])
            ->with('success', 'Products Deleted Successfully');
    }

    public function search(Request $request)
    {
        $user = Auth::user();

        $keyword = $request->search;
        $products = Products::where('product_name', 'like', "%" . $keyword . "%")->paginate(5);
        return view('products.index', compact('products'), ['user' => $user])->with('i', (request()->input('page', 1) - 1) * 5);
    }
}

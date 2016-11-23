<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;

class ProductsController extends Controller
{
	/**
	 * ProductRepository object
	 */
	protected $repo;
	
	
	/**
	 * CategoryRepository instance
	 */
	 protected $category;
	 
	/**
	 * Constructor
	 * 
	 * @param ProductRepository $product
	 * @return void
	 */
	public function __construct(ProductRepository $product, CategoryRepository $category)
	{
		$this->repo = $product;
		$this->category = $category;
	}
	
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = $this->repo->getPaginate(10);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::lists('category', 'id');
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->get('name');
        $product->category_id = $request->get('category_id');
        $product->description = $request->get('description');
        $product->stock = $request->get('stock');

        $message = 'Product saved successfully';
        $product->save();
        return redirect('edit/'. $qoute->id)->withMessage($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::lists('category', 'id');
        return view('products.edit', ['product' => $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $input = Input::all();
        $validation = Validator::make($input);

        if($validation->passes())
        {
            $product = Product::find($id);
            $product->update($input);

            return Redirect::route('products.show', $id);
        } 

        return Redirect::route('products.edit', $id)->withInput()->withErrors($validation)->with('message', 'Error saving product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $product = products::find($id);
        if($product)
        {
            $product->delete();
            $data['message'] = 'product deleted Successfully';
        }
        else 
        {
            $data['errors'] = 'Invalid Operation. You have not sufficient permissions';
        }
        
        return redirect('/')->with($data);
    }
}

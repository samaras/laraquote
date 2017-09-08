<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Input;

class CategoriesController extends Controller
{
    protected $page_title = 'Categories';

    /**
     * CategoryRepository instance
     */
    protected $repo;

    /**
     * ProductRepository instance
     */
    protected $product;

    /**
     * Constructor 
     *
     * @param CategoryRepository $category
     * @return void
     */
    public function __construct(CategoryRepository $category, ProductRepository $product)
    {
        $this->repo = $category;
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = $this->repo->getPaginate(10);
        return view('categories.index', compact('categories', 'page_title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = $this->repo->getCategories();
        return view('categories.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $qoute = new Category();
        $qoute->category = $request->get('category');
        $qoute->parent = $request->get('parent');
       
        $message = 'category saved successfully';
        $qoute->save();
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
        $category = Category::find($id);
        return view('categories.show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        $categories = $this->repo->getCategories();

        return view('categories.edit', ['category' => $category, 'categories' => $categories]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if($category)
        {
            $category->delete();
            $data['message'] = 'Category deleted Successfully';
        }
        else 
        {
            $data['errors'] = 'Invalid Operation. You have not sufficient permissions';
        }
        
        return redirect('/')->with($data);
    }
}

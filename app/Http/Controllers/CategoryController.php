<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use function PHPUnit\Framework\fileExists;

class CategoryController extends Controller
{
    private $categories;
    private $category;

    public function index()
    {
        return view('front.home.home');
    }
    public function create(Request $request)
    {
        Category::getNewCategory($request);
        return redirect('/')->with('message', 'New Category Created Successfully');
    }
    public function read()
    {
       $this->categories =  Category::orderBy('id','desc')->get();
       return view('front.category.read-category', ['categories' => $this->categories]);
    }
    public function update($id)
    {
        $this->category = Category::find($id);
        return view('front.category.update-category', ['category' => $this->category]);
    }

    public function updateNew(Request $request, $id)
    {
        Category:: updateCategory($request, $id);
        return redirect('/read-categories')->with('message', 'Category updated successfully');
    }


    public function delete($id)
    {
        $this->category = Category::find($id);
        if (fileExists($this->category->image))
        {
            unlink($this->category->image);
        }
        $this->category->delete();
        return redirect('/read-categories')->with('message', 'Category Delete successfully');

    }




}

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Category;
class CategoryController extends Controller
{
    //
    public function index()
    {
        // select all categories from database
        $categories = Category // FROM `categories`
            ::orderBy('name')                 // ORDER BY `name` ASC
            ->get();                          // SELECT *
        // prepare the view and pass the categories inside
        $view = view('categories/index', compact('categories'));
        // return the view (which will display it)
        return $view;
    }
}
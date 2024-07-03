<?php

namespace App\Http\Controllers;

use App\Facade\ProductFacade;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @param ProductFacade $facade
     * @return View
     */
    public function index(Request $request, ProductFacade $facade): view
    {
        $products = $facade->getProductsWithPaginate($request);
        return view('products.index', ['products' => $products]);
    }
}

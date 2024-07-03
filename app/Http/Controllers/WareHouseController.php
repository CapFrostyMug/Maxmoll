<?php

namespace App\Http\Controllers;

use App\Models\Warehouse;
use Illuminate\View\View;

class WareHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): view
    {
        $warehouses = Warehouse::all();
        return view('warehouses.index', ['warehouses' => $warehouses]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return View
     */
    public function show(int $id): view
    {
        $products = Warehouse::find($id)
            ->products()
            ->where('warehouse_id', $id)
            ->paginate(config('paginate.products'))
            ->withQueryString();

        return view('warehouses.products-list', ['products' => $products]);
    }
}

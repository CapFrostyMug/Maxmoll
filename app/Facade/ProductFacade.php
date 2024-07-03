<?php

namespace App\Facade;

use App\Traits\CustomPaginator;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ProductFacade
{
    use CustomPaginator;

    /**
     * @return Collection
     */
    private function getProducts(): Collection
    {
        return DB::table('products')
            ->join('balance', 'products.id', '=', 'balance.product_id')
            ->join('warehouses', 'warehouses.id', '=', 'balance.warehouse_id')
            ->select(
                'products.id as product_id',
                'products.name as product_name',
                'warehouses.name as warehouse_name',
                'balance.count as product_count'
            )
            ->orderBy('products.id')
            ->get();
    }

    /**
     * @param Request $request
     * @return LengthAwarePaginator
     */
    public function getProductsWithPaginate(Request $request): LengthAwarePaginator
    {
        $products = $this->getProducts();
        return $this->customPaginator($request, $products);
    }
}

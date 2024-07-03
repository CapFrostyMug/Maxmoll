<?php

namespace App\Facade;

use App\Models\Status;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderFacade
{
    /**
     * @param Request $request
     * @return array
     */
    public function getOrdersList(Request $request): array
    {
        $warehouses = Warehouse::all();
        $statuses = Status::all();

        $warehouseId = $request->input('warehouse_id');
        $statusId = $request->input('status_id');

        $orders = DB::table('orders')
            ->join('warehouses', 'orders.warehouse_id', '=', 'warehouses.id')
            ->join('statuses', 'orders.status_id', '=', 'statuses.id')

            ->select(
                'orders.id as order_id',
                'warehouses.name as warehouse_name',
                'statuses.id as status_id',
                'statuses.name as status_name',
                'statuses.bootstrap_style as cell_style'
            )

            ->when($warehouseId, function ($query, int $warehouseId) {
                return $query->where('orders.warehouse_id', $warehouseId);
            })
            ->when($statusId, function ($query, int $statusId) {
                return $query->where('orders.status_id', $statusId);
            })

            ->orderBy('orders.id')
            ->paginate(config('paginate.orders'))->withQueryString();

        return [
            'warehouses' => $warehouses,
            'statuses' => $statuses,
            'orders'=> $orders,
        ];
    }
}

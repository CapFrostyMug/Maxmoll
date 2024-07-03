<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

trait CustomPaginator
{
    /**
     * @param Request $request
     * @param array|Collection $data
     * @return LengthAwarePaginator
     */
    public function customPaginator(Request $request, array|Collection $data): LengthAwarePaginator
    {
        $total = count($data);
        $per_page = config('paginate.products');
        $current_page = $request->input("page") ?? 1;
        $starting_point = ($current_page * $per_page) - $per_page;

        if (is_array($data)) {
            $data = array_slice($data, $starting_point, $per_page, true);
        } else {
            $data = $data->slice($starting_point, $per_page);
        }

        return new LengthAwarePaginator($data, $total, $per_page, $current_page, [
            'path' => $request->url(),
            'query' => $request->query(),
        ]);
    }
}

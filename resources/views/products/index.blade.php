@extends('layouts.app')

@section('title', 'Товары')

@section('content')
    <div class="row px-5">

        <h3 class="col-12 fw-bold py-5">Товары</h3>

        <div class="col">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="col-1 text-center align-middle">№</th>
                        <th scope="col" class="col-7 text-center align-middle">Наименование</th>
                        <th scope="col" class="col-2 text-center align-middle">Склад</th>
                        <th scope="col" class="col-2 text-center align-middle">Остаток, шт</th>
                    </tr>
                </thead>
                <tbody>
                @if(isset($products))
                    @forelse($products as $item)
                        <tr>
                            <th scope="row" class="text-center align-middle">{{ $item->product_id }}</th>
                            <td class="text-start align-middle">{{ $item->product_name }}</td>
                            <td class="text-center align-middle">{{ $item->warehouse_name }}</td>
                            <td class="text-center align-middle">{{ $item->product_count }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center align-middle">Ничего не найдено</td>
                        </tr>
                    @endforelse
                @endif
                </tbody>
            </table>
        </div>

        @if(isset($products))
            <div class="col-12 d-flex justify-content-center my-3">
                {{ $products->links() }}
            </div>
        @endif
    </div>
@endsection

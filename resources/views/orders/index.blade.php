@extends('layouts.app')

@section('title', 'Заказы')

@section('content')
    <div class="row px-5">

        <div class="col-12 d-flex justify-content-between align-items-center">
            <h3 class="fw-bold py-5">Заказы</h3>
            <a class="btn btn-primary d-inline-block px-4" href="{{ route('orders.manage.create') }}" role="button">Добавить</a>
        </div>

        <div class="col-12 bg-secondary bg-opacity-10 py-3 mb-5">
            <form action="{{ route('orders.filter') }}"
                  method="get"
                  class="col-12 d-flex align-items-end ">
                @include('orders.filter')
            </form>
        </div>

        <div class="col-12">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col" class="col-4 text-center align-middle">Номер заказа</th>
                    <th scope="col" class="col-3 text-center align-middle">Склад</th>
                    <th scope="col" class="col-2 text-center align-middle">Статус</th>
                    <th scope="col" class="col-3 text-center align-middle">Управление</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($orders))
                    @forelse($orders as $item)
                        <tr>
                            <td class="text-center align-middle">{{ $item->order_id }}</td>
                            <td class="text-center align-middle">{{ $item->warehouse_name }}</td>
                            <td class="text-center align-middle {{ $item->cell_style }}">{{ $item->status_name }}</td>
                            <td class="#">@include('orders.manage-block.index')</td>
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

        @if(isset($orders))
            <div class="col-12 d-flex justify-content-center my-3">
                {{ $orders->links() }}
            </div>
        @endif

    </div>
@endsection

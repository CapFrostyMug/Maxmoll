@extends('layouts.app')

@section('title')
    Склад {{ request()->query('name') }}
@endsection

@section('content')
    <div class="row">

        <div class="col-1">
            <a class="btn btn-secondary px-4 mt-4" href="{{ route('warehouses.index') }}" role="button">Назад</a>
        </div>
        <h3 class="col-12 fw-bold py-5">Товары склада {{ request()->query('name') }}</h3>

        <div class="col">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="col-1 text-center align-middle">№</th>
                        <th scope="col" class="col-9 text-center align-middle">Наименование</th>
                        <th scope="col" class="col-2 text-center align-middle">Остаток, шт</th>
                    </tr>
                </thead>
                <tbody>
                @if(isset($products))
                    @forelse($products as $item)
                        <tr>
                            <th scope="row" class="text-center align-middle">{{ $item->id }}</th>
                            <td class="text-start align-middle">{{ $item->name }}</td>
                            <td class="text-center align-middle">{{ $item->pivot->count }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center align-middle">Ничего не найдено</td>
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

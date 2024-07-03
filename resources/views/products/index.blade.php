@extends('layouts.app')

@section('title', 'Товары')

@section('content')
    <div class="row">

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
                    <tr>
                        <th scope="row" class="text-center align-middle">1</th>
                        <td class="text-start align-middle">Трусы</td>
                        <td class="text-center align-middle">Яндекс Маркет</td>
                        <td class="text-center align-middle">100</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

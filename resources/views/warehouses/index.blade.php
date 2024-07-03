@extends('layouts.app')

@section('title', 'Склады')

@section('content')
    <div class="row px-5">

        <h3 class="col-12 fw-bold py-5">Склады</h3>

        <div class="col-5">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="col-1 text-center align-middle">№</th>
                        <th scope="col" class="col-11 text-center align-middle">Склад</th>
                    </tr>
                </thead>
                <tbody>
                @if(isset($warehouses))
                    @php $counter = 1; @endphp
                    @forelse($warehouses as $item)
                        <tr>
                            <th scope="row" class="text-center align-middle">{{ $counter }}</th>
                            <td>
                                <a href="{{ route('warehouses.show', ['id' => $item->id, 'name' => $item->name]) }}"
                                   class="text-start align-middle">{{ $item->name }}
                                </a>
                            </td>
                        </tr>
                        @php $counter++; @endphp
                    @empty
                        <tr>
                            <td colspan="2" class="text-center align-middle">Список пуст</td>
                        </tr>
                    @endforelse
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection

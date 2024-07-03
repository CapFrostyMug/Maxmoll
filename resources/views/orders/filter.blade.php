<div class="col-3 me-4">
    <label for="warehouse-id-1" class="form-label fw-bold">Склад</label>
    <select id="warehouse-id-1" class="form-select" name="warehouse_id">
        <option value="0">Выберите...</option>
        @if(isset($warehouses))
            @foreach($warehouses as $item)
                <option
                    value="{{ $item->id }}"
                    @if(request()->input('warehouse_id') == $item->id)
                        selected
                    @endif>
                    {{ $item->name }}
                </option>
            @endforeach
        @endif
    </select>
</div>
<div class="col-3 me-4">
    <label for="status-id-1" class="form-label fw-bold">Статус заказа</label>
    <select id="status-id-1" class="form-select" name="status_id">
        <option value="0">Выберите...</option>
        @if(isset($statuses))
            @foreach($statuses as $item)
                <option
                    value="{{ $item->id }}"
                    @if(request()->input('status_id') == $item->id)
                        selected
                    @endif>
                    {{ $item->name }}
                </option>
            @endforeach
        @endif
    </select>
</div>
<div class="col-6">
    <button class="btn btn-success px-5 me-2" type="submit">Поиск</button>
    <a class="btn btn-secondary px-3"
       href="{{ route('orders.index') }}"
       role="button">Очистить
    </a>
</div>

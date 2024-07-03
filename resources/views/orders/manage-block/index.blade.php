<div class="d-flex justify-content-around align-items-center">
    <a href="#"
       class="btn border-0 p-0 @if($item->status_id !== 1) disabled @endif"
       title="Обновить заказ">@include('orders.manage-block.icons.pencil-square')
    </a>
    <a href="{{ route('orders.manage.status', ['orderId' => $item->order_id, 'id' => 2]) }}"
       class="btn border-0 p-0 @if($item->status_id !== 1) disabled @endif"
       title="Завершить заказ">@include('orders.manage-block.icons.check-circle')
    </a>
    <a href="{{ route('orders.manage.status', ['orderId' => $item->order_id, 'id' => 3]) }}"
       class="btn border-0 p-0 @if($item->status_id !== 1) disabled @endif"
       title="Отменить заказ">@include('orders.manage-block.icons.x-circle')
    </a>
    <a href="{{ route('orders.manage.status', ['orderId' => $item->order_id, 'id' => 1]) }}"
       class="btn border-0 p-0 @if($item->status_id !== 2 && $item->status_id !== 3) disabled @endif"
       title="Возобновить заказ">@include('orders.manage-block.icons.arrow-repeat')
    </a>
</div>

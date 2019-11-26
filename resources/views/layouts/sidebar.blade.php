<div class="col-md-3">
    <div class="list-group">
        @if(\Illuminate\Support\Facades\Auth::guard('employee')->check())
            <a class="list-group-item list-group-item-action {{Route::is('employee.home')?'active':''}}"
               href="{{route('employee.home')}}">
                Dashboard
            </a>
            <a class="list-group-item list-group-item-action {{Route::is('goods.index')?'active':''}}"
               href="{{route('goods.index')}}">
                Data Barang
            </a>
            <a class="list-group-item list-group-item-action {{Route::is('stocks.index')?'active':''}}"
               href="{{route('stocks.index')}}">
                Data Stok Barang
            </a>
        @endif
        @if(\Illuminate\Support\Facades\Auth::guard('cashier')->check())
                <a class="list-group-item list-group-item-action {{Route::is('transactions.index')?'active':''}}"
                   href="{{route('transactions.index')}}">
                    Data Trasaksi
                </a>
        @endif
    </div>
</div>
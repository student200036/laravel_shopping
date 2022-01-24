<h2>商品入力</h2>
<a href="{{ route('admin.item.index') }}">商品一覧</a>

<form action="{{ route('admin.item.add')}}" method=post>
    @csrf    
    <div>
        <label for="">{{ __('Item Name')}}</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">{{ __('Item Code')}}</label>
        <input type="text" name="code">
    </div>
    <div>
        <label for="">{{ __('Price')}}</label>
        <input type="text" name="price">
    </div>
    <button>{{ ('Update')}}</button>
</form>
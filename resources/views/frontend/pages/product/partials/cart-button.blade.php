<form class="form-inline" action="{{ route('carts.store') }}" method="post">
  @csrf
  <input type="hidden" name="product_id" value="{{ $product->id }}">
  @if ($product->quantity >0)
  <button type="button" class="btn btn-warning" onclick="addToCart({{ $product->id }})"><i class="fa fa-plus"></i> Add to cart</button>
  @else
  <button type="button" class="btn btn-danger"><i class="fa fa-stock"></i> Out of Stock</button>
  @endif
  
</form>

<table class="table">
  <thead class="thead-primary">
    <tr class="text-center">
      <th>Image</th>
      <th>Product</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Total</th>
      <th>Save</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
   @if (Session::has("Cart") != null)
   @foreach(Session::get('Cart')->products as  $item)
   <tr class="text-center">
    <td class="image-prod"><div class="img" style="background-image:url({{ $item['productInfo']->link_image }});"></div></td>
    <td class="product-name">
      <h3>{{ $item['productInfo']->name_product }}</h3>
    </td>
    <td class="price">{{ number_format($item['productInfo']->price) }} VND</td>
    <td class="quantity">
      <div class="input-group mb-3">
        <input type="number" id="quanty-item-{{ $item['productInfo']->id }}" onkeypress="return event.charCode >= 48" min="1" class="quantity form-control input-number" value="{{ $item['quanty'] }}" >
      </div>
    </td>
    <td class="total">{{ number_format($item['price']) }} VND</td>
    <td class="si-close"><i class="icon-save"  onclick="SaveItemListCart({{ $item['productInfo']->id }});"></i></td>
    <td class="si-close"><i class="icon-close"  onclick="DeleteItemListCart({{ $item['productInfo']->id }});"></i></td>
  </tr><!-- END TR-->
  @endforeach
  @endif
</tbody>
</table>
</div>
<div class="row justify-content-end">
  <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
   
    @if (Session::has("Cart") != null)
    <div class="cart-total mb-3">
     <h3>Cart Totals</h3>
     <p class="d-flex">
      <span>Total Quanty : </span>
      <span>{{ Session::get('Cart')->totalQuanty }}</span>
    </p>

    <hr>
    <p class="d-flex total-price">
      <span>Total Price : </span>
      <span>{{ number_format(Session::get('Cart')->totalPrice) }} VND</span>
    </p>
  </div>
  @endif
  
  <p class="text-center"><a href="{{ route('show-checkout') }}" class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
</div>
</div>
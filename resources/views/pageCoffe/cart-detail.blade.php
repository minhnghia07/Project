

 @if (Session::has("Cart") != null)
     
 <div class="select-items">
    <table>
        <tbody>
            @foreach(Session::get('Cart')->products as  $item)
                <tr>
                <td class="si-pic"><img src="{{ $item['productInfo']->link_image }}" alt=""></td>
                <td class="si-text">
                    <div class="product-selected">
                        <p>{{ number_format($item['productInfo']->price) }} x {{ $item['quanty'] }} VND</p>
                        <h6>{{ $item['productInfo']->name_product }}</h6>
                    </div>
                </td>
                <td class="si-close">
                    <i class="icon-close"  data-id="{{ $item['productInfo']->id }}"></i>
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>
<div class="select-total">
    <span>Total : </span>
    <h5>{{number_format(Session::get('Cart')->totalPrice)}} VND</h5>
    <input hidden id="total-quanty-cart" type="number" value="{{Session::get('Cart')->totalQuanty}}">
</div>

@endif



<?php
namespace App;
   

    /**
     * 
     */
    class Cart 
    {
    	public $products = null;
    	public $totalPrice = 0;
    	public $totalQuanty = 0;

    	public function __construct($cart)
    	{
    		if($cart){
    			//tao đối tượng cho giỏ hàng
    			$this->products = $cart->products;
    			$this->totalPrice = $cart->totalPrice;
    			$this->totalQuanty = $cart->totalQuanty;
    		}
    	}

    	public function AddCart($product, $id)
    	{
    		$newProduct = ['quanty' => 0, 'price' => $product->price ,  'productInfo' => $product];//tạo mới ản phẩm
    	    if ($this->products) {           //nếu đã tồn tại thì thêm vào
    	    	if (array_key_exists($id, $this->products)) {
    	    		$newProduct = $this->products[$id];
    	    	}
    	    }
    	    $newProduct['quanty']++; //tang so luong trong gio hang
    	    $newProduct['price'] = $newProduct['quanty'] * $product->price ;//tinh toan san pham duoc them mowi

    	    $this->products[$id] = $newProduct;
    	    $this->totalPrice += $product->price;
    	    $this->totalQuanty++;  

    	}

    	public function DeleteItemCart($id)
        {
            $this->totalQuanty -= $this->products[$id]['quanty'];
            $this->totalPrice -= $this->products[$id]['price'];
            unset($this->products[$id]);
        }

    	public function UpdateItemCart($id, $quanty)
    	{
    		$this->totalQuanty -= $this->products[$id]['quanty'];
    		$this->totalPrice -= $this->products[$id]['price'];
    		
    		$this->products[$id]['quanty'] = $quanty;  
    		$this->products[$id]['price'] = $quanty * $this->products[$id]['productInfo']->price;

    		$this->totalQuanty += $this->products[$id]['quanty'];
    		$this->totalPrice += $this->products[$id]['price'];
    	}
    	
    }
?>
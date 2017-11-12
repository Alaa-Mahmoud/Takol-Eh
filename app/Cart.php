<?php
 namespace App;

 class Cart{

     public $items      =null; // Hold group of individual item
     public $totalQty   =0;
     public $totalPrice =0;


     /* this constructor used to create Cart based on old Cart that mean
        if i have items in the cart then add to this currently cart
      */
     public function __construct($oldCart)
     {
         if ($oldCart) {
             $this->items = $oldCart->items;
             $this->totalQty = $oldCart->totalQty;
             $this->totalPrice = $oldCart->totalPrice;

         }
     }

      // this used to add new item to the cart base on the id of the item
      /* the item variable which i pass to the function refer to product and the id is
       the id of the product*/
     public function add($item , $id){

         // Array that hold information about the item i want to add
         $storedItem =['qty' => 0 , 'price' => $item->price ,'item' =>$item,'name'=>$item->name,'rest_id'=>$item->restaurant_id];

      /* check if i have items and the item i want to add
         is already exist
       */
         if($this->items){
             if(array_key_exists($id,$this->items)){
                 $storedItem=$this->items[$id];
             }
         }

        $storedItem['qty']++;

        $storedItem['price'] =$item->price * $storedItem['qty'];
        $storedItem['name']=$item->name;
        $this->items[$id] =$storedItem;
        $this->totalQty++;
        $this->totalPrice +=$item->price;
     }



     public function reduceByOne($id){
         $this->items[$id]['qty']--;
         $this->items[$id]['price']-=$this->items[$id]['item']['price'];
         $this->totalQty--;
         $this->totalPrice-=$this->items[$id]['item']['price'];

         if($this->items[$id]['qty']<=0){
             unset($this->items[$id]);
         }
     }

     public function removeItem($id){
        $this->totalQty-=$this->items[$id]['qty'];
        $this->totalPrice-=$this->items[$id]['price'];
         unset($this->items[$id]);
     }



 }

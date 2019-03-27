<?php

/**
 * CartController
 */
class InvoiceController extends Controller
{
  function __construct()
  {
    // code...
  }

  function show($id){
    echo $id;
  }

  function create(){
      $name = request('name');
      $email = request('email');
      $address = request('address');
      $items = CartRepository::getAll();
      $total_price = CartRepository::getTotal();

      $id = md5(microtime() . $name . $email . $address);

      Invoice::create([
          'id' =>  $id,
          'name' => $name,
          'email' => $email,
          'address' => $address,
          'items' => json_encode($items),
          'total_price' => $total_price,
      ]);

      redirect(sprintf('%s/invoice/%s', base_url(), $id));
  }
}


 ?>

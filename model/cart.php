<?php
   include_once 'product.php';
   function addToCart($id){
   //lay thong tin san pham can them vao gio hang
   $product=get_product_byid($id);
   $bool=false;
   $i=0;
   if(!isset($_SESSION['carts']))
   {
       $_SESSION['carts']=array( '0'=> array("id"=>$id,"name"=> $product['namesp'],  "price"=> $product['price'],"image"=> $product['imgsp'],"quantity"=>1));
   }
   else 
   {
     foreach ($_SESSION['carts'] as $item) {
       if($item['id']==$id){
         array_splice($_SESSION['carts'],$i,1,array(array("id"=>$id,"name"=> $product['namesp'], "price"=> $product['price'],"image"=> $product['imgsp'],"quantity"=>$item['quantity']+1)));
         $bool=true;
       }
       $i++;
     }
     if($bool==false){
       array_push($_SESSION['carts'],array("id"=>$id,"name"=> $product['namesp'],  "price"=> $product['price'],"image"=> $product['imgsp'],"quantity"=>1));
     }
    
   }
}
function addToOrder($fname,$add,$email,$phone,$ngay)
{
  $query="insert into donhang(hoten,diachi,email,dienthoai,ngaydat)
  values('$fname','$add','$email','$phone','$ngay')";
  $lastId = executeReturnID($query);
  return $lastId;//tra ve ma don hang moi vua them
}
function addToOrderDetail($fname)
{
  // foreach ($_SESSION['carts'] as $item) 
  // {
    // $name=$item['name'];
    // $sl=$item['quantity'];
    $sql ="INSERT INTO detail_donhang (namesp) VALUES ('$fname')";
                execute($sql);
    // $query="insert into detail_donhang(name)
    // values('$name')";
    // $STH = execute($query);
  // }
}
?>

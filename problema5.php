<? php

$link = mysqli_connect ( 'localhost' , 'root' , 'Ja! 76402' , 'dev_challenge' );

$sql = 'SELECT "produtos". "id"
        DE dev_challenge.products
        LEFT JOIN "orders_products" ON "orders_products". "Product_id" = "produtos". "Id"
        LEFT JOIN "orders" ON "orders_products". "Order_id" = "orders". "Id"
        WHERE "pedidos". "Id" = 0
        CONTAGEM;' ;

$result1 = mysqli_query ( $sql , $link );

$date = date_create ( $ _POST [ 'data' ]);

$dql = 'SELECT date_create, preço, soma (preço) como total
        DE dev_challenge.orders
        WHERE date_create = ' . $ date . "
        GRUPO POR date_create, price ' ;

$ result2 = mysqli_query ( $ sql , $ link );

echo  $ resultado1 ;
echo  $ resultado2 ;

mysqli_close ( $link ); 

?>

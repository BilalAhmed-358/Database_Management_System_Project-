<?php
    require "conn.php";

    // echo "hello";
    if(isset($_POST['submit'])){
        if(!empty($_POST['orderid']) && !empty($_POST['orderName']) && !empty($_POST['orderDate']) && !empty($_POST['quantity']) && !empty($_POST['customerId']))
        {

            $orderid = $_POST['orderid'];
            $orderName = $_POST['orderName'];
            $orderDate = $_POST['orderDate'];
            $quantity = $_POST['quantity'];
            $customerId = $_POST['customerId'];


            $insert =  $conn->prepare("insert into ORDERS(ORDERID,ORDERNAME,ORDERDATE,QTY,CUSTID) VALUES(?,?,?,?,?)");

            $insert->execute(array(
                 $orderid,
                 $orderName,
                 $orderDate,
                 $quantity,
                 $customerId
            ));

            header("location: customer.php");
        }
        else{

            header("location: newOrder.php");

        }
    }


?>
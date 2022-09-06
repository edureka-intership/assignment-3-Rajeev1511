<?php
    include 'connectionstring.php';
    $conn->beginTransaction();
    $query = "insert into customerdetails (totalprice,customername,customeremail,customermobile,customerarea,customeraddress,landmark,orderdate,ordertime,orderstatus) values (?,?,?,?,?,?,?,?,?,?)";
    $res = $conn->prepare($query);
    //var_dump($res);
    //exit;

    if($_POST['status'] == 'Active')
    {
        $orderstatus = 'Active';
    }
    else{
        $orderstatus= 'Inactive';
    }

    $data = array($_POST['totalprice'],$_POST['customername'],$_POST['customeremail'],$_POST['customermobile'],$_POST['customerarea'],$_POST['customeraddress'],$_POST['landmark'],$_POST['orderdate'],$_POST['ordertime'],$orderstatus);
    $success = $res->execute($data); //execute() returns true or false    

    if($success == true){
    
        //$conn->commit();

foreach($_SESSION['cart'] as $key => $value)

{
    var_dump($value);
    exit;
   // $query2 = "insert into orderdetails (itemsprice,orderqnty,itemid,subitemid,customerid) values ('productPrice','productQuantity')
}


        $conn->commit();
        $_SESSION['sm'] = "Record Inserted Successfully.";
        session_write_close();
        header('Location:order.php');
    }
    else
    {
        $conn->rollback();
        $_SESSION['em'] = "Failed to insert the record.";
        session_write_close();
        header('Location:order.php');
    }
?>
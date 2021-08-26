<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

    // //decleared in commerce_referral_discount module
    // function max_value($array,$prop) {
    //         return max(array_map(function($o) use($prop) {
    //                             return $o->$prop;
    //                          },
    //                          $array));
    // };


  
    // $uid = 8272;
    // $query = db_select('commerce_referral_discount', 'discount');
    // $query->leftJoin('users','u','u.uid = discount.uid');
    // $query->fields('discount', array('uid',))
    //       ->fields('u',array('mail'));
    //        // ->condition('discount.uid', $uid, '=');

    // $query ->addExpression('COUNT(discount.uid)','WTF');
    // $query->groupBy('uid');


    // $res = $query->execute()
    //            ->fetchAll();
     
    //          print_r($res);


    // $num_rows = $query->countQuery()->execute()->fetchField();

    // echo "<br>";
    // echo "<br>";
    // echo "<br>";
    // echo $num_rows;
    // echo "<br>";
    // echo "<br>";
    // echo "<br>"; 

    // $query-> execute();

// print_r($query->__toString());
    // print_r($query->arguments());

    // $uid = 8272;
    // $query = db_select('commerce_referral_discount', 'discount')
    //   ->fields('discount', array('uid', 'referrer_uid',
    //     'discount_amount', 'type','created','updated',
    //   ))
    //   ->condition('discount.uid', $uid, '=')
    //   ->execute()
    //   ->fetchAll();
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "this is my own stuff";
    echo "<br>";
    echo "<br>";
    echo "<br>";



    // print_r($query);

$query = new EntityFieldQuery();
$query->entityCondition('entity_type', 'user');
$result = $query ->execute();
print_r($result);



    // print_r($query);
    // $max_discount = max_value($result,'discount_amount');

    // //add if max != 0 do, otherwise 
    // echo $max_discount;

    // $result = json_decode(json_encode($result), true);

    // echo "<br>";

 
    // echo(count($result));
    // echo "<br>";
    // //find maximum by using the traditional way
    // for($i =0; $i<count($result); $i++){
    //     if($result[$i]['discount_amount'] == $max_discount ){
    //         //the max array is contain the max record in the database record;
    //        $max_array = $result[$i];
    //        break;
    //      }
    // }

    // echo "<br>";
    // echo $max_array["discount_amount"];

    // echo "<br>";
    // var_dump($max_array);




    // $result = db_select('commerce_referral_discount', 'discount')
    // ->fields('discount', array('uid', 'referrer_uid',
    //   'discount_amount', 'type','created',
    // ))
    // ->condition('discount.uid', $uid, '=')
    // ->condition('discount_amount',$res,'=')
    // ->execute()
    // ->fetchAll();

    // echo "<br>";
    // print_r($result);
?>
<!-- <script>
    </script>script> -->

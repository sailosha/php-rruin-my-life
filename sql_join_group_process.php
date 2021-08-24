<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
  
    $uid = 8272;
    $query = db_select('commerce_referral_discount', 'discount');
    $query->leftJoin('users','u','u.uid = discount.uid');
    $query->fields('discount', array('uid',))
          ->fields('u',array('mail'));
           // ->condition('discount.uid', $uid, '=');

    $query ->addExpression('COUNT(discount.uid)','WTF');
    $query->groupBy('uid');

    $res = $query->execute()
               ->fetchAll();
     
             var_dump($res);


?>

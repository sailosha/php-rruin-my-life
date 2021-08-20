<?php

    function max_value($array,$prop) {
        return max(array_map(function($o) use($prop) {
                            return $o->$prop;
                         },
                         $array));
    };


  
    $uid = 8190;
    $result = db_select('commerce_referral_discount', 'discount')
      ->fields('discount', array('uid', 'referrer_uid',
        'discount_amount', 'type','created',
      ))
      ->condition('discount.uid', $uid, '=')
      ->execute()
      ->fetchAll();


      $res = max_value($result,'discount_amount');
      echo "<br>";
      echo $res;
?>

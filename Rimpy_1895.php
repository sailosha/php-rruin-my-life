<?php
/* 
 * To improve Rimpy's node/1895 readability and query request. 
 */

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$query_for_first_half = db_select('norgen_products', 'n');
$query_for_first_half->InnerJoin('commerce_product','c','c.sku=n.cat_num');


$query_for_first_half ->LeftJoin('field_data_norproduct_cataloguenumber','fdnc', 'fdnc.norproduct_cataloguenumber_value = c.sku');
$query_for_first_half ->LeftJoin('field_data_field_test','fdft','fdnc.entity_id=fdft.entity_id');
$query_for_first_half ->LeftJoin('field_data_body','fdb','fdb.entity_id=fdnc.entity_id');
$query_for_first_half
            ->fields('n',array('prod_cat','cat_num','prod_name'))
           ->fields('fdnc',array('norproduct_cataloguenumber_value','entity_id'))
           ->fields('fdft',array('field_test_tid'));
           // ->fields('fdb',array('body_value')); //MAY NOT necessary
$res = $query_for_first_half ->execute()
                             ->fetchAll();
echo '<pre>';
var_dump($res);
echo '</pre>';



?>

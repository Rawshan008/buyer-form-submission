<?php
/**
 * Buyear Class
 */
include_once("application/controller/DataConnect.php");

class Buyer {
  public function insert($data) {

    $dataConnect = new DataConnect();

    $amount = $data['amount'];
    $buyer = $data['buyer'];
    $receipt_id =   $data['receipt_id'];
    $items = $data['items'];
    $buyer_email = $data['buyer_email'];
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    $note =  $data['note'];
    $city = $data['city'];
    $phone = $data['phone'];
    $hash_key = crypt($data['receipt_id'], $data['amount']);
    $entry_at = date('Y-m-d');
    $entry_by = $data['entry_by'];

    $query = "INSERT INTO tbl_buyer(amount, buyer, receipt_id, items, buyer_email, buyer_ip, note, city, phone, hash_key, entry_at, entry_by) VALUE('$amount', '$buyer', '$receipt_id', '$items', '$buyer_email', '$ipAddress',  '$note',  '$city',  '$phone', '$hash_key',  '$entry_at', '$entry_by')";


    $insertData = $dataConnect->insert($query);

    return $insertData;
  }
}
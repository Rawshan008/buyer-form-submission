<?php 
/**
 * Data Backend Validation
 */

 class Validation {
  public function validator($data) {
    $error_message = '';

    $error_message .= ( empty($data['amount'])) ? nl2br("amount shouldn't be null. \r\n") : (is_numeric($data['amount']) ? '' : 'amount field should be numeric. ');

    $error_message .= ( empty($data['buyer'])) ? "buyer should not be null. ": (strlen($data['buyer']) > 20 ? 'buyer field should not be more than 20 chars. ' : '');

    return $error_message;
  }
 }
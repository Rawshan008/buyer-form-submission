<?php 
/**
 * Data Backend Validation
 */

 class Validation {

  public function validation_number($string) {
    $number_validation_regex = "/^\\d+$/"; 
    if(preg_match($number_validation_regex, $string)){
      return true;
    }
  }
  
  public function validator($data) {
    $error_message = '';

    $error_message .= ( empty($data['amount'])) ? '<span>Amount Field Require</span>' : (filter_var($data['amount'], FILTER_VALIDATE_INT) ? '' : '<span>Amount field should be only Number.</span>');

    $error_message .= ( empty($data['buyer'])) ? '<span>Buyer Field Require </span>': (strlen($data['buyer']) > 20 ? '<span>Buyer field should not be more than 20 chars. </span>' : '');

    $error_message .= ( empty($data['receipt_id'])) ? '<span>Receipt Field Require.</span>' : ((is_numeric($data['receipt_id']) != 1) ? '' : '<span>Receipt field should be only Text</span>');

    $error_message .= ( empty($data['items'])) ? '<span>Item Field Require.</span>' : ((is_numeric($data['items']) != 1) ? '' : '<span>Items field should be only Text</span>');

    $error_message .= ( empty($data['buyer_email'])) ? '<span>Email Field Require.</span> ' : (filter_var($data['buyer_email'], FILTER_VALIDATE_EMAIL) ? '' : '<span>Invalid buyer email address.</span> ');

    $error_message .= ( empty($data['note'])) ? '<span>Note Field Require.</span> ' : (str_word_count($data['note']) > 30 ? '<span>Notes field should not be more than 30 words.</span> ' : '');

    $error_message .= ( empty($data['city'])) ? '<span>City Field Require.</span>' : ((is_numeric($data['city']) != 1) ? '' : '<span>City field should be only Text</span>');

    $error_message .= ( empty($data['phone'])) ? '<span>Phone Field Require.</span>' : (filter_var($data['phone'], FILTER_VALIDATE_INT) ? '' : '<span>Phone field should be only Number</span>');
    
    $error_message .= ( empty($data['entry_by'])) ? '<span>Entry Field Require. </span>' : (filter_var($data['entry_by'], FILTER_VALIDATE_INT) ? '' : '<span>Entry field should be only Number</span> ');

    return $error_message;
  }
 }
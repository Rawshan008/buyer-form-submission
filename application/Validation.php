<?php 
/**
 * Data Backend Validation
 */

 class Validation {
  public function validator($data) {
    $error_message = '';

    $error_message .= ( empty($data['amount'])) ? "amount shouldn't be null." : (is_numeric($data['amount']) ? '' : 'amount field should be numeric. ');

    $error_message .= ( empty($data['buyer'])) ? "buyer should not be null. ": (strlen($data['buyer']) > 20 ? 'buyer field should not be more than 20 chars. ' : '');

    $error_message .= ( empty($data['receipt_id'])) ? 'receipt id should not be null. ' : '';

    $error_message .= ( empty($data['items'])) ? 'items should not be null. ' : '';

    $error_message .= ( empty($data['buyer_email'])) ? 'buyer email should not be null. ' : (filter_var($data['buyer_email'], FILTER_VALIDATE_EMAIL) ? '' : 'Invalid buyer email. ');

    $error_message .= ( empty($data['note'])) ? 'note should not be null. ' : (str_word_count($data['buyer_email']) > 30 ? 'note field should not be more than 30 words. ' : '');

    $error_message .= ( empty($data['city'])) ? "city should not be null. ": (strlen($data['city']) > 20 ? 'city field should not be more than 20 chars. ' : '');

    $error_message .= ( empty($data['phone'])) ? "phone shouldn't be null. " : (is_numeric($data['phone']) ? '' : 'phone field should be numeric. ');
    
    $error_message .= ( empty($data['entry_by'])) ? "entry by shouldn't be null. " : (is_numeric($data['entry_by']) ? '' : 'entry by field should be numeric. ');

    return $error_message;
  }
 }
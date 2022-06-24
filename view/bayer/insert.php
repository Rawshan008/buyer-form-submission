<div class="container  py-3">
  <div class="row">
    <div class="col">
      <a class="btn btn-primary" href="index.php">Home</a>
      <h2 id="success-message" class="text-success"></h2>
      <hp id="error-message" class="text-danger"></hp>
      <?php if(isset($_COOKIE['buyer_submit']) == 120227): ?>
        <p class="display-6 text-danger mt-3">You do not create any request before 24 hours</p>
      <?php endif; ?>
    </div>
  </div>
</div>

<?php if(isset($_COOKIE['buyer_submit']) != 120227): ?>
<div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <div id="success-message" class="text-danger"></div>
        <form id="buyerForm">
          <div class="mb-3">
            <label for="amount" class="form-label">Amount <span id="amount-error" class="text-danger"></span></label>
            <input type="text" name="amount" class="form-control" id="amount">
          </div>

          <div class="mb-3">
            <label for="buyer" class="form-label">Buyer  <span id="buyer-error" class="text-danger"></span></label>
            <input type="text" name="buyer" class="form-control" id="buyer">
          </div>

          <div class="mb-3">
            <label for="receipt_id" class="form-label">Receipt id  <span id="receipt_id-error" class="text-danger"></span></label>
            <input type="text" name="receipt_id" class="form-control" id="receipt_id">
          </div>

          <div class="mb-3">
            <label for="items" class="form-label">Items  <span id="items-error" class="text-danger"></span></label>
            <input type="text" name="items" class="form-control" id="items">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Buyer email <span id="email-error" class="text-danger"></span></label>
            <input type="text" name="buyer_email" class="form-control" id="buyer_email">
          </div>

          <div class="mb-3">
            <label for="note" class="form-label">Note <span id="note-error" class="text-danger"></span></label>
            <input type="text" name="note" class="form-control" id="note">
          </div>

          <div class="mb-3">
            <label for="city" class="form-label">City <span id="city-error" class="text-danger"></span></label>
            <input type="text" name="city" class="form-control" id="city">
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone <span id="phone-error" class="text-danger"></span></label>
            <div class="input-group">
              <div class="input-group-text">880</div>
              <input type="text" name="phone" class="form-control" id="phone">
            </div>
          </div>


          <div class="mb-3">
            <label for="entry_by" class="form-label">Entry by <span id="entry_by-error" class="text-danger"></span></label>
            <input type="text" name="entry_by" class="form-control" id="entry_by">
          </div>

          <button id="submitBtn" type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
  <?php endif; ?>

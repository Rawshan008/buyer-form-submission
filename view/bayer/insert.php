<div class="container">
  <div class="row">
    <div class="col">
      <a href="../../../buyer-form-submission/">Home</a>
    </div>
  </div>
</div>

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
            <input type="text" name="email" class="form-control" id="email">
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
            <input type="text" name="phone" class="form-control" id="phone">
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
<?php
require_once("application/model/Buyer.php");

$result_row = new Buyer();
$result = $result_row->selectData();
if(isset($_GET['search'])){
  $result = $result_row->selectData($_GET);
} else {
  $result = $result_row->selectData();
}
?>
<div id="mydata"></div>
<div class="container py-3">
  <div class="container">
    <div class="row">
      <div class="col">
        <a class="btn btn-primary mb-3" href="index.php?action=create_buyer">Create Buyer</a>

        <?php if(isset($_COOKIE['buyer_submit']) == 120227): ?>
          <p>You do not create any request before 24 hours</p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<div class="container py-3">
  <div class="row">
    <div class="col">
      <form id="searchForm" method="GET">
        <input type="text" name="userid" id="userid" placeholder="Entry Id: 2">
        <input type="date" name="fdate" id="fdate">
        <input type="date" name="ldate" id="ldate">
        <input type="submit" name="search" class="btn btn-primary">
      </form>
    </div>
  </div>
</div>
<?php if($result): ?>
<div class="container">
  <div class="row">
    <div class="col">
      <table class="table">
        <tr>
          <th scope="col">Serial No</th>
          <th scope="col">Amount</th>
          <th scope="col">Buyer</th>
          <th scope="col">Receipt</th>
          <th scope="col">Items</th>
          <th scope="col">Buyer Email</th>
          <th scope="col">Buyer Ip</th>
          <th scope="col">Note</th>
          <th scope="col">City</th>
          <th scope="col">Phone</th>
          <th scope="col">Hash Key</th>
          <th scope="col">Entry Date</th>
          <th scope="col">Entry by</th>
        </tr>

        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['amount']; ?></td>
          <td><?php echo $row['buyer']; ?></td>
          <td><?php echo $row['receipt_id']; ?></td>
          <td><?php echo $row['items']; ?></td>
          <td><?php echo $row['buyer_email']; ?></td>
          <td><?php echo $row['buyer_ip']; ?></td>
          <td><?php echo $row['note']; ?></td>
          <td><?php echo $row['city']; ?></td>
          <td><?php echo $row['phone']; ?></td>
          <td><?php echo $row['hash_key']; ?></td>
          <td><?php echo $row['entry_at']; ?></td>
          <td><?php echo $row['entry_by']; ?></td>
        </tr>
        <?php endwhile; ?>
      </table>
    </div>
  </div>
</div>
<?php else: ?>
<div class="container py-3">
  <div class="row">
    <div class="col">
      <h1>NO data Found</h1>
    </div>
  </div>
</div>
<?php endif; ?>
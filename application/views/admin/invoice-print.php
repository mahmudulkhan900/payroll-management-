<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Payroll Management System</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <?php 
      if(isset($content)):
      $i=1; 
      foreach($content as $cnt): 
    ?>
    <section class="invoice" id="invoice">
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
          Payroll Management System
            <small class="pull-right">Date: <?php echo date('d-m-Y'); ?></small>
          </h2>
        </div>
      </div>
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          From
          <address>
          <strong>Coding Life</strong><br>
            Mirpur-2<br>
            10R<br>
            Website:codinglife2.rf.gd/<br>
            Email: admin@codinglife.com
          </address>
        </div>

        <div class="col-sm-4 invoice-col">
          To
          <address>
            <strong><?php echo $cnt['staff_name']; ?></strong><br>
            <?php echo $cnt['city']; ?><br>
            <?php echo $cnt['state']; ?>, <?php echo $cnt['country']; ?><br>
            Phone: <?php echo $cnt['mobile']; ?><br>
            Email: <?php echo $cnt['email']; ?>
          </address>
        </div>
        <div class="col-sm-4 invoice-col">
          <b>Invoice #00<?php echo $cnt['id']; ?></b><br>
          <br>
          <b>Paid On:</b> <?php echo date('d-m-Y', strtotime($cnt['added_on'])); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th>#</th>
              <th>Basic Salary</th>
              <th>Allowance</th>
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>$ <?php echo $cnt['basic_salary']; ?></td>
                <td>$ <?php echo $cnt['allowance']; ?></td>
                <td>$ <?php echo $cnt['total']; ?></td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>

      <div class="row">
        <div class="col-xs-6">
          <p class="lead">Payment Methods:</p>
          <img src="<?php echo base_url(); ?>assets/dist/img/credit/visa.png" alt="Visa">
          <img src="<?php echo base_url(); ?>assets/dist/img/credit/mastercard.png" alt="Mastercard">
          <img src="<?php echo base_url(); ?>assets/dist/img/credit/american-express.png" alt="American Express">
          <img src="<?php echo base_url(); ?>assets/dist/img/credit/paypal2.png" alt="Paypal">

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
            Dear <?php echo $cnt['staff_name']; ?>, Our Company has just processed your payments. Your payment has been deposited electronically in your account on <?php echo $cnt['added_on']; ?> <br> Regards OMS
          </p>
        </div>
        <div class="col-xs-6">
          <p class="lead">Salary Info</p>

          <div class="table-responsive">
            <table class="table">
              <tr>
                <th style="width:50%">Subtotal:</th>
                <td>$ <?php echo $cnt['total']; ?></td>
              </tr>
              <tr>
                <th>Tax (0%)</th>
                <td>$ 0</td>
              </tr>
              <tr>
                <th>Total:</th>
                <td>$ <?php echo $cnt['total']; ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </section>
    <?php 
      $i++;
      endforeach;
      endif; 
    ?>
</div>

</body>
</html>

<?php 
session_start();
include('header.php');
include 'Invoice.php';
$invoice = new Invoice();
$invoice->checkLoggedIn();
?>
<title>Invoice list</title>
<script src="js/invoice.js"></script>
<link href="css/style1.css" rel="stylesheet">
<style>
 body {
         background-color: black;
         background-position: absolute;
         background-repeat: no-repeat;
         background-size: cover;
         margin: 0;
         padding: 0;
        }
        th{
          font-size:18px;
        }
        td{
          font-size: 18px;
        }

             </style>
             <div align="right">
<div id="google_translate_element"></div>
<span><script type="text/javascript">

function googleTranslateElementInit() {
  new google.translate.TranslateElement({
    pageLanguage: 'en',
    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
  }, 'google_translate_element');
}
</script><script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</script></span></div>

<div class="container">		
<h1 class="title" style="color:yellow">Invoice System</h2>
<?php include('menu.php');?>			  
<table id="data-table" class="table table-condensed table-striped">
<thead>
<tr>
<th>Invoice No.</th>
<th>Create Date</th>
<th>Customer Name</th>
<th>Invoice Total</th>
<th>Print</th>
<th>Edit</th>
<th>Delete</th>
</tr>
</thead>
<?php		
$invoiceList = $invoice->getInvoiceList();
foreach($invoiceList as $invoiceDetails){
$invoiceDate = date("d/M/Y, H:i:s", strtotime($invoiceDetails["order_date"]));
echo '
<tr>
<td>'.$invoiceDetails["order_id"].'</td>
<td>'.$invoiceDate.'</td>
<td>'.$invoiceDetails["order_receiver_name"].'</td>
<td>'.$invoiceDetails["order_total_after_tax"].'</td>
<td><a href="print_invoice.php?invoice_id='.$invoiceDetails["order_id"].'" title="Print Invoice"><span class="glyphicon glyphicon-print"></span></a></td>
<td><a href="edit_invoice.php?update_id='.$invoiceDetails["order_id"].'"  title="Edit Invoice"><span class="glyphicon glyphicon-edit"></span></a></td>
<td><a href="#" id="'.$invoiceDetails["order_id"].'" class="deleteInvoice"  title="Delete Invoice"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>
  ';
}       
?>
</table>	
</div>	
<?php include('footer.php');?>
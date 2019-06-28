
@extends('layouts.app')
    <!-- CUSTOM STYLE  -->
    <link href="{{ asset('css/custom-style.css') }}" rel="stylesheet" />
@section('content')
<div class="container">
  <table class="table table-striped table-bordered table-hover mb-0">
    <tr>
      <td colspan="7" class="text-center"><strong>TAX INVOICE</strong></td>
    </tr>
    <tr>
      <td rowspan="5">
        <strong>MITAL ENGINEERING WORKS</strong><br>
        992/1/20, G.I.D.C Estate,
        <br>
        Makarpura, Vadodara-390010
        <br>
        (M):- 9998042119
        <br>
        Email: mital.engineering@gmail.com
        <br>
        PAN No.:
        <br>
        GST No.: 24AFPPA2846CIZU
        <br>
        Gujarat - 24     
      </td>
    </tr>
    <tr>
      <td>
        <label> <strong> Invoice No.</strong></label> 
        20
      </td>
      <td>
        <label><strong>Dated</strong></label>
        08/06/2019
      </td>
    </tr>
    <tr>
      <td>
         <label><strong> Challan No.</strong></label> 
            20
      </td>
      <td>
         <label><strong> Mode/Terms of Payment.</strong></label> 
            20
      </td>
    </tr>
    <tr>
      <td>
          <label><strong> Supplier's Ref.</strong></label> 
          20
      </td>
      <td>
          <label> <strong> Other Reference(s)</strong></label> 
          20
      </td>
    </tr>
    <tr>
      <td>
          <label> <strong> Buyer's Order No. </strong></label> 
            20
      </td>
      <td>
          <label> <strong>Date</strong></label> 
            20
      </td>
    </tr>
    <tr>
      <td rowspan="4">
        <strong> Bill To:</strong> <br>
        <strong> SAMAY ENGINEERING</strong><br>
        992/1/24, G.I.D.C Estate,<br>
        Makarpura, Vadodara-390010<br>
        GST No.: 24AJIPP3346BIZI<br>
      </td>
    </tr>
    <tr>
      <td>
        <strong> Dispatch Document No. </strong>
        <br>
        123456
      </td>
      <td>
        <strong> Delivery Note Date </strong>
        <br>
        Test Delivery Note
      </td>
    </tr>
    <tr>
      <td>
        <strong>Dispatched Through</strong> 
        <br>
        Test Dispatched through
      </td>
      <td>
        <strong>Destination</strong>
        <br>
        Test Destination
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <strong>Terms of Delivery</strong> <br>
        NA
      </td>
    </tr>
  </table>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>Sr. No.</th>
        <th width="30.5%">Description of Goods</th>
        <th>HSN/SAC Code</th>
        <th>Qty</th>
        <th>Rate</th>
        <th>per</th>
        <th class="text-right">Amount(Rs.)</th>
      </tr>
    </thead>
    <tbody>
      <!-- Loop through data -->
      <tr>
          <td>1</td>
          <td>M.S. Hex</td>
          <td></td>
          <td>1060</td>
          <td>25</td>
          <td></td>
          <td class="text-right">26500</td>
      </tr>
      <tr>
          <td>2</td>
          <td>M.S. Pin</td>
          <td></td>
          <td>450</td>
          <td>12</td>
          <td></td>
          <td class="text-right">5400</td>
      </tr>
      <!-- Loop through data end-->
      
      <!-- Total Quantity start -->
      <tr>
        <td colspan="2"></td>
        <td>Total</td>
        <td>1510</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <!-- Total Quantity end -->
      
      <!-- Amount calculations start -->
      <tr>
        <td colspan="4" rowspan="4">
          <strong>Amount Chargeable(in words): <br>
            Thirty seven Thousand Six Hundred Forty Two Only
          </strong>
        </td>
        <td colspan="2">
          <strong>Total Amount</strong>
        </td>
        <td class="text-right">
          31900
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <strong>CGST 9%</strong>
        </td>
        <td class="text-right">
          2871
        </td>
      </tr>
       <tr>
        <td colspan="2">
          <strong>SGST 9%</strong>
        </td>
        <td class="text-right">
          2871
        </td>
      </tr>
       <tr>
        <td colspan="2">
          <strong>Grand Total</strong>
        </td>
        <td class="text-right">
          37642
        </td>
      </tr>
      <!-- Amount calculations end -->

      <tr>
        <td colspan="3">
          <strong>Company's Bank Details</strong>
          <br>Bank Name: Test
          <br>Branch: Test
          <br>Account No.: Test
          <br>IFSC Code No. : Test
        </td>
        <td colspan="4" class="text-center">
          For, MITAL ENGINEERING WORKS
          <br>
          <br>
          <br>
          <span class="text-center"><strong>Authorized Sign.</strong></span>
        </td>
      </tr>
    </tbody>
  </table>
           
     </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
          <p class="m-0">SUBJECT TO VADODARA JURISDICTION</p>
          <p>This is a Computer Generated Invoice</p>
        </div>
      </div>
    </div>
@endsection

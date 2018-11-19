<?php require 'file.php'; ?>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="ajax.js"></script>
	<link rel="stylesheet" href="styless.css">
</head>
<body>
	<h1>Table 1</h1>
	<table class="data-table">
		<caption class="title">Change Datagrid:</caption>
		<thead>
			<tr>
				<th><a href="?sort=NO">NO</a></th>
				<th> <a href="?sort=CUSTOMER">CUSTOMER</a></th>
				<th> <a href="?sort=ITEM">ITEM</a></th>
				<th> <a href="?sort=AMOUND">AMOUNT</a></th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		while ($row = mysqli_fetch_array($query))
		{
			$amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
			echo '<tr>
					<td>'.$no.'</td>
					<td>'.$row['name'].'</td>
					<td>'.$row['item'].'</td>
					<td>'.$amount.'</td>
				</tr>';
			$no++;
		}?>
		</tbody>
	</table>
		
<form id="ajax_form" method="post">
	<div class="form-row">
        <div class="col-3 ">
      <h2>If you wanna add:</h2>
    </div>
    <div class="col">
      <input type="text" name="customer" class="form-control" placeholder="CUSTOMER" required>
    </div>
    <div class="col">
      <input type="text" name="item" class="form-control" placeholder="ITEM" required>
    </div>
    <div class="col">
      <input type="number" name="amount" class="form-control" placeholder="AMOUNT" required>
    </div>
      <input type="button" id="btn" value="Send" />

  </div> 
</form>

<form id="ajax_form_change" method="post">
	<div class="form-row">
		   <div class="col-3 ">
      <h2>If you wanna edit:</h2>
    </div>
    <div class="col">
	 <select name="ChoseEdit" class="form-control" id="exampleFormControlSelect2">
      <option disabled selected>Chose CUSTOMER</option>
       <?php 
       foreach ($option as $arr){
        $m = $arr["name"];
        echo "<option>".$m.'</option>';
      }?> 
    </select>
	
    </div>
    <div class="col">
      <input type="text" name="ChangeCustomer" class="form-control" placeholder="NEW CUSTOMER" required>
    </div>
    <div class="col">
      <input type="text" name="ChangeItem" class="form-control" placeholder="ITEM" required>
    </div>
    <div class="col">
      <input type="number" name="ChangeAmount" class="form-control" placeholder="AMOUNT" required>
    </div>
      <input type="button" id="UpBtn" value="Send" />

  </div>
</form>

<form id="DeleteForm" method="post">
	<div class="form-row">
		<div class="col-3 ">
          <h2>If you wanna delete:</h2>
    	</div>
    	<div class="col">
	 <select name="ChoseDelete" class="form-control" id="exampleFormControlSelect3">
      <option disabled selected>Chose CUSTOMER</option>
       <?php 
       foreach ($option as $arr){
        $m = $arr["name"];
        echo "<option>".$m.'</option>';
      }
      ?> 
    </select>
  </div>
  <div class="col">
    <select name="ChoseDeleteItem" class="form-control" id="exampleFormControlSelect3">
      <option disabled selected>Chose ITEM</option>
       <?php 
       foreach ($items as $arre){
        $mz = $arre["item"];
        echo "<option>".$mz.'</option>';
      }
      ?> 
    </select>
	
    </div>
      <input type="button" id="DeleteBtn" value="Send" />
  </div>
</form>



	
</body>
</html>
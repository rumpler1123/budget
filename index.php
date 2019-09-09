<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
	<title>Money app</title>
</head>
<body>
	<!-- Navbar -->
	<div class="navbar navbar-dark bg-dark">
	    <div class="container">
	      <div class="navbar-header">
	        <a href="index.html" class="navbar-brand">Bevétel / Kiadás kalkulátor</a>
	      </div>
	      <button type="submit" id="clearBtn" class="btn btn-info">Összes törlése <i class="fas fa-trash"></i></button>
	    </div>
 	</div>


 	<div class="container">
    <div class="jumbotron dark-bg">
		<h3 class="text-center pb-2">Összes pénz: <span id="total-money"></span> Ft</h3>
		<hr>
	<!-- Adatok felvétele -->
		<form action="" method="POST" id="kalkulator">
			<div class="row d-flex justify-content-center">
	          <div class="form-group col-xs-3 ">
	            <label>Tétel: </label>
				<input type="text" name="item" id="item" class="form-control">
			  </div>
	        </div>
            <br>
	        <div class="row justify-content-center ">
	        	<div class="form-group col-xs-3">
		            <label>Összeg: </label>
					<input type="number" name="money" id="money" class="form-control">
			    </div>
	        </div>

	      <!-- Gombok -->
	        <div class="buttons d-flex justify-content-center">
	          <!-- bevéltel gomb -->
	         <button type="submit" class="btn btn-success mr-3" id="plusBtn"><i class="fas fa-plus"></i> Bevétel</button>
	         <!--
			<input type="submit" name="plus" value="bevetel" id="plusBtn">
			-->

			<!-- kiadás gomb -->
	        <button type="submit" class="btn btn-danger " name="minus" id="minusBtn"><i class="fas fa-minus"></i> Kiadás</button>
	        <!--
			<input type="submit" name="minus" value="kiadas" id="minusBtn">
			-->
			        </div>
	      <!-- Form end -->
		</form>
    </div>
  </div>

  <!-- Tables -->
  <div class="container">

    <div class="row">
      <!-- bevétel -->
      <div class="col-md-6 mt inTableDiv">
        <table class="table table-striped" >
          <thead class="table-plus">
            <tr>
              <th class="text-success">Bevétel típusa: </th>
              <th class="text-success">Összeg: </th>
              <th></th>
            </tr>
          </thead>
          <tbody id="moneyPlusTable" class="allTable">
            <!-- JS-ből jön az adat -->
          </tbody>
          <tfoot id="tfootPlus">
            <tr class="tfootRowMinus bg-success">
              <td ><strong>Összes bevétel: </strong></td>
              <td><strong><span id="totalPlusMoney" class="TotalPlus"></span > Ft</strong></td>
              <td></td>
            </tr>
          </tfoot>
        </table>
      </div>

       <!-- Kiadás -->
      <div class="col-md-6 mt outTableDiv">
        <table class="table table-striped">
          <thead class="table-minus">
            <tr>
              <th class="text-danger">Kiadás típusa: </th>
              <th class="text-danger">Összeg: </th>
              <th></th>
            </tr>
          </thead>
          <tbody id="moneyMinusTable" class="allTable">
            <!-- JS-ből jön az adat -->
          </tbody>
          <tfoot id="tfootMinus">
            <tr class="footRowMinus bg-danger">
              <td><strong>Összes kiadás: </strong></td>
              <td><strong><span id="totalMinusMoney" class="TotalMinus"></span > Ft</strong></td>
              <td></td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>


<!-- Javascriptek -->
<script type="text/javascript" src="app/bevetel.js"></script>
<script type="text/javascript" src="app/kiadas.js"></script>
<script type="text/javascript" src="app/torles.js"></script>
<script type="text/javascript" src="app/minuszlista.js"></script>
<script type="text/javascript" src="app/pluszlista.js"></script>
<script type="text/javascript" src="app/osszesPenz.js"></script>
</body>
</html>

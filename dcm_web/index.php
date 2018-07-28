
<!DOCTYPE html>
<html>
  <header>
    <title>FAU Data Ceter Monitoring</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
  </header>
  <body>

    <div class="container">
      <div class="header">
        <h3 class="text-muted clearfix">Florida Atlantic University Data Ceter Monitoring</h3>
	<img id="fau" class="fit" src="img/fauowl.svg"/>
      </div>

      <div class="jumbotron">
        <p class="lead">Clickable essential floorplan of the Boca Raton FAU data center. Supported with Grafana.</p>
        <p><a class="btn btn-lg btn-info" href="http://10.15.5.231/d/wL5Dflezk/reading-swarm?refresh=3m&orgId=1" role="button">Data Center Reading Swarm</a></p>
      </div>

      <div class="container text-center bg lead jumbotron col-sm-10 col-sm-offset-1 panel panel-default">
	<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-4">
	  <h2><a class="btn btn-lg btn-default" href="http://10.15.5.231/d/ERfupeezk/row-a-reading-swarm?orgId=1" role="button">Row A</a></h2>
	  <table class="table table-bordered">
	    <tbody>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/bPXN91ezz/row-a-rack-12-rack-pdu?refresh=3m&orgId=1';">A12</td>
	      </tr>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/bPXNceezz/row-a-rack-11-rack-pdu?refresh=3m&orgId=1';">A11</td>
	      </tr>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/L3cPaj6a2/row-a-rack-10-ac?refresh=3m&orgId=1';">A10</td>
	      </tr>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/aQMpefea5z/row-a-rack-9-rack-pdu?refresh=3m&orgId=1';">A9</td>
	      </tr>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/aQMpefea4z/row-a-rack-8-rack-pdu?refresh=3m&orgId=1';">A8</td>
	      </tr>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/Q2q7e94z/row-a-rack-7-rack-pdu?refresh=3m&orgId=1';">A7</td>
	      </tr>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/L3cBFe6zz/row-a-rack-6-ac?refresh=3m&orgId=1';">A6</td>
	      </tr>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/bP2q7e9iz/row-a-rack-5-rack-pdu?refresh=3m&orgId=1';">A5</td>
	      </tr>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/bPXNceqiz/row-a-rack-4-xups?refresh=3m&orgId=1';">A4</td>
	      </tr>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/FMAyW66zk/row-a-rack-3-xups?refresh=3m&orgId=1';">A3</td>
	      </tr>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/zSiRh9ekz/row-a-rack-2-ups?refresh=3m&orgId=1';">A2</td>
	      </tr>
	      <tr>
		<td>A1</td>
	      </tr>
	    </tbody>
	  </table>
	</div>
	<div class="col-sm-2"></div>
	<div class="col-sm-4">
	  <h2><a class="btn btn-lg btn-default" href="http://10.15.5.231/d/SGNgh66zk/row-b-reading-swarm?refresh=3m&orgId=1" role="button">Row B</a></h2>
	  <table class="table table-bordered">
	    <tbody>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/ANZ10zzbP/row-b-rack-12-rack-pdu?refresh=3m&orgId=1';">B12</td>
	      </tr>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/A9Ze00zbP/row-b-rack-11-rack-pdu?refresh=3m&orgId=1';">B11</td>
	      </tr>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/L3cBBj6i2/row-b-rack-10-ac?refresh=3m&orgId=1';">B10</td>
	      </tr>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/AMze04zaQP/row-b-rack-9-rack-pdu?refresh=3m&orgId=1';">B9</td>
	      </tr>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/AeZe04zaQP/row-b-rack-8-rack-pdu?refresh=3m&orgId=1';">B8</td>
	      </tr>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/AqZe04zaP/row-b-rack-7-rack-pdu?refresh=3m&orgId=1';">B7</td>
	      </tr>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/L3cBAe6i2/row-b-rack-6-ac?refresh=3m&orgId=1';">B6</td>
	      </tr>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/AqZe0izbP/row-b-rack-5-rack-pdu?refresh=3m&orgId=1';">B5</td>
	      </tr>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/ANZe0izbP/row-b-rack-4-rack-pdu?refresh=3m&orgId=1';">B4</td>
	      </tr>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/FmIyW63zk/row-b-rack-3-xups?orgId=1';">B3</td>
	      </tr>
	      <tr>
		<td onclick="window.location='http://10.15.5.231/d/zSiRh9eke/row-b-rack-2-ups?orgId=1';">A2</td>
	      </tr>
	      <tr>
		<td>B1</td>
	      </tr>
	    </tbody>
	  </table>
	</div>
	<div class="bottom-align-text">
	  <p>Door</p>
	</div>
      </div>
      <div class="col-sm-1"></div>`
    </div>
   </div>
      <footer class="footer">
        <p>Spring 2018 Florida Atlantic University</p>
        <p>Grant Lanham</p>
      </footer>

    </div> <!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  

</body>

<script src="js/jQuery-3.2.1.js"></script>           
<script src="js/custom.js"></script>           
<script src="js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test MSISDN</title>
</head>
<body>
<h1>MSISDN</h1>
<p>Vnesite MSISDN številko</p>
	<form id="forma">
		<label for="number">Številka: </label>
		<input type="text" name="number" id="msisdn" placeholder="Vnesite MSISDN številko" maxlength="15" required>
		<button type="submit">Preveri</button>
	</form>
	<br>
	<p>Rezultat:</p>
	<p id="rez"></p>

<!-- jquery cdn -->
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#forma').on('submit', function(e) {
			e.preventDefault();
			$.post("validate.php", f.serialize(), function (result) {
                $('rez').text(result);
            });
		});
	});
</script>
</body>
</html>
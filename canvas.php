<!DOCTYPE html>
<html>

<head>
	<title>
		How to take screenshot of
		a div using JavaScript?
	</title>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script>
        html2canvas(document.body, {
onrendered: function(canvas)
{
var img = canvas.toDataURL();
$("#result-image").attr('src', img).show();
}
});
        </script>
</head>

<body>
	<div id="photo">
		<h1>GeeksforGeeks</h1>
		Hello everyone! This is a
		trial page for taking a
		screenshot.
		<br><br>
		This is a dummy button!
		<button> Dummy</button>
		<br><br>
		Click the button below to
		take a screenshot of the div.
		<br><br>

		<!-- Define the button
		that will be used to
		take the screenshot -->
		<button onclick="takeshot()">
			Take Screenshot
		</button>
	</div>
	<h1>Screenshot:</h1>
	<div id="output"></div>

	<script type="text/javascript">

		// Define the function
		// to screenshot the div
		function takeshot() {
			let div =
				document.getElementById('photo');

			// Use the html2canvas
			// function to take a screenshot
			// and append it
			// to the output div
			html2canvas(div).then(
				function (canvas) {
					document
					.getElementById('output')
					.appendChild(canvas);
				})
		}
	</script>
</body>

</html>

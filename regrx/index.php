<html>
	<head>
		<meta content="text/html; charset=UTF-8" http-equiv="content-type">
		<title>Regex</title>
		<link href="css/style.css" media="screen" rel="stylesheet" type="text/css">
	</head>
<body class="app-wrapper">
	<div class="content">
		<div class="notification"></div>
		<div class="message"></div>


		<div class="Form-holder">
			<div class="placeholder">
				<fieldset>
					<ul>
						<li>
						<label class="label">Insert String</label>
						</li>
						<li>
						<input type="text" name="handle" id="handle"><button class="go"> <span> Fetch Result</span></button>
						</li>

					</ul>
				</fieldset>
			</div>
		</div>
		<div class="pics">
			<div class="result"  id="result"></div>
		</div>
	</div>
<script src="scripts/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('button.go').live('click',function() {
		var Handler =jQuery('#handle').val();
		jQuery('#result').html('');
		jQuery.post('getusers.php', {string: Handler }, function(data) { 
											jQuery('<div/>', {
											    'class': 'my-new-list',
											    html: data
											  }).appendTo('#result');
											});
										});;

});
</script>
</body></html>

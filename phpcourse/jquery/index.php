<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<div id="Name">
			Hello World
		</div>

		<div class="ABC">
			Hello World
		</div>

		<legend>This is a legend</legend>
		<hr>
		<legend>This is a legend2</legend>
		<hr>
		<legend>This is a legend3</legend>

		
			<input type="text" name="email" id="email">
			<button id="submitform">Click to Submit</button>


		<hr>

		<div style="background: red; height: 100px; color: #fff" class="block1">
				Hello There
		</div>
		<button class="btn1">Hide</button>
		<button class="btn2">Show</button>
	
	<hr><br>
	<?php for ($i=1; $i <= 10; $i++): ?>
		<button class="id_get" data-rowID="<?= $i ?>">Click me <?=$i?></button> <br>
	<?php endfor; ?>
		


	<script src="js/jquery.min.js"></script>
	<script>

		$('.id_get').click(function(event) {
			var id = $(this).data('rowID');
			alert(id);
		});

		$('.id_get').click(function(event) {
			$(this).attr({
				property1: 'value1',
				property2: 'value2'
			});
		});


		$('#Name').html('fdfdfd');
		$('.ABC').css('color', 'red');
		$('legend').hide('slow');  //document.getElementByTagName('legend')
		$('input[name=email]').val('Enter your email');
		$('#email').val('enter emeil');
		//click, mouseover, mousedown, keyup, keydown, focus. blur
		$('#submitform').click(function() {
			$('#email').val('you clicked the button'); //Set to input value
		});

		$('.btn1').click(function() {
				$('.block1').hide('slow');
		})
		$('.btn2').click(function() {
				$('.block1').show('slow');
		})

		$('#email').keyup(function(event) {
			var inputVal = $('#email').val(); //get value of input
			$('.block1').html(inputVal);
		});

	</script>
</body>
</html>
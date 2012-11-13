<?
$no1 = rand(0,9);
$no2 = rand(0,9);
$no3 = $no1+$no2;
?>
	<script type="text/javascript" src="contact_files/js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="contact_files/js/jquery.validate.min.js"></script>
    <script type="text/javascript">
	$(document).ready(function(){
		$('#contactme').validate({
			debug: false,
			rules: {
				 
				fname: { required: true, minlength:2 },
				 	
				lname: { required: true, minlength:2 },
				 	
				email: { required: true, email: true },
				 
				subject: { required: true, minlength:2 },				
				 
				message: { required: true, minlength:2, },				
				 
				captcha: { required: true, number:true, range:[<? echo $no3.','.$no3; ?> ]},			},
			messages: {<? $msj='""'; /*you can insert here a customized error message*/ ?>				
                
                fname: <? echo $msj; ?>,
				
				lname: <? echo $msj; ?>,
				 
				email: <? echo $msj; ?>,
				 
				subject: <? echo $msj; ?>,
				 
				message: <? echo $msj; ?>,				
                 
				captcha: <? echo $msj; ?>,				
			},
			submitHandler: function(form) {
				// do other stuff for a valid form
				 
				$.post('contact_files/process.php', $('#contactme').serialize(), function(data) {
					$('#results').html(data);
				});
			}
		});
	});
	</script>
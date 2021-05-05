<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div>
		CIAO DI NUOVO! (<em>si va di nulla</em>)
	</div>
	<div>Qui proviamo Mr.Balde, preprocesore di Sir Laraver.</div>

	<?php echo '<br><br><br>faccio finta di non sapere dove mi trovo e scrivo plain php' ?>
	<?php echo '<br>(il solito tag funziona)' ?>

	<h4>Facciamo sul serio</h4>

	@if (true) 
		<div>faccio cose</div> 
	@endif

	@php 
		$gente = ['ciccio','michele','gennaro'];
		echo '(funziona anche il nuovo tag)';	
	@endphp

	<ol>
		@foreach ($gente as $tizio)
			<li>
				{{$tizio}}
				{{-- @if ($loop->last) (er mejo) --}}
			</li>
		@endforeach
	</ol>

</body>
</html>
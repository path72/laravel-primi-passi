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

	@for ($i=0; $i<1; $i++)
		<div>questo ciclo è inutile, ma almeno funziona</div> 
	@endfor

	{{-- ah ma adesso il commento è così! --}}

	@php
		echo $i.': lo scope lascia a desiderare...<br>';	
		echo '(funziona anche il nuovo tag)<br><br>';	
	@endphp

	{{-- ma in un ciclo while come incremento la variabile? --}}
	{{-- @while (true)
		<div>tra chiocciole e dollari, c'è un grande caos sotto il cielo: la situazione è eccellente!</div>
	@endwhile --}}

	@for ($i = 0; $i < 10; $i++)
		<div>tra chiocciole e dollari, c'è un grande caos sotto il cielo: la situazione è eccellente!</div>
	@endfor

	@php 
		$gente = ['ciccio','michele','gennaro'];
	@endphp

	<ol>
		@foreach ($gente as $tizio)
			<li>
				{{$tizio}}
				@if ($loop->last) 
					(er mejo)
				@endif
			</li>
		@endforeach
	</ol>

	{{-- 
		php artisan serve 		>>> ok
		php artisan list 		>>> ok
		php artisan route:list 	>>> ok
		poi?
	--}}

</body>
</html>
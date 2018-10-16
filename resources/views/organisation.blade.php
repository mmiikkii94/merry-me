<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/navigation.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/default.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/organisation.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
 
<body>
@include('navigation')
@extends('layout')

@section('content')




<div class="container">



        <h1 class="margin-title">O nama:</h1>

       
    <div class="row">
        <div class="col-sm-6">
         
<div class="about-text">
Ovdje ce da ide neki tekst o vama kao organizatorima. Neki tekst bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla
</br>
</br>	
bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla

bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla blabla bla bla 


</div>
<div class='angrytext' >Danijel & Milica</div>
</div>
<div class="col-sm-6">
<img src="storage/images/aboutphoto.jpg" alt="photo of us" class="aboutphoto heartbeat">
</div>
</div>
<h2 class="we-text">Sta mozemo da uradimo za Vas?</h2>

<div class="undertitle">
	Ukoliko zelite mozemo da organzujemo sve za vase vjencanje. Vase je da se opustite i da nam date povjerenje. 
	Nase visegodisnje iskutvo u ovo biznisu garantuje...
Ostatak teksta bla bla bla bla bla bla bla

</div>
<div class="gallery">

	<div class="pet text-blur-out">
			Mozemo pronaci savrsenu lokaciju!
		</div>
		<div class="galery-images">
          <img src="storage/images/about1.jpg">
		</div>
		
		  <div class="galery-images">
          <img src="storage/images/about2.jpg" >
		</div>
		  <div class="pet text-blur-out">
		   Organizovati bend ili pjevaca po vasem ukusu!
		</div>
		<div class="pet text-blur-out">
				Sta mislite o savrsenim fotografijama?
			 </div>
			<div class="galery-images">
          <img src="storage/images/about3.jpg" />
			</div>
			
			<div class="galery-images">
          <img src="storage/images/about4.jpg" />
		</div>
		<div class="pet text-blur-out">
			I nesto u vezi torte bla bla!
			</div>	
	</div>
	<div class="under">
	I jos mnogo drugih stvari!
</div>
   
	<h2 class="mb-2 text-center">Kontakt</h1>
	
	@if(session('message'))
	<div class='alert alert-success'>
		{{ session('message') }}
	</div>
	@endif
    
    

    <div class="form-margin">
	<div class="col-12  ">
		<form class="form-horizontal" method="POST" action="/contact">
			{{ csrf_field() }} 
			<div class="form-group">
			<label for="Name">Ime:</label>
			<input type="text" class="form-control" id="name" placeholder="Vase Ime" name="name" required>
		</div>

		<div class="form-group">
			<label for="email">E-mail: </label>
			<input type="text" class="form-control" id="email" placeholder="ivanivanovic@gmail.com" name="email" required>
		</div>

		<div class="form-group">
			<label for="message">Poruka: </label>
			<textarea type="text" class="form-control luna-message" id="message" placeholder="Unesite zeljenu" name="message" rows="6" required></textarea>
		</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary" value="Send">Posalji</button>
			</div>
		</form>
  </div>
</div>
 </div> 
<h2 style="text-align: center;margin-bottom:2%">Mozete nas naci na ovoj adresi::</h2>



<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHxr_bTlAOTp_D9e5VdvqJjk4zDsYyPBw'></script><div style='overflow:hidden;height:444px;width:630px;' class="map-canvas"><div id='gmap_canvas' style='height:444px;width:630px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://add-map.com/'>h</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=f51b208f6d1cc75f2e6d51aca03997cd277c3b72'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(42.4598513,19.298854600000027),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(42.4598513,19.298854600000027)});infowindow = new google.maps.InfoWindow({content:'<strong>Merry-Me</strong><br>Balkanka<br>81000 Podgorica<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
@endsection
@include('footer')

</body>
</html>
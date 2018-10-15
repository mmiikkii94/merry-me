<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css/navigation.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/default.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/salon.css') }}" />
        <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
     
    
    
    
        <title>Document</title>
<body>
<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=2124667064488089&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
@include('navigation')


<div class="row search-title-margin">
    <div class="col-sm-6 page-title">
           <div class="demotext"> Here  you can find a perfect wedding cake for you: </div></div>
<div class="col-sm-6">
{{Form::open(['method'=> 'GET'] )}}
{{Form::input('search', 'q', null, ['placeholder' => 'Search to find specific place...', 'class' => 'form-style'],array('class' =>"search-style" )) }}
{{ Form::close()}}
</div>
</div>

<div class="row">
      
@foreach ($cakes as $cake)

<div class="col-sm-6">
<div class="card hover fade-in" style="width:70%;">
  <img class="card-img-top " src="storage/images/{{$cake->image}}" alt="Card image cap" style="object-fit:contain; height:400px">
  <div class="card-body">
    <h5 class="card-title">
      <div class="left">
      {{$cake->name}}
    </div>
    <div class="right">
        {{$cake->city}}
      </div>
      </h5>
      <br>
      <div class="contact">
    <p class="card-text">{{$cake->description}}</p>
    <div class="contact-margin">
    <i class="far fa-envelope fa=spin">&nbsp;&nbsp;</i>{{$cake->mail}}
    </div>
    <div class="contact-margin">
    <i class="fas fa-phone fa-spin"></i>&nbsp; {{$cake->phone}}
    </div>
    <div class="contact-margin">
    <i class="fas fa-link"></i>
    
    <a href="/"> &nbsp;{{$cake->website}}</a>
  </div>
  </div>
    <div class="card">
      <div class="card-block">
   
        
      </div>
      
    </div>
<div class="colaps">
    <button class="collapsible">Show Comments</button>

<div class="content">
  
    <div class="fb-comments" data-href="http://testingsite.com/{{$cake->id}}" data-numposts="5"></div>
</div>
</div>
   


  </div>
  
</div>

</div>

@endforeach

</div>



</div>
<div class="d-flex pagination">
    <div class="mx-auto">
{{$cakes->links()}}
    </div>
</div>
@include('footer')
<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;
    
    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
    </script>
    
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

</body>
</html>

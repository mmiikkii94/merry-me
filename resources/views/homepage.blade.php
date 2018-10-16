<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/navigation.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/default.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <title>Pocetna</title>
</head>
<body>
    
@include('navigation')

<div class="top-margin">
    <div class="slide-margin">
        <div class="slide" >
             <img class="mySlides" src="{{url('storage/images/slide1.jpg')}}" >
             <img class="mySlides" src="{{url('storage/images/slajd22.jpg')}}">
             <img class="mySlides" src="{{url('storage/images/slide3.jpg')}}" >
             <img class="mySlides" src="{{url('storage/images/slide4.jpg')}}" >
             <img class="mySlides" src="{{url('storage/images/slide5.jpg')}}" >
        </div>
    </div>
</div>

<div class="quote typewriter">
    “You don’t marry the person you can live with … 
    <br>
    You marry the person you can’t live without.”
    <br>
     —Unknown Author
</div>
    
<h2 class="firstTitle">How many things do you need for a wedding?</h2>
<div class="article1"> Almost everyone has a dream wedding plan in their head: white dress, smart tuxedo, that first dance, leaving for your honeymoon in a beautiful vintage car.

<p>
    While it’s easy to get caught up in the romance of it all, there are a lot of things big and small that you may not think to consider when preparing for a wedding. With a wedding, the details—whether it’s gifts for your groomsmen or having a repair kit handy—can make or break the day.
</p>

Below, you can find a checklist to help you make sure that you’ve thought about and planned for every part of your wedding: from the earrings worn by the flower girls to the ribbons on your car.
<br>

        <a href="{{ url('/salon') }} "class="article-link"> <i class="far fa-check-square"></i>&nbsp; Salon</a>
        <a href="{{ url('/music') }} "class="article-link"><i class="far fa-check-square"></i>&nbsp;Music</a>
        <a href="{{ url('/catering') }}"class="article-link"><i class="far fa-check-square"></i>&nbsp;Catering</a>
        <a href="{{ url('/clothes') }}"class="article-link"><i class="far fa-check-square"></i>&nbsp;Clothes</a>
        <a href="{{ url('/cakes') }}"class="article-link"><i class="far fa-check-square"></i>&nbsp;Cakes</a>
        <a href="{{ url('/photovideo') }}"class="article-link"><i class="far fa-check-square"></i>&nbsp;Photo and Video</a>
        <a href="{{ url('/jewelry') }}"class="article-link"><i class="far fa-check-square navigation"></i>&nbsp;Jewelry</a>
        
 </div>

 <div class="parallax">
     I tako je ljubav pocela
 </div>


<h2 class="move-right-title">How to find a good divorce lawyer?</h2>

<div class="article2"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est necessitatibus consequuntur fugiat in, placeat soluta consequatur? Incidunt minus iure voluptatem numquam corporis ut aliquid eum harum itaque voluptates. Dolorum, qui.
        Iusto quis quaerat similique et cupiditate blanditiis 
        Autem ut corporis minima similique in quis alias temporibus mollitia. Esse et est voluptatum animi eius temporibu
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est necessitatibus consequuntur fugiat in, placeat soluta consequatur? Incidunt minus iure voluptatem numquam corporis ut aliquid eum harum itaque voluptates. Dolorum, qui.
        Iusto quis quaerat similique et cupiditate blanditiis voluptatibus nulla, laborum laudantium possimus officia dignissimos nesciunt, consequatur incidunt autem debitis.
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Est necessitatibus consequuntur fugiat in, placeat soluta 
    </div>

@include('footer')

<script>
    var myIndex = 0;
    carousel();
    
    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";  
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}    
        x[myIndex-1].style.display = "block";  
        setTimeout(carousel, 2000); 
    }
    </script>

</body>
</html>
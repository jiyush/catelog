<!DOCTYPE html>

<html lang="">

<head>
<title>J-Curve</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{{ asset('layout/styles/layout.css') }}" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body id="top">

<div class="wrapper row1" >
  <header class="hoc clear"> 
    
    <div id="logo" class="one_half first">
      <h1 class="logoname"><a href="index.html">
        <!-- <span>Suro</span>gou -->
        <img  src="images/jcurve.jpeg" style="height: 100px; width: 250px">
          
      </a></h1>
    </div>
    <div class="one_half" id="header">
      <ul class="nospace clear">
        <li class="one_half first">
          <div class="block clear"><i class="fas fa-phone"></i> <span><strong class="block">Call Us:</strong> +00 (123) 456 7890</span> </div>
        </li>
        <li class="one_half">
          <div class="block clear"><i class="far fa-clock"></i> <span><strong class="block"> Mon. - Sat.:</strong> 08.00am - 18.00pm</span> </div>
        </li>
      </ul>
    </div>
    
  </header>
  <nav id="mainav" class="hoc clear"> 
    
    <ul class="clear">
      <li><a href="{{ route('root') }}">Home</a></li>
      <li><a href="{{ route('industry.all') }}">industries</a></li>
      <li><a href="{{ route('root') }}#category">category</a></li>
      <li><a href="{{ route('root') }}#contact_us">contact us</a></li>
    </ul>
    
  </nav>
</div>

<div class="wrapper gradient">
  <section id="cta" class="hoc container clear"> 
    
    <div class="sectiontitle">
      <h6 class="heading">All Industries</h6>
      <!-- <p>in urna proin luctus ligula eget mauris quisque congue malesuada</p> -->
    </div>
    <ul class="nospace clear">
      <li class="one_third first">
        <input type="text" name="industry" class="form-control" placeholder="Search industry by Name">
      </li>
      <li class="one_third">
        <input type="text" name="industry" class="form-control" placeholder="Search industry by Location">
      </li>
      <li class="one_third">
        <select class="form-control">
          <option>Search by Category</option>
        </select>
      </li>
    </ul>
    <div class="row m-4">
      <div class="card border-warning mb-4" >
      <div class="card-header">Header</div>
      <div class="card-body text-warning">
        <h5 class="card-title">Warning card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
    </div>
    
  </section>
</div>

<div class="wrapper row4" id="contact_us">
  <footer id="footer" class="hoc clear"> 
    
    <div class="one_third first">
      <h1 class="logoname">
          <img  src="images/jcurve.jpeg" style="height: 100px; width: 250px">
      </h1>
      <p class="btmspace-30">Sem nam et erat nec eros elementum gravida proin bibendum diam sed congue sagittis metus risus rutrum mauris sed euismod nisl purus vel leo phasellus nunc erat cursus aliquet [<a href="#">&hellip;</a>]</p>
      <ul class="faico clear">
        <li><a class="faicon-dribble" href="#"><i class="fab fa-dribbble"></i></a></li>
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
      </ul>
    </div>
    <div class="one_third">
      <h6 class="heading">Etiam auctor dignissim</h6>
      <p class="nospace btmspace-15">Leo integer sem nisl mollis ut ornare eu lobortis eget ante mauris tempor.</p>
      <form method="post" action="#">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    
  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">J-curve</a></p>
    
    
  </div>
</div>

<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="{{ asset('layout/scripts/jquery.min.js') }}"></script>
<script src="{{ asset('layout/scripts/jquery.backtotop.js') }}"></script>
<script src="{{ asset('layout/scripts/jquery.mobilemenu.js') }}"></script>
<script src='http://ajax.googleapis.com/ajax/libs/mootools/1.4.5/mootools-yui-compressed.js'></script>
</body>
</html>
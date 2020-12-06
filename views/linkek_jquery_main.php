<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>jQuery</title>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>  
  <link rel="stylesheet" type="text/css" href="../css/main_style.css">

  <style>
   
	.hover{
	background-color: yellow;
	}
	.piros{
	color:red;
	}
	.kek{
	color:blue;
	}
  </style>
  
</head>
<body>
  <h2>jQuery - zh feladat</h2>

<div class="container">
 
	
    <p>hasellus malesuada faucibus consequat. Curabitur</p>
    <p>pretium facilisis, erat</p>
    <p>luctus et ultrices posuere cubilia curae; Phasellus malesuada faucibus consequat. </p>
    <p>urna eget pretium facilisis, erat purus accumsan lorem</p>
    <p>Cras in tempor libero. Quisque p</p>
    <p>Phasellus quis sagittis purus.</p>
    <p>Lorem ipsum dolor sit amet,</p>
    <p>Aliquam vehicula tincidunt</p>
    <p>Sed vel semper ante, et ege</p>
    <p>Vivamus lectus purus, </p>
	
	

</div>
  
  <script>
   
	$("p:even").addClass("piros");
	const last3 = $(".container > p:gt("+($(".container > p").length-4)+")");
  last3.css("display", "none");


  $(".container > p:nth-child(3)").click(function() {
    if ($(this).hasClass("piros")) {
      $(this).removeClass("piros");
      $(this).toggleClass("kek");
    } else {
      $(this).removeClass("kek");
      $(this).toggleClass("piros");
    }
  });

  $( ".container > p:nth-child(2)" ).hover(
  function() {
    $( this ).css("background-color", "yellow");
  }, function() {
    $( this ).css("background-color", "white");
  }
);

  </script>
</body>
</html>

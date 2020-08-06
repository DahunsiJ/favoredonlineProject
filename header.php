<html>
 <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

       <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FavoredOnline Skills Acquisition Network</title>
    <link rel="stylesheet" type="text/css"
    href="styles.css" />

</head>
<body>
    <header class="header">
<div class="header">
        <a href="https://favoredonline.com/index.php"
        class="logo">FavoredOnline</a>
          <div class="header-right">
          <img
          src="https://Favoredonline.com/images/FavoredOnline.png" width="30px"
          height="auto"/>
          </div>
       </div>
        
        
      <div class="slider" style="max-width:1000px; flex:content">
          <img class="mySlides" src="img/imgs/1.png" style="width:100%">
          <img class="mySlides" src="img/imgs/2.png" style="width:100%">
          <img class="mySlides" src="img/imgs/3.png" style="width:100%">
          <img class="mySlides" src="img/imgs/4.png" style="width:100%">
      </div>

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
              setTimeout(carousel, 2000); // Change image every 2 seconds
            }
      </script>

    </header>


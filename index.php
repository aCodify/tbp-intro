<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>TBP</title>

  <!-- css -->
  <link href="css/main.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

    </head>
    <body>

      <div class="wrapper-intro-content">
        <div class="intro-content">
          <div>
            <img src="http://lorempixel.com/375/250/sports/1" alt="">

            <div class="box-text">
              food pack asia food processing & packaging
            </div>
          </div>
          <div>
            <img src="http://lorempixel.com/375/250/sports/2" alt="">

            <div class="box-text">
              food pack asia food processing & packaging
            </div>

          </div>
          <div>
            <img src="http://lorempixel.com/375/250/sports/5" alt="">

            <div class="box-text">
              food pack asia food processing & packaging
            </div>
          </div>
          <div>
            <img src="http://lorempixel.com/375/250/sports/6" alt="">

            <div class="box-text">
              food pack asia food processing & packaging
            </div>

          </div>

          <div>

            <span>3-6 march 2016 10:00-19:00</span>

            <span>10:00-19:00 <br> bitec bangkok</span>

            <a href="javascript:;" class="gt-website">
              go to <br>
              website
            </a>
          </div>
        </div>
      </div>


      <!-- js-->
      <script src="js/jquery-11.1.1.min.js"></script>

      <script>
        $(document).ready(function() {



         function woody() {
           $('.wrapper-intro-content').height($(window).height());
         }
         woody();
         $(window).resize(function() {
          woody();
        });



         var h_footer = $('.intro-content > div:last-child').outerHeight(true);
         var h_all = $('.intro-content').outerHeight(true);

         var h_avr = (h_all - h_footer ) / 2;

         $('.intro-content > div:nth-child(1),.intro-content > div:nth-child(2),.intro-content > div:nth-child(3),.intro-content > div:nth-child(4)').css('height', h_avr);


         $('.intro-content > div').hover(function() {
          var hv = $(this);

          hv.find('img').css({opacity: '1'});
          hv.siblings().addClass('active');
        }, function() {
          $(this).find('img').css({opacity: '0.1'});
          $(this).siblings().removeClass('active');
        });


       });
      </script>


    </body>
    </html>
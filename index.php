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
            <img src="images/p1.png" height="225" width="374" alt="">

            <div class="box-text c-1">
              <div class="text-1" >thailand</div> 
              <div class="text-2" >industrail</div>
              <div class="text-3" >fair 2016</div>
            </div>
          </div>
          <div>
            <img src="images/p2.png" height="225" width="374" alt="">

            <div class="box-text c-2">
              <div class="text-3" >food</div> 
              <div class="text-2" >pack asia</div>
              <div class="text-1" >rood processing $ packaging</div>
            </div>

          </div>
          <div>
            <img src="images/p3.png" height="225" width="374" alt="">

            <div class="box-text c-3">
              <div class="text-1" >thailand</div> 
              <div class="text-3" >robot</div>
              <div class="text-3" >fighting</div>
            </div>
          </div>
          <div>
            <img src="images/p4.png" height="225" width="374" alt="">

            <div class="box-text c-4">
              <div class="text-3" >3d cake &</div> 
              <div class="text-2" >chigiri pan</div>
              <div class="text-1" >championship 2016</div>
            </div>

          </div>

          <div class="text-h" >

            <span class="text-date" >3-6 march 2016</span>

            <span class="show-time" >10:00-19:00 <br> bitec bangkok</span>

            <a href="/" class="gt-website">
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
          hv.find('.box-text').css({color: '#000'});
          hv.find('.box-text').css({background: 'rgba(255, 255, 255, 0.61) none repeat scroll 0 0'});
          hv.siblings().addClass('active');
        }, function() {
          $(this).find('img').css({opacity: '0.1'});
          $(this).find('.box-text').css({color: '#fff'});
          $(this).find('.box-text').css({background: 'none'});
          $(this).siblings().removeClass('active');
        });


       });
      </script>


    </body>
    </html>
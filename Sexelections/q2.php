<?php 

  include 'header.php';

?>

</head>
<body>

<div id="headline">
	
  <h1 id="headline1">Who’s into the 69? Huh?</h1>

</div>


<div class="hover_s"></div>
<div class="hover_s_bw"></div>

<div id="buttonleft">
  <h2>Social Democrats</h2>
</div>

<div id="q1_answer">
  <h1>33%*</h1>
</div><!-- end q1 answer -->

<div class="hover_m"></div>

<div id="buttonright">
  <h2>Moderates</h2>
</div>

<div id="q1_answer_m">
  <h1>67%*</h1>
</div><!-- end q1 answer -->

<div class="progress">

  <h2 id="r_answer">You nailed it!</h2>
  <h2 id="w_answer">Are you kidding?</h2>

</div><!-- end progress -->

<div class="answer">

  <h2>This give and take position is twice as popular amongst the Moderates. You get what you give.</h2>

</div><!-- end answer -->



<div id="bottom">

    <div id="lang">
  <ul>
    <li><a href="#" alt="English" title="English">EN</a></li>
    <li><a href="http://www.sexelections.se" alt="Swedish" title="Swedish">SV</a></li>
  </ul>

</div><!-- end lang -->

<div id="icons">
    <a href="http://twitter.com/share?text=text goes here&url=http://url goes here&hashtags=sexelection,website" target="_blank"><img class="icons" src="img/twitter.png"></a>
    <a href="https://www.facebook.com/sharer/sharer.php?u=sexelections.se" target="_blank"><img class="icons" src="img/facebook.png"></a>
    <a href="http://www.eng.sexelections.se" title="home" alt="Home page"><img src="img/home.png" class="icons"></a>
    <a href="info.php"><img class="icons" src="img/info.png"></a>
</div>

<div id="buttonnext">
  <a href="q3.php">NEXT!</a>

</div>

</div>

<script type="text/javascript">

  $('#buttonleft').hover(function() {
    $('.hover_s').fadeIn('slow');
      $('#buttonleft').mouseleave(function() {
        $('.hover_s').fadeOut('slow');
      });
  });

</script>

<script type="text/javascript">

  $('#buttonright').hover(function() {
    $('.hover_m').fadeIn('slow');
      $('#buttonright').mouseleave(function() {
        $('.hover_m').fadeOut('slow');
      });
  });

</script>

<script type="text/javascript">

$( "#buttonleft" ).click(function() {
  $( "#q1_answer" ).fadeIn( "slow" );
  $( "#q1_answer h1").css( "color", "#b7b7b7");
  $( "#q1_answer_m").fadeIn( "slow");
  $( ".hover_m").fadeIn( "slow" );
  $( ".hover_s_bw").fadeIn( "slow" );
  $( ".answer").fadeIn( "slow" );
  $( "#buttonleft").css("background-color","#DBDCDC");
  $( "#buttonnext").fadeIn("slow");
  $( ".progress #w_answer").fadeIn("slow").delay( 1000).fadeOut();;
  $( "div" ).off();
});

</script>

<script type="text/javascript">

$( "#buttonright" ).click(function() {
  $( "#q1_answer" ).fadeIn( "slow" );
  $( "#q1_answer_m").fadeIn( "slow");
  $( "#q1_answer h1").css( "color", "#b7b7b7");
  $( ".hover_m").fadeIn( "slow" );
  $( ".hover_s_bw").fadeIn( "slow" );
  $( "#buttonleft").css("background-color","#DBDCDC");
  $( ".answer").fadeIn( "slow" );
  $( "#buttonnext").fadeIn("slow");
  $( ".progress #r_answer").fadeIn("slow").delay( 1000).fadeOut();;
  $( "div" ).off();
});

</script>

</body>
</html>
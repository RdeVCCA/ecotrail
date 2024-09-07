<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Eco-Trail Information</title>
<link rel="stylesheet" href="static/css/rainforest.css">
</head>

<body>
<?php 
  include('templates/defaults/nav.tpl.php');
  include('templates/defaults/hero.tpl.php');
?>


<!-- <div class="container">
  <section class="top-header">
    <img src="static/assets/image.png" alt="image placeholder">
  <div class="text-section">
    <h2>Rainforest Zone</h2>
    <p>The rainforest zone in our Eco-Trail features over 50 species of flora and fauna, thriving in an environment with abundant rainfall and dominated by tall evergreen trees.</p>
  </div>
  </section>
</div> -->

<div id = "main">
  <div class="spacer"></div>


  <div class="sub-header">
    <div class="image-overlay-container">
      <img src="static/assets/rainforest_garden_title.png" alt="Background image of ferns title" class="centered-image z1">
      <img src="static/assets/rainforestgardentext.png" alt="Text overlay image" class="centered-image z3" id="header-txt-overlay">
      <img src="static/assets/rainforest_garden_rectangle.png" class="centered-image z2">
    </div>
  </div>  

  <div class="spacer"></div>

  <!--Span: Inline DIV to use JS on specific parts of text e.g. can use to surround text for bolding
  use span to use JS to transform letters to be at different positions despite being in same element. should start at the top and fade it as it comes to the bottom
  each span starts at the top. Using JS to make the timing random and bring each element down. But CSS is for animation use keyframes-->
  <section class="eco-trail-grid">
    <div class="eco-grid-item rain-image">
      <img src="static/assets/rainforestBiodiversity.jpg" alt="image">
      <p>Rainforests are home to a rich biodiversity of living organisms, while also acting as important carbon sinks.</p>
    </div>
    <div class="eco-grid-item rain-image">
      <img src="static/assets/rainforestExpanse.jpg" alt="image">
      <p>Furthermore, due to its large expanse across Earth, rainforests influence global weather patterns and rainfall.</p>
    </div>
  </section>

  <div class="centered-container">
    <div class="image-text-container">
      <div class="image-container">
        <img class = "image" src="static/assets/rainforestHerbs.jpg" alt="Meditation practice in the rainforest">
      </div>
    </div>
  </div>
  <section>
    <div class="eco-grid-item green"><p>Beyond the produce of the organisms it harbors, the plants of the rainforest also provide sources of nutrition and medicines.</p></div>
  </section>

    <div class="centered-container">
      <div class="image-text-container">
        <div class="image-container">
          <img src="static/assets/rainforestZone.jpg" alt="Meditation practice in the rainforest">
        </div>
      </div>
    </div>

  <section class="eco-trail-grid">
    <div class="eco-grid-item green">
      <p id="stats">Rainforests once covered</p>
      <p style ="font-size: 48px" class="statistic eco-grid-item green" id="stats"><b>14%</b></p>
      <p class="eco-grid-item green" id="stats">of land on Earth</p>
    </div>
    <div class="eco-grid-item green">
      <p id="stats">Reduced to just</p>
      <p style ="font-size: 48px" class="statistic eco-grid-item green" id="stats"><b>6%</b></p>
      <p class="eco-grid-item green" id="stats">due to deforestation and climate change</p>
    </div>
  </section>

  <div class="centered-container">
    <div class="image-text-container">
      <div class="image-container">
        <img src="static/assets/meditation_practice.png" alt="Meditation practice in the rainforest">
      </div>
    </div>
  </div>
  <section class="eco-trail-grid" id="mindfulness">
    <div class="eco-grid-item green"><p>As a mindfulness practice, enjoy <b>“Shinrin-yoku”</b> in our rainforest zone.</p></div>
    <div class="eco-grid-item green"><p>Absorb the forest ambiance with a leisurely walk, engaging your senses with the scenery, fragrances, and the touch of nature.</p></div>
  </section>

  <div class="spacer"></div>

    <div class="sub-header">
      <div class="image-overlay-container">
        <img src="static/assets/rain_garden_title.png" alt="Background image of ferns title" class="centered-image z1">
        <img src="static/assets/raingardentext.png" alt="Text overlay image" class="centered-image z3" id="header-txt-overlay">
        <img src="static/assets/rain_garden_rectangle.png" class="centered-image z2">
      </div>
    </div>  

    <div class="spacer"></div>

    <div class="eco-trail-grid">
      <div class="eco-grid-item rain-image item-5">
        <img src="static/assets/fern1.png" alt="image">
      </div>
      <div class="eco-grid-item green item-6">
        <p>As you walk into the Eco-Trail, you will be greeted by our rain garden on the left. </br> The rain garden is a shallow area planted with various native ground vegetation to reroute rain runoff.</p>
      </div>
      <div class="eco-grid-item green item-7">
        <p>The rain garden is dry most of the time but is designed to temporarily hold and soak in rainwater runoff within 12 hours.</p>
      </div>
      <div class="eco-grid-item rain-image item-8">
        <img src="static/assets/fern2.png" alt="image">
      </div>
    </div>
    
    <div class="spacer"></div>

    <div class="sub-header">
      <div class="image-overlay-container">
        <img src="static/assets/ferns_title.png" alt="Background image of ferns title" class="centered-image z1">
        <img src="static/assets/fernstext.png" alt="Text overlay image" class="centered-image z3" id="header-txt-overlay">
        <img src="static/assets/ferns_rectangle.png" class="centered-image z2">
      </div>
    </div>  
    <div class="spacer"></div>
    <div class="eco-trail-grid">
      <div class="eco-grid-item green item-1">
        <p>Ferns are some of the oldest living plants in the world. They can be found in diverse habitats from cold, temperate, and tropical climates.</p>
      </div>
      <div class="eco-grid-item rain-image item-2">
        <img src="static/assets/fern3.png" alt="image">
      </div>  
      <div class="eco-grid-item rain-image item-3">
        <img src="static/assets/fern4.png" alt="image">
      </div>  
      <div class="eco-grid-item green item-4">
        <p>There are thousands of species of these non-flowering vascular plants and they reproduce by spores.</p>
      </div>
    </div>
    <div class="spacer"></div>
  </div>
</div>

<script src="static/js/rainforest.js"></script>
<?php
  include('templates/defaults/gallery_rainforest.tpl.php');
?>

</body>
</html>

    <title>Rainforest Zone</title>
    <link rel="stylesheet" href="..\static\css\rainforest.css">
</head>

<body>
  <?php 
      include('templates/defaults/nav.tpl.php');
      include('templates/defaults/hero.tpl.php');
  ?>
<div class="container">
  <!-- <section class="top-header">
    <img src="..\static\assets\image.png" alt="image placeholder">
  <div class="text-section">
    <h2>Rainforest Zone</h2>
    <p>The rainforest zone in our Eco-Trail features over 50 species of flora and fauna, thriving in an environment with abundant rainfall and dominated by tall evergreen trees.</p>
  </div> -->
  </section>
<div class="sub-header">
  <div class="image-overlay-container">
    <img src="..\static\assets\rainforest_garden_title.png" alt="Background image of ferns title">
    <img src="..\static\assets\rainforestgardentext.png" alt="Text overlay image" class="centered-image">
  </div>
</div>  
<!--Span: Inline DIV to use JS on specific parts of text e.g. can use to surround text for bolding
use span to use JS to transform letters to be at different positions despite being in same element. should start at the top and fade it as it comes to the bottom
each span starts at the top. Using JS to make the timing random and bring each element down. But CSS is for animation use keyframes-->
<section class="eco-trail-grid">
  <div class="eco-grid-item rain-image"><img src="../static/assets/fern1.png" alt="Fern image"></div>
  <div class="eco-grid-item rain-image"><img src="../static/assets/fern1.png" alt="Fern image"></div>
  <div class="eco-grid-item green"><p>Rainforests are home to a rich biodiversity of living organisms, while also acting as important carbon sinks.</p></div>
  <div class="eco-grid-item green text-right"><p>Furthermore, due to its large expanse across Earth, rainforests influence global weather patterns and rainfall.</p></div>
  <div class="eco-grid-item">
    <div class="image-text-container">
      <div class="image-container"><img src="../static/assets/fern1.png" alt="Rainforest plants"></div>
      <div class="text-container"><p>Beyond the produce of the organisms it harbors, the plants of the rainforest also provide sources of nutrition and medicines.</p></div>
    </div>
  </div>
  <div class="eco-grid-item">
    <div class="image-text-container">
      <div class="image-container"><img src="../static/assets/fern1.png" alt="Rainforest foliage"></div>
    </div>
  </div>
  <div class="eco-grid-item green"><p>Rainforests once covered <b>14%</b> of land on Earth</p></div>
  <div class="eco-grid-item green text-right"><p>Reduced to just <b>6%</b> due to deforestation and climate change</p></div>
</section>
<div class="centered-container">
  <div class="image-text-container">
    <div class="image-container">
      <img src="../static/assets/meditation_practice.png" alt="Meditation practice in the rainforest">
    </div>
  </div>
</div>
<section>
  <div class="eco-grid-item green"><p>As a mindfulness practice, enjoy <b>“Shinrin-yoku”</b> in our rainforest zone.</p></div>
  <div class="eco-grid-item green text-right"><p>Absorb the forest ambiance with a leisurely walk, engaging your senses with the scenery, fragrances, and the touch of nature.</p></div>
</section>
  <div class="sub-header">
    <div class="image-overlay-container">
      <img src="..\static\assets\rain_garden_title.png" alt="Background image of ferns title">
      <img src="..\static\assets\raingardentext.png" alt="Text overlay image" class="centered-image">
    </div>
  </div>  
  <div class="eco-trail-grid">
    <div class="eco-grid-item rain-image">
      <img src="..\static\assets\fern1.png" alt="image">
    </div>
    <div class="eco-grid-item green text-right">
      <p>As you walk into the Eco-Trail, you will be greeted by our rain garden on the left. </br> The rain garden is a shallow area planted with various native ground vegetation to reroute rain runoff.</p>
    </div>
    <div class="eco-grid-item green">
      <p>The rain garden is dry most of the time but is designed to temporarily hold and soak in rainwater runoff within 12 hours.</p>
    </div>
    <div class="eco-grid-item rain-image">
      <img src="..\static\assets\fern2.png" alt="image">
    </div>
  </div>
  
  
  <br>
  <div class="sub-header">
    <div class="image-overlay-container">
      <img src="..\static\assets\ferns_title.png" alt="Background image of ferns title">
      <img src="..\static\assets\fernstext.png" alt="Text overlay image" class="centered-image">
    </div>
  </div>  
  <div class="eco-trail-grid">
    <div class="eco-grid-item green">
      <p>Ferns are some of the oldest living plants in the world. They can be found in diverse habitats from cold, temperate, and tropical climates.</p>
    </div>
    <div class="eco-grid-item rain-image">
      <img src="..\static\assets\fern3.png" alt="image">
    </div>  
    <div class="eco-grid-item rain-image">
      <img src="..\static\assets\fern4.png" alt="image">
    </div>  
    <div class="eco-grid-item green text-right">
      <p>There are thousands of species of these non-flowering vascular plants and they reproduce by spores.</p>
    </div>
  </div>
  
</div>
<script src="..\static\js\rainforest.js"></script>
</body>
</html>

    <title>Gallery</title>
    <link rel="stylesheet" href="static/css/gallery.css"/>
    <link
      href="https://fonts.googleapis.com/css?family=Inter"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php 
        include('templates/defaults/nav.tpl.php');
        include('templates/defaults/hero.tpl.php');
    ?>

    <!-- <h2 class = "subheading">Get to know about our different areas</h2>
    <div class = "redirectAreas">
        <a href = "http://localhost/ecotrail/index.php?filename=rainforest" class = "redirectArea">Rainforest Zone</a>
        <a href = "http://localhost/ecotrail/index.php?filename=wetlands" class = "redirectArea">Wetland Zone</a>
        <a href = "http://localhost/ecotrail/index.php?filename=pond" class = "redirectArea">Ornamental Pond</a>
        <a href = "http://localhost/ecotrail/index.php?filename=garden" class = "redirectArea">Fruit Tree Garden</a>
    </div> -->

    <h1 class="title">Plant Gallery</h1>

    <div class="flex-center">
      <button class="pink-button button">Select Category</button>
    </div>

    <div class="flex-center">
      <div id="plant-gallery"></div>
    </div>

    <div class="flex-center">
      <div id="plant-info">
        <div class="plant-info1">
          <img id="plant-image-1" />
          <div class="plant-info-div plant-info1-div">
            <div class="flex-center">
              <p id="plant-info-1"></p>
            </div>
          </div>
        </div>
        <div class="plant-info2">
          <img id="plant-image-2" />
          <div class="plant-info-div plant-info2-div">
            <div class="flex-center">
              <p id="plant-info-2"></p>
            </div>
          </div>
        </div>
        <div class="plant-info3">
          <img id="plant-image-3" />
          <div class="plant-info-div plant-info3-div">
            <div class="flex-center">
              <p id="plant-info-3"></p>
            </div>
          </div>
        </div>
        
      </div>
    </div>

    <!-- <div class="flex-center">
      <a class="pink-button" target="_blank" id="learn-more">Learn more</a>
    </div>
    <div class="flex-center">
      <button class="pink-button" id="next-plant">Next plant</button>
    </div> -->

    <div class="flex-center">
      <div class="grid-style">
        <a class="pink-button button" target="_blank" id="learn-more">Learn more</a>
        <button class="pink-button button" id="next-plant">Next plant</button>
      </div>
    </div>

    <script src="static/js/gallery.js"></script>
  </body>
</html>

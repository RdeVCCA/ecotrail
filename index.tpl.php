<link rel="stylesheet" href="static/css/index.css">
<link rel="stylesheet" href="static/framework/aos-master/dist/aos.css">
</head>

<body>
    <?php 
        include('templates/defaults/nav.tpl.php');
        include('templates/defaults/hero.tpl.php');
    ?>

    <section id="About-RV-Eco-Trail" class="page">
        <h1 class="header" data-aos="fade-down" data-aos-duration="2000">
            About RV Eco Trail
        </h1>
        <iframe class="flex-video" src="https://www.youtube.com/embed/A78278TutpA" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="flex-text">
            <span>
            In this video, we'll take you on a virtual tour through our little gem in RV. Take a peek at the different ecosystems we have rebuilt with hundreds of flora species and discover the peaceful spot for relaxation and inspiration at the comfort of your own home!
            </span>
        </div>
    </section>
    <section id="Wonders-of-Eco-Trail" class="page" onmouseenter="activate = true" onmouseleave="activate = false">
        <div class="video-container A">
            <video class="video" id="video-A" muted>
                <source src="static/assets/Background Forward.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="video-container B">
            <video class="video" id="video-B" muted>
                <source src="static/assets/Background Reverse.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="background-blur"></div>
        <div class="background-cover" id="background-cover">
            <img src="static/assets/blur effect.png">
        </div>
        <div id="content-storage">
            <div class="collection">
                <span>Rainforest Garden</span>
                <span>In our Eco-Trail, the Rainforest Garden is home to more than 50 species of plants and insects. Let us take a look at the Rainforest Garden and learn more about the different species present.</span>
                <span>index.php?filename=rainforest</span>
            </div>
            <div class="collection">
                <span>Wetland Zone</span>
                <span>As you walk further into our Eco-Trail, you will be greeted by an expanse of glittering water. Welcome to the wetland zone! Wetlands have key ecological roles as they serve as a habitat for diverse aquatic plants and animals. Now, let us take a look at the Wetland zone and learn more about the different species present.
                </span>
                <span>index.php?filename=wetlands</span>
            </div>
            <div class="collection">
                <span>Ornamental Pond</span>
                <span>Extending from the Fruit Tree Garden, the first ornamental pond, the goldfish pond, draws us in with its tranquil beauty.
                In comparison, the koi pond flourishes with frenetic energy. Look out for the coloured schools darting between the manicured aquascape of diverse aquatic plants. Now, let us take a look at the Ornamental Ponds and learn more about the different species present.</span>
                <span>index.php?filename=pond</span>
            </div>
            <div class="collection">
                <span>Fruit Tree Garden</span>
                <span> In our garden, a selection of tropical fruit trees can be found. The fruit trees gently invite one to step into our Eco-Trail with their scent, beauty and shade. </span>
                <span>index.php?filename=garden</span>
            </div>
        </div>
        <div class="video-content">
            <h2 class="header">
                The Wonders of the Eco Trail
            </h2>
            <div class="wonder-content">
                <h3 id="wonder-header" class="wonder-item">Rainforest Garden</h3>
                <p id="wonder-description" class="wonder-item">The Rainforest Garden in our Eco-Trail features over 50 species of flora and fauna, thriving in an environment with abundant rainfall and dominated by tall evergreen trees.</p>
                <a id="wonder-link" href="index.php?filename=rainforest" class="wonder-item"><span>Find out more</span></a>
            </div>
            
        </div>
    </section>
    <!-- <p>aaaaaaa<br>aaaaaaa<br>aaaaaaa<br>aaaaaaa<br>aaaaaaa<br>aaaaaaa<br>aaaaaaa<br>aaaaaaa<br></p> -->
    <!-- <div class="page">
        <h1 class="header">
            What is the eco trail?
        </h1>
        <div class="single-holder navmap">
            <img src="static/assets/drone shot.webp">
        </div>
    </div> -->
    <script src="static/framework/aos-master/dist/aos.js"></script>
    <script src="static/framework/jquery-3.7.1-min.js"></script>
    <script src="static/js/index.js"></script>
    <script>
        AOS.init();
    </script>
</body>
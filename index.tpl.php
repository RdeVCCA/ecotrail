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
                Description of RV Eco Trail 
            </span>
        </div>
    </section>
    <section id="Wonders-of-Eco-Trail" class="page" onmouseenter="activate = true" onmouseleave="activate = false">
        <div class="video-container A">
            <video class="video" id="video-A" autoplay muted>
                <source src="static/assets/Background Forward.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="video-container B">
            <video class="video" id="video-B" autoplay muted>
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
                <span>Rainforest Zone</span>
                <span>The rainforest zone in our Eco-Trail features over 50 species of flora and fauna, thriving in an environment with abundant rainfall and dominated by tall evergreen trees.</span>
                <span>index.php?filename=rainforest</span>
            </div>
            <div class="collection">
                <span>Wetland Zone</span>
                <span>As you walk further into our Eco-Trail, you will be greeted by an expanse of glittering water. Welcome to the Wetland zone! </span>
                <span>index.php?filename=wetlands</span>
            </div>
            <div class="collection">
                <span>Ornamental Pond</span>
                <span>Ornamental short description</span>
                <span>index.php?filename=pond</span>
            </div>
            <div class="collection">
                <span>Fruitree Garden</span>
                <span>In our garden, a selection of tropical fruit trees can be found. The fruit trees gently invite one to step into our Eco-Trail with their scent, beauty and shade.</span>
                <span>index.php?filename=garden</span>
            </div>
        </div>
        <div class="video-content">
            <h2 class="header">
                The Wonders of the Eco Trail
            </h2>
            <div class="wonder-content">
                <h3 id="wonder-header" class="wonder-item">Rainforest Zone</h3>
                <p id="wonder-description" class="wonder-item">The rainforest zone in our Eco-Trail features over 50 species of flora and fauna, thriving in an environment with abundant rainfall and dominated by tall evergreen trees.</p>
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
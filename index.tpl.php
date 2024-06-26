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
                <source src="static/assets/Sample Background.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="video-container B">
            <video class="video" id="video-B" autoplay muted>
                <source src="static/assets/Sample Background Reverse.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="background-blur"></div>
        <div class="background-cover" id="background-cover">
            <img src="static/assets/blur effect.png">
        </div>
        <div id="content-storage">
            <div class="collection">
                <span>1A</span>
                <span>1B</span>
                <span>1C</span>
            </div>
            <div class="collection">
                <span>2A</span>
                <span>2B</span>
                <span>2C</span>
            </div>
            <div class="collection">
                <span>3A</span>
                <span>3B</span>
                <span>3C</span>
            </div>
            <div class="collection">
                <span>4A</span>
                <span>4B</span>
                <span>4C</span>
            </div>
        </div>
        <div class="video-content">
            <h2 class="header">
                The Wonders of the Eco Trail
            </h2>
            <div class="wonder-content">
                <h3 id="wonder-header" class="wonder-item">Ornamental Ponds</h3>
                <p id="wonder-description" class="wonder-item">Short Description</p>
                <a id="wonder-link" href="" class="wonder-item"><span>Find out more</span></a>
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
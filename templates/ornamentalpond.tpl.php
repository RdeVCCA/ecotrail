        <title>Ornamental Pond</title>
        <link rel="stylesheet" href="/static/css/ornamentalpond.css" />
    </head>

    <body>
        <?php 
            include('templates/defaults/nav.tpl.php');
            include('templates/defaults/hero.tpl.php');
        ?>
        <!-- <div class="title">
            <div id="title-image">
                <img
                    src="https://via.placeholder.com/1200x500"
                    alt="Placeholder Image"
                />
            </div>
            <div id="title-text">
                <h1>Ornamental Ponds</h1>
                <h2>Ornamental Short Description</h2>
            </div>
        </div> -->

        <section id="goldfish-pond">
            <!-- Goldfish Pond title pic -->
            <div class="title-image-container ripple">
                <img src="/static/assets/Rectangle 9.png" id="goldfish-pond-image" class="orna-img" />
                <div id="goldfish-pond-title">
                    <h2>Goldfish Pond</h2>
                </div>
            </div>
            <div class="pre-circles">
                <div class="circle1"></div>
                <div class="circle2"></div>
                <div class="circle3"></div>
            </div>

            <!-- Goldfish Pond description -->
            <div class="image-container">
                <img src="/static/assets/Rectangle 10.png" class="small-image orna-img"/>
                <div class="description-box">
                    <p>
                        Extending from the <b>Fruit Tree Garden</b>, the first
                        ornamental pond, the <b>Goldfish Pond</b>, draws us in
                        with its tranquil beauty.
                    </p>
                </div>
            </div>
        </section>

        <section id="koi-pond">
            <!-- Koi pond title pic -->
            <div class="title-image-container ripple">
                <img src="/static/assets/Rectangle 9(1).png" id="koi-pond-image" class="orna-img"/>
                <div id="koi-pond-title">
                    <h2>Koi Pond</h2>
                </div>
            </div>
            <div class="pre-circles">
                <div class="circle1"></div>
                <div class="circle2"></div>
                <div class="circle3"></div>
            </div>

            <!-- Koi Pond description -->
            <div class="image-container">
                <img src="/static/assets/Rectangle 10.png" class="small-image orna-img"/>
                <div class="description-box">
                    <p>
                        The <b>Koi Pond</b> flourishes with frenetic energy.
                        Lookout for the coloured schools daring between the
                        manicured aquascape of diverse aquatic plants.
                    </p>
                </div>
            </div>
        </section>

        <!-- Photo Gallery -->
        <!--
        <section id="random-photos">
            <div class="image-container">
                <img
                    src="https://via.placeholder.com/580x620"
                    alt="Example Image"
                    class="plant-image-vert"
                />
                <div class="description">
                    The Pickerel Weed is native to American continents, Growing
                    up to <b>120cm</b> tall
                </div>
            </div>

            <div class="image-container">
                <img
                    src="https://via.placeholder.com/500x200"
                    alt="Example Image"
                    class="plant-image"
                />
                <div class="description--right-side">
                    <p>
                        It’s Spike inflorescence is composed of
                        <b>20-30 blue</b> to
                        <b>purple, star-shaped</b>
                        flowers
                    </p>
                </div>
            </div>

            <div class="image-container">
                <img
                    src="https://via.placeholder.com/500x200"
                    alt="Example Image"
                    class="plant-image"
                />
                <div class="description--left-side">
                    <p>
                        The
                        <b>inflorescence stalk</b>
                        and
                        <b>basal leaves</b>
                        extend from the
                        <b>submerged base</b>
                        above water.
                    </p>
                </div>
            </div>
        </section>
        -->
        

        <!-- <section class="button-container">
            <div class="center-button">
                <button class="pink-button" id="learn-more">Learn More</button>
            </div>

            <div class="center-button">
                <button class="pink-button" id="next-plant">Next Plant</button>
            </div>
        </section> -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="/static/js/orna_animations.js"></script>
        <script src="/static/js/ripple.js"></script>
    </body>
</html>

        <title>Wetlands Page</title>
        <link rel = "stylesheet" href = "static/css/wetlands.css">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php 
            include('templates/defaults/nav.tpl.php');
            include('templates/defaults/hero.tpl.php');
        ?>

        <section id = "section2">
            <div class = "Wetlands fullheight grid2">
                <h2 class = "grid-items">Wetlands</h2>
                <p class = "center grid-items floatRight">Wetlands are common all throughout the world. They can be
                    classified into 4 sections
                </p>
            </div>
        </section>

        <section id = "section3">
            <div class = "grid">
                <div class = "grey">Marsh</div>
                <div class = "grey">Swamp</div>
                <div class = "grey">Bog</div>
                <div class = "grey">Fen</div>
            </div>
        </section>

        <section class = "Wetlands fullheight" id = "Wetlands_What">
            <h2 class = "C3FFED fadebottom">What about our wetlands?</h2>
            <p class = "center C3FFED fadetop bottom floatLeft">Our freshwater marsh wetland is a shallow area of land that is
                covered by water and predominantly dotted with emergent plants.</p>
        </section>

        <section id = "section5">
            <div class = "Wetlands grid2 resize2">
                <h2>Rich Biodiversity</h2>
                <div class = "grid">
                    <p class = "floatLeft" id = "topText">The <b>Sungei Buloh Wetland Reserve</b> in Singapore is home to native
                    species like mudskippers, crabs, water snakes, herons, kingfishers, and sunbirds,
                    and attracts various migratory shorebirds during the migration season.</p>
                    <p class = "floatRight" id = "bottomText">The wetland also acts as an important carbon sink in our fight against climate change.</p>
                </div>
            </div>
        </section>

        <section class = "Wetlands fullheight grid2" id = "Mangrove1">
            <h2 class = "C3FFED grid-items">Mangroves</h2>
            <p class = "C3FFED grid-items floatRight mobileback bottom20">Right beside the main wetland, you can find the mangrove section. In collaboration with
                the Sungei Buloh Wetland Reserve, RVHS is proud to showcase the mangrove habitat in our Eco-Trail.
            </p>
        </section>

        <section class = "Wetlands fullheight" id = "Mangrove2">
            <div class = "grid resize">
                <h3 class = "C3FFED fadebottom" id = "gridA"><b>Mangroves are extremely important in our fight against climate change.</b></h3>
                <p class = "C3FFED floatLeft mobileback paddingChange bottom20" id = "gridB">The muddy waters of coastal wetlands are extremely carbon-rich and mangrove plants help to sequester
                    large amounts of carbon as they grow.</p>
                <div id = "gridC"></div>
            </div>
        </section>

        <section class = "Wetlands fullheight grid remove" id = "Mangrove3">
            <div class = "grid-items gridPaddingRemove"></div>
            <div class = "grid-items gridPaddingRemove">
                <p class = "floatRight mobileback bottom20">The trees are coastal guardians as they help prevent coastal erosion while providing a habitat for various
                    aquatic animals.
                </p>
            </div>
        </section>
            
        <section class = "Wetlands" id = "section9">
            <h2 id = "marginpls">Where are the Mangroves in Singapore?</h2>
        </section>

        <section id = "section10"> 
            <div class = "grid">
                <div class = "grey2">Sungei Buloh</div>
                <div class = "grey2">Wetlands Reserve</div>
                <div class = "grey2">Pasir Ris Park</div>
                <div class = "grey2">Pulau Semakau</div>
                <div class = "grey2">Pulau Tekong</div>
                <div class = "grey2">Pulau Ubin</div>
            </div>
        </section>  

        <section id = "section11">
            <div class = "Wetlands">
                <h2 id = "marginpls">However...</h2>
            </div>
        </section>

        <section id = "section12">
            <div class = "Wetlands grid resize">
                <div></div>
                <p class = "floatRight bottom50">mangroves in Singapore are under that due to the pressures exerted on the habitat from urbanisation and human
                    population growth
                </p>
            </div>
        </section>

        <section id = "section13">
            <div class = "Wetlands grid resize">
                <p class = "floatLeft bottom50" id = "mobileShift">It is important to protect these forests in order to protect our coasts and biodiversity to thrive</p>
                <div></div>
            </div>
        </section>

        <section id = "section14">
            <div class = "fullheight">
                <p><b>In 2026, The National Parks Board (NParks) and OCBC Bank plan to open a mangrove park with 8,000 trees
                    in Pulau Ubin
                </b></p>

                <p>It is Singapore's first large-scale project to adopt the Ecological Mangrove ERsotration method which aims
                    to produce a self-sustaining ecosystem with minimal human intervention, allowing the mangrove to propagate
                </p>
            </div>
        </section>

        <!-- <section id = "section15">
            <h2 id = "marginpls">Plant Gallery</h2>
        </section> -->

        <!-- <div class = "Wetlands" id = "Plant_Gallery">
            <section id = "section16">
                <div style = "visibility: hidden">this solves the top margin problem</div>
                <button>Select Category</button>

                <div id = "HorizontalScroll" class = "flex">
                    <div class = "box" id = "plant1">
                        <div>Name</div>
                        <div>Fruit Tree Garden</div>
                    </div>

                    <div class = "box" id = "plant2">
                        <div>Pickerel Weed</div>
                        <div>海寿花；楼鱼草</div>
                    </div>

                    <div class = "box" id = "plant3">
                        <div>Name</div>
                        <div>Fruit Tree Garden</div>
                    </div>
                </div>
            </section>

            <section id = "section17">
                <div class = "box" id = "box0">
                    <div class = "grid2">
                        <div></div>
                        <p class = "hidden">The pickerel Weed is native to American continents, Growing up to <b>120cm</b> tall</p>
                    </div>
                </div>
            </section>

            <section id = "section18">
                <div class = "box" id = "box1">
                    <div class = "grid">
                        <div></div>
                        <p class = "grid-items hidden">It's Spike inflorescence is composed of <b>20-30 blue</b> to <b>purple, star-shaped</b> flowers</p>
                    </div>
                </div>
            </section>

            <section id = "section19">
                <div class = "box" id = "box2">
                    <div class = "grid">
                        <p class = "grid-items hidden">The <b>inflorescence stalk</b> and <b>basal leaves</b> extend from the <b>submerged base</b> above water.</p>
                        <div></div>
                    </div>
                </div>
            </section>

            <section id = "section20">
                <div>
                    <button>Learn More</button>
                    <button>Next Plant</button>
                    <div style = "visibility: hidden">this solves the bottom margin problem</div>
                </div>
            </section>
        </div> -->


    </body>
    <script src = "static/js/wetlands.js"></script>
</html>
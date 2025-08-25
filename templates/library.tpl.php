        <link rel = "stylesheet" href = "static/css/library.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <?php 
            include('templates/defaults/nav.tpl.php');
            include('templates/defaults/hero.tpl.php');
        ?>

        <div class = "search_buttons">
            <input id = "search" style = "grid-area:search" type = "text" placeholder = "Search" class = "button">
            <select id="area-filter" style="grid-area:area" class="button">
                <option value="">Area</option>
                <option value="Fruit Tree Garden">Fruit Tree Garden</option>
                <option value="Rainforest Garden">Rainforest Garden</option>
                <option value="Rainforest - Ferns">Rainforest - Ferns</option>
                <option value="Wetland">Wetland</option>
                <option value="Ornamental Pond">Ornamental Pond</option>
            </select>
            <select id="type-filter" style="grid-area:type" class="button">
                <option value="">Type</option>
                <option value="tree">Tree</option>
                <option value="shrub">Shrub</option>
                <option value="fern">Fern</option>
                <option value="herb">Herb</option>
            </select>
        </div>
        <div class = "library">

        </div>
        <div class = "popup_background hidden"></div>
        <div class = "popup_library hidden">
            <div class = "popup_img_container">
                <h2 class = "popup_name primary">Name</h2>
                <p class = "popup_location tetriary">Location</p>
                <img class = "popup_img" src = "https://media.istockphoto.com/id/1409329028/vector/no-picture-available-placeholder-thumbnail-icon-illustration-design.jpg?s=612x612&w=0&k=20&c=_zOuJu755g2eEUioiOUdz_mHKJQJn-tDgIAhQzyeKUQ=">
            </div>
            <section class = "popup_info">
                <img src = "static/assets/left-arrow.png" id = "navigate-left" onclick = "navigateLeft()">
                <h3>Chinese Name</h3>
                <p class = "popup_chinesename"></p>
                <h3>Scientific Names</h3>
                <p class = "popup_altname"></p>
                <h3>Description</h3>
                <p class = "popup_description"></p>
                <h3>Fun Fact 1</h3>
                <p class = "popup_funfact1"></p>
                <h3>Fun Fact 2</h3>
                <p class = "popup_funfact2"></p>
                <h3>Fun Fact 3</h3>
                <p class = "popup_funfact3"></p>
                <img src = "static/assets/right-arrow.png" id = "navigate-right" onclick = "navigateRight()">

            </section>
        </div>
        <footer class="acknowledgements">
            <h3>Acknowledgements & Sources</h3>
            <p>Plant facts compiled from:</p>
            <ul>
                <li>NParks Flora & Fauna Web.</li>
                <li>Kew Plants of the World Online.</li>
                <li>Authoritative horticulture texts on Platycerium and Hydrocotyle.</li>
            </ul>
            <p>All descriptions edited for our garden context.</p>
        </footer>
        <script src = "static/js/default.js"></script>
        <script src = "static/js/library.js"></script>
    </body>
</html>
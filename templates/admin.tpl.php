    <link rel="stylesheet" href="static/css/admin.css">
</head>
<body>
    <?php 
        include('templates/defaults/nav.tpl.php');
        include('templates/defaults/hero.tpl.php');
    ?>
    <section>
        <h2>Trail Etiquette</h2>
        <br>
        <div id = "grid-container1">
            <div id = "grid_1" class = "left">
                <div class = "text">
                    Respect the Eco-System
                    <br>
                    <div class = "smol_left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vestibulum eget purus in eleifend.</div>
                </div>
            </div>
            <div id = "grid_2" class = "right">
                <div class = "box"><img  class = "pic" src = "static/assets/webp/Image Gallery of Eco Trail (3).webp"></div>
            </div>
            <div id = "grid_3" class = "left">
                <div class = "box"><img class = "pic" src = "static/assets/webp/Image Gallery of Eco Trail (2).webp"></div>
            </div>
            <div id = "grid_4" class = "right">
                <div class = "text_right">
                    Stay on Designated Trails
                    <br>
                    <div class = "smol_right">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vestibulum eget purus in eleifend.</div>
                </div>
            </div>
            <div id = "grid_5" class = "left">
                <div class = "text">
                    <div class = "text">
                        Be Considerate to other Trail Users
                        <br>
                        <div class = "smol_left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vestibulum eget purus in eleifend.</div>
                    </div>
                </div>
            </div>
            <div id = "grid_6" class = "right">
                <div class = "box"><img class = "pic" src = "static/assets/webp/Image Gallery of Eco Trail.webp"></div>
            </div>
            <div id = "grid_7" class = "left">
                <div class = "box"><img class = "pic" src = "static/assets/webp/Image Gallery of Eco Trail (1).webp"></div>
            </div>
            <div id = "grid_8" class = "right">
                <div class = "text">
                    <div class = "text_right">
                        Leave Nothing but Footprints
                        <br>
                        Take Nothing but Photographs
                        <br>
                        <div class = "smol_right">Lorem ipsum dolor sit amet, consectetur.</div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div id = "img_div">
            <img id = "img" src = "static/assets/webp/Rules.webp">
        </div>
        <br>
    </section>
    <section>
        <h2>Noticeboard</h2>
        <div id = "grid-container2">
            <div id = "grid_9">
                <div class = "noticeboard">
                    <div class = "title_date">
                        <div id = "title" style = "display:inline-block">Title</div>
                        <div class = "text" style = "display:inline-block; text-align:right">Date</div>
                    </div>
                    <div class = "grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vestibulum eget purus in eleifend. Suspendisse sollicitudin diam non metus scelerisque, ac elementum orci mollis. Vestibulum placerat nibh finibus enim ullamcorper blandit. Proin id finibus orci. Phasellus id ligula ex. Nulla accumsan fringilla leo, vitae commodo risus molestie non. Duis vel metus in libero tempor feugiat in eget est. Nunc vestibulum eget lectus ac placerat. Aenean cursus accumsan erat, a bibendum urna efficitur sed. Sed nec ultricies odio. </div>
                </div>
            </div>
            <div id = "grid_10">
                <div class = "noticeboard">
                    <div class = "title_date">
                        <div id = "title" style = "display:inline-block">Title</div>
                        <div class = "text" style = "display:inline-block; text-align:right">Date</div>
                    </div>
                    <div class = "grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vestibulum eget purus in eleifend. Suspendisse sollicitudin diam non metus scelerisque, ac elementum orci mollis. Vestibulum placerat nibh finibus enim ullamcorper blandit. Proin id finibus orci. Phasellus id ligula ex. Nulla accumsan fringilla leo, vitae commodo risus molestie non. Duis vel metus in libero tempor feugiat in eget est. Nunc vestibulum eget lectus ac placerat. Aenean cursus accumsan erat, a bibendum urna efficitur sed. Sed nec ultricies odio. </div>
                </div>
            </div>
        </div>
    </section>
<script src = "static/js/admin.js" onload="init()"></script>
</body>
</html>
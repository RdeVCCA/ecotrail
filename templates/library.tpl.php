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

        <div class = "action-buttons">
            <input id = "search" type = "text" placeholder = "Search" class = "button">
            <input type = "button" value = "Area" placeholder = "Search" class = "button">
            <input type = "button" value = "Type" placeholder = "Search" class = "button">
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
                <h3>Chinese Name</h3>
                <p></p>
                <h3>Alternative Names</h3>
                <p></p>
                <h3>Description</h3>
                <p></p>
            </section>
        </div>
        <script src = "static/js/default.js"></script>
        <script src = "static/js/library.js"></script>
    </body>
</html>
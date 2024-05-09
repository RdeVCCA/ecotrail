<link rel = "stylesheet" href = "/static/css/hero.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

<div class = "hero"> 
    <?php 
        $content = array(
            "home" => ["About","Eco Trail Short Description"],
            "about" => ["About Us","Who are we?"],
            "admin" => ["Admin","Trail Etiquette & Noticeboard"],
            "library" => ["Floral Library","Browse all the different floral in the eco-trail"],
            "gallery" => ["Gallery","Browse all the different floral in the eco-trail"],
            "wetlands" => ["Wetland Zone","As you walk further into our Eco-Trail, you will be greeted by an expanse of glittering water. <br>Welcome to the Wetland zone! "],
            "garden" => ["Fruit Tree Garden","In our garden, a selection of tropical fruit trees can be found. The fruit trees gently invite one to step into our Eco-Trail with their scent, beauty and shade."],
            "pond" => ["Ornamental Ponds","Ornamental short description"],
            "rainforest" => ["Rainforest Zone","The rainforest zone in our Eco-Trail features over 50 species of flora and fauna, thriving in an environment with abundant rainfall and dominated by tall evergreen trees."],
        );
        $filename = $_GET['filename'];
        $title = $content[$filename][0];
        $description = $content[$filename][1];
    
    ?>
    <div class = "contains-hero-text">
        <h1 class = "primary"><?php echo $title ?></h1>
        <p><?php echo $description ?></p>
    </div>
    <video autoplay muted> 
        <source src = "static/assets/Hero/main.mp4" type = "video/mp4" >
    </video>
</div>


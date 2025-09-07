<link rel = "stylesheet" href = "/static/css/hero.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

<div class = "hero"> 
    <?php 
        $content = array(
            "home" => ["About","Dear Explorer, Eco-Trail @ RV essentially is a little yet lush greenery bulit upon the space between the two science laboratory blocks in River Valley High School, by generations of students and teachers who have integrated their bold and fresh ideas into reality. Beyond the verisimilitude, TESLA in collaboration with Rdev have constructed this virtual Eco-Trail. On top of serving as a repository of our effort, we hope to expand our network to connect and collaborate with other eco-leaders, so as to foster a more ideal and sustainable RV."],
            "about" => ["About Us","Who are we?"],
            "admin" => ["Admin","Trail Etiquette & Noticeboard"],
            "library" => ["Floral Library","Browse all the different floral in the eco-trail"],
            "gallery" => ["Gallery","Browse all the different floral in the eco-trail"],
            "wetlands" => ["Wetland Zone","As you walk further into our Eco-Trail, you will be greeted by an expanse of glittering water. <br>Welcome to the Wetland zone! "],
            "garden" => ["Fruit Tree Garden","In our garden, a selection of tropical fruit trees can be found. The fruit trees gently invite one to step into our Eco-Trail with their scent, beauty and shade."],
            "pond" => ["Ornamental Ponds","Extending from the Fruit Tree Garden, the first ornamental pond, the goldfish pond, draws us in with its tranquil beauty.
In comparison, the koi pond flourishes with frenetic energy. Look out for the coloured schools darting between the manicured aquascape of diverse aquatic plants. Now, let us take a look at the Ornamental Ponds and learn more about the different species present."],
            "rainforest" => ["Rainforest Garden","The Rainforest Garden in our Eco-Trail features over 50 species of flora and fauna, thriving in an environment with abundant rainfall and dominated by tall evergreen trees."],
        );
        $filename = isset($_GET['filename']) && array_key_exists($_GET['filename'], $content)
        ? $_GET['filename']
        : 'home';
        $title = $content[$filename][0];
        $description = $content[$filename][1];
    
    ?>
    <div class = "contains-hero-text">
        <h1 class = "primary"><?php echo $title ?></h1>
        <p><?php echo $description ?></p>
    </div>
    <video muted>
        <source src = "static/assets/Hero/main.mp4" type = "video/mp4" >
    </video>
</div>


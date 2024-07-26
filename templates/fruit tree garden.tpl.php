
	<title>Fruit Tree Garden</title>
	<link rel="stylesheet" href="static/css/fruit_tree.css">
	<link rel="stylesheet" href="static/framework/aos-master/dist/aos.css">
</head>

<body>
	<?php 
        include('templates/defaults/nav.tpl.php');
        include('templates/defaults/hero.tpl.php');
    ?>
	<section class="grid-container">
		<div class="grid-item" id = "leaf_image" data-aos="fade-right">
			<img src="static/assets/fruitTreeLeaf.png.jpg" alt="fruit tree leaf" style="aspect-ratio: 1; width: 17.5em;">
		</div>

		<p class="grid-item" id = "leaf_text" data-aos="fade-left">Fruit trees play important roles in our lives. As an important nutrition source, the various parts of the tree, including its fruits, provide abundant food and help bolster food security. <br> <br>They support the biodiversity of life by providing habitats for a diverse range of organisms such as insects, birds and bees.</p>
		
		<div class="grid-item" id = "root_image" data-aos="fade-left">
			<img src="static/assets/fruitTreeRoot.png" alt="fruit tree root" style="aspect-ratio: 1; width: 17.5em;">
		</div>
		
		<p class="grid-item" id = "root_text" data-aos="fade-right">Trees are important in our fight against climate change as they sequester carbon by using carbon dioxide during photosynthesis.  <br> <br>They are also key in preventing surface runoffs and soil erosion by intercepting rainwater at their canopies and absorbing rainwater through their roots.</p>
		
		<div class="grid-item" id = "garden_image" data-aos="fade-right">
			<img src="static/assets/fruitTreeGarden.png.jpg" alt="fruit tree garden" style="width: 100%; height: 17.5em;">
			<p class="grid-item" id = "garden_text" data-aos="fade-left">While providing us oxygen through photosynthesis, the trees also remove air pollutants and provide us with a calming environment, improving our mental and physical well-being. <br> <br>Let us take a look at the fruit trees in our Fruit Tree Garden!</p>
		</div>
	</section>
	<script src="static/framework/aos-master/dist/aos.js" onload="AOS.init();"></script>
</body>

</html>
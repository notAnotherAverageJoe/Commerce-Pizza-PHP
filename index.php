<?php include 'include/header.php'  ?>

<section id="home" class="hero">

    <h1 id="front_page"> <?= $restaurant_name ?></h1>
    <p id="fronP">Experience the best Pizza in the WORLD!.</p>
    <a href="/order.php" class="btn">View Menu</a>



</section>
<section id="ingredients">
    <h2>Our Ingredients</h2>
    <div class="menu-item">
        <img src="/static/Fresh Ingredients.png" alt="Pad Thai">
        <h3>Fresh Vegetables</h3>
        <p>Imagine biting into a slice of pizza topped with sun-ripened tomatoes,
            crisp bell peppers, and tender baby spinach. That's the experience we create.
            Our vegetables are sourced fresh daily from local markets, ensuring vibrant colors,
            incredible flavor, and a truly exceptional pizza.</p>

    </div>
    <div class="menu-item">
        <img src="/static/meats.png" alt="Pizza Meat">
        <h3>Healthy Meats</h3>
        <p>Our commitment to quality starts with our meats and cheeses.
            We work closely with trusted suppliers to bring you lean,
            tender meats - beef, pork, chicken, and seafood - each bursting with natural flavor.
            Our cheeses are similarly selected for their rich, distinctive tastes.
            Experience the difference that premium ingredients make,
            with every bite a testament to our dedication to flavor and quality.</p>

    </div>

</section>

<?php include 'include/footer.php' ?>
</body>

</html>
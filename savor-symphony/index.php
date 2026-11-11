<?php
// Lesson 5: reuse a common template instead of copying HTML into each page.
$pageTitle = 'Home';
include('header.php');
?>
<main id="main">
    <section class="hero">
        <div><p class="eyebrow">FRESH INGREDIENTS. FAMILIAR FLAVORS.</p>
        <h1>Good food.<br>Great company.</h1>
        <p>Gather around for warm hospitality, bold spices, and meals made to share.</p>
        <a class="button" href="menu.php">Explore our menu &rarr;</a></div>
        <div class="food-art" role="img" aria-label="Illustrated plate with greens, tomatoes, and grilled food"><div class="plate">🥗</div><span>Made with care, served with joy.</span></div>
    </section>
    <section class="intro"><p class="eyebrow">WELCOME TO SAVOR SYMPHONY</p><h2>A seat at our table.</h2><p>From slow-cooked chicken to crisp garden salads, our menu brings simple ingredients together in delicious ways. Stop by for lunch or settle in for dinner with friends.</p></section>
    <section class="features" aria-label="Restaurant highlights">
        <article><span>01 / FRESH</span><h2>Thoughtful ingredients</h2><p>Colorful vegetables, fragrant herbs, and food prepared with care.</p></article>
        <article><span>02 / COMFORT</span><h2>Something for everyone</h2><p>Hearty favorites and lighter choices, all at a welcoming table.</p></article>
        <article><span>03 / DISCOVER</span><h2>Your next favorite</h2><p>Explore our dishes and find something worth coming back for.</p></article>
    </section>
</main>
<?php
// The footer closes the shared HTML document.
include('footer.php');
?>

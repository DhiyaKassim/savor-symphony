<?php
$pageTitle = 'Our Menu';
include('header.php');

// Each dish has its own photo.
$menuItems = array(
    array(
        'name' => 'Spiced Chicken & Rice',
        'description' => 'Tender chicken served with fragrant rice.',
        'price' => 16.50,
        'image' => 'images/chicken.webp'
    ),
    array(
        'name' => 'Garden Bowl',
        'description' => 'Chickpeas, cucumber, tomatoes, peppers, and feta cheese.',
        'price' => 12.00,
        'image' => 'images/salad.webp'
    ),
    array(
        'name' => 'Grilled Kofta Plate',
        'description' => 'Seasoned kofta served with warm bread and fresh herbs.',
        'price' => 18.00,
        'image' => 'images/kofta.jpeg'
    ),
    array(
        'name' => 'Honey Cake',
        'description' => 'Layered honey cake finished with a honey drizzle.',
        'price' => 6.50,
        'image' => 'images/honey-cake.jpg'
    )
);
?>

<main id="main">
    <section class="menu-heading">
        <p class="eyebrow">SOMETHING DELICIOUS AWAITS</p>
        <h1>Our menu.</h1>
        <p>Comforting favorites, prepared with care. Prices in USD.</p>
    </section>

    <section class="menu-grid" aria-label="Menu dishes">
        <?php foreach ($menuItems as $item) { ?>
            <article class="dish">
                <img
                    class="menu-photo"
                    src="<?php echo htmlspecialchars($item['image']); ?>"
                    alt="<?php echo htmlspecialchars($item['name']); ?>"
                    loading="lazy"
                >

                <h2><?php echo htmlspecialchars($item['name']); ?></h2>

                <p>
                    <?php echo htmlspecialchars($item['description']); ?>
                </p>

                <p class="price">
                    $<?php echo number_format($item['price'], 2); ?>
                </p>
            </article>
        <?php } ?>
    </section>
</main>

<?php include('footer.php'); ?>
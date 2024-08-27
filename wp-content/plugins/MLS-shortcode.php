function display_mls_listings() {
    // Fetch stored MLS data
    // Example: Fetch data from a custom post type or custom table

    // Dummy data for demonstration
    $listings = array(
        array('address' => '123 Main St', 'price' => '$500,000'),
        array('address' => '456 Elm St', 'price' => '$600,000'),
    );

    ob_start();
    ?>
    <div class="mls-listings">
        <?php foreach ($listings as $listing): ?>
            <div class="listing">
                <h2><?php echo esc_html($listing['address']); ?></h2>
                <p>Price: <?php echo esc_html($listing['price']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
    <?php
    return ob_get_clean();
}

add_shortcode('mls_listings', 'display_mls_listings');

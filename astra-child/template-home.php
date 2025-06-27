<?php
/*
Template Name: Home Page
*/
get_header();
?>
<!-- Banner -->
<section class="bg-cover bg-center h-96 flex items-center justify-center text-center" style="background-image: url('https://via.placeholder.com/1200x400?text=Pushpa+Store+Banner')">
  <div class="text-gray-800">
    <h1 class="text-4xl font-bold mb-4">Biggest Deals on Everyday Products</h1>
    <p class="text-xl mb-6">Fast Delivery Across Nepal | Pay via eSewa / Khalti / Bank</p>
    <div class="space-x-4">
      <a href="<?php echo wc_get_page_permalink('shop'); ?>" class="bg-gray-300 text-gray-800 px-6 py-3 rounded hover:bg-gray-400">Shop Now</a>
      <a href="https://wa.me/+97798XXXXXXXX" class="bg-green-500 text-white px-6 py-3 rounded hover:bg-green-600">Order on WhatsApp</a>
    </div>
  </div>
</section>

<!-- Featured Products -->
<section id="featured" class="py-12 bg-gray-100">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-8">🔥 Featured Products</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php
      $args = array('post_type' => 'product', 'posts_per_page' => 4, 'meta_key' => '_featured', 'meta_value' => 'yes');
      $loop = new WP_Query($args);
      while ($loop->have_posts()) : $loop->the_post();
        global $product;
      ?>
        <div class="product-card bg-gray-200 p-4 rounded shadow">
          <a href="<?php the_permalink(); ?>"><?php echo woocommerce_get_product_thumbnail(); ?></a>
          <h3 class="text-lg font-semibold mt-2"><?php the_title(); ?></h3>
          <p class="text-gray-600"><?php echo $product->get_price_html(); ?></p>
          <p class="text-sm text-gray-500"><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
          <form class="cart" method="post">
            <input type="number" name="quantity" value="1" min="1" class="w-16 p-1 border">
            <?php woocommerce_template_loop_add_to_cart(); ?>
          </form>
        </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>
</section>

<!-- New Arrivals -->
<section id="new-arrivals" class="py-12">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-8">🆕 New Arrivals</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php
      $args = array('post_type' => 'product', 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC');
      $loop = new WP_Query($args);
      while ($loop->have_posts()) : $loop->the_post();
        global $product;
      ?>
        <div class="product-card bg-gray-200 p-4 rounded shadow">
          <a href="<?php the_permalink(); ?>"><?php echo woocommerce_get_product_thumbnail(); ?></a>
          <h3 class="text-lg font-semibold mt-2"><?php the_title(); ?></h3>
          <p class="text-gray-600"><?php echo $product->get_price_html(); ?></p>
          <p class="text-sm text-gray-500"><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
          <form class="cart" method="post">
            <input type="number" name="quantity" value="1" min="1" class="w-16 p-1 border">
            <?php woocommerce_template_loop_add_to_cart(); ?>
          </form>
        </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>
</section>

<!-- Best Sellers -->
<section id="best-sellers" class="py-12 bg-gray-100">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-8">💥 Best Sellers</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <?php
      $args = array('post_type' => 'product', 'posts_per_page' => 4, 'meta_key' => 'total_sales', 'orderby' => 'meta_value_num');
      $loop = new WP_Query($args);
      while ($loop->have_posts()) : $loop->the_post();
        global $product;
      ?>
        <div class="product-card bg-gray-200 p-4 rounded shadow">
          <a href="<?php the_permalink(); ?>"><?php echo woocommerce_get_product_thumbnail(); ?></a>
          <h3 class="text-lg font-semibold mt-2"><?php the_title(); ?></h3>
          <p class="text-gray-600"><?php echo $product->get_price_html(); ?></p>
          <p class="text-sm text-gray-500"><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
          <form class="cart" method="post">
            <input type="number" name="quantity" value="1" min="1" class="w-16 p-1 border">
            <?php woocommerce_template_loop_add_to_cart(); ?>
          </form>
        </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
  </div>
</section>

<!-- Ongoing Offers -->
<section id="offers" class="py-12">
  <div class="container mx-auto px-4">
    <h2 class="text-3xl font-bold text-center mb-8">🏷️ Ongoing Offers</h2>
    <p class="text-center text-lg">Festival Discounts! Grab your deals now!</p>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
      <div class="bg-gray-200 p-4 rounded shadow text-center">
        <img src="https://via.placeholder.com/300x150?text=Festival+Offer" alt="Offer" class="w-full h-32 object-cover rounded">
        <p class="mt-2">Up to 20% off on Home Essentials!</p>
      </div>
      <div class="bg-gray-200 p-4 rounded shadow text-center">
        <img src="https://via.placeholder.com/300x150?text=Dashain+Sale" alt="Offer" class="w-full h-32 object-cover rounded">
        <p class="mt-2">Dashain Special: 15% off Electronics!</p>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
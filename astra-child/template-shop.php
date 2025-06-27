<?php
/*
Template Name: Shop Page
*/
get_header();
?>
<div class="container mx-auto px-4 py-12">
  <h2 class="text-3xl font-bold text-center mb-8">🛍️ Shop</h2>
  <!-- Product Categories -->
  <div class="mb-8">
    <h3 class="text-2xl font-semibold mb-4">Categories</h3>
    <div class="flex flex-wrap gap-4">
      <?php
      $categories = get_terms('product_cat', array('hide_empty' => false));
      foreach ($categories as $category) {
        echo '<a href="' . get_term_link($category) . '" class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">' . $category->name . '</a>';
      }
      ?>
    </div>
  </div>
  <!-- Product Listing -->
  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php
    $args = array('post_type' => 'product', 'posts_per_page' => 12);
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
<?php get_footer(); ?>
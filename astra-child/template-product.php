<?php
/*
Template Name: Single Product Page
*/
get_header();
?>
<div class="container mx-auto px-4 py-12">
  <?php while (have_posts()) : the_post(); global $product; ?>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <div>
        <?php echo woocommerce_get_product_thumbnail('full'); ?>
      </div>
      <div>
        <h1 class="text-3xl font-bold"><?php the_title(); ?></h1>
        <p class="text-2xl text-gray-600"><?php echo $product->get_price_html(); ?></p>
        <p class="text-green-600"><?php echo $product->is_in_stock() ? 'In Stock' : 'Out of Stock'; ?></p>
        <div class="my-4"><?php the_content(); ?></div>
        <form class="cart" method="post">
          <input type="number" name="quantity" value="1" min="1" class="w-16 p-1 border">
          <?php woocommerce_template_loop_add_to_cart(); ?>
        </form>
        <div class="mt-4">
          <h3 class="text-xl font-bold">Payment Options</h3>
          <ul class="list-disc pl-5">
            <li>eSewa (Merchant ID: [Your ID])</li>
            <li>Khalti</li>
            <li>IME Pay</li>
            <li>Bank Transfer: [Your Bank Details]</li>
            <li>Cash on Delivery (Kathmandu/Lamki/Kailali)</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Customer Reviews -->
    <div class="mt-8">
      <h3 class="text-xl font-bold mb-4">Customer Reviews</h3>
      <?php comments_template(); ?>
    </div>
  <?php endwhile; ?>
</div>
<?php get_footer(); ?>
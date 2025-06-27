<?php
/*
Template Name: Contact Us
*/
get_header();
?>
<div class="container mx-auto px-4 py-12">
  <h2 class="text-3xl font-bold text-center mb-8">📞 Contact Us</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    <div>
      <p><i class="fas fa-phone"></i> Phone: +977-98XXXXXXXX</p>
      <p><i class="fab fa-whatsapp"></i> WhatsApp: +977-98XXXXXXXX</p>
      <p><i class="fas fa-envelope"></i> Email: pushpastore@gmail.com</p>
      <p><i class="fas fa-map-marker-alt"></i> Address: Lamki, Kailali, Nepal</p>
      <div class="mt-4">
        <a href="#" class="text-yellow-400 mr-4"><i class="fab fa-facebook"></i></a>
        <a href="#" class="text-yellow-400"><i class="fab fa-instagram"></i></a>
      </div>
      <!-- Google Maps Embed -->
      <div class="mt-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3493.693714305054!2d81.120492!3d28.975522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a1b5b5e5c5b5c5%3A0x5c5b5c5b5c5b5c5!2sLamki%20Chuha%2C%20Kailali%2C%20Nepal!5e0!3m2!1sen!2snp!4v1698765432109!5m2!1sen!2snp" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
    <div>
      <?php echo do_shortcode('[contact-form-7 id="123" title="Contact Form"]'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
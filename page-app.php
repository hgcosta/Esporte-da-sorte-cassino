<?php // Template Name: App ?> 
<?php get_header()?>
<section class="hero-interno">
  <?php get_template_part( 'menu' ); ?>
    <div class="container content-hero">
        <div class="col-info">
            <h1>Esporte da Sorte Mobile</h1>
            <p>Baixe o nosso app</p>
        </div>
        <div class="col-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-app.png" alt="Esporte da Sorte bônus">
        </div>
    </div>
</section>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

<?php get_footer()?>
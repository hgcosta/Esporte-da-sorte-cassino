<?php // Template Name: Bonus ?> 
<?php get_header()?>
<section class="hero-interno">
    <?php get_template_part( 'menu' ); ?>
    <div class="container content-hero">
        <div class="col-info">
            <h1>Esporte da Sorte bônus</h1>
            <p>100% depósito em até R$ 300,00</p>
            <div class="btns-hero">
                <a href="">Cadastre-se</a>
                <a href="">Bônus</a>
            </div>
        </div>
        <div class="col-img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/page-bonus.png" alt="Esporte da Sorte bônus">
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
<?php 
    $item = get_field('footer' , 'option');
?>
<footer>
    <div class="section section-footer">
        <div class="wrapper wrapper-footer">
            <div class="footer-container">
                <div>
                    <div class="footer-info-text"><?= $item['name'] ? $item['name'] : '';?></div>
                    <div class="info-text">
                    <?php
                  if (is_active_sidebar('rickmans-footer')) {
        dynamic_sidebar('rickmans-footer');
      }
      ?>
                    </div>
                </div>
                <div class="info-text-mail">
                    <div><?= $item['email'] ? $item['email'] : '';?></div>
                    <div><?= $item['phone'] ? $item['phone'] : '';?></div>
                </div>
            </div>
            <div class="footer-copyright">
                <div><?= $item['copy'] ? $item['copy'] : '';?></div>
                <div> <?php
                  if (is_active_sidebar('rickmans-footer_dev')) {
        dynamic_sidebar('rickmans-footer_dev');
      }
      ?></div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
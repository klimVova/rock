<?php 
    $item = get_field('footer' , 'option');
?>
<footer>
    <div class="section section-footer">
        <div class="wrapper wrapper-footer">
            <div class="footer-container">
                <div>
                    <div class="footer-info-text"><?= $item['name'] ? $item['name'] : '';?></div>
                    <div class="info-text"><?= $item['desc'] ? $item['desc'] : '';?>
                    </div>
                </div>
                <div class="info-text-mail">
                    <div><?= $item['email'] ? $item['email'] : '';?></div>
                    <div><?= $item['phone'] ? $item['phone'] : '';?></div>
                </div>
            </div>
            <div class="footer-copyright">
                <div><?= $item['copy'] ? $item['copy'] : '';?></div>
                <div><?= $item['developer'] ? $item['developer'] : '';?></div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>
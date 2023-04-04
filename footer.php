
</main>

<?php if(!is_front_page()): ?>
    <footer id="footer" class="footer">
        <?php get_template_part('template_part/layouts/footer'); ?>
    </footer>
<?php endif; ?>

<?php wp_footer(); ?>

<?php get_template_part('template_part/common/scripts'); ?>
</body>
</html>

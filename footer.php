<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

</div><!-- end #body -->

<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <!-- 以下代码为底部版权信息，修改随意，但是还是希望你能够留个链接。另外，希望你能喜欢这款简洁的主题并把它分享出去！ -->
    <?php _e('Powered by <a href="http://www.typecho.org">Typecho</a> & <a href="http://xuran.me">Less</a>'); ?>.

</footer><!-- end #footer -->

<?php $this->footer(); ?>
</body>
</html>

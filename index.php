<?php
/**
 * 一款简洁的Typecho博客主题。
 *
 * 后续会有更新。
 *          
 * @package  Less
 * @author 如是
 * @version 1.0
 * @link http://xuran.me
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div id="main" role="main">
	<?php while($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<ul class="post-meta">
                                <li><?php $this->category(','); ?></li>
				<li><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time></li>
			</ul>
            <div class="post-content" itemprop="articleBody">
    			<?php $this->content('- 阅读剩余部分 -'); ?>
            </div>
        </article>
	<?php endwhile; ?>

    <div class="page-navigator">
        <?php $this->pageLink('上一页'); ?>
        <?php $this->pageLink('下一页','next'); ?>
    </div>

</div><!-- end #main-->

<?php $this->need('footer.php'); ?>

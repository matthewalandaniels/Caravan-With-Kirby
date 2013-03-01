    <div id="header">
      <a href="<?php echo url('/') ?>" id="logo"><img src="<?php echo url('assets/images/logo.png') ?>"></a>
      <div id="nav">
      	<?php foreach($pages->visible() AS $p): ?>
        <a<?php echo ($p->isOpen()) ? ' class="current"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a>
	    <?php endforeach ?>
        <a href="http://blog.wearecaravan.tv/">BLOG</a>	    
      </div>
    </div>
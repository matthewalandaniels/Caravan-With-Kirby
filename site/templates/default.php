<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php //snippet('submenu') ?>

    <div id="heroImage">
      <p id="mainTitle"><?php echo html($page->herocaption()) ?></p>
      <a href="<?php echo $page->showreelvimeolink() ?>" class="fancybox-media bigButton" title="2013 Showreel"><span></span>2013 Showreel</a>
    </div>

    <section id="intro">
      <div class="wrapper">
        <h2><?php echo html($page->introtitle()) ?></h2>
        <p><?php echo html($page->introtext()) ?></p>
      </div>
    </section>
    
    <?php // @todo Convert to dynamic/CMS ?>
    <?php // ---------------------------- ?>
    
    <section id="featuredWork" class="clearfix">
          
      <h1>Featured Work</h1>
      
      <div class="wrapper" .class="clearfix">        

        <?php foreach($pages->find('work')->children()->visible() as $p): ?>
		<?php if ( hasCategory('featured', $p->categories()) ): ?>

			<a href="<?php echo $p->url() ?>" class="workThumb">
			  <img src="<?php echo $p->children()->find('thumb')->files()->first()->url() ?>" alt=""/>
			  <div class="overlay">
				<div class="text">
				  <p class="client"><?php echo html($p->client()) ?></p>
				  <p class="title"><?php echo html($p->title()) ?></p>
				</div>
			  </div>
			</a>

        <?php endif ?>            
        <?php endforeach ?>
        
      </div>
      
      <a href="/work" class="button">See The Rest Of Our Work<span></span></a>

    </section>    
    
    <?php // ---------------------------- ?>    
    
    <section id="aboutCaravan" class="clearfix">
      <h1>About Caravan</h1>
      <div class="wrapper">
        <div class="profile">
          <img src="assets/images/jacob.jpg" />
          <p class="name">Jacob Lewis</p>
          <p class-"bio"><?php echo html($page->jacobbio()) ?></p>
        </div>

        <div class="profile">
          <img src="assets/images/jon.jpg" />
          <p class="name">Jon Muedder</p>
          <p class-"bio"><?php echo html($page->jonbio()) ?></p>
        </div>

        <div class="profile">
          <img src="assets/images/bernardo.jpg" />
          <p class="name">Bernardo Marentes</p>
          <p class-"bio"><?php echo html($page->bernardobio()) ?> </p>
        </div>
      </div>
    </section>

<?php snippet('socialfooter') ?>
<?php snippet('footer') ?>
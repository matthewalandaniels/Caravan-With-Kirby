<?php snippet('header') ?>
<?php snippet('menu') ?>

    <section id="intro">
      <div class="wrapper">
        <h2><?php echo html($page->introtitle()) ?></h2>
        <p><?php echo html($page->introtext()) ?> 
        </p>
      </div>
    </section>
    
    <section id="work" class="clearfix">
      <div class="wrapper" .class="clearfix">        
      
        <?php foreach($page->children()->visible() as $p): ?>
		<?php if ( hasCategory('work', $p->categories()) ): ?>

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
      


<!--        <a href="work_detail.html" class="workThumb">
          <img src="assets/images/ipad.jpg" alt=""/>
          <div class="overlay">
            <div class="text">
              <p class="client">Halogen</p>
              <p class="title">Jump Ship Miso Promo</p>
            </div>
          </div>
        </a>

        <a href="work_detail.html" class="workThumb">
          <img src="assets/images/never_the_same.jpg" alt=""/>
          <div class="overlay">
            <div class="text">
              <p class="client">Pioneers</p>
              <p class="title">Never The Same</p>
            </div>
          </div>
        </a>

        <a href="#" class="workThumb">
          <img src="assets/images/sheet_of_night.jpg" alt=""/>
          <div class="overlay">
            <div class="text">
              <p class="client">John Mark McMillen</p>
              <p class="title">Sheet Of Night</p>
            </div>
          </div>
        </a>

        <a href="#" class="workThumb">
          <img src="assets/images/ipad.jpg" alt=""/>
          <div class="overlay">
            <div class="text">
              <p class="client">Halogen</p>
              <p class="title">Jump Ship Miso Promo</p>
            </div>
          </div>
        </a>

        <a href="#" class="workThumb">
          <img src="assets/images/never_the_same.jpg" alt=""/>
          <div class="overlay">
            <div class="text">
              <p class="client">Pioneers</p>
              <p class="title">Never The Same</p>
            </div>
          </div>
        </a>

        <a href="#" class="workThumb">
          <img src="assets/images/sheet_of_night.jpg" alt=""/>
          <div class="overlay">
            <div class="text">
              <p class="client">John Mark McMillen</p>
              <p class="title">Sheet Of Night</p>
            </div>
          </div>
        </a>

        <a href="#" class="workThumb">
          <img src="assets/images/ipad.jpg" alt=""/>
          <div class="overlay">
            <div class="text">
              <p class="client">Halogen</p>
              <p class="title">Jump Ship Miso Promo</p>
            </div>
          </div>
        </a>

        <a href="#" class="workThumb">
          <img src="assets/images/never_the_same.jpg" alt=""/>
          <div class="overlay">
            <div class="text">
              <p class="client">Pioneers</p>
              <p class="title">Never The Same</p>
            </div>
          </div>
        </a>

        <a href="#" class="workThumb">
          <img src="assets/images/sheet_of_night.jpg" alt=""/>
          <div class="overlay">
            <div class="text">
              <p class="client">John Mark McMillen</p>
              <p class="title">Sheet Of Night</p>
            </div>
          </div>
        </a>

        <a href="#" class="workThumb">
          <img src="assets/images/ipad.jpg" alt=""/>
          <div class="overlay">
            <div class="text">
              <p class="client">Halogen</p>
              <p class="title">Jump Ship Miso Promo</p>
            </div>
          </div>
        </a>

        <a href="#" class="workThumb">
          <img src="assets/images/never_the_same.jpg" alt=""/>
          <div class="overlay">
            <div class="text">
              <p class="client">Pioneers</p>
              <p class="title">Never The Same</p>
            </div>
          </div>
        </a>

        <a href="#" class="workThumb">
          <img src="assets/images/sheet_of_night.jpg" alt=""/>
          <div class="overlay">
            <div class="text">
              <p class="client">John Mark McMillen</p>
              <p class="title">Sheet Of Night</p>
            </div>
          </div>
        </a>

        <a href="#" class="workThumb">
          <img src="assets/images/ipad.jpg" alt=""/>
          <div class="overlay">
            <div class="text">
              <p class="client">Halogen</p>
              <p class="title">Jump Ship Miso Promo</p>
            </div>
          </div>
        </a>

        <a href="#" class="workThumb">
          <img src="assets/images/never_the_same.jpg" alt=""/>
          <div class="overlay">
            <div class="text">
              <p class="client">Pioneers</p>
              <p class="title">Never The Same</p>
            </div>
          </div>
        </a>

        <a href="#" class="workThumb">
          <img src="assets/images/sheet_of_night.jpg" alt=""/>
          <div class="overlay">
            <div class="text">
              <p class="client">John Mark McMillen</p>
              <p class="title">Sheet Of Night</p>
            </div>
          </div>
        </a>

        <a href="#" class="workThumb">
          <img src="assets/images/ipad.jpg" alt=""/>
          <div class="overlay">
            <div class="text">
              <p class="client">Halogen</p>
              <p class="title">Jump Ship Miso Promo</p>
            </div>
          </div>
        </a>

        <a href="#" class="workThumb">
          <img src="assets/images/never_the_same.jpg" alt=""/>
          <div class="overlay">
            <div class="text">
              <p class="client">Pioneers</p>
              <p class="title">Never The Same</p>
            </div>
          </div>
        </a>
        -->
        
      </div>

    </section>    
    
    

<?php snippet('footer') ?>
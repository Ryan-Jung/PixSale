

<!-- WHITE SECTION -->
<?php $app_root = dirname($_SERVER['SCRIPT_NAME']);?>
<section class="whiteSection clearfix aboutPeople">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h3>Our Peoples</h3>
      </div>
      <div class="col-sm-3 col-xs-12">
        <div class="thumbnail">
	        <div class="caption">
            <h5 style="color:black !important;">Manuel Duran</h5>
            <p>(CEO)</p>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12">
        <div class="thumbnail">
          <div class="caption">
            <h5 style="color:black;"><?= $this->Html->link(__('Stephen Josey'), ['controller' => 'Home', 'action' => 'stephen'], 
            		['style' => 'color:black !important']) ?></h5>
            <p>(CTO)</p>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12">
        <div class="thumbnail">
          <div class="caption">
            <h5 ><?= $this->Html->link(__('Ryan Jung'), ['controller' => 'Home', 'action' => 'ryan'], 
            		['style' => 'color:black !important']) ?></h5>
            <p>(Marketing Director)</p>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12">
        <div class="thumbnail">
          <div class="caption">
            <h5><?= $this->Html->link(__('Youssef Hakkou'), ['controller' => 'Home', 'action' => 'youssef'], 
            		['style' => 'color:black !important']) ?></h5>
            <p>(Creative Director)</p>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12">
        <div class="thumbnail">
          <div class="caption">
            <h5><?= $this->Html->link(__('Jeremy Tan'), ['controller' => 'Home', 'action' => 'jeremy'], 
            		['style' => 'color:black !important']) ?></h5>
            <p>(Creative Director)</p>
          </div>
        </div>
      </div>
      <div class="col-sm-3 col-xs-12">
        <div class="thumbnail">
          <div class="caption">
            <img src="<?= $app_root ?>/img/yuezhou.jpg">
            <h5 style="color:black !important;">Yuezhou Yu</h5>
            <p>(Creative Director)</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
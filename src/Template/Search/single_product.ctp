<!-- MAIN CONTENT SECTION -->
  <section class="mainContent clearfix">
    <div class="container">
      <div class="row singleProduct">
        <div class="col-xs-12">
          <div class="media">
            <div class="media-left productSlider">
              <div id="carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="item active" data-thumb="0">
                    <img src=<?php 
                      $path = dirname($_SERVER['SCRIPT_NAME'])."/uploads/mediaitems/".$item->file_path;
                      echo "'$path'" ?> >
                  </div>
                </div>
              </div>
              <div class="clearfix">
                <div id="thumbcarousel" class="carousel slide" data-interval="false">
                  <div class="carousel-inner">
                      <div class="thumb"><img src=<?php 
                          $path = dirname($_SERVER['SCRIPT_NAME'])."/uploads/mediaitems/".$item->file_path;
                          echo "'$path'" ?> >
                      </div>
                  </div>
                  <a class="left carousel-control" href="#thumbcarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#thumbcarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
                </div>
              </div>
            </div>
            <div class="media-body">
              <ul class="list-inline">
                <li><a href=".."><i class="fa fa-reply" aria-hidden="true"></i>Continue Shopping</a></li>
              </ul>
              <h2><?php echo "$item->title" ?></h2>
              <h3><?php echo "$$item->price" ?></h3>
              <p><?php echo "$item->description" ?></p>
              <span class="quick-drop">
                <select name="guiest_id3" id="guiest_id3" class="select-drop">
                  <option value="0">Size</option>
                  <option value="1">Small</option>
                  <option value="2">Medium</option>
                  <option value="3">Big</option>
                </select>
              </span>
              <span class="quick-drop resizeWidth">
                <select name="guiest_id4" id="guiest_id4" class="select-drop">
                  <option value="0">Qty</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </span>
              <div class="btn-area">
                <a href="cart-page.html" class="btn btn-primary btn-block">Add to cart <i class="fa fa-angle-right" aria-hidden="true"></i></a>
              </div>
              <div class="tabArea">
                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#details">details</a></li>
                  <li><a data-toggle="tab" href="#about-art">about art</a></li>
                  <li><a data-toggle="tab" href="#sizing">sizing</a></li>
                  <li><a data-toggle="tab" href="#shipping">shipping</a></li>
                </ul>
                <div class="tab-content">
                  <div id="details" class="tab-pane fade in active">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <ul class="list-unstyled">
                      <li>Black, Crew Neck</li>
                      <li>75% Cotton, 25% Rayon</li>
                      <li>Waterbased Ink</li>
                      <li>Wash Cold, dry low</li>
                    </ul>
                  </div>
                  <div id="about-art" class="tab-pane fade">
                    <p>Nulla facilisi. Mauris efficitur, massa et iaculis accumsan, mauris velit ultrices purus, quis condimentum nibh dolor ut tortor. Donec egestas tortor quis mattis gravida. Ut efficitur elit vitae dignissim volutpat. </p>
                  </div>
                  <div id="sizing" class="tab-pane fade">
                    <p>Praesent dui felis, gravida a auctor at, facilisis commodo ipsum. Cras eu faucibus justo. Nullam varius cursus nisi, sed elementum sem sagittis at. Nulla tellus massa, vestibulum a commodo facilisis, pulvinar convallis nunc.</p>
                  </div>
                  <div id="shipping" class="tab-pane fade">
                    <p>Mauris lobortis augue ex, ut faucibus nisi mollis ac. Sed volutpat scelerisque ex ut ullamcorper. Cras at velit quis sapien dapibus laoreet a id odio. Sed sit amet accumsan ante, eu congue metus. Aenean eros tortor, cursus quis feugiat sed, vestibulum vel purus.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </section>
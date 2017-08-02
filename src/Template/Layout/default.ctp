<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>


     <?php $app_root = dirname($_SERVER['SCRIPT_NAME']);?>
     <!-- PLUGINS CSS STYLE -->
    <link href="<?= $app_root?> /plugins/jquery-ui/jquery-ui.css" rel="stylesheet">
    <link href="<?= $app_root?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= $app_root?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= $app_root?>/plugins/selectbox/select_option1.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= $app_root?>/plugins/rs-plugin/css/settings.css" media="screen">
    <link rel="stylesheet" type="text/css" href="<?= $app_root?>/plugins/owl-carousel/owl.carousel.css" media="screen">

    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>

    <!-- CUSTOM CSS -->
    <link href="<?= $app_root?>/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= $app_root?>/css/default.css" id="option_color">

    <!-- Icons -->
    <link rel="shortcut icon" href="/CS648_17/img/favicon.png">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="<?= $app_root?>/plugins/jquery-ui/jquery-ui.js"></script>
    <script src="<?= $app_root?>/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= $app_root?>/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?= $app_root?>/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="<?= $app_root?>/plugins/owl-carousel/owl.carousel.js"></script>
    <script src="<?= $app_root?>/plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
    <script src="<?= $app_root?>/plugins/countdown/jquery.syotimer.js"></script>
    <script src="<?= $app_root?>/js/custom.js"></script>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body class="body-wrapper">
    <div class="main-wrapper">
      <!-- HEADER -->
      <div class="header clearfix headerV3">

         <!-- TOPBAR -->
        <div class="topBar">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-7 col-xs-12">
                <ul class="list-inline pull-left top-left">
                    <li class = 'account-login' style="float:left !important"><span style = 'color:white;'>PixSale</span></li>
                </ul>
              </div>
              <div class="col-md-6 col-sm-7 col-xs-12">
                <ul class="list-inline pull-right top-right">
                  <?php if (isset($user)) {
                        echo "<li class='account-login'><span style='color:white;'>";
                        echo "Hi ".$first_name;
                        echo $this->Html->link(__("Log out"), ['controller' => 'Login', 'action' => 'logout']);
                        echo "</span></li>";
                      }
                      else {
                          $loginText = "<li class='account-login'><span><a data-toggle='modal' href='#login'>Log in</a><small>or</small><a data-toggle='modal' href='#signup'>Create an account</a></span></li>";
                          echo $loginText;
                      }
                   ?>
                </ul>
              </div>
            </div>
          </div>
        </div>


    <?= $this->Flash->render() ?>
    <!-- NAV TOP -->
    <?php echo $this->Form->create($searchForm, ['type' => 'post', 'class' => 'navTop text-center', 'url' => ['controller' => 'Search', 'action' => 'index']]); ?>
      <div class="container">
        <div class="navTop-middle" style="width:80%;">
            <div class="filterArea hidden-xs hidden-sm">
                <?php echo $this->Form->input('category', ['type' => 'select', 'options' => $categories, "class" => "select-drop", "empty" => "Choose one..."
                    , 'label' => false] ); ?>
                </div>
            <div class="searchBox">
                <span class="input-group">
                    <?php echo $this->Form->input('search', ['type' => 'text', 'class' => 'form-control', 'label' => false]); ?>
                    <?php echo $this->Form->button(__("<i class='fa fa-search'></i>"), ['type'=>'submit', 'class' => 'input-group-addon']); ?>
                </span>
            </div>
            <div style="float:left;">
                <?php echo $this->Form->label('image', 'Image', ['class' => 'left-align']); ?> <?php echo $this->Form->checkbox('image', [
                      'value' => 'image',
                      'hiddenField' => 'N',
                      'style' => 'text-align:left;',
                      ]); ?>
                <?php echo $this->Form->label('video', 'Video', ['class' => 'left-align']); ?> <?php echo $this->Form->checkbox('video', [
                      'value' => 'video',
                      'hiddenField' => 'N',
                      'style' => 'text-align:left;',
                      ]); ?>
                <?php echo $this->Form->label('audio', 'Audio', ['class' => 'left-align']); ?> <?php echo $this->Form->checkbox('audio', [
                      'value' => 'audio',
                      'hiddenField' => 'N',
                      'style' => 'text-align:left;',
                      ]); ?>
            </div>
          </div>
      </div>
    <?php echo $this->Form->end(); ?>

        <!-- NAVBAR -->
        <nav class="navbar navbar-main navbar-default nav-V3" role="navigation">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!--<a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>-->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
              <ul class="nav navbar-nav">
                <li <?php 
                        if ($this->request->params['controller'] == "Home" && $this->request->params['action'] == "index") {
                          echo "class='dropdown active'";
                        }
                        else {
                          echo "class='dropdown'";
                        }
                    ?> >
                  <?= $this->Html->link(__("Home"), ['controller' => 'Pages', 'action' => 'index'])?>
                </li>
              
                
                   <li <?php 
                        if ($this->request->params['controller'] == "Search" && $this->request->params['action'] == "index") {
                          echo "class='dropdown active'";
                        }
                        else {
                          echo "class='dropdown'";
                        }
                    ?> >
                  <?= $this->Html->link(__("Browse"), ['controller' => 'Search', 'action' => 'index'])?>
                </li>
                
                
                <li <?php 
                        if ($this->request->params['controller'] == "Home" && ($this->request->params['action'] == "terms" || $this->request->params['action'] == "about")) {
                          echo "class='dropdown active'";
                        }
                        else {
                          echo "class='dropdown'";
                        }
                    ?> >
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">information</a>
                  <ul class="dropdown-menu dropdown-menu-left">
                    <li><?= $this->Html->link(__("About Us"), ['controller' => 'Home', 'action' => 'about'])?></li>
                    <li><?= $this->Html->link(__("Terms and Conditions"), ['controller' => 'Home', 'action' => 'terms'])?></li>
                    

                    
                  </ul>
                </li>
               
                <li <?php 
                        if ($this->request->params['controller'] == "User") {
                          echo "class='dropdown active'";
                        }
                        else {
                          echo "class='dropdown'";
                        }
                    ?> >
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account</a>
                  <ul class="dropdown-menu dropdown-menu-right">
                   
                    <li><?= $this->Html->link(__("Profile"), ['controller' => 'User', 'action' => 'profile'])?></li>
                    <li><?= $this->Html->link(__("All Orders"), ['controller' => 'User', 'action' => 'index'])?></li>
                    <li><?= $this->Html->link(__("Sell"), ['controller' => 'Upload', 'action' => 'index'])?></li>
                  </ul>
                </li>
                
              </ul>
            </div><!-- /.navbar-collapse -->


          </div>
        </nav>

      </div>





  

    <!-- BODY -->
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>


    <!-- LOGIN MODAL -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title">log in</h3>
          </div>
          <div class="modal-body">
              <?php echo $this->Form->create(null, ['class' => 'form-group', 'type' => 'post', 'url' => ['controller' => 'Login', 'action' => 'index']]); ?>
                    <?php echo $this->Form->input('username', ['type' => 'text', "class" => "form-control",
                                'templates' => ['inputContainer' => '{{content}}']] ); ?>
                    <?php echo $this->Form->input('pass', ['type' => 'password',
                                'templates' => ['inputContainer' => '{{content}}'], 'class' => 'form-control', 'label' => 'Password']); ?>
                    <br>
                    <?php echo $this->Form->button(__('Login'), ['type'=>'submit', 'class' => 'btn btn-primary btn-block']); ?>
              <?php echo $this->Form->end(); ?>
          </div>
        </div>
      </div>
    </div>

    <!-- SIGN UP MODAL -->
    <div class="modal fade" id="signup" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title">Create an account</h3>
          </div>
          <div class="modal-body">
            <?php echo $this->Form->create(null, ['class' => 'form-group', 'type' => 'post', 'url' => ['controller' => 'Registration', 'action' => 'index']]); ?>
                    <?php echo $this->Form->input('username', ['type' => 'text', "class" => "form-control",
                                'templates' => ['inputContainer' => '{{content}}']] ); ?>
                    <?php echo $this->Form->input('pass', ['type' => 'password',
                                'templates' => ['inputContainer' => '{{content}}'], 'class' => 'form-control', 'label' => 'Password']); ?>
                    <?php echo $this->Form->input('email', ['type' => 'text', "class" => "form-control",
                                'templates' => ['inputContainer' => '{{content}}']] ); ?>
                    <?php echo $this->Form->input('first_name', ['type' => 'text', "class" => "form-control",
                                'templates' => ['inputContainer' => '{{content}}'] , 'label' => 'First Name'] ); ?>
                    <?php echo $this->Form->input('last_name', ['type' => 'text', "class" => "form-control", 
                                'templates' => ['inputContainer' => '{{content}}'] , 'label' => 'Last Name'] ); ?>                        
                    <br>
                    <?php echo $this->Form->button(__('Register'), ['type'=>'submit', 'class' => 'btn btn-primary btn-block']); ?>
            <?php echo $this->Form->end(); ?>
          </div>
        </div>
      </div>
    </div>
</div>

    <!-- PORDUCT QUICK VIEW MODAL -->
    <div class="modal fade quick-view" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="media">
              <div class="media-left">
                <img class="media-object" src= <?php echo "'$src'"; ?> alt="Image">
              </div>
              <div class="media-body">
                <h2>Old Skool Navy</h2>
                <h3>$149</h3>
                <p>Classic sneaker from Vans. Cotton canvas and suede upper. Textile lining with heel stabilizer and ankle support. Contrasting laces. Sits on a classic waffle rubber sole.</p>
                <span class="quick-drop">
                  <select name="guiest_id3" id="guiest_id3" class="select-drop">
                    <option value="0">Size</option>
                    <option value="1">Size 1</option>
                    <option value="2">Size 2</option>
                    <option value="3">Size 3</option>
                  </select>
                </span>
                <span class="quick-drop resizeWidth">
                  <select name="guiest_id4" id="guiest_id4" class="select-drop">
                    <option value="0">Qty</option>
                    <option value="1">Qty 1</option>
                    <option value="2">Qty 2</option>
                    <option value="3">Qty 3</option>
                  </select>
                </span>
                <div class="btn-area">
                  <a href="#" class="btn btn-primary btn-block">Add to cart <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer>
                <!-- COPY RIGHT -->
      <div class="copyRight clearfix">
        <div class="container">
          <div class="row">
            <div class="col-sm-7 col-xs-12">
            </div>
            <div class="col-sm-5 col-xs-12">
             
            </div>
          </div>
        </div>
      </div>

    </footer>
</body>
</html>

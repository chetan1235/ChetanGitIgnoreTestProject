<!DOCTYPE html>
<html>
<head>
  <title>Blog Demo</title>
  <?php
  print_r($blogdetails['Blog'][0]->blogname);
  
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?php echo assetsurl; ?>css/vendor.css">
  <link rel="stylesheet" type="text/css" href="<?php echo assetsurl; ?>css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="<?php echo assetsurl; ?>css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="<?php echo assetsurl; ?>css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="<?php echo assetsurl; ?>css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="<?php echo assetsurl; ?>css/theme/yellow.css">
  <style>
    .greenhead{
        color: #29c75f;
      }
      </style>
</head>
<body>
  <div class="app app-default">
<aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
      <a class="sidebar-brand highlight" href="#"><span class="highlight"><h2>Blog</h2></span></a>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
      <li class="">
        <a href="http://localhost/Blogtest/index.php/UserController/Home/">
          <div class="icon">
            <i class="fa fa-tasks" aria-hidden="true"></i>
          </div>
          <div class="title">Home</div>
        </a>
      </li>

    </ul>
  </div>
  <div class="sidebar-footer">
    <ul class="menu">
      <li>
        <a href="/" class="dropdown-toggle" data-toggle="dropdown">
          <i class="fa fa-cogs" aria-hidden="true"></i>
        </a>
      </li>
      <li><a href="#"><span class="flag-icon flag-icon-th flag-icon-squared"></span></a></li>
    </ul>
  </div>
</aside>

<script type="text/ng-template" id="sidebar-dropdown.tpl.html">
  <div class="dropdown-background">
    <div class="bg"></div>
  </div>
  <div class="dropdown-container">
    {{list}}
  </div>
</script>
<div class="app-container">
  <nav class="navbar navbar-default" id="navbar">
  <div class="container-fluid">
    <div class="navbar-collapse collapse in">
      <ul class="nav navbar-nav navbar-mobile">
        <li>
          <button type="button" class="sidebar-toggle">
            <i class="fa fa-bars"></i>
          </button>
        </li>
        <li class="logo">
          <a class="navbar-brand" href="#"><span class="highlight">Flat v3</span> Admin</a>
        </li>
        <li>
          <button type="button" class="navbar-toggle">
            <img class="profile-img" src="<?php echo assetsurl; ?>images/profile.png">
          </button>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown profile">
          <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
            <img class="profile-img" src="<?php echo assetsurl; ?>images/profile.png">
            <div class="title">Profile</div>
          </a>
          <div class="dropdown-menu">
            <div class="profile-info">
              <h4 class="username">Scott White</h4>
            </div>
            <ul class="action">
              <li>
                <a href="#">
                  Logout
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="row">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-8">
                <div class="title">
                <h3><span class="highlight greenhead">
                        <?php // if(isset($blogdetailsblogname)) ?>
                </span>
                </h3>
                </div>
                    <p class="text-left">
                        Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
                </p><img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" />
                <p>
                        Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
                </p>
            </div>
            <div class="col-md-4">
                <img alt="Bootstrap Image Preview" src="http://lorempixel.com/140/140/" class="img-circle" />
                <dl>
                    <dt>
                            Description lists
                    </dt>
                    <dd>
                            A description list is perfect for defining terms.
                    </dd>
                    <dt>
                            Euismod
                    </dt>
                    <dd>
                            Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.
                    </dd>
                    <dd>
                            Donec id elit non mi porta gravida at eget metus.
                    </dd>
                    <dt>
                            Malesuada porta
                    </dt>
                    <dd>
                            Etiam porta sem malesuada magna mollis euismod.
                    </dd>
                    <dt>
                            Felis euismod semper eget lacinia
                    </dt>
                    <dd>
                            Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div>
</div>
  </div>
  
  <script type="text/javascript" src="<?php echo assetsurl; ?>js/vendor.js"></script>
  <script type="text/javascript" src="<?php echo assetsurl; ?>js/app.js"></script>

</body>
</html>






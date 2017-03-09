<!DOCTYPE html>
<html>
<head>
  <title>Blog Demo</title>
  <?php
//  print_r($category);
  
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="<?php echo assetsurl; ?>css/vendor.css">
  <link rel="stylesheet" type="text/css" href="<?php echo assetsurl; ?>css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="<?php echo assetsurl; ?>css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="<?php echo assetsurl; ?>css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="<?php echo assetsurl; ?>css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="<?php echo assetsurl; ?>css/theme/yellow.css">

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
<!--      <li class="@@menu.messaging">
        <a href="../messaging.html">
          <div class="icon">
            <i class="fa fa-comments" aria-hidden="true"></i>
          </div>
          <div class="title">Messaging</div>
        </a>
      </li>-->
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
    <div class="col-lg-12">
      <div class="card card-tab">
        <div class="card-header">
          <ul class="nav nav-tabs">
            <li role="tab1" class="active">
              <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">All</a>
            </li>
            <?php 
            if(!empty($category['Category']))
            {
                foreach($category['Category'] as $value)
                { 
                    ?>
                    <li role="tab2">
                    <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"><?php echo $value->catname; ?></a>
                    </li>
             <?php   }
            }
            ?>
          </ul>
        </div>
          
        <div class="card-body no-padding tab-content">
          <div role="tabpanel" class="tab-pane active no-padding" id="tab1">
            <div class="search-result">
              <ul class="result">
                 <?php 
                 if(!empty($blog['Blog']))
                 {
                     foreach ($blog['Blog'] as $val)
                     { ?>
                      <li>
                        <div class="img">
                         <?php 
                         if($val->blogpic!='')
                         { 
                             ?>
                            <img src="<?php echo assetsurl.$val->blogpic; ?>" />
                       <?php  } ?>
                        </div>
                        <div class="info">
                            <div class="title"><a href="<?php echo $this->config->config['base_url'].'index.php/UserController/Blogdetails/'.$val->blogid; ?>"><span class="highlight"><?php echo $val->blogname; ?></div>
                          <div class="description"><?php echo $val->shortdesc; ?></div>
                        </div>
                      </li>    
                <?php     }
                 }
                 ?>
              </ul>
              <div class="footer">
<!--                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>-->
              </div>
            </div>
          </div>
<!--          <div role="tabpanel" class="tab-pane" id="tab2">
            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          </div>
          <div role="tabpanel" class="tab-pane" id="tab3">
            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          </div>
          <div role="tabpanel" class="tab-pane" id="tab4">
            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nullaip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          </div>-->
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
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-folder"></i><?php _e('Categories'); ?></h3>
  </div>
  <div class="panel-body">
    <ul class="list-unstyled">
      <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
    </ul>
  </div>
</div>
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-archive"></i> <?php _e('Archives'); ?></h3>
  </div>
  <div class="panel-body">
    <ul class="list-unstyled">
      <?php wp_get_archives('type=monthly'); ?>
    </ul>
  </div>
</div>
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-trophy"></i> Supporters</h3>
  </div>
  <div class="panel-body">
    <ul class="list-unstyled">
      <li><a href="https://tech.zalando.com"><img src="logo_zalando_sm.png" class="img-responsive" alt="Zalando"/></a></li>
      <li><a href="http://www.openwifi.ie/"><img src="logo_open_wifi_sm.png" class="img-responsive" alt="Open Wi-Fi"/></a></li>
    </ul>
  </div>
</div>
<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-link"></i> Links</h3>
  </div>
  <div class="panel-body">
    <ul class="list-unstyled">
      <li><a href="https://coderdojo.com">CoderDojo Foundation</a></li>
      <li><a href="http://kata.coderdojo.com/wiki/Main_Page">CoderDojo Kata</a></li>
    </ul>
  </div>
</div>
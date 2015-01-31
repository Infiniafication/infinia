<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=site_url()?>">INFINIA</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main-navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="<?=((strcmp(current_url(), site_url()) === 0) || (strcmp(current_url(), site_url('tempest')) === 0)) ? ' active' : '' ?>"><a href="<?=site_url()?>">Introduction</a></li>
        <li><a href="<?=site_url('../smarthome/index.php')?>" target="_blank"><abbr title="Final Year Project">FYP</abbr></a></li>
        <li class="<?=(strpos(uri_string(), 'tempest/udk') !== FALSE) ? ' active' : '' ?>"><a href="<?=site_url('tempest/udk')?>"><abbr title="Unreal Development Kit">UDK</abbr> Sample</a></li>
        <li><a href="https://www.dropbox.com/sh/q6s49e8y1jlo34c/AAA0Zel0QOPvI7gGLqqKCdCja?dl=0" target="_blank">Game Ideas &amp; Concepts (Drafts)</a></li>
        <li class="<?=(strpos(uri_string(), 'tempest/games') !== FALSE) ? ' active' : '' ?>"><a href="<?=site_url('tempest/games')?>">Played Games</a></li>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
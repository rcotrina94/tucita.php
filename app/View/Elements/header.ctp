<nav class="navbar navbar-default navbar-static-top navbar2">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">

      <a class="navbar-brand" href="/"><?php echo $this->Html->image('/static/website/img/logo_h.png', array('height'=> 74)) ?></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main_nav" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-toggle visible-xs" data-toggle="modal" data-target="#appointmefnt_form_pop">Iniciar Sesión</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="nav navbar-nav navbar-right">
        <li class="active dropdown">
          <a href="/">Inicio</a>
        </li>

        <li><a href="#">contacto</a></li>
        <li class="hidden-xs book"><a href="#" data-toggle="modal" data-target="#appointmefnt_form_pop">Iniciar Sesión</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>

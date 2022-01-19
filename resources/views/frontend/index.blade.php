<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>CTRIBE</title>
    <meta name="description" content=""/>
    <link rel="shortcut icon" href="favicon.ico"/>
    <link rel="stylesheet" href="/css/styles/plugins.css"/>
    <link rel="stylesheet" href="/css/styles/preview.css"/>
  </head>
</html>
<body>
  <main class="preview">
    <div class="card-wrap">
      <div class="card-header">
        <div class="card-label">Page Template</div>
        <div class="card-title"> <img src="/images/logo-ctribe.svg"/></div>
      </div>
      <div class="card-body">
        <ul class="card-list">
          <li class="card-item"><a href="/frontend/landing" target="_blank"><span>Landing</span></a></li>
          <li class="card-item"><a href="/frontend/homepage" target="_blank"><span>Homepage</span></a></li>
          <li class="card-item"><a href="/frontend/inspiration" target="_blank"><span>Inspiration</span></a></li>
          <li class="card-item"><a href="/frontend/our-people" target="_blank"><span>Our People</span></a></li>
          <li class="card-item"><a href="/frontend/flagship" target="_blank"><span>Flagship</span></a></li>
          <li class="card-item"><a href="/frontend/project" target="_blank"><span>Project</span></a></li>
          <li class="card-item"><a href="/frontend/tribes" target="_blank"><span>Tribes</span></a></li>
        </ul>
      </div>
    </div>
  </main>
</body>
<script src="/plugins/jquery/jquery-3.4.1.min.js"></script>
<script>
  $('.has-sub').each(function(){
    var el = $(this);
    el.on('click', function(){
      $('.has-sub:not(.open)').removeClass('open');
      $(this).toggleClass('open');
    });
  });
</script>

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
          <li class="card-item"><a href="landing.html" target="_blank"><span>Landing</span></a></li>
          <li class="card-item"><a href="homepage.html" target="_blank"><span>Homepage</span></a></li>
          <li class="card-item"><a href="inspiration.html" target="_blank"><span>Inspiration</span></a></li>
          <li class="card-item"><a href="our-people.html" target="_blank"><span>Our People</span></a></li>
          <li class="card-item"><a href="flagship.html" target="_blank"><span>Flagship</span></a></li>
          <li class="card-item"><a href="project.html" target="_blank"><span>Project</span></a></li>
          <li class="card-item"><a href="tribes.html" target="_blank"><span>Tribes</span></a></li>
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

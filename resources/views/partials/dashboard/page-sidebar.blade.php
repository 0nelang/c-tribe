<div class="page-sidebar">
        <ul class="list-unstyled accordion-menu">
          <li class="sidebar-title">
            Main
          </li>
          <li class="{{ ($page === 'main')? 'active-page' : ''  }}">
            <a href="/"><i data-feather="home"></i>Dashboard</a>
          </li>
          <li class="sidebar-title">
            Apps
          </li>
          <li>
            <a href="index.html"><i data-feather="tool"></i>Settings<i class="fas fa-chevron-right dropdown-icon"></i></a>
            <ul class="">
              <li><a href="/admin/page"><i class="far fa-circle"></i>page</a></li>
              <li><a href="/admin/general/{{ $general->id }}"><i class="far fa-circle"></i>general</a></li>
            </ul>
          </li>
          <li class="{{ ($page === 'people')? 'active-page' : ''  }}">
            <a href="/admin/people"><i data-feather="user"></i>our people</a>
          </li>
          <li class="{{ ($page === 'partners')? 'active-page' : ''  }}">
            <a href="/admin/partners"><i data-feather="user-check"></i>partners</a>
          </li>
          <li class="{{ ($page === 'service')? 'active-page' : ''  }}">
            <a href="/admin/service"><i data-feather="truck"></i>service</a>
          </li>
          <li class="{{ ($page === 'project')? 'active-page' : ''  }}">
            <a href="/admin/project"><i data-feather="package"></i>project</a>
          </li>
        </ul>
</div>
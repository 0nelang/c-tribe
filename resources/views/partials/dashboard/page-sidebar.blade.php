<div class="page-sidebar">
        <ul class="list-unstyled accordion-menu">
          <li class="sidebar-title">
            Main
          </li>
          <li class="{{ ($page === 'Admin')? 'active-page' : ''  }}">
            <a href="/admin"><i data-feather="home"></i>Dashboard</a>
          </li>

          <li class="sidebar-title">
            Apps
          </li>
          <li class="{{ ($page === 'Setting')? 'active-page' : ''  }} {{ ($page === 'General')? 'active-page' : ''  }} {{ ($page === 'Menu')? 'active-page' : ''  }} {{ ($page === 'Page')? 'active-page' : ''  }}">
            <a href="#"><i data-feather="tool"></i>Settings<i class="fas fa-chevron-right dropdown-icon"></i></a>
            <ul>
                <li><a href="/admin/general" class="{{ ($page === 'General')? 'active' : ''  }}"><i class="far fa-circle"></i>General</a></li>
                <li><a href="/admin/menu" class="{{ ($page === 'Menu')? 'active' : ''  }}"><i class="far fa-circle"></i>Menu</a></li>
                <li><a href="/admin/page" class="{{ ($page === 'Page')? 'active' : ''  }}"><i class="far fa-circle"></i>Page</a></li>
                <li><a href="/admin/setting" class="{{ ($page === 'Setting')? 'active' : ''  }}"><i class="far fa-circle"></i>Admin</a></li>
            </ul>
          </li>
          <li class="{{ ($page === 'People')? 'active-page' : ''  }}">
            <a href="/admin/people"><i data-feather="user"></i>Our People</a>
          </li>
          <li class="{{ ($page === 'Partners')? 'active-page' : ''  }}">
            <a href="/admin/partners"><i data-feather="user-check"></i>Partners</a>
          </li>
          <li class="{{ ($page === 'Service')? 'active-page' : ''  }}">
            <a href="/admin/service"><i data-feather="truck"></i>Service</a>
          </li>
          <li class="{{ ($page === 'Project')? 'active-page' : ''  }}">
            <a href="/admin/project"><i data-feather="package"></i>Project</a>
          </li>
          <li class="{{ ($page === 'Inspiration')? 'active-page' : ''  }}">
            <a href="/admin/inspiration"><i data-feather="sun"></i>Insipiration</a>
          </li>
          <li class="{{ ($page === 'Flagship')? 'active-page' : ''  }}">
            <a href="/admin/flagship"><i data-feather="flag"></i>Flagship</a>
          </li>
        </ul>
</div>

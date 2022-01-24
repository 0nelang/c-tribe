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
          <li>
            <a href="#"><i data-feather="tool"></i>Settings<i class="fas fa-chevron-right dropdown-icon"></i></a>
            <ul class="">
              <li><a href="/admin/page"><i class="far fa-circle"></i>Page</a></li>
              <li><a href="/admin/general"><i class="far fa-circle"></i>General</a></li>
              <li><a href="/admin/setting"><i class="far fa-circle"></i>Admin</a></li>
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
            <a href="/admin/inspiration"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
              <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z"/>
            </svg>Insipiration</a>
          </li>
          <li class="{{ ($page === 'Flagship')? 'active-page' : ''  }}">
            <a href="/admin/flagship"><i data-feather="flag"></i>Flagship</a>
          </li>
        </ul>
</div>

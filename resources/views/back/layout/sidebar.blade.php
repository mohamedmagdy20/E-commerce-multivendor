<div class="sidebar" data-background-color="dark">
  <div class="sidebar-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark">
      <a href="index.html" class="logo">
        <img
          src="back/assets/img/kaiadmin/logo_light.svg"
          alt="navbar brand"
          class="navbar-brand"
          height="20"
        />
      </a>
      <div class="nav-toggle">
        <button class="btn btn-toggle toggle-sidebar">
          <i class="gg-menu-right"></i>
        </button>
        <button class="btn btn-toggle sidenav-toggler">
          <i class="gg-menu-left"></i>
        </button>
      </div>
      <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
      </button>
    </div>
    <!-- End Logo Header -->
  </div>
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <ul class="nav nav-secondary">
        <li class="nav-item active">
          <a
            data-bs-toggle="collapse"
            href="{{route('admin.home')}}"
            class="collapsed"
            aria-expanded="false"
          >
            <i class="fas fa-home"></i>
            <p>Dashboard</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="dashboard">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{route('admin.home')}}">
                  <span class="sub-item">Dashboard 1</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#base">
            <i class="fas fa-users"></i>
            <p>Users</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="base">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{route('users.index')}}">
                  <span class="sub-item">Manage User</span>
                </a>
              </li>
              <li>
                <a href="components/buttons.html">
                  <span class="sub-item">Add Users</span>
                </a>
              </li>
             
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#category">
            <i class="fas fa-layer-group"></i>
            <p>Categories</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="category">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{route('categories.index')}}">
                  <span class="sub-item">Manage Categories</span>
                </a>
              </li>
              <li>
                <a href="{{route('categories.create')}}">
                  <span class="sub-item">Add Categories</span>
                </a>
              </li>
             
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#brands">
            <i class="fas fa-pen-square"></i>
            <p>Brands</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="brands">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{route('brands.index')}}">
                  <span class="sub-item">Manage Brands</span>
                </a>
              </li>
              <li>
                <a href="{{route('brands.create')}}">
                  <span class="sub-item">Add Brands</span>
                </a>
              </li>
             
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a href="{{route('currency.index')}}">
            <i class="fas fa-dollar-sign"></i>
            <p>Currency</p>
            <span class="badge badge-success">2</span>
          </a>
        </li>

        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#vendors">
            <i class="fas fa-user-circle"></i>
            <p>Vendors</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="vendors">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{route('vendors.index')}}">
                  <span class="sub-item">Manage Vendors</span>
                </a>
              </li>
              <li>
                <a href="{{route('vendors.create')}}">
                  <span class="sub-item">Add Vendors</span>
                </a>
              </li>
             
            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#products">
            <i class="fas fa-box"></i>
            <p>Products</p>
            <span class="caret"></span>
          </a>
          <div class="collapse" id="products">
            <ul class="nav nav-collapse">
              <li>
                <a href="{{route('products.index')}}">
                  <span class="sub-item">Manage Products</span>
                </a>
              </li>
              <li>
                <a href="{{route('products.create')}}">
                  <span class="sub-item">Add Products</span>
                </a>
              </li>
             
            </ul>
          </div>
        </li>
     
      </ul>
    </div>
  </div>
</div>
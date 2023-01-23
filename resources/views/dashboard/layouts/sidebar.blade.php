<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{Request::is('/') ? 'active' : ''}}" aria-current="page" href="/">
          <i class="bi bi-house" class="align-text-bottom"></i>
          Home
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{Request::is(['dataBarang','dataBarang/create']) ? 'active' : ''}}" href="/dataBarang">
          <i class="bi bi-file-text" class="align-text-bottom"></i>
         Data
        </a>
      </li>

    </ul>

  </div>
</nav>
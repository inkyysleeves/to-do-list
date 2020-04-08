<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('/10%20projects%20pt1/to%20do%20list/to-do-list/public/') ? 'active' : '' }}" href="/10%20projects%20pt1/to%20do%20list/to-do-list/public/">Home</a>
      </li>
      <li class="nav-item {{ Request::is('todo/create') ? 'active' : '' }}">
        <a class="nav-link" href="todo/create">Create</a>
      </li>
    </ul>
  </div>
</nav>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button">
          <i class="fas fa-bars"></i>
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/admin/dashboard') }}" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Example: Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
      </li>
      <!-- Logout Button -->
      <li class="nav-item">
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
          @csrf
          <button type="submit" class="btn btn-link nav-link" style="display:inline; padding: 0; margin: 0;">
            Logout
          </button>
        </form>
      </li>
      <!-- অন্যান্য লিঙ্ক যোগ করুন -->
    </ul>
  </nav>

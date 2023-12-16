<section id="header">
  <a href="#">
    <img src="img/logo.png" class="logo" alt="" />
  </a>
  <div class="">
    <ul class="navbar">
      <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
      <li><a href="/products" class="{{ Request::is('product*') ? 'active' : '' }}">Product</a></li>
      <li><a href="/blogs" class="{{ Request::is('blog*') ? 'active' : '' }}">Blog</a></li>
      <li><a href="/about" class="{{ Request::is('about') ? 'active' : '' }}">About</a></li>
      <li><a href="/contact" class="{{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
      @auth
        <li class="">
          <i class="bx bx-user user"></i>
          <ul class="dash-box">
            <li><a href="#">Dashboard</a></li>
            <li>
              <form action="/logout" method="post">
                <button type="submit" class="logout">
                  Logout
                </button>
              </form>
            </li>
          </ul>
        </li>
      @endauth

      <!-- <a href="#" id="close"><i class="bx bx-x"></i></a> -->
    </ul>
  </div>
  <div class="mobile">
    {{-- <a href="/cart"><i class="bx bx-shopping-bag"></i></a> --}}
    <i id="bar" class="bx bx-menu"></i>
  </div>
</section>

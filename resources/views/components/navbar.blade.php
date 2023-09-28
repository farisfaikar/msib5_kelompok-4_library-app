<div class="navbar bg-base-200 sm:px-10 px-4">
  <div class="navbar-start">
    <div class="dropdown">
      <label tabindex="0" class="btn btn-ghost lg:hidden p-0 mr-10 hover:bg-transparent">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
      </label>
      <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
        <li><a href="{{ route("book.index") }}">Browse Books</a></li>
      </ul>
    </div>
    <a href="{{ route("home") }}" class="btn btn-ghost normal-case text-xl px-0">
      <img src="{{ asset("img/readiverse-logo-blue.png") }}" alt="Readiverse Logo" class="w-10">
      Readiverse
    </a>
  </div>
  <div class="navbar-end">
    <a class="link link-hover mr-5 hidden lg:flex" href="{{ route("book.index") }}">Browse Books</a>
    <a class="btn btn-outline btn-neutral">Login</a>
  </div>
</div>
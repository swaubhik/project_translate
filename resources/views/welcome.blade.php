<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> {{ config('app.name') }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
  <div class="navbar bg-base-100">
    <div class="flex-1">
      <a class="btn btn-ghost text-xl">
        {{ config('app.name') }}
      </a>
    </div>
    <div class="flex-none">
      <ul class="menu menu-horizontal px-1">
        <button class="outline-none selection:outline-none focus:outline-none">
          <label class="grid cursor-pointer place-items-center">
            <input type="checkbox" value="synthwave"
              class="theme-controller toggle col-span-2 col-start-1 row-start-1 bg-base-content" />
            <svg class="col-start-1 row-start-1 fill-base-100 stroke-base-100" xmlns="http://www.w3.org/2000/svg"
              width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <circle cx="12" cy="12" r="5" />
              <path
                d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
            </svg>
            <svg class="col-start-2 row-start-1 fill-base-100 stroke-base-100" xmlns="http://www.w3.org/2000/svg"
              width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
            </svg>
          </label>
        </button>
        <li>
          <details>
            <summary>
              Login / Sign up
            </summary>
            <ul class="rounded-t-none bg-base-100 p-2">
              @if (Route::has('login'))
                @auth
                  <li>
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                  </li>
                @else
                  <li>
                    <a href="{{ route('login') }}">Log in</a>
                  </li>

                  @if (Route::has('register'))
                    <li>
                      <a href="{{ route('register') }}">Register</a>
                    </li>
                  @endif
                @endauth
              @endif
            </ul>
          </details>
        </li>
      </ul>
    </div>
  </div>
  <div class="flex w-full flex-col lg:flex-row">
    <div class="card grid min-h-screen flex-grow place-items-center rounded-box bg-base-300">
        
    </div>
    <div class="divider lg:divider-horizontal"></div>
    <div class="card grid min-h-screen flex-grow place-items-center rounded-box bg-base-300">content</div>
  </div>
  <footer class="footer footer-center bg-base-300 p-4 text-base-content">
    <aside>
      <p>
        Crafted with 💜 by <a href="swaubhik.com" class="link-hover link">Swaubhik</a>
      </p>
    </aside>
  </footer>
</body>

</html>

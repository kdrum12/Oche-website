<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Faith Connect | Your Community. Your Church.')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @stack('styles')
</head>
<body class="@yield('body-class')">

  <!-- Header Navigation -->
  <header class="{{ request()->routeIs('home') ? '' : 'scrolled' }}">
    <div class="logo">
      <a href="{{ route('home') }}" style="text-decoration: none;">
        <h2 style="color: white; margin: 0; font-size: 24px; letter-spacing: 1px;">FAITH CONNECT</h2>
      </a>
    </div>
    <nav class="nav-links">
      <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
      <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
      <a href="{{ route('ministries') }}" class="{{ request()->routeIs('ministries') ? 'active' : '' }}">Ministries</a> 
      <a href="{{ route('sermons') }}" class="{{ request()->routeIs('sermons') ? 'active' : '' }}">Sermons</a> 
      <a href="{{ route('events') }}" class="{{ request()->routeIs('events') ? 'active' : '' }}">Events</a> 
      <a href="{{ route('donations') }}" class="{{ request()->routeIs('donations') ? 'active' : '' }}">Give</a>
      <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
    </nav>
    <div class="header-right">
      <button class="menu-toggle" id="menu-toggle" aria-label="Toggle Navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="nav-actions">
        <a href="{{ route('donations') }}" class="btn btn-primary" style="padding: 10px 22px; font-size: 13px;">GIVE</a>
      </div>
    </div>
  </header>

  <!-- Flash Notification / Toast Alert -->
  @if (session('success'))
    <div id="flash-alert" style="position: fixed; top: 90px; right: 24px; z-index: 9999; background: #2E7D32; color: #fff; padding: 16px 24px; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.3); display: flex; align-items: center; gap: 15px; max-width: 450px;">
      <div style="font-size: 20px;">✓</div>
      <div style="flex: 1; font-size: 14px;">{{ session('success') }}</div>
      <button onclick="document.getElementById('flash-alert').remove()" style="background: none; border: none; color: #fff; font-size: 18px; cursor: pointer;">&times;</button>
    </div>
  @endif

  @if ($errors->any())
    <div id="flash-errors" style="position: fixed; top: 90px; right: 24px; z-index: 9999; background: #C62828; color: #fff; padding: 16px 24px; border-radius: 8px; box-shadow: 0 10px 30px rgba(0,0,0,0.3); max-width: 450px;">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
        <strong>Please check your submission:</strong>
        <button onclick="document.getElementById('flash-errors').remove()" style="background: none; border: none; color: #fff; font-size: 18px; cursor: pointer;">&times;</button>
      </div>
      <ul style="margin: 0; padding-left: 20px; font-size: 13px;">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <!-- Main Content -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  <footer>
    <div class="footer-grid">
      <div>
        <h3 class="footer-title">FAITH CONNECT</h3>
        <p style="opacity: 0.7; font-size: 14px;">Stay Connected</p>
        <p style="opacity: 0.6; font-size: 13px; margin-top: 10px; line-height: 1.6;">Join our weekly community digest for sermon notes, ministry updates, and spiritual encouragement.</p>
        <form action="{{ route('newsletter.subscribe') }}" method="POST" style="margin-top: 20px; display: flex; gap: 10px;">
          @csrf
          <input type="email" name="email" required placeholder="Enter your email" style="background: rgba(255,255,255,0.1); border: 1px solid rgba(255,255,255,0.2); border-radius: 4px; padding: 10px 14px; color: white; flex: 1;">
          <button type="submit" class="btn btn-primary" style="padding: 10px 20px;">JOIN</button>
        </form>
      </div>
      <div>
        <h4>Explore</h4>
        <ul style="list-style: none; opacity: 0.8; font-size: 14px; line-height: 2.5; margin-top: 20px; padding: 0;">
          <li><a href="{{ route('home') }}" style="color: inherit;">Home</a></li>
          <li><a href="{{ route('about') }}" style="color: inherit;">About Us</a></li>
          <li><a href="{{ route('ministries') }}" style="color: inherit;">Ministries</a></li>
          <li><a href="{{ route('sermons') }}" style="color: inherit;">Sermons & Media</a></li>
          <li><a href="{{ route('events') }}" style="color: inherit;">Upcoming Events</a></li>
          <li><a href="{{ route('donations') }}" style="color: inherit;">Support Our Mission</a></li>
        </ul>
      </div>
      <div>
        <h4>Gatherings</h4>
        <p style="opacity: 0.8; font-size: 14px; margin-top: 20px; line-height: 1.8;">
          <strong>Faith Connect Church</strong><br>
          704 11th Ave<br>
          New York, NY 55416<br><br>
          <span style="color: var(--primary); font-weight: 700;">Sunday Services:</span><br>
          Morning: 9:00 AM & 11:00 AM<br>
          Evening Youth: 5:30 PM
        </p>
      </div>
      <div>
        <h4>Contact & Care</h4>
        <p style="opacity: 0.8; font-size: 14px; margin-top: 20px; line-height: 1.8;">
          📞 (000) 321-423-4567<br>
          ✉️ hello@faithconnect.org<br><br>
          <a href="{{ route('contact') }}" class="btn btn-outline" style="padding: 8px 16px; font-size: 12px; display: inline-block;">REQUEST PRAYER ↗</a>
        </p>
      </div>
    </div>
    <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 30px; display: flex; justify-content: space-between; font-size: 12px; opacity: 0.6; flex-wrap: wrap; gap: 15px;">
      <span>© {{ date('Y') }} Faith Connect Church. All Rights Reserved.</span>
      <span>A Christ-Centered Community of Hope & Transformation</span>
    </div>
  </footer>

  <!-- Page Modals Container -->
  @yield('modals')

  <script src="{{ asset('js/main.js') }}"></script>
  @stack('scripts')
</body>
</html>

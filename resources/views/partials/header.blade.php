
<header>
  <div class="additional-bar">
    <div class="additional-bar__content container">
      <a href="">dc power visa®</a>
      <a href="">additional dc site</a>
    </div>
  </div>
  <div class="menu container">
    <div class="menu__logo">
      <img src="{{ asset ('images/dc-logo.png') }}" alt="dc-logo">
    </div>
    <nav>
      <ul>
        @foreach ($menu as $item)
        
          <a href=""><li>{{ $item['title'] }}</li></a>
        @endforeach
        
      </ul>
    </nav>
  </div>
</header>
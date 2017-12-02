<ul class="nav">
  <li class="{{ (Route::currentRouteName() == 'home') ? 'active' : ''}}">
      <a href="{{ route('home') }}">
          <i class="ti-panel"></i>
          <p>Dashboard</p>
      </a>
  </li>
  <li class="{{ (Route::currentRouteName() == 'sample.index') ? 'active' : ''}}">
      <a href="{{ route('sample.index') }}">
          <i class="ti-user"></i>
          <p>Sample</p>
      </a>
  </li>
  <li>
      <a href="table.html">
          <i class="ti-view-list-alt"></i>
          <p>Table List</p>
      </a>
  </li>
  <li>
      <a href="typography.html">
          <i class="ti-text"></i>
          <p>Typography</p>
      </a>
  </li>
  <li>
      <a href="icons.html">
          <i class="ti-pencil-alt2"></i>
          <p>Icons</p>
      </a>
  </li>
  <li>
      <a href="maps.html">
          <i class="ti-map"></i>
          <p>Maps</p>
      </a>
  </li>
  <li>
      <a href="notifications.html">
          <i class="ti-bell"></i>
          <p>Notifications</p>
      </a>
  </li>
  <li class="active-pro">
      <a href="upgrade.html">
          <i class="ti-export"></i>
          <p>Upgrade to PRO</p>
      </a>
  </li>
</ul>
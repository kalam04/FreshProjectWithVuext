  <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow noprint">
      <div class="navbar-container d-flex content">
          <div class="bookmark-wrapper d-flex align-items-center">
              <ul class="nav navbar-nav d-xl-none">
                  <li class="nav-item"><a class="nav-link  menu-toggle" href="javascript:void(0);"><i
                              class="ficon" data-feather="menu"></i></a></li>
              </ul>
              <ul class="nav navbar-nav">
                  <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                              data-feather="moon"></i></a></li>
              </ul>
          </div>
          <ul class="nav navbar-nav align-items-center ml-auto">
              <li class="nav-item dropdown">
                  {{-- <a href="{{ route('stock-reminder-item') }}" class="nav-link d-block dropdown-item" role="menuitem"> --}}
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          class="bi bi-bell-fill text-warning" viewBox="0 0 16 16">
                          <path
                              d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                      </svg>

                      {{-- {{ \App\Classes\stockAlert::qtyList() }} --}}
                  </a>

                  {{-- <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                       @php
                      $stockList = \App\Models\Stock::with(['product', 'valuOfVariation', 'offer'])->get();
                  @endphp
                      <div class="dropdown-divider"></div>
                      @foreach ($stockList as $item)
                          <a href="{{ route('stock.index') }}" class="nav-link d-block dropdown-item" role="menuitem">
                              {{ $item->product->name ?? '' }}
                              <span @if ($item->current_stock > $item->product->alert_quantity)
                                  class="badge badge-success"
                              @else class="badge badge-warning"
                      @endif>
                      {{ $item->current_stock ?? '' }}
                      </span>
                      </a>
                      @endforeach
                  </div> --}}
              </li>
              <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                      id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">
                      <div class="user-nav d-sm-flex d-none"><span class="user-name font-weight-bolder">
                              {{ Auth::user()->name }}</span>
                          {{-- <span class="user-status">Admin</span> --}}
                          {{-- @if (Auth::user()->getRoleNames()->isNotEmpty())
                              <span class="badge badge-success">
                                  {{ Auth::user()->getRoleNames()->implode(' ') }}<br>
                              </span>
                          @endif --}}
                      </div>
                      <span class="avatar"><img class="round"
                              src="{{ asset('admin') }}/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar"
                              height="40" width="40"><span class="avatar-status-online"></span>
                      </span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
                      {{-- <a class="dropdown-item" href="{{route('change-password')}}"><i class="mr-50"
                              data-feather="user"></i>Change Password</a> --}}
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();"> <i
                              class="mr-50" data-feather="power"></i>
                          {{ __('Logout') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </div>
              </li>
          </ul>
      </div>
  </nav>

@php
  $menu = [
    [
      'link' => URL::route('app.dashboard'),
      'name' => 'Dashboard'
    ],
    [
      'link' => URL::route('app.dashboard'),
      'name' => 'Users'
    ],
    [
      'link' => URL::route('app.dashboard'),
      'name' => 'Transportations'
    ],
    [
      'link' => URL::route('app.dashboard'),
      'name' => 'Suppliers'
    ],
    [
      'link' => URL::route('app.dashboard'),
      'name' => 'Warehouse'
    ],
    [
      'link' => URL::route('app.dashboard'),
      'name' => 'Assets'
    ],
    [
      'link' => URL::route('app.dashboard'),
      'name' => 'Employees'
    ],
    [
      'link' => URL::route('app.dashboard'),
      'name' => 'Fleet'
    ],
    [
      'link' => URL::route('app.dashboard'),
      'name' => 'Requisition Request'
    ],
    [
      'link' => URL::route('app.dashboard'),
      'name' => 'Re-stock Request'
    ],
    [
      'link' => URL::route('app.dashboard'),
      'name' => 'Reports'
    ],
    [
      'link' => URL::route('app.login'),
      'name' => 'Logout'
    ],
  ];
@endphp
<div id="sidebar" class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark">
  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    <span class="fs-4">
      <small></small>
    </span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
    @foreach($menu as $x)
      <li class="nav-item">
        <a href="{{ $x['link'] }}" class="nav-link @if(isset($active) && $active == $x['name']) active @endif" aria-current="page">
          {{ $x['name'] }} 
        </a>
      </li> 
    @endforeach
  </ul> 
</div>
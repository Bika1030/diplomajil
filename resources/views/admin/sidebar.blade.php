<nav id="sidebar">
    
    <span class="heading">Main</span>
    <ul class="list-unstyled">
        <li class="{{ request()->is('') ? 'active' : '' }}">
            <a href="{{url('')}}"><i class="icon-home"></i>Нүүр</a>
        </li>
        <li class="{{ request()->is('category_page') ? 'active' : '' }}">
            <a href="{{ url('category_page') }}"><i class="icon-list"></i>Ангилал</a>
        </li>
        <li class="{{ request()->is('admin/list') ? 'active' : '' }}">
            <a href="{{ route('admin.list') }}"><i class="icon-user"></i>Зохиолч</a>
        </li>
        <li class="{{ request()->is('show_book') ? 'active' : '' }}">
          <a href="{{ url('show_book') }}"><i class="fas fa-book"></i>Номнууд</a>
        </li>
        <li class="{{ request()->is('add_book') ? 'active' : '' }}">
          <a href="{{ url('add_book') }}"><i class="fas fa-plus"></i>Ном нэмэх</a>
        </li>
    </ul>
</nav>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">







<li class="nav-item has-treeview active">
    <a href="{{ route('home')}}" class="nav-link ">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
        Dashboard
        <!-- <i class="right fas fa-angle-left"></i> -->
        </p>
    </a>

</li>

<li class="nav-item has-treeview ">
    <a href="#" class="nav-link ">
        <i class="nav-icon fas fa-user-alt"></i>
        <p>
        Users
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="#" class="nav-link ">
                <i class="fa fa- nav-icon"></i>
                <p>Add User</p>
            </a>
        </li>
    </ul>

    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="#" class="nav-link ">
                <i class="fa fa- nav-icon"></i>
                <p>User logs</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview ">
    <a href="#" class="nav-link ">
        <i class="nav-icon fas fa-cogs"></i>
        <p>
        Setting
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>

    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="#" class="nav-link ">
                <i class="fa fa- nav-icon"></i>
                <p>Profile</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="#" class="nav-link ">
                <i class="fa fa- nav-icon"></i>
                <p>Category</p>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item has-treeview ">
    <a href="#" class="nav-link ">
        <i class="nav-icon fa fa-comment"></i>
        <p>
        Post
        <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="#" class="nav-link ">
                <i class="fa fa- nav-icon"></i>
                <p>New Post</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="#" class="nav-link ">
                <i class="fa fa- nav-icon"></i>
                <p>Archieve Post</p>
            </a>
        </li>
    </ul>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="#" class="nav-link ">
                <i class="fa fa- nav-icon"></i>
                <p>Comments</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item has-treeview ">
    <a href="#" class="nav-link " onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
          <i class="nav-icon fas fa-power-off red"></i>
          <p>
            {{ __('Logout') }}
          </p>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
</li>

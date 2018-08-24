<ul class="sidebar-menu" data-widget="tree">
    <li class="treeview menu-open">
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('normaluser/userscontrollcard') }}"><i class="fa fa-circle-o"></i>User Card</a></li>
        <li><a href="{{ url('issued') }}"><i class="fa fa-circle-o"></i>Issued Resource</a></li>
      </ul>
    </li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="{{ url('form') }}"><i class="fa fa-link"></i> <span>Insert Product</span></a></li>
    <li class="active"><a href="{{ url('user') }}"><i class="fa fa-link"></i> <span>user</span></a></li>
</ul>
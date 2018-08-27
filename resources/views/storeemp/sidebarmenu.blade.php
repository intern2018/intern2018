<ul class="sidebar-menu" data-widget="tree">
    <li class="treeview menu-open">
      <a href="#">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{ url('') }}"><i class="fa fa-circle-o"></i>View Items</a></li>
      </ul>
    </li>
    
    <li class="active"><a href="{{ url('/insertItem') }}"><i class="fa fa-link"></i> <span>Insert Item</span></a></li>
</ul>
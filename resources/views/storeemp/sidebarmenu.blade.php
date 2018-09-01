<ul class="sidebar-menu" data-widget="tree">
    <li class="treeview menu-open">
      <a href="/">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
    </li>
    <li class="treeview menu-open">
      <a href="">
        <i class="fa fa-link"></i> <span>Item</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li ><a href="{{ url('/registerItem') }}"><i class="fa fa-circle-o"></i> <span>Register Item</span></a></li>
        <li ><a href="{{ url('/insertItemView') }}"><i class="fa fa-link"></i> <span>Insert Item</span></a></li>
        <li ><a href="#"><i class="fa fa-link"></i> <span>View Item</span></a></li>
        <li ><a href="{{ url('/issued') }}"><i class="fa fa-link"></i> <span>Issue Items</span></a></li>
      </ul>
    </li>
    <li class="treeview menu-open">
      <a href="">
        <i class="fa fa-link"></i> <span>Provider</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li ><a href="{{ url('/registerProviderView') }}"><i class="fa fa-link"></i> <span>Register Provider</span></a></li>
        <li ><a href="#"><i class="fa fa-link"></i> <span>View Provider</span></a></li>
      </ul>
    </li>
</ul>
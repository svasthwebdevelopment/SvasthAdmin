@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        @include('backpack::inc.sidebar_user_panel')

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          {{-- <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

<li><a href="{{  backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
 <!--  <li><a href="{{ backpack_url('area') }}"><i class="fa fa-dashboard"></i> <span>Area</span></a></li> -->
  <li><a href="{{ backpack_url('user') }}"><i class="fa fa-dashboard"></i> <span>User</span></a></li>
   <li><a href="{{ backpack_url('tax') }}"><i class="fa fa-dashboard"></i> <span>Tax</span></a></li>
    <li><a href="{{ backpack_url('AppStatus') }}"><i class="fa fa-dashboard"></i> <span>AppStatus</span></a></li>
        <li><a href="{{ backpack_url('contact_data') }}"><i class="fa fa-dashboard"></i> <span>Contact Data</span></a></li>
            <li><a href="{{ backpack_url('delivery_user') }}"><i class="fa fa-dashboard"></i> <span>Delivery User</span></a></li>
                <li><a href="{{ backpack_url('delivery') }}"><i class="fa fa-dashboard"></i> <span>Delivery</span></a></li>
                    <li><a href="{{ backpack_url('discount') }}"><i class="fa fa-dashboard"></i> <span>Discount</span></a></li>
                        <li><a href="{{ backpack_url('enquiry') }}"><i class="fa fa-dashboard"></i> <span>Enquiry</span></a></li>
                            <li><a href="{{ backpack_url('litre') }}"><i class="fa fa-dashboard"></i> <span>Litre</span></a></li>
                                <li><a href="{{ backpack_url('modify') }}"><i class="fa fa-dashboard"></i> <span>Modify</span></a></li>
                                    <li><a href="{{ backpack_url('order_history') }}"><i class="fa fa-dashboard"></i> <span>Order History</span></a></li>
                                     <li><a href="{{ backpack_url('products') }}"><i class="fa fa-dashboard"></i> <span>Products</span></a></li>
                                      <li><a href="{{ backpack_url('purity') }}"><i class="fa fa-dashboard"></i> <span>Purity</span></a></li>
                                       <li><a href="{{ backpack_url('special_offer') }}"><i class="fa fa-dashboard"></i> <span>Special Offers</span></a></li>
          <!-- ======================================= -->
          {{-- <li class="header">Other menus</li> --}}
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif

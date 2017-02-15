<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        {{--@if (! Auth::guest())--}}
            {{--<div class="user-panel">--}}
                {{--<div class="pull-left image">--}}
                    {{--<img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />--}}
                {{--</div>--}}
                {{--<div class="pull-left info">--}}
                    {{--<p>{{ Auth::user()->name }}</p>--}}
                    {{--<!-- Status -->--}}
                    {{--<a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endif--}}

        <!-- search form (Optional) -->
        {{--<form action="#" method="get" class="sidebar-form">--}}
            {{--<div class="input-group">--}}
                {{--<input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>--}}
              {{--<span class="input-group-btn">--}}
                {{--<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>--}}
              {{--</span>--}}
            {{--</div>--}}
        {{--</form>--}}
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('home') }}"><i class='ion-ios-home-outline'></i> <span>Home</span></a></li>
            <li><a href="{{ url('news') }}"><i class='ion ion-ios-paper-outline'></i> <span>News</span></a></li>
            <li><a href="{{ url('news') }}"><i class='ion ion-images'></i> <span>Slider</span></a></li>
            <li><a href="{{ url('users') }}"><i class='ion ion-ios-people-outline'></i> <span>Users</span></a></li>
            <li><a href="{{ url('users') }}"><i class='ion ion-ios-calendar-outline'></i> <span>Calendar</span></a></li>
            <li><a href="{{ url('users') }}"><i class='ion ion-ios-folder-outline'></i> <span>Documents</span></a></li>
            <li><a href="{{ url('users') }}"><i class='ion ion-ios-camera-outline'></i> <span>Gallery</span></a></li>
            <li><a href="{{ url('users') }}"><i class='ion ion-android-attach'></i> <span>Links</span></a></li>
            <li><a href="{{ url('users') }}"><i class='ion ion-ios-pricetag-outline'></i> <span>Status</span></a></li>
            <li><a href="{{ url('users') }}"><i class='ion ion-ios-pricetags-outline'></i> <span>Category</span></a></li>
            <li><a href="{{ url('users') }}"><i class='ion ion-ios-filing-outline'></i> <span>History</span></a></li>

            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.multilevel') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                    <li><a href="#">{{ trans('adminlte_lang::message.linklevel2') }}</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

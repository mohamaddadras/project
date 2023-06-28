<!DOCTYPE html>
<html lang="fa" dir="rtl" class="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="fontiran.com:license" content="NE29X">
        @include('admin.layouts.icon')
        @include('admin.layouts.head-tag')
        @yield('head-tag') 
    </head>
    <body class="active-ripple theme-blue fix-header sidebar-extra dark">
        @include('admin.layouts.loader')
        @include('admin.layouts.header')   
        <!-- BEGIN WRAPPER -->
        <div id="wrapper">
            @include('admin.layouts.sidebar')      
            <!-- BEGIN PAGE CONTENT -->
            <div id="page-content">
                <div class="row">
                    @yield('content')
                </div>
            </div><!-- /#page-content -->
            <!-- END PAGE CONTENT -->
        </div><!-- /#wrapper -->
        <!-- END WRAPPER -->
        @include('admin.layouts.footer')
        @include('admin.layouts.setting')
        @include('admin.layouts.script')
        @yield('script')    
    </body>
</html>
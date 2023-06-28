@extends('admin.layouts.master')
@section('head-tag')
    <title>داشبورد</title>
@endsection
@section('content')
        <!-- BEGIN BREADCRUMB -->
        <div class="col-md-12">
            <div class="breadcrumb-box shadow">
                <ul class="breadcrumb">
                    <li class="active">پیشخوان</li>
                    <li class="active">داشبورد</li>
                </ul>
                <div class="breadcrumb-left">
                    یکشنبه، 1402/02/24
                    <i class="icon-calendar"></i>
                </div><!-- /.breadcrumb-left -->
            </div><!-- /.breadcrumb-box -->
        </div><!-- /.col-md-12 -->
        <!-- END BREADCRUMB -->

        <div class="col-12">
            <div class="portlet box shadow">
                <div class="portlet-heading">
                    <div class="portlet-title">
                        <h3 class="title">
                            <i class="icon-note"></i>
                            تیتر صفحه
                        </h3>
                    </div><!-- /.portlet-title -->
                    <div class="buttons-box">
                        <a class="btn btn-sm btn-default btn-round btn-fullscreen" rel="tooltip" title="تمام صفحه"
                            href="#">
                            <i class="icon-size-fullscreen"></i>
                        </a>
                        <a class="btn btn-sm btn-default btn-round btn-collapse" rel="tooltip" title="کوچک کردن"
                            href="#">
                            <i class="icon-arrow-up"></i>
                        </a>
                    </div><!-- /.buttons-box -->
                </div><!-- /.portlet-heading -->
                <div class="portlet-body">
                    <div>
                        این یک صفحه خالی است، همین الان این تگ را پاک کنید و صفحه فوق العاده خود را با کمک سایر صفحات قالب
                        بسازید.
                    </div>
                </div><!-- /.portlet-body -->
            </div><!-- /.portlet -->
        </div><!-- /.col-12 -->
@endsection




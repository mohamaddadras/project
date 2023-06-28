@extends('admin.layouts.master')
@section('head-tag')
    <link href="{{ asset('admin-assets/assets/plugins/ladda/dist/ladda-themeless.min.css') }}" rel="stylesheet">
    <title>داشبورد | ایجاد برند جدید</title>
@endsection
@section('content')
    <!-- BEGIN BREADCRUMB -->
    <div class="col-md-12">
        <div class="breadcrumb-box shadow">
            <ul class="breadcrumb">
                <li><a href="{{ route('admin.index') }}">پیشخوان</a></li>
                <li class="active">بخش فروش</li>
                <li><a href="{{ route('admin.market.brand.index') }}">برند ها</a></li>
                <li class="active">ایجاد برند جدید</li>
            </ul>
            <div class="breadcrumb-left">
                یکشنبه، 1402/02/24
                <i class="icon-calendar"></i>
            </div><!-- /.breadcrumb-left -->
        </div><!-- /.breadcrumb-box -->
    </div><!-- /.col-md-12 -->
    <!-- END BREADCRUMB -->

    <div class="col-md-12">
        <div class="portlet box shadow">
            <div class="portlet-heading">
                <div class="portlet-title">
                    <h3 class="title">                                        
                        <i class="icon-settings"></i>
                        فرم  ایجاد برند جدید
                    </h3>
                </div><!-- /.portlet-title -->
                <div class="buttons-box">
                    <a class="btn btn-sm btn-default btn-round btn-fullscreen" rel="tooltip" title="تمام صفحه" href="#">
                        <i class="icon-size-fullscreen"></i>
                    </a>
                    <a class="btn btn-sm btn-default btn-round btn-collapse" rel="tooltip" title="کوچک کردن" href="#">
                        <i class="icon-arrow-up"></i>
                    </a>
                </div><!-- /.buttons-box -->
            </div><!-- /.portlet-heading -->
            <div class="portlet-body">
                <form role="form">
                    <div class="form-body row">
                        <div class="form-group col-xl-6 col-md-12">
                            <label>نام</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="icon-grid"></i>
                                </span>
                                <input type="text" class="form-control" placeholder="نام">
                            </div><!-- /.input-group -->
                        </div><!-- /.form-group -->
                        <div class="form-group  col-xl-6 col-md-12">
                            <label>وضعیت</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="icon-options"></i>
                                </span>
                                <select class="form-select">
                                    <option value="0">غیر فعال</option>
                                    <option value="1">فعال</option>
                                </select>
                            </div><!-- /.input-group -->
                        </div><!-- /.form-group -->
                        <div class="form-group relative">
                            <input type="file" class="form-control"> 
                            <label>آپلود فایل</label>
                            <div class="input-group round"> 
                                <input type="text" class="form-control file-input" placeholder="برای آپلود کلیک کنید"> 
                                <span class="input-group-btn"> 
                                    <button type="button" class="btn btn-info"> 
                                        <i class="icon-picture"></i>
                                        آپلود عکس
                                    </button>
                                </span> 
                            </div><!-- /.input-group -->
                            <div class="help-block"></div>
                        </div><!-- /.form-group -->
                    </div><!-- /.form-body -->

                    <div class="form-actions">
                        <button class="btn btn-info btn-round ladda-button" data-style="expand-right">
                            <i class="icon-check"></i>
                            ذخیره
                        </button>
                        <a href="{{ route('admin.market.brand.index') }}" class="btn btn-warning btn-round ladda-button" data-style="expand-right">
                            بازگشت
                            <i class="icon-close"></i>
                        </a>
                    </div><!-- /.form-actions -->
                </form>
            </div><!-- /.portlet-body -->
        </div><!-- /.portlet -->

    </div><!-- /.col-lg-6 -->

@endsection
@section('script')
    <script src="{{ asset('admin-assets/assets/plugins/ladda/dist/spin.min.js') }}"></script>
    <script src="{{ asset('admin-assets/assets/plugins/ladda/dist/ladda.min.js') }}"></script>
    <script src="{{ asset('admin-assets/assets/js/pages/ladda.js') }}"></script>
@endsection

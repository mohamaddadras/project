@extends('admin.layouts.master')
@section('head-tag')
    <link href="{{ asset('admin-assets/assets/plugins/data-table/DataTables-1.10.16/css/jquery.dataTables.css') }}"
        rel="stylesheet">
    <link href="{{ asset('admin-assets/assets/plugins/ladda/dist/ladda-themeless.min.css') }}" rel="stylesheet">
    <title>داشبورد | نظرات</title>
@endsection
@section('content')
    <!-- BEGIN BREADCRUMB -->
    <div class="col-md-12">
        <div class="breadcrumb-box shadow">
            <ul class="breadcrumb">
                <li><a href="{{ route('admin.index') }}">پیشخوان</a></li>
                <li class="active">بخش فروش</li>
                <li class="active">نظرات</li>
            </ul>
            <div class="breadcrumb-left">
                یکشنبه، 1402/02/24
                <i class="icon-calendar"></i>
            </div><!-- /.breadcrumb-left -->
        </div><!-- /.breadcrumb-box -->
    </div><!-- /.col-md-12 -->
    <!-- END BREADCRUMB -->

    <div class="col-md-12">
        <div class="portlet box shadow curve">
            <div class="portlet-heading">
                <div class="portlet-title">
                    <h3 class="title">
                        <i class="icon-plus"></i>
                        ایجاد نظر جدید
                    </h3>
                </div>
                <div class="buttons-box">
                    <a class="btn btn-sm btn-default btn-round btn-fullscreen" rel="tooltip" title="تمام صفحه"
                        href="#">
                        <i class="icon-size-fullscreen"></i>
                    </a>
                    <a class="btn btn-sm btn-default btn-round btn-collapse" rel="tooltip" title="کوچک کردن"
                        href="#">
                        <i class="icon-arrow-up"></i>
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <a href="{{ route('admin.market.brand.create') }}" class="btn btn-success btn-round w-100 ladda-button disabled"
                    data-style="slide-up">
                    <i class="fa fa-plus"></i> ایجاد نظر جدید
                </a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped" id="data-table">
            <thead>
                <tr>
                    <th>ردیف</th>
                    <th>کد کاربر</th>
                    <th>نویسنده نظر</th>
                    <td>کد کالا</td>
                    <td>کالا</td>
                    <td>تصویر کالا</td>
                    <td>وضعیت</td>
                    <td>عملیات</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1245</td>
                    <td>محمد دادرسی</td>
                    <td>45</td>
                    <td>گوشی شیامی poco x3 pro</td>
                    <td class="text-center">
                        <img src="{{ asset('admin-assets/assets/images/other/hafez-tomb.jpg') }}" style="height: 50px" class="w-50">
                    </td>
                    <td>
                        <label class="label-success round">تایید شده</label>
                        <label class="label-warning round">در انتظار تایید</label>
                    </td>
                    <td>
                        <a href="{{ route('admin.market.comment.show') }}" class="btn btn-info btn-round ladda-button" data-style="expand-right">
                            <i class="icon-eyeglass"></i> مشاهده
                        </a>
                        <a href="#" class="btn btn-success btn-round ladda-button" data-style="expand-right">
                            <i class="fas fa-check"></i> تایید
                        </a>
                        <a href="#" class="btn btn-warning btn-round ladda-button" data-style="expand-right">
                            <i class="fas fa-x"></i> عدم تایید
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
@section('script')
    <script src="{{ asset('admin-assets/assets/plugins/data-table/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin-assets/assets/plugins/ladda/dist/spin.min.js') }}"></script>
    <script src="{{ asset('admin-assets/assets/plugins/ladda/dist/ladda.min.js') }}"></script>
    <script src="{{ asset('admin-assets/assets/js/pages/ladda.js') }}"></script>
    <script>
        var tableMain = $('#data-table').DataTable({
            "columnDefs": [{
                "targets": [5,6,7],
                "orderable": false
            }],
            "pageLength": 25
        });

        $(window).on('resize', function() {
            $('#data-table').css("width", "100%");
        });
    </script>
@endsection

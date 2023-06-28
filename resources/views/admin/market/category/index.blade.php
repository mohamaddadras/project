@extends('admin.layouts.master')
@section('head-tag')
    <link href="{{ asset('admin-assets/assets/plugins/data-table/DataTables-1.10.16/css/jquery.dataTables.css') }}"
        rel="stylesheet">
    <link href="{{ asset('admin-assets/assets/plugins/ladda/dist/ladda-themeless.min.css') }}" rel="stylesheet">
    <title>داشبورد | دسته بندی ها</title>
@endsection
@section('content')
    <!-- BEGIN BREADCRUMB -->
    <div class="col-md-12">
        <div class="breadcrumb-box shadow">
            <ul class="breadcrumb">
                <li><a href="{{ route('admin.index') }}">پیشخوان</a></li>
                <li class="active">بخش فروش</li>
                <li class="active">دسته بندی ها</li>
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
                        ایجاد دسته جدید
                    </h3>
                </div>
                <div class="buttons-box">
                    <a class="btn btn-sm btn-default btn-round btn-fullscreen" rel="tooltip" title="تمام صفحه" href="#">
                        <i class="icon-size-fullscreen"></i>
                    </a>
                    <a class="btn btn-sm btn-default btn-round btn-collapse" rel="tooltip" title="کوچک کردن" href="#">
                        <i class="icon-arrow-up"></i>
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <a href="{{ route('admin.market.category.create') }}" class="btn btn-success btn-round w-100 ladda-button" data-style="slide-up">
                    <i class="fa fa-plus"></i> ایجاد دسته جدید
                </a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped" id="data-table">
            <thead>
                <tr>
                    <th>ردیف</th>
                    <th>نام</th>
                    <th>توضیحات</th>
                    <th>تصویر</th>
                    <td>عملیات</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>اخبار</td>
                    <td>توضیحات اخبار</td>
                    <td class="text-center">
                        <img src="{{ asset('admin-assets/assets/images/other/hafez-tomb.jpg') }}" style="height: 50px" class="w-50">
                    </td>
                    <td>
                        <a href="#" class="btn btn-info btn-round ladda-button" data-style="expand-right"><i class="fa fa-edit"></i> ویرایش</a>
                        <button href="#" class="btn btn-danger btn-round ladda-button" data-style="expand-right"><i class="icon-trash"></i> حذف</button>
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
            "targets": [3,4],
            "orderable": false
        }],
        "pageLength": 25
    });

    $(window).on('resize', function() {
        $('#data-table').css("width", "100%");
    });
</script>
@endsection

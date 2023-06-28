@extends('admin.layouts.master')
@section('head-tag')
    <link href="{{ asset('admin-assets/assets/plugins/data-table/DataTables-1.10.16/css/jquery.dataTables.css') }}"
        rel="stylesheet">
    <link href="{{ asset('admin-assets/assets/plugins/ladda/dist/ladda-themeless.min.css') }}" rel="stylesheet">
    <title>داشبورد | سفارشات</title>
@endsection
@section('content')
    <!-- BEGIN BREADCRUMB -->
    <div class="col-md-12">
        <div class="breadcrumb-box shadow">
            <ul class="breadcrumb">
                <li><a href="{{ route('admin.index') }}">پیشخوان</a></li>
                <li class="active">بخش فروش</li>
                <li class="active">سفارشات</li>
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
                        ایجاد سفارش جدید
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
                    <i class="fa fa-plus"></i> ایجاد سفارش جدید
                </a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped" id="data-table">
            <thead>
                <tr>
                    <th>ردیف</th>
                    <th>کد سفارش</th>
                    <th>مبلغ سفارش</th>
                    <td>مبلغ تخفیف</td>
                    <td>مبلغ نهایی</td>
                    <td>وضعیت پرداخت</td>
                    <td>شیوه پرداخت</td>
                    <td>بانک</td>
                    <td>وضعیت ارسال</td>
                    <td>شیوه ارسال</td>
                    <td>وضعیت سفارش</td>
                    <td>عملیات</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>9988-7454</td>
                    <td>250000 تومان</td>
                    <td>20000 تومان</td>
                    <td>230000 تومان</td>
                    <td>
                        <label class="label-success round">پرداخت شده</label>
                    </td>
                    <td>
                        <label class="label-success round">آنلاین</label>
                    </td>
                    <td>بانک سپه</td>
                    <td>
                        <label class="label-success round">ارسال شده</label>
                    </td>
                    <td>پیک موتوری</td>
                    <td>
                        <label class="label-success round">ارسال شده</label>
                    </td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true">
                                <i class="icon-arrow-down"></i>
                                عملیات
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"><i class="fas fa-eye"></i> مشاهده فاکتور</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-motorcycle"></i> تغییر وضعیت ارسال</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-handshake-simple-slash"></i> تغییر وضعیت سفارش</a>
                                </li>
                                <li>
                                    <a href="#"><i class="far fa-rectangle-xmark"></i> باطل کردن سفارش</a>
                                </li>
                            </ul>
                        </div>
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
                "targets": [1,5,6,7,8,9,10,11],
                "orderable": false
            }],
            "pageLength": 25
        });

        $(window).on('resize', function() {
            $('#data-table').css("width", "100%");
        });
    </script>
@endsection

@extends('admin.admin_master')

@section('admin')

<div class="content">

    <!-- Start Content-->
    <div class="container-xxl">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">

                <div class="card-header">
                    <h5 class="card-title mb-0">بازبینی و بررسی</h5>
                </div>

                <div class="card-body">

                    <!-- جدول راست چین شده -->
                    <table id="datatable" 
                           class="table table-bordered dt-responsive table-responsive nowrap text-end"
                           dir="rtl">

                        <thead>
                        <tr>
                            <th>نام</th>
                            <th>موقعیت</th>
                            <th>تصویر</th>
                            <th>پیام</th>
                            <th>عملیات</th>
                        </tr>
                        </thead>

                        <tbody>

                 @foreach ( $review as $key => $item )
                        <tr>
                            <td>{{ $kry+1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->position }}</td>
                            <td>   <img src="{{ asset($item->image)" alt="" class="w-75 h-50"> </td>
                            <td>
                                <a href="" class="btn btn-success sm">ویرایش</a>
                                <a href="" class=" btn btn-danger sm"> حذف</a>
                            </td>
                        </tr>
                 @endforeach

                

                        </tbody>

                    </table>
                  

                </div>

            </div>
        </div>
    </div>
</div>

@endsection

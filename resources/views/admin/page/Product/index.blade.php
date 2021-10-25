@extends('admin.layout')

@section('title', 'المنتجات')

@section('styles')
    <link rel="stylesheet" type="text/css"
          href="{{ asset('dashboard/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('dashboard/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('dashboard/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('dashboard/app-assets/css/plugins/forms/pickers/form-flat-pickr.min.css') }}">
@endsection

@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">المنتجات</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="">لوحة التحكم</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">المنتجات</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section id="responsive-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">الأقسام</h4>
                                    <a href="{{route('admin.products.create')}}"
                                       class="btn btn-primary me-1">اضافة قسم</a>
                                </div>
                                <div class="card-datatable">
                                    <table class="dt-responsive table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>اسم منتج</th>
                                            <th>اسم قسم</th>
                                            <th> السعر</th>
                                            <th> وصف</th>
                                            <th> صورة</th>
                                            <th> عرض</th>
                                            <th>تاريخ الاضافة</th>
                                            <th>العمليات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($products as $product)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$product->product_name}}</td>
                                                <td>{{$product->category->category_name}}</td>
                                                <td>{{$product->price}}</td>
                                                <td>{{$product->description}}</td>
                                                <td>
                                                    
                                                    <img src="{{asset('upload/admin/product/'.$product->primary_image)}}" style="width: 85px" alt="">

                                                </td>


                                                <td>
                                                    @if($product->status_offer == 1)
                                                        <p  style="color: green">عرض </p>
                                                    @endif
                                                    @if($product->status_offer == 0)
                                                        <p  style="color: red">لا يوجد عرض </p>
                                                    @endif
                                                </td>
                                                <td>{{$product->created_at}}</td>

                                                <td>
                                                    <div class="dropdown">
                                                        <button
                                                            type="button"
                                                            class="btn btn-sm text-white dropdown-toggle hide-arrow py-0"
                                                            data-bs-toggle="dropdown"
                                                        >
                                                            <a class="dropdown-item" href="#">
                                                                <i data-feather="settings" class="me-50"></i>
                                                            </a>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="{{route('admin.products.edit',$product->id)}}">
                                                                <i data-feather="edit-2" class="me-50"></i>
                                                                <span>تعديل</span>
                                                            </a>
                                                            <form class="dropdown-item" method="post" action="{{route('admin.products.destroy',$product->id)}}">
                                                                @csrf
                                                                @method('delete')
                                                                <i data-feather="trash" class="me-50"></i>
                                                                <span><button data-toggle="modal"
                                                                    data-target="#delete{{ $product->id }}" style="background: none; border: none; outline: none" type="submit">حذف</button></span>
                                                           
                                                           
                                                                </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            @endforeach
                                            

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('dashboard/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('dashboard/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js') }}"></script>
    <script src="{{ asset('dashboard/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('dashboard/app-assets/js/scripts/tables/table-datatables-advanced.min.js') }}"></script>
@endsection

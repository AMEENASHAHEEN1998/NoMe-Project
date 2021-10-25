@extends('admin.layout')

@section('title', __('المنتجات'))

@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">اضافة منتج</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">لوحة التحكم</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">اضافة منتج</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section id="multiple-column-form">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">اضافة منتج</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" method="post" action="{{route('admin.products.store')}}" enctype="multipart/form-data">
                                        @csrf

                                        
                                        <div class="row">

                                            <div class="col-md-4 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="name">اسم المنتج</label>
                                                    <input
                                                        type="text"
                                                        id="name"
                                                        class="form-control @error('product_name') is-invalid @enderror"
                                                        placeholder=" الرجاء ادخال اسم المنتج  "
                                                        name="product_name"
                                                        required
                                                        value="{{ old('product_name') }}"
                                                    />
                                                    @if($errors->has('product_name'))
                                                        <div
                                                            class="invalid-feedback">{{ $errors -> first('product_name') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-4 col-12">
                                                <label for="name"
                                                    class="mr-sm-2">اسم القسم
                                                    :</label>

                                                <div class="box col-md-12">
                                                    <select class="form-control form-control-lg " name="category_id">
                                                        @foreach ($categories as $category)
                                                          
                                                                <option value="{{ $category->id }}">
                                                                    {{ $category->category_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-4 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="price">السعر </label>
                                                    <input
                                                        type="text"
                                                        id="price"
                                                        required
                                                        class="form-control @error('price') is-invalid @enderror"
                                                        placeholder=" الرجاء ادخال سعر المنتج  "
                                                        name="price"
                                                        value="{{ old('price') }}"
                                                    />
                                                    @if($errors->has('price'))
                                                        <div
                                                            class="invalid-feedback">{{ $errors -> first('price') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="col-md-4 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="description">الوصف </label>
                                                    <input
                                                        type="text"
                                                        id="description"
                                                        class="form-control @error('description') is-invalid @enderror"
                                                        placeholder=" الرجاء ادخال  وصف لمنتج  "
                                                        name="description"
                                                        value="{{ old('description') }}"
                                                        required
                                                    />
                                                    @if($errors->has('description'))
                                                        <div
                                                            class="invalid-feedback">{{ $errors -> first('description') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            

                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <input type="checkbox" name="status_offer" class="switchery" data-color="success" value="1" />
                                                    

                                                    <label class="form-label" for="description">عرض </label>

                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                
                                            <div class="col">
                                                <div class="form-group">
                                                    <label
                                                        for="exampleFormControlTextarea1">صورة لمنتج
                                                        :</label>
                                                    <input type="file" name="primary_image" class="form-control-file" required
                                                        id="exampleFormControlFile1">
                                                </div>
                                            </div>
                                        </div>


                                        <br>
                                        <br>
                                       

                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary me-1">حفظ</button>
                                                <a href="" class="btn btn-outline-secondary">عودة</a>
                                            </div>
                                        


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

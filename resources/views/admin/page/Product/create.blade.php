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

                                            <div class="col-md-4 col-6">
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

                                            <div class="col-md-4 col-6">
                                                <label for="name"
                                                    class="mr-sm-2"> اسم القسم الرئيسي
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

                                            <div class="col-md-4 col-6">
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
                                        
                                            <div class="col-md-4 col-6">
                                                <div class="mb-1">
                                                    <label class="form-label" for="description">الوصف </label>
                                                    <input
                                                        type="text"
                                                        id="description"
                                                        class="form-control @error('description') is-invalid @enderror"
                                                        placeholder=" الرجاء ادخال  وصف لمنتج  "
                                                        name="description"
                                                        value="{{ old('description') }}"
                                                        
                                                    />
                                                    @if($errors->has('description'))
                                                        <div
                                                            class="invalid-feedback">{{ $errors -> first('description') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            

                                        </div>
                                       
                                        <div class="row">
                                
                                            <div class="col">
                                                <div class="form-group">
                                                    <label
                                                        for="exampleFormControlTextarea1">صورة المنتج الرئيسية
                                                        :</label>
                                                    <input type="file" name="primary_image" class="form-control-file" required
                                                        id="exampleFormControlFile1">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="repeater">
                                            <div data-repeater-list="sizes">
                                                <div data-repeater-item>
                                                    <div class="row">
                                                        <div class="col">
                                                            <label class="form-label" for="name">ادخل المقاس </label>
                                                                
            
                                                            <div class="box ">
                                                                <input
                                                                    type="text"
                                                                    id="name"
                                                                    class="form-control @error('product_name') is-invalid @enderror"
                                                                    placeholder=" الرجاء ادخال المقاس  "
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
                                                        <div class="col">
                                                            <label for="Name_en"
                                                                class="mr-sm-2">العمليات
                                                                :</label>
                                                            <input class="btn btn-danger btn-block" data-repeater-delete type="button"
                                                                value="حذف المقاس" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="row">
                                                <div class="row mt-20">
                                                    <div class="col-12">
                                                        <input class="button" data-repeater-create type="button"
                                                            value="اضافة مقاس أخر" />
                                                    </div>
            
                                                </div>
                                            </div>
                                        </div>

                                        <div class="repeater">
                                            <div data-repeater-list="images">
                                                <div data-repeater-item>
                                                    <div class="row">
                                                        <div class="col">
                                                            <label for="Name_en"
                                                                class="mr-sm-2">اضافة صورة أخرى
                                                                :</label>
            
                                                            <div class="box ">
                                                                <input type="file" name="secand_image" class="form-control-file" 
                                                                id="">
                                                            </div>
            
                                                        </div>
                                                        <div class="col">
                                                            <label for="Name_en"
                                                                class="mr-sm-2">العمليات
                                                                :</label>
                                                            <input class="btn btn-danger btn-block" data-repeater-delete type="button"
                                                                value="حذف الصورة" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
            
                                            <div class="row">
                                                <div class="row mt-20">
                                                    <div class="col-12">
                                                        <input class="button" data-repeater-create type="button"
                                                            value="اضافة صورة أخرى" />
                                                    </div>
            
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

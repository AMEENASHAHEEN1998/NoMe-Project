@extends('admin.layout')

@section('title', "تعديل قسم"))

@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">تعديل قسم</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="">لوحة التحكم</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">تعديل قسم</a>
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
                                    <h4 class="card-title">تعديل قسم</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" method="post" action="" enctype="multipart/form-data">
                                        @csrf
                                                        <div class="row">
                                            <div class="col-md-4 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="title">اسم القسم</label>
                                                    <input
                                                        type="text"
                                                        id="title"
                                                        class="form-control @error('title') is-invalid @enderror"
                                                        placeholder="Please enter English title"
                                                        name="title"
                                                        value="{{ old('title')?? 'القيمة القديمة'?? '' }}"
                                                    />
                                                    @if($errors->has('title'))
                                                        <div
                                                            class="invalid-feedback">{{ $errors -> first('title') }}</div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="image-file"><img style="width: 150px; cursor: pointer" id="image" src="{{ asset($about->image?? '') }}" alt="image"></label>
                                                    <input
                                                        type="file"
                                                        id="image-file"
                                                        style="display: none"
                                                        name="image"
                                                        onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])"
                                                    />
                                                    @if($errors->has('image'))
                                                        <div
                                                            class="invalid-feedback">{{ $errors -> first('image') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary me-1">تعديل</button>
                                                <a href="" class="btn btn-outline-secondary">عودة</a>
                                            </div>
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

@extends('front.include.layout')

@section('title', ' المراكز')

@section('content')
    
<div class="site__body">
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">الرئيسية</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="https://waslastore.ps//website/images/sprite.svg#arrow-rounded-right-6x9">
                                </use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">المراكز</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="document">
                <div class="document__header">
                    <h1 class="document__title">قائمة المراكز</h1>
                </div>
                <div class="document__content typography">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">الاسم</th>
                                <th scope="col">المدينة</th>
                                <th scope="col">العنوان</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                                                        <tr>
                                <th scope="row">المركز الرئيسي</th>
                                <td>غزة</td>
                                <td>شارع الوحدة - عمارة نابلس</td>
                                
                            </tr>
                                                        <tr>
                                <th scope="row">شركة المشهراوي الكتريك - غزة</th>
                                <td>غزة</td>
                                <td>شارع الوحدة – معهد الأمل – عمارة نابلس</td>
                                
                            </tr>
                                                        <tr>
                                <th scope="row">شركة المشهراوي التجارية - النصر</th>
                                <td>غزة</td>
                                <td>شارع النصر – بالقرب من سويدي النصر – مقابل حلويات مهنا</td>
                                
                            </tr>
                                                        <tr>
                                <th scope="row">شركة المهندس</th>
                                <td>غزة</td>
                                <td>تل الهوا – بنك فلسطين – شارع الأبراج‏</td>
                                
                            </tr>
                                                        <tr>
                                <th scope="row">شركة المشهراوي التجارية - البلد</th>
                                <td>غزة</td>
                                <td>غزة – شارع الوحدة – موقف جباليا</td>
                                
                            </tr>
                                                        <tr>
                                <th scope="row">اليازجي ماركت</th>
                                <td>غزة</td>
                                <td>الشجاعية - شارع بغداد - مفترق السوق</td>
                                
                            </tr>
                                                        <tr>
                                <th scope="row">شركة المشهراوي الكتريك - الوسطى</th>
                                <td>الوسطى - البريج</td>
                                <td>البريج - شارع صلاح الدين - عمارة وشاح</td>
                                
                            </tr>
                                                        <tr>
                                <th scope="row">محلات الطويل للأدوات المنزلية</th>
                                <td>الوسطى - النصيرات</td>
                                <td>النصيرات - الشارع العام - بجوار أبو دلال مول</td>
                                
                            </tr>
                                                        <tr>
                                <th scope="row">محلات أبو سالم خليفة للأدوات المنزلية</th>
                                <td>الوسطى - المغازي</td>
                                <td>المغازي - دوار السوق - محلات خليفة</td>
                                
                            </tr>
                                                        <tr>
                                <th scope="row">مركز طلال عواد التجاري</th>
                                <td>الوسطى - دير البلح</td>
                                <td>دير البلح - البلد - الشارع العام - دوار البركة</td>
                                
                            </tr>
                                                        <tr>
                                <th scope="row">شركة الحاج أكرم الشريف وأولادة - للتجارة العامة</th>
                                <td>بيت لاهيا</td>
                                <td>مشروع بيت لاهيا - مقابل السوق</td>
                                
                            </tr>
                                                        <tr>
                                <th scope="row">مركز المقيد للأجهزة الكهربائية</th>
                                <td>جباليا</td>
                                <td>مفترق الترنس</td>
                                
                            </tr>
                                                        <tr>
                                <th scope="row">سوبر ماركت طبش</th>
                                <td>خانيونس</td>
                                <td>عبسان - الشارع العام - وسط سوق الأحد</td>
                                
                            </tr>
                                                        <tr>
                                <th scope="row">شركة أبناء الحاج غازي شراب للأدوات الكهربائية</th>
                                <td>خانيونس</td>
                                <td>البلد - مقابل دوار السنية</td>
                                
                            </tr>
                                                        <tr>
                                <th scope="row">محلات الريان المغاري</th>
                                <td>رفح</td>
                                <td>شارع البحر - قرب مسجد العودة</td>
                                
                            </tr>
                                                        <tr>
                                <th scope="row">محلات أبو أشرف حنيف</th>
                                <td>رفح</td>
                                <td>شارع صدام - بجوار مسجد الإستقامة</td>
                                
                            </tr>
                                                        <tr>
                                <th scope="row">محلات ناهد الغول للأدوات كهربائية</th>
                                <td>رفح</td>
                                <td>تل السلطان - الحي السعودي</td>
                                
                            </tr>
                            
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


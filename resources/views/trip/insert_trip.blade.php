@extends('layouts.master')
@section('css')
    <!-- Internal Select2 css -->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!--Internal  Datetimepicker-slider css -->
    <link href="{{ URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/pickerjs/picker.min.css') }}" rel="stylesheet">
    <!-- Internal Spectrum-colorpicker css -->
    <link href="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.css') }}" rel="stylesheet">
    <!--- Internal Select2 css-->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!---Internal Fileupload css-->
    <link href="{{ URL::asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <!---Internal Fancy uploader css-->
    <link href="{{ URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css') }}">
    <!--Internal  TelephoneInput css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css') }}">
    <!--- Internal Select2 css-->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!--Internal  Quill css -->
    <link href="{{ URL::asset('assets/plugins/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/plugins/quill/quill.bubble.css') }}" rel="stylesheet">
@endsection
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    @if (session()->has('Edit'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Edit') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    @if (session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('delete') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session()->has('Error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    <form action="{{ route('trip.store') }}" method="POST" enctype="multipart/form-data" >
        {{ method_field('post') }}
        {{ csrf_field() }}
        <!-- row -->
        <div class="row">


            <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
                <div class="card  box-shadow-0">
                    <div class="card-header">
                        <h4 class="card-title mb-1">معلومات عن الحدث</h4>
                        <p class="mb-2">جميع الحقول مطلوبه.</p>
                    </div>
                    <div class="card-body pt-0">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <p>اسم الحدث</p>
                                <input type="text" class="form-control" id="inputName" placeholder="اسم.."
                                    name="name">
                            </div>

                            <div class="form-group">
                                <p>اسم الدوله</p>
                                <input type="text" class="form-control" id="inputName" placeholder="الدوله"
                                    name="country">
                            </div>

                            <div class="form-group">
                                <p>المدينه</p>
                                <input type="text" class="form-control" id="inputName" placeholder="المدينه"
                                    name="city">
                            </div>
                            <div class="form-group">
                                <p>عنوان الحدث كاملا</p>
                                <input type="text" class="form-control" id="inputName" placeholder="عنوان..."
                                    name="addrees">
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h6 class="card-title mb-1">تستطيع اختيار اكثر من قيمه</h6>
                            <p class="mb-2">جميع الحقول مطلوبه.</p>
                        </div>

                        <div class="mb-4">
                            <p class="mg-b-10">ملائم للفصول</p>
                            <select multiple="multiple" class="testselect2" name="season">
                                <option selected value="الربيع">الربيع</option>
                                <option value="الخريف">الخريف</option>
                                <option value="الصيف">الصيف</option>
                                <option value="الشتاء">الشتاء</option>
                            </select>
                        </div>


                        <div class="mb-4">
                            <p class="mg-b-10">مواعيد العمل</p>
                            <select multiple="multiple" class="testselect2" name="working_days">
                                <option selected value="السبت">السبت</option>
                                <option value="الاحد">الاحد</option>
                                <option value="الاثنين">الاثنين</option>
                                <option value="الثلاثاء">الثلاثاء</option>
                                <option selected value="الاربعاء">الاربعاء</option>
                                <option value="الخميس">الخميس</option>
                                <option value="الحمعه">الحمعه</option>

                            </select>
                        </div>


                        <div>
                            <p class="mg-b-10">نوع الحدث</p>
                            <select class="testselect2" name="event_id">
                                @foreach ($events as $item)
                                    <option selected value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="mb-4">
                            <p class="mg-b-10">مميزات الحدث</p>
                            <select multiple="multiple" class="testselect2" name="future[]">



                                <option selected value="اقتصادي">اقتصادي</option>
                                <option value="خدمات النقل">خدمات النقل</option>
                                <option value="إيداع مجاني للأمتعة">إيداع مجاني للأمتعة</option>
                                <option value="خدمات الغسيل"> خدمات الغسيل</option>


                                <option selected value="القهوة والشاي">القهوة والشاي</option>
                                <option value="الإنترنت - واي فاي">الإنترنت - واي فاي</option>
                                <option value="الغسيل والتنظيف الجاف">الغسيل والتنظيف الجاف</option>
                                <option value="الرحلات البحرية"> الرحلات البحرية</option>



                                <option selected value="حوض استحمام ساخن / جاكوزي على سطح السفينة"> حوض استحمام ساخن / جاكوزي على سطح السفينة</option>
                                <option value="الأحداث والاجتماعات">الأحداث والاجتماعات</option>
                                <option value="الصف الأول">الصف الأول</option>
                                <option value="اقتصاد مميز">اقتصاد مميز</option>



                                <option selected value="volvo">سكاي شوبينج</option>
                                <option value="saab">تناول الطعام على متن الطائرة</option>
                                <option value="mercedes">موسيقى</option>
                                <option value="audi"> مقاعد وكابينة</option>




                            </select>
                        </div>


                    </div>
                </div>
            </div>



            <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            اوقات العمل
                        </div>
                        <p></p>
                        <p class="mg-b-20">موعد بداية الحدث </p>
                        <div class="row row-sm mg-b-20">

                            <div class="input-group col-md-4">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                    </div>
                                </div><input class="form-control fc-datepicker" name="start_time" placeholder="MM/DD/YYYY"
                                    type="data">
                            </div>
                        </div><!-- wd-200 -->

                        <p class="mg-b-20">موعد نهاية الحدث </p>
                        <div class="row row-sm mg-b-20">

                            <div class="input-group col-md-4">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="typcn typcn-calendar-outline tx-24 lh--9 op-6"></i>
                                    </div>
                                </div><input class="form-control fc-datepicker" name="end_time" placeholder="MM/DD/YYYY" type="data">
                            </div>
                        </div><!-- wd-200 -->


                    </div>
                </div>
            </div>


            <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            التسعير
                        </div>
                        <p class="mg-b-20">اتركه فارغًا إذا لم تكن بحاجة إلى استخدام خيار .</p>
                        <div class="row row-sm">


                            <div class="col-lg-4">

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input aria-label="Amount (to the nearest dollar)" class="form-control" name="price_hour"
                                        type="text">
                                    <div class="input-group-append">
                                        <span class="input-group-text">سعر الساعه</span>
                                    </div>
                                </div><!-- input-group -->
                            </div>
                            <p></p>

                            <div class="col-lg-4">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input aria-label="Amount (to the nearest dollar)" class="form-control" name="price_day"
                                        type="text">
                                    <div class="input-group-append">
                                        <span class="input-group-text">سعر اليوم</span>
                                    </div>
                                </div><!-- input-group -->
                            </div>



                        </div>

                        <div class="col-lg-4">

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input aria-label="Amount (to the nearest dollar)" class="form-control" name="price"
                                    type="text">
                                <div class="input-group-append">
                                    <span class="input-group-text">سعر المده كاملا</span>
                                </div>
                            </div><!-- input-group -->
                        </div>


                    </div>
                </div>
            </div>



     







            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            اكتب وصف الحدث
                        </div>
                        <p class="mg-b-20">يجب ان تشرح كل شئ عن الحدث وهذه سيفيد العملاء في الوثوق في هذه الحدث.</p>
                        <div class="ql-wrapper ql-wrapper-demo bg-gray-100" name="description">
                            <div id="quillEditor" name="description" enctype="multipart/form-data" ></div>
                        </div>
                    </div>
                </div>
            </div>
            







                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h6 class="card-title mb-1">رفع صوره</h6>
                            </div>
                            <div class="row mb-4">
                              
                                <div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
                                    <input type="file" class="dropify" data-default-file="{{URL::asset('assets/img/photos/1.jpg')}}" data-height="200"  name="image"  enctype="multipart/form-data"/>
                                </div>
                                
                            </div>
                           
                        </div>
                    </div>
                </div>
         








            <button type="submit" class="btn btn-danger"
                style="width:200px; height:50px; background-color: blue; color:white; margin: 0 auto;">حفظ العقار</button>

        </div>
        <!-- row closed -->


    </form>
@endsection



@section('js')
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{ URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js') }}"></script>
    <!-- Internal Select2.min js -->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!--Internal Ion.rangeSlider.min js -->
    <script src="{{ URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <!--Internal  jquery-simple-datetimepicker js -->
    <script src="{{ URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js') }}"></script>
    <!-- Ionicons js -->
    <script src="{{ URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js') }}"></script>
    <!--Internal  pickerjs js -->
    <script src="{{ URL::asset('assets/plugins/pickerjs/picker.min.js') }}"></script>
    <!-- Internal form-elements js -->
    <script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!--Internal Fileuploads js-->
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <!--Internal Fancy uploader js-->
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
    <!--Internal  Form-elements js-->
    <script src="{{ URL::asset('assets/js/advanced-form-elements.js') }}"></script>
    <script src="{{ URL::asset('assets/js/select2.js') }}"></script>
    <!--Internal Sumoselect js-->
    <script src="{{ URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
    <!-- Internal TelephoneInput js-->
    <script src="{{ URL::asset('assets/plugins/telephoneinput/telephoneinput.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/telephoneinput/inttelephoneinput.js') }}"></script>
    <!--Internal  Select2 js -->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!--Internal quill js -->
    <script src="{{ URL::asset('assets/plugins/quill/quill.min.js') }}"></script>
    <!-- Internal Form-editor js -->
    <script src="{{ URL::asset('assets/js/form-editor.js') }}"></script>
@endsection

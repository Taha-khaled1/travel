@extends('layouts.master')


@section('css')
<link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@section('title')
    الدول
@stop
@endsection
{{-- ection('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">الاقسام /</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">نوع العقار</span>
						</div>
					</div>
			
				</div>
				<!-- breadcrumb -->
@endsection --}}
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

@if (session()->has('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('delete') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session()->has('edit'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ session()->get('edit') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
				<!-- row -->
				<div class="row">
    
					<div class="col-xl-12">
						<div class="card">
							<div class="col-sm-6 col-md-4 col-xl-3">
								<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">اضافة دوله</a>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">رقم الدوله</th>
												<th class="wd-15p border-bottom-0">اسم الدوله</th>
												{{-- <th class="wd-15p border-bottom-0"></th> --}}
												<th class="wd-20p border-bottom-0">تاريخ الانشاء</th>
												<th class="wd-20p border-bottom-0">العمليات</th>
											</tr>
										</thead>
										<tbody>

											@php
												$i=0;
											@endphp

											@foreach ($country as $catogery)
											@php
                                         	$i++;
                                           @endphp
											<tr>
												 <td>{{$i}}</td></td>
												<td>{{$catogery->name}}</td>
												{{-- <td>{{$catogery->cities->name}}</td> --}}
												<td>{{$catogery->created_at}}</td>
												<td>
												
													<a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"
														data-id="{{ $catogery->id}}" data-name="{{ $catogery->name}}"
														data-image="{{ $catogery->image }}" data-toggle="modal"
														href="#exampleModal2" title="تعديل"><i class="las la-pen"></i></a>
											
		
											
													<a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"
														data-id="{{ $catogery->id }}" data-name="{{ $catogery->name }}"
														data-toggle="modal" href="#modaldemo9" title="حذف"><i
															class="las la-trash"></i></a>
											
											</td>
											</tr>
										
										
										@endforeach
										


										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
              
					<div class="modal" id="modaldemo8">
						<div class="modal-dialog" role="document">
							<div class="modal-content modal-content-demo">
								<div class="modal-header">
									<h6 class="modal-title">اضافة دوله</h6><button aria-label="Close" class="close" data-dismiss="modal"
										type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<form action="{{ route('catogery.store') }}" method="post" enctype="multipart/form-data">
										{{ csrf_field() }}
				
{{-- 										
                                        <div class="mb-4">
                                            <label for="country_id" class="form-label">Choose a country:</label>
                                            {!! country()->dropdown('country', null, ['class' => 'form-control']) !!}

                                        </div> --}}

                                        <div class="form-group">
                                            <label for="country">Country:</label>
                                            <select id="country" name="country" class="form-control select2" data-placeholder="Select a country">
                                                <option></option>
                                                @foreach ($countries as $code => $name)
                                                    <option value="{{ $code }}">{{ $name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="city">City:</label>
                                            <select id="city" name="city" class="form-control select2" data-placeholder="Select a city">
                                                <option></option>
                                            </select>
                                        </div>
                                        
										{{-- <div class="form-group">
											<label for="image">تحميل صوره لنوع العقار</label>
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="image" name="image">
												<label class="custom-file-label" for="image">اختار صوره</label>
											</div>
											<img src="#" id="preview" style="display: none; max-width: 200px; max-height: 200px;">
										</div> --}}
				
										<div class="modal-footer">
											<button type="submit" class="btn btn-success">تاكيد</button>
											<button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					
				</div>
				<!-- row closed -->
				<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">تعديل الدوله</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route("catogery.update") }}" method="post" enctype="multipart/form-data">
			
			{{ csrf_field() }}
			<input type="hidden" name="id" id="id" value="">
			<div class="form-group">
				<label for="recipient-name" class="col-form-label">اسم الدوله</label>
				<input class="form-control" name="name" id="name" type="text">
			</div>
			<div class="form-group">
				<label for="recipient-name" class="col-form-label">صوره الدوله</label>
				<input class="form-control" name="image" id="image" type="file">
				<img src="image"  id="image" class="img-thumbnail" style="width: 100px; height: 100px;">
			</div>
			</div>
			<div class="modal-footer">
			<button type="submit" class="btn btn-primary">تاكيد</button>
			<button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
			</div>
        </form>
      </div>
    </div>
  </div>
		
			<!-- delete -->
			<div class="modal" id="modaldemo9">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content modal-content-demo">
						<div class="modal-header">
							<h6 class="modal-title">حذف الدوله</h6><button aria-label="Close" class="close" data-dismiss="modal"
								type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<form action="{{ route("catogery.destroy") }}"method="post">
							{{ method_field('post') }}
							{{ csrf_field() }}
							<div class="modal-body">
								<p>هل انت متاكد من عملية الحذف ؟</p><br>
								<input type="hidden" name="id" id="id" value="">
								<input class="form-control" name="name" id="name" type="text" readonly>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
								<button type="submit" class="btn btn-danger">تاكيد</button>
							</div>
					</div>
					</form>
				</div>
			</div>
		
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection

@section('js')
<script src="{{ asset('js/select2.min.js') }}"></script>
<script>
    $(document).ready(function() {
        // Initialize the select2 plugin on the country select box
        $('#country').select2();

        // When a country is selected, fetch its cities and populate the city select box
        $('#country').on('change', function() {
            var country = $(this).val();
            $('#city').empty().append('<option></option>').prop('disabled', true);
            if (country) {
                $.ajax({
                    url: '/cities/' + country,
                    dataType: 'json',
                    success: function(data) {
                        $.each(data, function(key, value) {
                            $('#city').append('<option value="' + key + '">' + value + '</option>');
                        });
                        $('#city').prop('disabled', false).select2();
                    }
                });
            }
        });
    });
</script>
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/js/modal.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
<script>
	document.querySelector("#image").addEventListener("change", function() {
		var reader = new FileReader();
		reader.onload = function(e) {
			document.querySelector("#preview").setAttribute("src", e.target.result);
			document.querySelector("#preview").style.display = "block";
		};
		reader.readAsDataURL(this.files[0]);
	});
</script>
{{-- <script>
    $('#exampleModal2').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var name = button.data('name')
        var image = button.data('image')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #name').val(name);
        modal.find('.modal-body #image').val(image);
    })
</script> --}}

<script>
    $('#modaldemo9').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget)
        var id = button.data('id')
        var name = button.data('name')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #name').val(name);
    })
</script>








<script>
	$(document).ready(function() {
	  $('#exampleModal2').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget) 
		var id = button.data('id')
		var name = button.data('name')
		var image = button.data('image')
		var modal = $(this)
		modal.find('.modal-body #id').val(id)
		modal.find('.modal-body #name').val(name)
		modal.find('.modal-body #image').attr('src', image)
	  })
	});
  </script>

  
@endsection
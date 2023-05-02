@extends('layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection

@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">الاقسام /</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">نوع العقار</span>
						</div>
					</div>
			
				</div>
				<!-- breadcrumb -->
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
							
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="wd-10p border-bottom-0">#</th>
												<th class="wd-15p border-bottom-0">اسم المستخدم</th>                                           
												<th class="wd-15p border-bottom-0"> هاتف المستخدم</th>
												<th class="wd-20p border-bottom-0"> البريد الاكتروني</th>
                                                <th class="wd-18p border-bottom-0"> اسم الفاعليه</th>
                                                <th class="wd-10p border-bottom-0"> سعر الفاعليه</th>
												<th class="wd-15p border-bottom-0">العمليات</th>

											</tr>
										</thead>
										<tbody>

											@php
												$i=0;
											@endphp

											@foreach ($book as $bok)
											@php
                                         	$i++;
                                           @endphp
											<tr>
											    <td>{{$i}}</td>
												<td>{{$bok->name}}</td>
												<td>{{$bok->phone}}</td>
												<td>{{$bok->email}}</td>
                                                <td>{{$bok->trip->name}}</td>
												<td>{{$bok->trip->price}}</td>
												<td>
													<div style="display: flex;">
														<form action="{{ route('book.unedit',$bok->id) }}"  method="POST">
														    {{ method_field('post') }}
                                                            {{ csrf_field() }}
															<button class="btn btn-outline-success btn-sm"
															
																data-target="#edit_trip">الغاء الحجز</button>
														</form>
															{{-- {{ route('detalis.Trip',$item->id) }} --}}

															<form action="{{ route('detalis.Trip',$bok->trip_id) }}">
																@csrf
																<button class="btn btn-outline-success btn-sm"
																 {{-- name="id"
																	value={{ $trip->id }} data-toggle="modal" --}}
																	data-target="#edit_trip">الفاعليه</button>
															</form>
												
														<button class="btn btn-outline-danger btn-sm mr-1"
															data-id="{{ $bok->id }}" data-name="{{ $bok->name }}"
															data-toggle="modal" data-target="#modaldemo9">حذف
														</button>
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
              
					<div class="modal" id="modaldemo8">
						<div class="modal-dialog" role="document">
							<div class="modal-content modal-content-demo">
								<div class="modal-header">
									<h6 class="modal-title">اضافة مقال</h6><button aria-label="Close" class="close" data-dismiss="modal"
										type="button"><span aria-hidden="true">&times;</span></button>
								</div>
								<div class="modal-body">
									<form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
										{{ csrf_field() }}
				
										<div class="form-group">
											<label for="exampleInputEmail1">عنوان المقال</label>
											<input type="text" class="form-control" id="title" name="title">
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">تفاصيل المقال</label>
											<input type="text" class="form-control" id="content" name="content">
										</div>
										<div class="form-group">
											<label for="image">تحميل صوره للمقال</label>
											<div class="custom-file">
												<input type="file" class="custom-file-input" id="image" name="image">
												<label class="custom-file-label" for="image">اختار صوره</label>
											</div>
											<img src="#" id="preview" style="display: none; max-width: 200px; max-height: 200px;">
										</div>
				
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
        <h5 class="modal-title" id="exampleModalLabel">تعديل القسم</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route("blogs.update") }}" method="post" enctype="multipart/form-data">
			
			{{ csrf_field() }}
			<input type="hidden" name="id" id="id" value="">
			<div class="form-group">
				<label for="recipient-title" class="col-form-label">اسم القسم</label>
				<input class="form-control" name="title" id="title" type="text">
			</div>
			<div class="form-group">
				<label for="recipient-title" class="col-form-label">وصف المقال</label>
				<input class="form-control" name="content" id="content" type="text">
			</div>
			<div class="form-group">
				<label for="recipient-title" class="col-form-label">صوره المقال</label>
				<input class="form-control" name="image" id="image" value="image" type="file">
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
							<h6 class="modal-title">حذف القسم</h6><button aria-label="Close" class="close" data-dismiss="modal"
								type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<form action="{{ route("book.destroy") }}"method="post">
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
        var title = button.data('title')
        var image = button.data('image')
        var modal = $(this)
        modal.find('.modal-body #id').val(id);
        modal.find('.modal-body #title').val(title);
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
		var content = button.data('content')
		var image = button.data('image')
		var modal = $(this)
		modal.find('.modal-body #id').val(id)
		modal.find('.modal-body #name').val(name)
		modal.find('.modal-body #content').val(content)
		modal.find('.modal-body #image').attr('src', image)
	  })
	});
  </script>
@endsection
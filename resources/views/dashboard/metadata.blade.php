


<!DOCTYPE html>
<html>
<head>
	<title>Import Excel Ke Database Dengan Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container pt-4">
		<center class="mb-5">
			<h4>Import Excel Ke Database Dengan Laravel</h4>
			{{-- <h5><a target="_blank" href="https://www.malasngoding.com/">www.malasngoding.com</a></h5> --}}
		</center>

		{{-- notifikasi form validasi --}}
		@if ($errors->has('file'))
		<span class="invalid-feedback" role="alert">
			<strong>{{ $errors->first('file') }}</strong>
		</span>
		@endif

		{{-- notifikasi sukses --}}
		@if ($sukses = Session::get('sukses'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>{{ $sukses }}</strong>
		</div>
		@endif

		<div class="row">

			<div class="col-2">
				<button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#importExcel">
					IMPORT EXCEL
				</button>
			</div>

			<!-- Import Excel -->
			<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<form method="post" action="/metadata/import_metadata" enctype="multipart/form-data">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Import Excel</h5>
							</div>
							<div class="modal-body">

								{{ csrf_field() }}

								<label>Pilih file excel</label>
								<div class="form-group">
									<input type="file" name="file" required="required">
								</div>

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Import</button>
							</div>
						</div>
					</form>
				</div>
			</div>


			<div class="col-2">
				<a href="/siswa/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
			</div>

			<div class="col-4 ml-auto mr-3 d-flex">
				<button type="button" class="btn btn-primary my-3" onclick="price()">
					Price +
				</button>
				<input id="total" class="form-control my-3 ml-2 col-9" style=" vertical-align: middle;" type="text" placeholder="total price" value="" readonly>
			</div>
		</div>
		<form action="metadata/price" method="post" id="submit">
            @csrf
			<table class='table table-bordered' id="logo-table">
				<thead>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Volume</th>
						<th>Material</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
					@php $i=1 @endphp
					@foreach($metadata as $index => $s)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{$s->entity_name}}</td>
						<td>{{$s->entity_volume}}</td>
						<td>{{$s->material}}</td>
						<td><div class="form-check d-flex">
							<input type="number" value="{{ $s->price }}" name="price-{{ $s->id }}" id="price-{{ $s->id }}">
							<input onclick="checking({{ $s->id }})" class="ml-3" style="width: 30px; height:30px" type="checkbox" value="true" name="{{ $s->id }}" id="checked-{{ $s->id }}">
						</div></td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</form>
        {{-- {{ $metadata->links() }} --}}
	</div>


	<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script>
        var table = $('#logo-table').DataTable({
            searching:false,
            info:false
            });
        // var data = {};
        // var datas = [];
        // function checking(id) {
        //     if ($('#checked-' + id).prop('checked') == true) {
        //         var value = $('#price-' + id).val();
        //         data = {
        //             name: 'price-' + id,
        //             value: value
        //         };
        //         datas.push(data);
        //         console.log(datas);
        //     } else {
        //         alert('nah');
        //     }
        // }
        function price() {
            var data = {};
            var datas = [];
            var data = table.$('input:checkbox').serializeArray();
            data.forEach(check => {
                var value = $('#price-' + check.name).val();
                data = {
                    id: check.name,
                    value: value
                };
                datas.push(data);
            });
            $.ajax({
                type: "post",
                url: "/metadata/price",
                data: {
                    data: datas,
                    _token: '{{ csrf_token() }}'
                },
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    $('#total').val('$ ' + response);
                }
            });
        }
    </script>

</body>

</html>
<html>

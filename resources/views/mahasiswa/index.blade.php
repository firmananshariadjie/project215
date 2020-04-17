@extends('layout.admin')

@section('content')

<table class="table table-bordered mt-3">
	<thead>
		<tr>
			<th>No</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Jurusan</th>
		</tr>
	</thead>
	<tbody>

		@foreach($data as $mhs)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $mhs->nim }}</td>
			<td>{{ $mhs->nama }}</td>
			<td>{{ $mhs->jurusan }}</td>
		</tr>
		@endforeach

	</tbody>
</table>


@endsection

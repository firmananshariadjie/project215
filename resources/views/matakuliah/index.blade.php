@extends('layout.admin')

@section('content')

<table class="table table-bordered mt-3">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Jumlah SKS</th>
			<th>Dosen</th>
		</tr>
	</thead>
	<tbody>

		@foreach($data as $mhs)
		<tr>
			<td>{{ $loop->iteration }}</td>
			<td>{{ $mhs->nama }}</td>
			<td>{{ $mhs->jml_sks }}</td>
			<td>{{ $mhs->dosen }}</td>
		</tr>
		@endforeach

	</tbody>
</table>


@endsection

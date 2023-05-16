@extends('layout.template')

<!-- START DATA -->
@section('content')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
      <form class="d-flex" action="{{url('data_penduduk')}}" method="get">
          <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
          <button class="btn btn-secondary" type="submit">Cari</button>
      </form>
    </div>
    
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
      <a href='{{url('data_penduduk/create')}}' class="btn btn-primary">+ Input Data Penduduk</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-0">No</th>
                <th class="col-md-1">NIK</th>
                <th class="col-md-2">Nama</th>
                <th class="col-md-2">Jenis Kelamin</th>
                <th class="col-md-2">Tanggal Lahir</th>
                <th class="col-md-1">Provinsi</th>
                <th class="col-md-2">Kota</th>
                <th class="col-md-3">Alamat</th>
                <th class="col-md-1">RT</th>
                <th class="col-md-1">RW</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = $data->firstItem()?>
            @foreach ($data as $item)
            <tr>
                <td>{{$i}}</td>
                <td>{{$item->NIK}}</td>
                <td>{{$item->Nama}}</td>
                <td>{{ $item->{'Jenis Kelamin'} }}</td>
                <td>{{ $item->{'Tanggal Lahir'} }}</td>
                <td>{{$item->Provinsi}}</td>
                <td>{{$item->Kota}}</td>
                <td>{{$item->Alamat}}</td>
                <td>{{$item->RT}}</td>
                <td>{{$item->RW}}</td>
            </tr>   
            <?php $i++?>
            @endforeach
        </tbody>
    </table>
   {{$data->withQueryString()->links()}}
</div>
<!-- AKHIR DATA -->
@endsection

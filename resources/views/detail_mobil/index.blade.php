@extends('layouts.layout')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i>Detail Mobil</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <a class="btn btn-outline-primary" href="{{ route('detail_mobil.create') }}"><i class="fa fa-plus-square"></i>Tambah</a>
              <br>
              <br>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Nomer</th>
                      <th>Nama Mobil</th>
                      <th>Warna</th>
                      <th>Transmisi</th>
                      <th>Varian</th>
                      <th>Cakupan Mesin</th>
                      <th>Penumpang</th>
                      <th>Kilometer</th>
                      <th>Tahun Keluar</th>
                      <th>Harga</th>
                      <th>Deskripsi</th>
                      <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                                <?php $nomor = 1; ?>
                        @php $no = 1; @endphp
                        @foreach($a as $data)
                                <tr>
                                  <td>{{ $no++ }}</td>
                                  <td>{{ $data->Mobil->nama }}</td>
                                  <td>{{ $data->warna }}</td>
                                  <td>{{ $data->transmisi }}</td>
                                  <td>{{ $data->varian }}</td>
                                  <td>{{ $data->cakupan_mesin }} cc</td>
                                  <td>max : {{ $data->penumpang }} orang</td>
                                  <td>{{ $data->kilometer }} Km/jam</td>
                                  <td>{{ $data->tahun_keluar }}</td>
                                  <td><?php echo 'Rp.'. number_format($data->harga)?></td>
                                  <td>{!! $data->deskripsi !!}</td>
                          
                        <td>
                            <a class="btn btn-warning" href="{{ route('detail_mobil.edit',$data->id) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('detail_mobil.destroy',$data->id) }}">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">

                        <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                      
                                </tr>
                                @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection

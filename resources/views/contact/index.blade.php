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
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>No</th>
                      <th>Alamat</th>
                      <th>Negara</th>
                      <th>No hp</th>
                      <th>Email</th>
                      <th>Link Map</th>
                      <th>Link Facebook</th>
                      <th>Link Twitter</th>
                      <th>Link Instagram</th>
                      <th>Link Youtube</th>
                    </thead>
                    <tbody>
                                <?php $nomor = 1; ?>
                        @php $no = 1; @endphp
                        @foreach($a as $data)
                                <tr>
                                  <td>{{ $no++ }}</td>
                                  <td>{{ $data->alamat }}</td>
                                  <td>{{ $data->negara }}</td>
                                  <td>{{ $data->no_hp }}</td>
                                  <td>{{ $data->email }}</td>
                                  <td>{{ $data->map }}</td>
                                  <td>{{ $data->facebook }}</td>
                                  <td>{{ $data->twitter }}</td>
                                  <td>{{ $data->instagram }}</td>
                                  <td>{{ $data->youtube }}</td>
                                </tr>
                    </tbody>
                  </table>
                  <br>
                  &nbsp&nbsp<div class="btn-group">
                <a class="btn btn-primary" href="{{ route('contact.create') }}"><i class="fa fa-lg fa-plus"></i></a>
                <a class="btn btn-warning" href="{{ route('contact.edit',$data->id) }}"><i class="fa fa-lg fa-edit"></i></a>
                    <form method="post" action="{{ route('contact.destroy',$data->id) }}">
                          <input name="_token" type="hidden" value="{{ csrf_token() }}">
                          <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger"><i class="fa fa-lg fa-trash"></i></button>
                      </form>
              </div>
              <br>
              <br>
              @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection

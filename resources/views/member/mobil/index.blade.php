<div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <a class="btn btn-outline-primary" href="{{ route('mobil.create') }}"><i class="fa fa-plus-square"></i>Tambah</a>
              <br>
              <br>
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Nomer</th>
                      <th>Gambar</th>
                      <th>Nama Mobil</th>
                      <th>Merk Mobil</th>
                      <th>Tipe Mobil</th>
                      <th>Nama Penjual</th>
                      <th>Nama User</th>
                      <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                                <?php $nomor = 1; ?>
                        @php $no = 1; @endphp
                        @foreach($a as $data)
                                <tr>
                                  <td>{{ $no++ }}</td>
                                  <td><img src="{{asset('/img/'.$data->gambar.'')}} " width="70" height="70"></td>
                                  <td>{{ $data->nama }}</td>
                                  <td>{{ $data->Merk->nama }}</td>
                                  <td>{{ $data->tipe }}</td>
                                  <td>{{ $data->Member->nama }}</td>
                                  <td>{{ Auth::user()->name }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('mobil.edit',$data->id) }}">Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('mobil.destroy',$data->id) }}">
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
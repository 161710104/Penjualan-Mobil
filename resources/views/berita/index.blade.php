@extends('layouts.layout')
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Data Table</h1>
          <p>Table to display analytical data effectively</p>
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
              <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#largeModal"><i class="fa fa-plus-square"></i>Tambah</button>
              <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
              <br>
              <br>
                <div class="table-responsive">
                  <table class="table" id="myTable">
                    <thead class=" text-primary">
                      <th>Nomer</th>
                      <th>Gambar</th>
                      <th>Judul</th>
                      <th>Isi</th>
                      <th>Tanggal Rilis</th>
                      <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                                <?php $nomor = 1; ?>
                        @php $no = 1; @endphp
                        @foreach($a as $data)
                                <tr>
                                  <td>{{ $no++ }}</td>
                                  <td><img src="{{asset('/img/'.$data->gambar.'')}} " width="70" height="70"></td>
                                  <td>{{ $data->judul }}</td>
                                  <td>{!! $data->isi !!}</td>
                                  <td>{{ $data->created_at }}</td>
                                  <td>
                                <td>
                            <a class="btn btn-warning" href="{{ route('berita.edit',$data->id) }}"><span class="fa fa-pencil"></span></a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('berita.destroy',$data->id) }}">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">

                        <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                      
                                </tr>
                                @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </td>
  </tr>
</tbody>
</table>
   <script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</div>
</div>
</div>
</div>
</main>
@endsection



<!-- ------------------------------------------Berita Create-------------------------------------------------------------------------->
<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #009688">
              <h5 class="modal-title" id="largeModalLabel" style="color: white">Large Modal</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal form-label-left" action="{{ route('berita.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="form-group {{ $errors->has('gambar') ? ' has-error' : '' }}">
                          <label class="control-label col-md-3 col-sm-3 col-xs-3">Gambar</label>
                          <div class="col-md-9 pr-1">
                          <input type="file" name="gambar" class="form-control" required="" style="background-color: #0000">
                            @if ($errors->has('gambar'))
                              <span class="help-block">
                                <strong>{{ $errors->first('gambar') }}</strong>
                              </span>
                          @endif
                          </div>
                        </div>


              <div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Judul Berita</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="judul" class="form-control"  required>
                          @if ($errors->has('judul'))
                            <span class="help-block">
                              <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>

                      <div class="form-group {{ $errors->has('isi') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Isi Berita</label>
                        <div class="col-md-9 col-sm-9 col-xs-9">
                          <textarea name="isi" class="ckeditor" required="">
                          @if ($errors->has('isi'))
                            <span class="help-block">
                              <strong>{{ $errors->first('isi') }}</strong>
                            </span>
                        @endif
                        </textarea>
                        </div>
                      </div>


                   <div class="form-group">
                        <div class="col-md-9 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
        </div>
      </div>
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
              <form class="form-horizontal form-label-left" action="{{ route('mobil.store') }}" method="post" enctype="multipart/form-data">
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


              <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Mobil</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="nama" class="form-control"  required>
                          @if ($errors->has('nama'))
                            <span class="help-block">
                              <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>


                      <div class="form-group {{ $errors->has('merk_id') ? ' has-error' : '' }}">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Daftar Merk</label>
                      <div class="col-md-9 col-sm-9 col-xs-9">
                        <select name="merk_id" class="form-control">
                          @foreach($a as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                           @endforeach
                        </select>
                          @if ($errors->has('merk_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('merk_id') }}</strong>
                            </span>
                        @endif
                    </div>
                  </div>

                  <div class="form-group {{ $errors->has('tipe') ? ' has-error' : '' }}">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Tipe</label>
                        <div class="col-md-9 pr-1">
                          <input type="text" name="tipe" class="form-control"  required>
                          @if ($errors->has('tipe'))
                            <span class="help-block">
                              <strong>{{ $errors->first('tipe') }}</strong>
                            </span>
                        @endif
                        </div>
                      </div>



                  <div class="form-group {{ $errors->has('member_id') ? ' has-error' : '' }}">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Nama Penjual</label>
                      <div class="col-md-9 col-sm-9 col-xs-9">
                        <select name="member_id" class="form-control">
                          @foreach($b as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                           @endforeach
                        </select>
                          @if ($errors->has('member_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('member_id') }}</strong>
                            </span>
                        @endif
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
</div>
</div>
</main>

@endsection
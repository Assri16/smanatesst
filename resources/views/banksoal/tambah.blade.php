@extends('layout.app')

       
@section('content')

<div class="container">
            <h2>Tambah Soal</h2><br/>
            </b>
                    <div class="card-body">
                        <a href="{{ url('soal') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</button></a>
                        <br />
                        <br />
                    </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
            @endif
            <form method="post" action="{{url('soal')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="form-group col-md-9">
                        <label for="soal">Soal</label>
                        <textarea name="soal"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="form-group col-md-4">
                        <label for="id_lvsoal">Level Soal</label>
                         <select name="id_lvsoal">
                            @foreach($lvsoal as $level)
                            <option value="{{$level->id}}">{{$level->lvsoal}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="form-group col-md-4">
                        <label for="image">Pilih Gambar</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-success" style="margin-left:38px">Tambah</button>
                </div>
            </div>
            </form>
        </div>
@endsection
@section('js')
<script>
   var soal = document.getElementById("soal");
     CKEDITOR.replace( 'soal' );
   CKEDITOR.config.autoParagraph = false;
</script>
@endsection
@extends('layout.app')

       
@section('content')

<div class="container">
            <h2>Tambah Ujian</h2><br/>
            </b>
                    <div class="card-body">
                        <a href="{{ url('ujian') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</button></a>
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
            <form method="post" action="{{url('ujian')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="id_namaujian">Jenis Ujian</label>
                        <select name="id_namaujian" class="form-control">
                            @foreach($namaujian as $nu)
                            <option value="{{$nu->id}}">{{$nu->namaujian}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="ujian">Nama Ujian</label>
                        <input type="text" class="form-control" name="ujian">
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="kodeujian">Kode Ujian</label>
                        <input type="texts" class="form-control" name="kodeujian">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="waktu_pengerjaan">Waktu Pengerjaan Ujian</label>
                        <i class='fa fa-question-circle' data-toggle='tooltip' title='dalam menit'></i>
                        <input type="number" class="form-control" name="waktu_pengerjaan">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="is_open">Status Ujian</label>
                        <select name="is_open" id="" class="form-control">
                       <option 
                            value="0">Tutup</option>
                       <option 
                            value="1">Buka</option>
                        </select>
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
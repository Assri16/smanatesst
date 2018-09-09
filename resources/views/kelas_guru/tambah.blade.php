@extends('layout.app')

       
@section('content')

<div class="container">
            <h2>Tambah Kelas dan Mata Pelajaran Guru</h2><br/>
            </b>
                    <div class="card-body">
                        <a href="{{ url('kelas_mapel_guru') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</button></a>
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
            <form method="post" action="{{url('kelas_mapel_guru')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="id_kelas">Nama Kelas</label>
                        <select name="id_kelas">
                            @foreach($kelas as $kl)
                            <option value="{{$kl->id}}">{{$kl->nm_kelas}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="id_mapel">Nama Mapel</label>
                        <select name="id_mapel">
                            @foreach($mapel as $mp)
                            <option value="{{$mp->id}}">{{$mp->nm_mapel}}</option>
                            @endforeach
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
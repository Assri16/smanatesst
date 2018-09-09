@extends('layout.app')

       
@section('content')

<div class="container">
            <h2>Edit Mata Pelajaran</h2><br/>
            </b>
                    <div class="card-body">
                        <a href="{{ url('mapel') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</button></a>
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
            <form method="post" action="{{ route('mapel.update', $mapel)}}">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="nm_mapel">Mata Pelajaran</label>
                        <input type="text" class="form-control" id="nm_mapel" name="nm_mapel" value="{{ $mapel->nm_mapel }}">
                    </div>
                </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-success" style="margin-left:38px">Ubah</button>
                </div>
            </div>
            </form>
        </div>
@endsection
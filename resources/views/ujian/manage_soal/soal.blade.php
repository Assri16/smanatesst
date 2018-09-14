@extends('layout.app')
@section('content')

<div class="container">
            <h2>Tambah Soal Untuk Ujian</h2><br/>
            </b>
                    <div class="card-body">
                        <a href="{{ url('ujian') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Kembali</button></a>
                        <br />
                        <br />
                    </div>
                    <section>
        <div>
                            <div class="col-md-6">
                                                           
      </section>
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
            <form method="post" action="{{url('ujian/soal')}}">
                {{csrf_field()}}
                @foreach($ujian as $uj)
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="form-group col-md-9">
                      <input type="hidden" name="id_ujian"  value="{{$uj->id}}">
                    </div>
                </div>
                @endforeach
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="form-group col-md-5">
                        <label for="soal">Pilih Soal</label>
                        <select name="id_soal" id="id_soal" class="form-control">
                            @foreach($banksoal as $sl)
                            <option value="{{$sl->id}}">{{$sl->soal}}</option>
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
            <table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th class="text-center" >-</th>
			<th>Soal</th>
            <th>Level Soal</th>
			<th width="100px" class="text-center">Action</th>
		</tr>
	</thead>
    <tbody>
    <?php $no = 1; ?>
@foreach($ujiansoal as $list)
        <tr>
            <td class="text-center">{!! $no !!}</td>
            <td>{!! $list->soal !!}</td>
            <td>{!! $list->lvsoal !!}</td>
           
        </tr>
        <?php $no++; ?>
@endforeach
    </tbody>
</table>
        </div>
        
@endsection
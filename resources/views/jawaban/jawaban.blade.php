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
                    <h3>Soal : {{$banksoal->soal}}</h3>
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
           <form method="post" action="{{url('soal/jawaban')}}">
                {{csrf_field()}}
                @foreach($banksoal as $soal)
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="form-group col-md-9">
                      <input type="hidden" name="id_soal"  value="{{$banksoal->id}}">
                    </div>
                </div>
                @endforeach
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="form-group col-md-9">
                        <label for="jawaban">Jawaban</label>
                        <textarea name="jawaban"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="form-group col-md-4">
                        <label for="is_benar">Benar/Salah?</label>
                        <select name="is_benar">
                            <option>Pilih Salah Satu</option>
               <option value="1">Benar</option>
               <option value="0">Salah</option>
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
			<th>isi Jawaban</th>
			<th class="text-center">
				<span data-toggle='tooltip' title='jawaban yg benar'>Benar/Salah ?</span> 
			</th>
			<th width="100px" class="text-center">Action</th>
		</tr>
	</thead>
	<tbody>
    <?php $no = 1; ?>
@foreach($banksoal->jawaban as $list)
        <tr>
            <td class="text-center">{!! $fungsi->toAlpha($no) !!}</td>
            <td>{!! $list->jawaban !!}</td>
            <td class="text-center">
                @if($list->is_benar == 1)
                    <span class='label label-success'>dipilih</span>
                @endif
            </td>
            <td class="text-center">
                
            </td>
        </tr>
        <?php $no++; ?>
@endforeach
    </tbody>
</table>
        </div>
        
@endsection
@section('java')
   <script src="{{asset('js/ajaxscript.js')}}"></script>
@endsection
@section('js')
<script>
   var jawaban = document.getElementById("jawaban");
     CKEDITOR.replace( 'jawaban' );
   CKEDITOR.config.autoParagraph = false;
</script>
@endsection
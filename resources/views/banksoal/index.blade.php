@extends('layout.app')
@section('content')
    <section class="content-header">
      <h1>
        Bank Soal
      </h1>
      <br>
      <br>
      <section>
        <div>
                            <div class="col-md-6">
                                                             <a  href="{{action('BanksoalController@create')}}" class="btn btn-success " title="Tambah ">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Tambah
                                </a> 
      </section>
      <br>
      <br>
      <br>
      <section>
        <div class="box-body">
          
        </div>
      </section>
    </section>

 <section>
        <div class="box-body">

    
          <table  id="Banksoal" class="table table-bordered table-striped">
            <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Soal</th>
                                        <th>Jawaban</th>
                                        <th>Level Soal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
  <?php $no=1; ?>
@foreach($soal as $list)
    <tr>
      <td class="text-center">{!! $no !!}</td>
      <td>{!! $list->soal !!}</td>
    <td><span class='label label-success'>
            {!! count($list->jawaban) !!}
          </span>   </td>
      <td>{!! $list->lvsoal->lvsoal !!}</td>
      <td>
                    <a href="{{action('BanksoalController@edit', $list['id'])}}" class="btn btn-warning">Ubah</a>
                    </td>
                    <td>
                    <a  href="{{action('BanksoalController@addjawaban', $list['id'])}}" class="btn btn-success ">
                          Jawaban
                                </a> 
                    </td>
                    <td>
                    <form method="post" action="{{action('BanksoalController@destroy', $list['id'])}}">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button  class="btn btn-danger" type="submit">Hapus</button>
        </form>
                    </td>
    </tr>
    <?php $no++; ?>
@endforeach
  </tbody>
          </table>
        </div>
@endsection
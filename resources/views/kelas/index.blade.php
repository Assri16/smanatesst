@extends('layout.app')
@section('content')
    <section class="content-header">
      <h1>
        Daftar Kelas
      </h1>
      <br>
      <br>
      <section>
        <div>
                            <div class="col-md-6">
                                                             <a  href="{{action('KelasController@create')}}" class="btn btn-success " title="Tambah ">
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

    
          <table  id="kelas" class="table table-bordered table-striped">
            <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Kelas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
  <?php $no=1; ?>
@foreach($kelas as $list)
    <tr>
      <td class="text-center">{!! $no !!}</td>
      <td>{!! $list->nm_kelas !!}</td>
      <td>
                    <a href="{{action('KelasController@edit', $list['id'])}}" class="btn btn-warning">Ubah</a>
                    </td>
                    <td>
                    <form method="post" action="{{action('KelasController@destroy', $list['id'])}}">
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
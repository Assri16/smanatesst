@extends('layout.app')
@section('content')
    <section class="content-header">
      <h1>
        Daftar Kelas dan Mata Pelajaran Guru
      </h1>
      <br>
      <br>
      <section>
        <div>
                            <div class="col-md-6">
                                                             <a  href="{{action('KelasGuruController@create')}}" class="btn btn-success " title="Tambah ">
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
                                        <th>Mata Pelajaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
  <?php $no=1; ?>
@foreach($kelasmapel as $list)
    <tr>
      <td class="text-center">{!! $no !!}</td>
      <td>{{ $list->nm_kelas }}</td>
      @foreach($mapelkelas as $mapel)
      <td>{{ $mapel->nm_mapel }}</td>
       @endforeach
      <td>
                    <a href="{{action('KelasGuruController@edit', $list['id'])}}" class="btn btn-warning">Ubah</a>
                    </td>
                    <td>
                    <form method="post" action="{{action('KelasGuruController@destroy', $list['id'])}}">
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
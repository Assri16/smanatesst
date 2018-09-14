@extends('layout.app') 
@section('content')
    <meta name="_token" content="{!! csrf_token() !!}"/>
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

    
          <table  id="bank" class="table table-bordered table-striped">
            <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Soal</th>
                                        <th>Jawaban</th>
                                        <th>Level Soal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                
          </table>
        </div>
      </section>
<script type="text/javascript">

$.ajaxSetup({
     headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
  });

        var oTable = $('#bank').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ url("datatable/soal") }}',
                method: "POST",
            },
            columns: [
                { data: "DT_Row_Index", name: "DT_Row_Index"},
                {data: 'soal', name: 'soal'},  
                {data: 'jawaban', name: 'jawaban'},
                {data: 'levelsoal', name: 'levelsoal'},
                {data: 'action', name: 'action' , orderable: false , searchable: false},
            ],
        });
</script>
@endsection
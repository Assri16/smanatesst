@extends('layout.app')
@section('content')
<div class="container">
  <h2>Ujian Yang Diikuti</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-success btn-lg" id="myBtn">Ikuti Ujian</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content" id="form_ikut_ujian">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Masukkan Kode Ujian</h4>
        </div>
           <div id="pesan"></div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="kodeujian"><span class="glyphicon glyphicon-user"></span> Kode Ujian</label>
              <input type="text" class="form-control" id="kodeujian" placeholder="Masukkan Kode Ujian">
            </div>
              <button type="submit" id="simpan" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span>Ikuti Ujian</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
      
    </div>
  </div> 
</div>
   <table  id="Banksoal" class="table table-bordered table-striped">
            <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th>Nama Ujian</th>
                                        <th>Jenis Ujian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                               
          </table>
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
$('#simpan').click(function(){
  $('#pesan').removeClass('alert alert-danger animated shake').html('');
kodeujian = $('#kodeujian').val();

form_data ={
  kodeujian : kodeujian,
  _token : '{!! csrf_token() !!}'
}
$('#simpan').attr('disabled', 'disabled');
  $.ajax({
    url : '{{ route("backend.siswaujian.do_ikut_ujian") }}',
    data : form_data,
    type : 'post',
    error:function(xhr, status, error){
      $('#simpan').removeAttr('disabled');
    $('#pesan').addClass('alert alert-danger animated shake').html('<b>Error : </b><br>');
        datajson = JSON.parse(xhr.responseText);
        $.each(datajson, function( index, value ) {
          $('#pesan').append(index + ": " + value+"<br>")
          });
    },
    success:function(ok){
      $('#simpan').removeAttr('disabled');
      if(ok == '0'){
        pesan_error = '<h3> kode ujian salah atau ujian sudah ditutup! </h3>';
        $('#pesan').html('<div class="alert alert-danger animated shake">'+pesan_error+'</div>');
      }else if(ok == '2'){
        pesan_error = '<h3> anda sudah ada dalam ujian ini! </h3>';
        $('#pesan').html('<div class="alert alert-danger animated shake">'+pesan_error+'</div>');
      }else{
        // ok =1 
        $('#form_ikut_ujian').hide();
        pesan_sukses = '<h3> data telah tersimpan! </h3>';
        $('#pesan').html('<div class="alert alert-success animated fadeInDown">'+pesan_sukses+'</div>');
        
        //event on hidden
        $('#myModal').on('hidden.bs.modal', function (e) {
          window.location.reload();
        });       
      }
    }
  })
})



$('#pesan').click(function(){
  $('#pesan').fadeOut(function(){
    $('#pesan').html('').show().removeClass('alert alert-danger');
  });
})
</script>
@endsection
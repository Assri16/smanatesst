@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="role_id" class="col-md-4 control-label">Hak Akses</label>

                            <div class="col-md-6">
                                <select  onchange="yesnoCheck(this);" name="role_id" id="" class="form-control">
                       <option 
                            value="1">Bg.Akademik</option>
                       <option 
                            value="2">Guru</option>
                            <option 
                            value="3">Siswa</option>
                        </select>
                            </div>
                        </div>
                         <div class="form-group" id="id_kemampuansiswa" style="display: none;">
                            <label for="id_kemampuansiswa" class="col-md-4 control-label">Kemampuan Siswa</label>

                            <div class="col-md-6">
                                <select  name="id_kemampuansiswa" id="" class="form-control">
                       <option 
                            value="1">Tinggi</option>
                            <option 
                            value="2">Sedang</option>
                            <option 
                            value="3">Rendah</option>
                        </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function yesnoCheck(that) {
        if (that.value == "3") {
          document.getElementById("id_kemampuansiswa").style.display = "block";

        } else {
           document.getElementById("id_kemampuansiswa").style.display = "none";
        }
    }
</script>
@endsection


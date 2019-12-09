@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <div style="text-align:center">
                        <div style="display: inline-block"><img src="https://res.cloudinary.com/dsobei3hp/image/upload/v1575541418/hoithi/logovuong_x7frmn.gif" style="width: 30%;"></div><br><br>
                        <h6>HỘI THI AN TOÀN VỆ SINH VIÊN GIỎI</h6>
                        <h6>TOÀN QUỐC NGÀNH XÂY DỰNG</h6>
                    </div>
                    <hr>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="email" style="font-weight: bold;">{{ __('Địa chỉ email') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="password" style="font-weight: bold;">{{ __('Mật khẩu') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="width:  100%;font-weight: bold">
                                    {{ __('ĐĂNG NHẬP') }}
                                </button>
                            </div>
                            <!-- <div class="col-md-12" style="margin-top: 35px; text-align: center;">
                                <div>
                                    Bạn chưa có tài khoản ? <a style="font-weight: bold" href="{{ route('register') }}"> Đăng ký</a>
                                </div>
                            </div> -->
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
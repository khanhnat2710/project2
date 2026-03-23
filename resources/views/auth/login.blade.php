@extends('layouts.app')

@section('content')

    <!-- Modal Login -->
    <div class="modal fade" id="loginModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3">

                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold">Đăng nhập</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <!-- FORM CHUẨN LARAVEL -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email"
                                   name="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   value="{{ old('email') }}"
                                   required>

                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Mật khẩu</label>
                            <input type="password"
                                   name="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   required>

                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" name="remember" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Ghi nhớ</label>
                        </div>

                        <button type="submit" class="btn btn-success w-100">
                            Đăng nhập
                        </button>

                        @if (Route::has('password.request'))
                            <div class="text-center mt-2">
                                <a href="{{ route('password.request') }}">
                                    Quên mật khẩu?
                                </a>
                            </div>
                        @endif
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection

@if ($errors->any())
    <script>
        var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
        loginModal.show();
    </script>
@endif

@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h2>Profil</h2>
                </div>
                <div class="card-body">
                    <form action="{{ url('profile/' .$agen->id) }}" method="post" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        @method("PUT")
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td>
                                        <div class="input-group">
                                            {{-- <span class="input-group-text">Name</span> --}}
                                            <input type="text" id="name" name="name" aria-label="name" class="form-control" value="{{$agen->name}}">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>
                                        <div class="input-group">
                                            {{-- <span class="input-group-text">Email</span> --}}
                                            <input type="text" id="email" name="email" aria-label="email" class="form-control" value="{{$agen->email}}">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Upload Avatar</th>
                                    <td>
                                        <div class="input-group">
                                            {{-- <span class="input-group-text">Upload Avatar</span> --}}
                                            <input id="avatar" type="file" class="form-control" name="avatar" accept=".png,.jpg,.jpeg">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Old Password</th>
                                    <td>
                                        <div class="input-group">
                                            {{-- <span class="input-group-text">Old Password</span> --}}
                                            <input type="password" id="password" name="password" aria-label="password" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>New Password</th>
                                    <td>
                                        <div class="input-group">
                                            {{-- <span class="input-group-text">New Password</span> --}}
                                            <input type="password" id="new_password" name="new_password" aria-label="new_password" class="form-control">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <td>
                                        <div class="input-group">
                                            <div class="btn btn-success btn-sm"><i class="bi bi-eye-slash" id="togglePassword"> Toggle Password </i></div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-success btn-block">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");
        const passwordConfirm = document.querySelector("#new_password");
    
        togglePassword.addEventListener("click", function (e) {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });
    
        togglePassword.addEventListener("click", function (e) {
            // toggle the type attribute
            const type = passwordConfirm.getAttribute("type") === "password" ? "text" : "password";
            passwordConfirm.setAttribute("type", type);
            
            // toggle the icon
            // this.classList.toggle("bi-eye");
        });
    
        // prevent form submit
        // const form = document.querySelector("form");
        // form.addEventListener('submit', function (e) {
        //     e.preventDefault();
        // });
    </script>
@endsection
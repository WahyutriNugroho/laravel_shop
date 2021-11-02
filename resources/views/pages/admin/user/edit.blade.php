@extends('layouts.admin')

@section('title')
    Store Dashboard
@endsection

@section('content')
<!-- Section Content -->
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Edit User</h2>
            <p class="dashboard-subtitle">
                Edit User
            </p>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card">
                        <form action="{{route('user.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Name user</label> <br>
                                            <input type="text" name="name" class="form-control" required value="{{$item->name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Email user</label>
                                            <input type="email" name="email" class="form-control" required value="{{$item->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Password user</label>
                                            <input type="password" name="password" class="form-control" >
                                            <small>kosongan jika tidak akan diganti</small>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Roles user</label>
                                            <select name="roles" class="form-control" required>
                                                <option value="{{$item->roles}}">Tidak Diganti</option>
                                                <option value="ADMIN">ADMIN</option>
                                                <option value="USER">USER</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col text-right">
                                        <button class="btn btn-success px-5" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

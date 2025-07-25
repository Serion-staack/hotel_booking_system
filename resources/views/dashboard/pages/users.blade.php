@extends('dashboard.layouts.app')
@section('title' , 'Users')
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6 col-12">
                        <h2>User Cards</h2>
                    </div>
                    <div class="col-sm-6 col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="iconly-Home icli svg-color"></i></a></li>
                            <li class="breadcrumb-item">Users</li>
                            <li class="breadcrumb-item active">User Cards</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="toast" role="alert" aria-live="assertive" style="position: absolute; right: 2px; bottom: 2px; z-index: 2"
             aria-atomic="true">
            <div class="toast-header">
                <img src="..." class="rounded mr-2" alt="...">
                <strong class="mr-auto">Bootstrap</strong>
                <small>11 mins ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="toast-body">
                {{ session('success') }}
            </div>
        </div>
        @if(session('success'))

        @endif
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                @foreach($allUsers as $user)
                    <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                        <div class="card social-profile">
                            <div class="card-body">
                                <div class="social-img-wrap">
                                    <div class="social-img"><img src="../assets/images/other-images/profile.png" alt="profile"/></div>
                                    <div class="edit-icon">
                                        <svg>
                                            <use href="https://admin.pixelstrap.net/admiro/assets/svg/icon-sprite.svg#profile-check"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="social-details">
                                    <h5 class="mb-1"><a href="social-app.html">{{$user->name}}</a></h5><span class="f-light">{{$user->email}}</span>

                                    <div class="row pt-2">
                                        <div class="col-lg-6">
                                            <a href="{{route('users.edit',$user->id)}}" class="btn btn-primary">Edito</a>

                                               {{-- <button type="button" class="btn btn-primary w-full">Edit</button>--}}

                                        </div>

                                        <div class="col-lg-6">
                                            <form action="{{ route('users.delete', $user->email) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger w-full">Delete</button>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                @endforeach


            </div>
        </div>
    </div>
@endsection

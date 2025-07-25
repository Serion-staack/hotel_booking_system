@extends('dashboard.layouts.app')

@section('title','Edito User')

@section('content')

   {{-- @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="card-body">
            <div class="row mb-2">
                <div class="profile-title d-flex gap-3">
                    <img class="img-70 rounded-circle" alt="" src="{{ $user->image_path ? asset('storage/' . $user->image_path) : asset('assets/images/user/7.jpg') }}"/>

                    <div class="flex-grow-1">
                        <h3 class="mb-1">{{ $user->first_name }} {{ $user->last_name }}</h3>
                        <p>{{ $user->role->name ?? 'No Role' }}</p>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Bio</label>
                <textarea class="form-control" rows="5" name="bio">{{ old('bio', $user->bio) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Email-Address</label>
                <input class="form-control" name="email" value="{{ old('email', $user->email) }}"/>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input class="form-control" name="password" type="password" placeholder="Leave blank to keep current"/>
            </div>

            <div class="mb-3">
                <label class="form-label">Website</label>
                <input class="form-control" name="website" value="{{ old('website', $user->website) }}"/>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input class="form-control" name="first_name" value="{{ old('first_name', $user->first_name) }}"/>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Last Name</label>
                        <input class="form-control" name="last_name" value="{{ old('last_name', $user->last_name) }}"/>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <input class="form-control" name="address" value="{{ old('address', $user->address) }}"/>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4">
                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <input class="form-control" name="city" value="{{ old('city', $user->city) }}"/>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="mb-3">
                        <label class="form-label">Postal Code</label>
                        <input class="form-control" name="postal_code" value="{{ old('postal_code', $user->postal_code) }}"/>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="mb-3">
                        <label class="form-label">Country</label>
                        <select class="form-control btn-square" name="country">
                            <option value="">--Select--</option>
                            @foreach(['Germany', 'Canada', 'Usa', 'Aus'] as $country)
                                <option value="{{ $country }}" {{ old('country', $user->country) == $country ? 'selected' : '' }}>
                                    {{ $country }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="mb-3">
                        <label class="form-label">Profile Image</label>
                        <input class="form-control" type="file" name="image">
                        @if($user->image_path)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $user->image_path) }}" width="100" alt="Current Image">
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="card-footer text-end mt-3">
                <button class="btn btn-primary" type="submit">
                    {{ $status ?? 'Save' }}
                </button>
            </div>
        </div>
    </form>

    @if($user->image_path)
        <div class="mt-3">
            <img src="{{ asset('storage/' . $user->image_path) }}" width="100" alt="Current Image">


            <form action="{{ route('user.image.delete', $user->id) }}" method="POST"
                  onsubmit="return confirm('A je i sigurt qe deshiron te fshish fotografine?');"
                  class="mt-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Fshi Fotografine</button>
            </form>

        </div>
    @endif--}}


   <div class="container my-4">

       {{-- Session Success Message --}}
       @if(session('success'))
           <div class="alert alert-success">{{ session('success') }}</div>
       @endif

       {{-- Validation Errors --}}
       @if($errors->any())
           <div class="alert alert-danger">
               <ul class="mb-0">
                   @foreach($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif

       <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
           @csrf
           @method('PUT')

           <div class="card shadow-sm">
               <div class="card-header bg-primary text-white d-flex align-items-center gap-3">
                   <img src="{{ $user->image_path ? asset('storage/' . $user->image_path) : asset('assets/images/user/7.jpg') }}"
                        alt="Profile" class="rounded-circle" width="60" height="60">
                   <div>
                       <h5 class="mb-0">{{ $user->first_name }} {{ $user->last_name }}</h5>
                       <small>{{ $user->role->name ?? 'No Role Assigned' }}</small>
                   </div>
               </div>

               <div class="card-body">
                   <div class="mb-3">
                       <label class="form-label">Bio</label>
                       <textarea name="bio" rows="4" class="form-control @error('bio') is-invalid @enderror">{{ old('bio', $user->bio) }}</textarea>
                       @error('bio') <div class="invalid-feedback">{{ $message }}</div> @enderror
                   </div>

                   <div class="row g-3">
                       <div class="col-md-6">
                           <label class="form-label">Email</label>
                           <input name="email" type="email" value="{{ old('email', $user->email) }}" class="form-control @error('email') is-invalid @enderror">
                           @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                       </div>

                       <div class="col-md-6">
                           <label class="form-label">Password</label>
                           <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Leave blank to keep current">
                           @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                       </div>
                   </div>

                   <div class="row g-3 mt-1">
                       <div class="col-md-6">
                           <label class="form-label">First Name</label>
                           <input name="first_name" value="{{ old('first_name', $user->first_name) }}" class="form-control @error('first_name') is-invalid @enderror">
                           @error('first_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                       </div>

                       <div class="col-md-6">
                           <label class="form-label">Last Name</label>
                           <input name="last_name" value="{{ old('last_name', $user->last_name) }}" class="form-control @error('last_name') is-invalid @enderror">
                           @error('last_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                       </div>
                   </div>

                   <div class="row g-3 mt-1">
                       <div class="col-md-6">
                           <label class="form-label">Website</label>
                           <input name="website" value="{{ old('website', $user->website) }}" class="form-control @error('website') is-invalid @enderror">
                           @error('website') <div class="invalid-feedback">{{ $message }}</div> @enderror
                       </div>

                       <div class="col-md-6">
                           <label class="form-label">Address</label>
                           <input name="address" value="{{ old('address', $user->address) }}" class="form-control @error('address') is-invalid @enderror">
                           @error('address') <div class="invalid-feedback">{{ $message }}</div> @enderror
                       </div>
                   </div>

                   <div class="row g-3 mt-1">
                       <div class="col-md-4">
                           <label class="form-label">City</label>
                           <input name="city" value="{{ old('city', $user->city) }}" class="form-control @error('city') is-invalid @enderror">
                           @error('city') <div class="invalid-feedback">{{ $message }}</div> @enderror
                       </div>

                       <div class="col-md-4">
                           <label class="form-label">Postal Code</label>
                           <input name="postal_code" value="{{ old('postal_code', $user->postal_code) }}" class="form-control @error('postal_code') is-invalid @enderror">
                           @error('postal_code') <div class="invalid-feedback">{{ $message }}</div> @enderror
                       </div>

                       <div class="col-md-4">
                           <label class="form-label">Country</label>
                           <select name="country" class="form-select @error('country') is-invalid @enderror">
                               <option value="">-- Select Country --</option>
                               @foreach(['Germany', 'Canada', 'USA', 'Australia'] as $country)
                                   <option value="{{ $country }}" {{ old('country', $user->country) === $country ? 'selected' : '' }}>
                                       {{ $country }}
                                   </option>
                               @endforeach
                           </select>
                           @error('country') <div class="invalid-feedback">{{ $message }}</div> @enderror
                       </div>
                   </div>

                   <div class="mt-4">
                       <label class="form-label">Profile Image</label>
                       <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                       @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror

                       @if($user->image_path)
                           <div class="mt-3">
                               <img src="{{ asset('storage/' . $user->image_path) }}" alt="Profile Image" class="img-thumbnail" width="100">
                           </div>
                       @endif
                   </div>

                   <div class="text-end mt-4">
                       <button type="submit" class="btn btn-primary">
                           <i class="bi bi-save"></i> Update User
                       </button>
                   </div>
               </div>
           </div>
       </form>

       @if($user->image_path)
           <div class="card mt-4">
               <div class="card-body">
                   <h6>Delete Profile Image</h6>
                   <form action="{{ route('user.image.delete', $user->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete the profile image?');">
                       @csrf
                       @method('DELETE')
                       <button type="submit" class="btn btn-sm btn-danger">
                           <i class="bi bi-trash"></i> Delete Image
                       </button>
                   </form>
               </div>
           </div>
       @endif

   </div>
@endsection






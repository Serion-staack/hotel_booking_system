<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
      return view('dashboard.pages.index');
    }
    public function user()
    {
        $users=User::all();
        return view('dashboard.user',compact('users'));

    }
    public function deleteUser($email)
    {
        $user=User::where('email',$email)->first();

        if(!$user)
        {
            return back()->with("error","User not found");
        }

        $user->delete();

        return back()->with("success", "User deleted successfully!");

    }

    public function editUser($id)
    {
        $user=User::findOrFail($id);

        if(!$user)
        {
            return back()->with("error","User not found");
        }

        $fields=
            [
                $user->bio,
                $user->address,
                $user->city,
                $user->postal_code,
                $user->country,
            ];
        $status=collect($fields)->every(fn($field)=>empty($field))? 'Save' : 'Update';

        return view('dashboard.edit-user',compact('user','status'));
    }

    public function updateUser(Request  $request,$id)
    {
        $user=User::findOrFail($id);
        if(!$user)
        {
            return back()->with("error","User not found");
        }
        $request->validate([
            'first_name'  => 'nullable|string|max:255',
            'last_name'   => 'nullable|string|max:255',
            'password'    => 'nullable|string|min:6|confirmed',
            'image'       => 'nullable|image|max:2048',
            'email'       => 'required|email|unique:users,email,' . $id,
            'bio'         => 'nullable|string',
            'address'     => 'nullable|string|max:255',
            'city'        => 'nullable|string|max:255',
            'postal_code' => 'nullable|string|max:20',
            'country'     => 'nullable|string|max:255',
            'website'     => 'nullable|url|max:255',
        ]);

        $data=$request->only([
            'first_name',
            'last_name',
            'email',
            'bio',
            'address',
            'city',
            'postal_code',
            'country',
            'website'
        ]);

        if($request->hasFile('image'))
        {
            $data['image_path']=$request->file('image')->store('images','public');
        }

        $user->update($data);

        return back()->with("success", "User updated successfully!");
    }

    public function deleteUserPhoto($id)
    {
        $user = User::findOrFail($id);

        if(!$user->image_path)
        {
            return back()->with("error","User hasn't any photo");

        }

        if(Storage::disk('public')->exists($user->image_path))
        {
            Storage::disk('public')->delete($user->image_path);

        }

        $data = [ 'image_path' => null,];

        $user->update($data);

        return back()->with("success", "User photo deleted successfully!");

    }


//    public function index()
//    {
//        return view('dashboard.pages.index');
//    }
//
//    public function  users()
//    {
//        $allUsers = User::all();
//        return view('dashboard.pages.users', with([
//                'allUsers' => $allUsers,
//        ]));
//    }
//    public function deleteUser($email)
//    {
//        $user = User::where('email', $email)->first();
//
//        if(!$user)
//        {
//            return redirect()->back()->with('error','User not found');
//        }
//        $user->delete();
//        return redirect()->route('users')->with('success','User deleted successfully');
//    }
//
//    public function editUser($id)
//    {
//        $user = User::findOrFail($id);
//
//        $fields = [
//            $user->bio,
//            $user->address,
//            $user->city,
//            $user->postal_code,
//            $user->country,
//        ];
//
//        $status = collect($fields)->every(fn($field) => empty($field)) ? 'Save' : 'Update';
//
//        return view('dashboard.pages.edit', compact('user', 'status'));
//    }
//
//    public function updateUser(Request $request, $id)
//    {
//        $user = User::findOrFail($id);
//
//        $request->validate([
//            'first_name'  => 'nullable|string|max:255',
//            'last_name'   => 'nullable|string|max:255',
//            'password'    => 'nullable|string|min:6|confirmed',
//            'image'       => 'nullable|image|max:2048',
//            'email'       => 'required|email|unique:users,email,' . $id,
//            'bio'         => 'nullable|string',
//            'address'     => 'nullable|string|max:255',
//            'city'        => 'nullable|string|max:255',
//            'postal_code' => 'nullable|string|max:20',
//            'country'     => 'nullable|string|max:255',
//            'website'     => 'nullable|url|max:255',
//        ]);
//
//        $data = $request->only([
//            'first_name',
//            'last_name',
//            'email',
//            'bio',
//            'address',
//            'city',
//            'postal_code',
//            'country',
//            'website',
//        ]);
//
//        if ($request->filled('password')) {
//            $data['password'] = Hash::make($request->password);
//        }
//
//        if ($request->hasFile('image')) {
//            $data['image_path'] = $request->file('image')->store('images', 'public');
//        }
//
//        $user->update($data);
//
//        return back()->with('success', 'User updated successfully');
//    }
//
//    public function profileUser()
//    {
//        $user = auth()->user();
//        return view('dashboard.pages.profile',compact('user'));
//
//    }
//
//    public function deleteUserImage($id)
//    {
//        $user = User::findOrFail($id);
//        if (!$user->image_path) {
//            return back()->with('error', 'The user has no photo to delete.');
//        }
//
//        try
//        {
//
//            if (Storage::disk('public')->exists($user->image_path))
//            {
//                Storage::disk('public')->delete($user->image_path);
//            }
//
//
//            $user->update(['image_path' => null]);
//
//            return back()->with('success', 'Profile photo deleted successfully.');
//
//        }
//
//        catch (\Exception $e)
//        {
//            return back()->with('error', 'Ann error occurred while deleting the photo.');
//        }
//
//    }


}

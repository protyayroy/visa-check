<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Visa_approve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function distroyApplication(Application $application)
    {
        if (File::exists('documents/' . $application->document)) {
            File::delete('documents/' . $application->document);
        }
        $application->delete();
        return back()->with('success_message', 'Delete successfully.');
    }

    public function distroy(Visa_approve $visa_approve)
    {
        if (File::exists('visa/' . $visa_approve->document)) {
            File::delete('visa/' . $visa_approve->document);
        }
        $visa_approve->delete();
        return back()->with('success_message', 'Delete successfully.');
    }
    public function editApproval(Request $request, $id)
    {
        // Visa_approve::find($id);
        $request->validate([
            'name' => 'required',
            'nationality' => 'required',
            'date_of_birth' => 'required',
            'passport_number' => 'required',
            'confirmation_number' => ' required',
        ]);

        $visa_approve = Visa_approve::find($id);

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            if ($file->isValid()) {
                // DELETE PREVIOUS IMAGE
                if (File::exists('visa/' . $visa_approve->document)) {
                    File::delete('visa/' . $visa_approve->document);
                }
                // GET FULL IMAGE NAME WITH EXTENTION
                $file_full_name = $file->getClientOriginalName();

                // GET IMAGE NAME WITHOUT EXTENSION
                $file_first_name = pathinfo($file_full_name, PATHINFO_FILENAME);

                // GET IMAGE EXTENSION
                $extention = $file->getClientOriginalExtension();

                // TO GET UNIQUE IMAGE NAME
                $unique = Str::random(10);

                // SET UNIQUE IMAGE NAME
                $file_name = $file_first_name . $unique . '.' . $extention;

                // SET IMAGE PATH

                $file->move(public_path('visa'), $file_name);
            }
        } else {
            $file_name = $visa_approve->document;
        }
        $visa_approve = $visa_approve->update([
            'name' => $request->name,
            'nationality' => $request->nationality,
            'date_of_birth' => $request->date_of_birth,
            'passport_number' => $request->passport_number,
            'confirmation_number' => $request->confirmation_number,
            'document' => $file_name
        ]);

        return redirect('admin/visa-approve-list')->with('success_message', 'Update successfully.');
    }

    public function showApproval($id)
    {
        $visa_approve = Visa_approve::find($id);
        return view('admin.application.edit_approval', compact('visa_approve'));
    }

    public function storeApproval(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nationality' => 'required',
            'date_of_birth' => 'required',
            'passport_number' => 'required',
            'confirmation_number' => ' required',
        ]);

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            if ($file->isValid()) {
                // GET FULL IMAGE NAME WITH EXTENTION
                $file_full_name = $file->getClientOriginalName();

                // GET IMAGE NAME WITHOUT EXTENSION
                $file_first_name = pathinfo($file_full_name, PATHINFO_FILENAME);

                // GET IMAGE EXTENSION
                $extention = $file->getClientOriginalExtension();

                // TO GET UNIQUE IMAGE NAME
                $unique = Str::random(10);

                // SET UNIQUE IMAGE NAME
                $file_name = $file_first_name . $unique . '.' . $extention;

                // SET IMAGE PATH

                $file->move(public_path('visa'), $file_name);
            }
        } else {
            $file_name = '';
        }
        Visa_approve::create([
            'name' => $request->name,
            'nationality' => $request->nationality,
            'date_of_birth' => $request->date_of_birth,
            'passport_number' => $request->passport_number,
            'confirmation_number' => $request->confirmation_number,
            'document' => $file_name
        ]);
        return redirect('admin/visa-approve-list')->with('success_message', 'Create successfully.');
    }

    public function approveList()
    {
        $approvels = Visa_approve::all();
        return view('admin.application.approve_list', compact('approvels'));
    }

    public function application()
    {
        $applications = Application::all();
        return view('admin.application.visa_application', compact('applications'));
    }

    //  LOGIN ADMIN
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            if (Auth::attempt([
                'email' => $data['email'], 'password' => $data['password']
            ])) {
                // return redirect('/dashboard');
                return response()->json([
                    'status' => true,
                    'view' => (string)View::make('admin.dashboard')
                ]);
            } else {
                // return redirect()->back()->with('error_msg', 'Invalid Email or Password');
                return response()->json([
                    'status' => false,
                    'error_message' => 'Invalid Email or Password!'
                ]);
            }
        }
        return view('admin.login');
    }

    //  LOGOUT ADMIN
    public function logout()
    {
        Auth::logout();
        return redirect('admin');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
    // CHANGE PROFILE IMAGE
    public function uploadImage(Request $request)
    {
        // $validator = Validator::make($request->all(), [
        //     'update_image' => 'required|image'
        // ], [
        //     'update_image.required' => 'Require a image file.',
        //     'update_image.image' => 'The file must be an Image.',
        // ]);
        $request->validate([
            'update_image' => 'required|image'
        ], [
            'update_image.required' => 'Require a image file.',
            'update_image.image' => 'The file must be an Image.',
        ]);

        if ($request->isMethod('post')) {
            if ($request->hasFile('update_image')) {
                $image_tmp = $request->file('update_image');
                if ($image_tmp->isValid()) {
                    // DELETE PREVIOUS IMAGE
                    if (File::exists(auth()->user()->image)) {
                        File::delete(auth()->user()->image);
                    }
                    // GET FULL IMAGE NAME WITH EXTENTION
                    $image_full_name = $image_tmp->getClientOriginalName();

                    // GET IMAGE NAME WITHOUT EXTENSION
                    $image_first_name = pathinfo($image_full_name, PATHINFO_FILENAME);

                    // GET IMAGE EXTENSION
                    $extention = $image_tmp->getClientOriginalExtension();

                    // TO GET UNIQUE IMAGE NAME
                    $unique = Str::random(10);

                    // SET UNIQUE IMAGE NAME
                    $image_name = $image_first_name . $unique . '.' . $extention;

                    // SET IMAGE PATH

                    $image_tmp->move(public_path('file/admins'), $image_name);
                    // $image_path = 'images/admin_image/' . $image_name;
                    // Image::make($image_tmp)->resize(1000, 1000)->save($image_path);
                }
            } else {
                $image_name = auth()->user()->image;
            }
            Auth::user()->update([
                'image' => $image_name
            ]);

            return back()->with('success_message', 'Your image successfully update');
        }
    }
    // UPDATE ADMIN PROFILE
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required|numeric',
            'address' => 'required',
        ]);
        Auth::user()->update([
            'name' => ucwords($request->name),
            'mobile' => $request->mobile,
            'address' => ucwords($request->address),
        ]);
        return back()->with('success_message', 'Your profile information update successfully.');
    }
    // CHANGE PASSWORD
    public function changePassword(Request $request)
    {
        // dd(auth()->user()->password);
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8'
        ]);
        $auth = auth()->user();
        if ($request->new_password !== $request->confirm_password) {
            return back()->with('error_message', "Your confirm password doesn't match!");
        } else {
            if (Hash::check($request->old_password, $auth->password)) {
                $auth = $auth->update([
                    'password' => Hash::make($request->new_password)
                ]);
                return back()->with('success_message', 'Your password update successfully.');
            } else {
                return back()->with('error_message', "Please enter your correct password!");
            }
        }
    }
}

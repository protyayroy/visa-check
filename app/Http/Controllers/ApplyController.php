<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Visa_approve;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ApplyController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'nationality' => 'required',
            'country_residence' => 'required',
            'former_nationality' => 'required',
            'consulate' => 'required',
            'submission_mode' => 'required',
            'mobile' => 'required|numeric',
            'date_of_birth' => 'required',
            'email' => 'required|email|same:re_email',
            'sponsor' => 'required',
            'document' => 'required|mimes:pdf',
        ]);

        if ($request->hasFile('document')) {
            $file = $request->file('document');

            $fileName = $file->getClientOriginalName();
            $file->move(public_path('documents'), $fileName);
        }

        Application::create([
            'nationality' => $request->nationality,
            'country_residence' => $request->country_residence,
            'former_nationality' => $request->former_nationality,
            'consulate' => $request->consulate,
            'submission_mode' => $request->submission_mode,
            'mobile' => $request->mobile,
            'date_of_birth' => $request->date_of_birth,
            'email' => $request->email,
            'sponsor' => $request->sponsor,
            'document' => $fileName,
        ]);

        return redirect()->back()->with('success_message', 'Congratulations! You have successfully submitted the form. Please wait for the approval of your visa. Thank you.');
    }

    public function check(Request $request)
    {
        $name = $request->name;
        $date = $request->date;
        $passport_number = $request->passport_number;
        $nationality = $request->nationality;
        $confirmation_number = $request->confirmation_number;

        $visaApprove = Visa_approve::where('name', 'LIKE', '%' . $name . '%')
            ->where('date_of_birth', 'LIKE', '%' . $date . '%')
            ->where('passport_number', 'LIKE', '%' . $passport_number . '%')
            ->where('confirmation_number', 'LIKE', '%' . $confirmation_number . '%')
            ->where('nationality', 'LIKE', '%' . $nationality . '%')
            ->first();

        if ($visaApprove) {
            $filePath = public_path('visa/' . $visaApprove->document);
            $headers = [
                'Content-Type' => 'application/pdf',
            ];

            session()->flash('success_message', 'Congratulations! Your visa has been approved.');

            return response()->file($filePath, $headers);
            // return back()->with('success_message', 'Congratulations! Your visa has been approved.');
        } else {
            return back()->with('error_message', 'Please wait for the approval of your visa.');
        }
    }
}

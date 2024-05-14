<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\Intern;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index() {
        $schools = Intern::select('school')->distinct()->get();
        return view('form', [
            'title' => 'Form',
            'schools' => $schools
        ]);
    }

    public function getSchool($school) {
        $options = Intern::where('school', $school)->get();

        return response()->json($options);
    }

    public function success() {
        return view('success');
    }
    
    public function store(Request $request) {
        date_default_timezone_set('Asia/Manila');
        $current_time = strtotime(date("H:i:s"));
        $nine_am = strtotime("09:00:00");

        $formFields = $request->all(); 
        $name = $formFields['name'];
        $user = explode("|", $name);

        $formFields['user_id'] = $user[0];
        $formFields['name'] = $user[1];
        
        $intern = Intern::where('id', $formFields['user_id'])->first();

        $formFields['specification'] = $intern->internCategory;

        if ($formFields['action'] === "Time in") {
            if ($current_time > $nine_am) {
                $formFields['status'] = "Late";
            } else {
                $formFields['status'] = "On time";
            }
        } else if ($formFields['action'] === "Time out") {
            $formFields['status'] = "Timed Out";
        }

        Attendance::create($formFields);

        return redirect('/success');
    }
    
}

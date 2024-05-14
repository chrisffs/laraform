<?php

namespace App\Http\Controllers;

use App\Models\Intern;
use App\Models\School;
use App\Models\Program;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function login() {
        return view('admin.login');
    }

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/admin/index')->with('message', 'Welcome ' . auth()->user()->username . '!');

        }
        return back()->withErrors(['username' => 'Invalid Credentials']);
    }

    public function index() {
        return view('admin.index', [
            'interns' => Intern::all(),
            'attendances' => Attendance::limit(6)->latest()->get(),
            'interns_count' => Intern::all()->count(),
            'programs_count' => Program::select('programs.program', DB::raw('COUNT(interns.internCategory) as user_count'))
            ->leftJoin('interns', 'interns.internCategory', '=', 'programs.program')
            ->groupBy('programs.program')
            ->orderBy('programs.created_at')
            ->get(),
            'timein_count' => Attendance::where('action', 'Time in')
            ->whereDate('created_at', now()->toDateString())
            ->distinct('user_id')
            ->count(),
            'programs_timein_count' => Program::select('programs.program')
            ->selectRaw('IFNULL(COUNT(DISTINCT attendances.user_id), 0) AS user_count')
            ->leftJoin('attendances', function($join) {
                $join->on('programs.program', '=', 'attendances.specification')
                    ->whereDate('attendances.created_at', now()->toDateString())
                    ->where('attendances.action', '=', 'Time in');
            })
            ->groupBy('programs.program')
            ->orderByDesc('programs.program')
            ->get(),
            'late_count' => Attendance::where('status', 'Late')
            ->whereDate('created_at', now()->toDateString())
            ->distinct('user_id')
            ->count(),
            'programs_late_count' => Program::select('programs.program')
            ->selectRaw('IFNULL(COUNT(DISTINCT attendances.user_id), 0) AS user_count')
            ->leftJoin('attendances', function($join) {
                $join->on('programs.program', '=', 'attendances.specification')
                    ->whereDate('attendances.created_at', now()->toDateString())
                    ->where('attendances.status', '=', 'Late');
            })
            ->groupBy('programs.program')
            ->orderByDesc('programs.program')
            ->get()
        ]);
    }

    public function interns() {
        $searchTerm = request('search');
        $interns = Intern::filter(['search' => $searchTerm])->paginate(10);
        return view('admin.intern_list', compact('interns', 'searchTerm'));
    }

    public function createIntern() {
        return view('admin.intern-create', [
            'programs' => Program::all(),
            'schools' => School::all()
        ]);
    }

    public function storeIntern(Request $request) {
        $formFields = $request->validate([
            'firstName' => 'required',
            'midName' => 'required',
            'lastName' => 'required',
            'internCategory' => 'required',
            'school' => 'required',
            'onboardingDate' => 'required'
        ]); 
        // dd($formFields);
        Intern::create($formFields);

        return redirect('/admin/intern_list/.')->with('message', $request->fname . ' ' . $request->mname . ' ' . $request->lname . ' Added Successfully');
    }

    public function editIntern(Intern $intern) {
        return view('admin.intern-edit', [
            'intern' => $intern,
            'programs' => Program::all(),
            'schools' => School::all()
        ]);
    }

    public function updateIntern(Request $request, Intern $intern) {
        $formFields = $request->validate([
            'firstName' => 'required',
            'midName' => 'required',
            'lastName' => 'required',
            'internCategory' => 'required',
            'school' => 'required',
            'onboardingDate' => 'required'
        ]); 

        $intern->update($formFields);

        return back()->with('message', 'Intern Updated Successfully.');
    }

    public function deleteIntern(Intern $intern) {
        $intern->delete();

        return back()->with('message', 'Intern Deleted Successfully.');
    }

    public function show(Intern $intern) {
        $logs = Attendance::where('user_id', $intern->id)
        ->orderBy('created_at', 'DESC')
        ->get();
        
        return view('admin.intern-show', [
            'intern' => $intern,
            'logs' => $logs
        ]);
    }

    public function logs() {
        return view('admin.intern_logs', [
            'logs' => Attendance::latest()->paginate(10)
        ]);
    }

    public function settings() {
        return view('admin.settings', [
            'programs' => Program::all(),
            'schools' => School::all()
        ]);
    }

    public function storeSchool(Request $request) {
        $formFields = $request->validate([
            'schoolName' => ['required', Rule::unique('schools', 'schoolName')]
        ]);

        School::create($formFields);

        return redirect('/admin/settings/')->with('message', $request->schoolName . ' Added Succefully.');
    }

    public function deleteSchool(School $school) {
        $school->delete();

        return redirect('/admin/settings/')->with('message', $school->schoolName . ' Deleted Succefully.');
    }

    public function storeProgram(Request $request) { 
        $formFields = $request->validate([
            'program' => ['required', Rule::unique('programs', 'program')]
        ]);

        Program::create($formFields);

        return redirect('/admin/settings/')->with('message', $request->program . ' Added Succefully.');
    }

    public function deleteProgram(Program $program) {
        $program->delete();

        return redirect('/admin/settings/')->with('message', $program->schoolName . ' Deleted Succefully.');
    }


    
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin')->with('message', 'You have been Logged out');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;
use App\Person;
use App\Registration;
use App\Notifications\RegistrationCreated;
use App\User;

class RegistrationsController extends Controller
{
    /**
     * Instantiate a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['create', 'store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registrations = Registration::orderBy('created_at', 'desc')->get();

        return view('registrations.index', compact('registrations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fields = Field::all();

        return view('registrations.create', compact('fields'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'field' => 'required',
            'student.firstname' => 'required|max:255',
            'student.lastname' => 'required|max:255',
            'student.personal_code' => 'required|numeric',
            'student.address' => 'required|max:1000',
            'student.email' => 'email|max:255',
            'student.phone' => 'max:255',

            'parent1.firstname' => 'required|max:255',
            'parent1.lastname' => 'required|max:255',
            'parent1.personal_code' => 'required|numeric',
            'parent1.address' => 'required|max:1000',
            'parent1.phone' => 'required',
            'parent1.email' => 'required|email|max:255',
            'parent1.work_place' => 'required|max:255',
        ]);

        $parent2 = null;
        if ($request->parent2 && ($request->parent2['firstname'] || $request->parent2['lastname'])) {
            $this->validate($request, [
                'parent2.firstname' => 'required|max:255',
                'parent2.lastname' => 'required|max:255',
                'parent2.personal_code' => 'required|numeric',
                'parent2.address' => 'required|max:1000',
                'parent2.phone' => 'required',
                'parent2.email' => 'required|email|max:255',
                'parent2.work_place' => 'required|max:255',
            ]);

            $parent2 = Person::create($request->parent2);
        }
        $student = Person::create($request->student);
        $parent1 = Person::create($request->parent1);

        $registration = Registration::fromForm(
            $request->comment,
            $request->field,
            $student,
            $parent1,
            $parent2
        );

        $user = User::superAdmin();
        $user->notify(new RegistrationCreated($registration));

        return redirect('registration')->with('status', 'Aitäh, registreerimine õnnestus! Me võtame Teiega ühendust.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Registration $registration)
    {
        return view('registrations.show', compact('registration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

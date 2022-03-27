<?php
namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
class PatientController extends Controller
{
    public function index(Request $request)
    {
        $patients = Patient::latest()->paginate(5);
        return view('patients.index',compact('patients'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('patients.create');
    }   
    public function store(Request $request)
    {
        $insertArr = [ 
        'nom'=> $request->nom,
        'prenom' => $request->prenom,
        'CIN' => $request->CIN,
        'dateNaissance' => $request->dateNaissance,
        'telephone'=> $request->telephone,
        'email' => $request->email,
        'adresse' => $request->adresse,
        'sexe' => $request->sexe,
        'allergies' => $request->allergies,
        'maladies' => $request->maladies,
        'comorbidités'=> $request->comorbidités,
     ];
       $patients = Patient::insert($insertArr);   
        return redirect()->route('patients.index')
        ->with('success','patient created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
        return view('patients.show',compact('patient'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
        return view('patients.edit',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
        $request->validate([

        ]);
        $patient->update($request->all());
        return redirect()->route('patients.index')
        ->with('success','patient update successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
        $patient->delete();
        return redirect()->route('patients.index')
        ->with('success','patient deleted successfully');
        
    }
}
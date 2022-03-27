<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Historique;
class HistoriqueController extends Controller
{
    public function index(Request $request,Historique $historique)
    {
        $historique = Historique::latest()->paginate(5);
        return view('patients.historique',compact('historique'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create(){return view('patients.createhist');}   
    public function store(Request $request)
    {
        $insertArr = [ 
        'dateRV'=> $request->dateRV,
        'pathologie' => $request->pathologie,
        'actes_chirurgicaux' => $request->actes_chirurgicaux,
        'examens' => $request->examens,
        'assurrance'=> $request->assurrance,
        'Remarque' => $request->Remarque,
     ];
       $historique = Historique::insert($insertArr);   
       return back()->with('success', 'success Full uploaded');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Historique  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Historique $historique)
    {
        return view('patients.historique',compact('historique'));
        return back()->with('success', '');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Historique  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Historique $historique)
    {
        return view('patients.edith',compact('historique'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Historique  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Historique $historique)
    {
        $request->validate([
        ]);
        $historique->update($request->all());
        return back()->with('success', 'success Full update');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Historique $historique)
    {
        $historique->delete();    
        return back()->with('success', 'successfull delete'); 
    }
}
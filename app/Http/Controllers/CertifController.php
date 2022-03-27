<?php
namespace App\Http\Controllers;
use App\Models\Certif;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class CertifController extends Controller
{
    public function index(Request $request)
    {
        $certif = Certif::latest()->paginate(5);
        return view('certif')
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('certif');
    }   
    public function store(Request $request)
    {
        $this->validate($request,[
            'sig' => 'required'
      ]);
        $insertArr = [ 
        'nommedecin'=> $request->nommedecin,
        'nompatient' => $request->nompatient,
        'nbjour' => $request->nbjour,
        'date' => $request->date,
        'daterepos'=> $request->daterepos,
        $img_name = explode(";base64,", $request->sig),
        $img_type_aux = explode("image/", $img_name[0]),
        $img_type = $img_type_aux[1],
        $img_base64 = base64_decode($img_name[1]),
        ];
       $certif = Certif::insert($insertArr);   
       return back()
        ->with('success','certif created successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certif  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(certif $certif)
    {
        //
        //return view('patients.show',compact('patient'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certif  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Certif $certif)
    {
        //
       // return view('patients.edit',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certif  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certif $certif)
    {
        //
        $request->validate([

        ]);
        $certif->update($request->all());
        return back()
        ->with('success','certif update successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certif $certif)
    {
        //
        $certif->delete();
        return back()
        ->with('success','certif deleted successfully');
        
    }
}
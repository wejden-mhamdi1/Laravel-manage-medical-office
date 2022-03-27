<?php
namespace App\Http\Controllers;
use App\Models\ordonnce;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
class ordcontroller extends Controller
{
    public function ordList(Request $request)
    {
       $ordonnces = ordonnce::latest()->paginate(5);
        return view('ord-list',compact('ordonnces'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     public function addordonnance(){
         return view('ordonnance'); }
         public function saveordonnance(Request $request){
          $insertArr = [ 
                        'nom'=>$request->nom,
                        'prenom'=>$request->prenom,
                        'medicament'=>$request->medicament,
                        'heure'=>$request->heure,
                        'nombre'=>$request->nombre,
                        'rendez'=>$request->rendez,
                        'conseil'=>$request->conseil,];
                                $ordonnces= ordonnce::insert($insertArr);   
                                return back()->with('success', 'success Full uploaded');
      }
      
     
             public function editord(ordonnce $ordonnces)
             {
                 //
                 return view('ordonnance.add',compact('ordonnces'));
             }


             public function updateord(Request $request, ordonnce $ordonnces){
                {
                   //
                   $request->validate([
           
                   ]);
                   $ordonnces->update($request->all());
                   return back()->with('success', 'success Full edit');
             }
              function dest(ordonnce $ordonnces)
             {
                 //
                 $ordonnces->delete();
                 return back()->with('success', 'successfull delete'); 
             }
          }
}

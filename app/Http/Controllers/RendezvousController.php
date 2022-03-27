<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Rendezvous;
use Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector;
//use Redirect,Response;
class RendezvousController extends Controller
{
    public function index(Request $request)
    {
        if ($request -> ajax()){$data = Rendezvous::get(['patient_name','date','time', 'note']);
        return response()->json($data);}
        $event = Rendezvous::latest()->paginate(5);
        return view('calendar')
        ->with('i', (request()->input('page', 1) - 1) * 5);
        return view('calendar');
    }
    public function create(Request $request)
    {  
        $insertArr = [ 'patient_name' => $request->patient_name,
                       'date' => $request->date,
                       'time' => $request->time,
                       'note' => $request->note,];
        $event = Rendezvous::insert($insertArr);   
        return view('calendar')
        ->with('success','Rendez-vous created successfully.');}
    public function update(Request $request)
    {   
        $where = array('id' => $request->id);
        $updateArr = ['patient_name' => $request->patient_name, 'date' => $request->date, 'time' => $request->time,'note' => $request->note];
        $event  = Rendezvous::where($where)->update($updateArr);
        return Response::json($event);
    } 
    public function destroy(Rendezvous $event)
    {
        $event->delete();
        return redirect()->route('rendez-vous')
        ->with('success','Rendez-vous deleted successfully');
    }  
    public function add()
    {
        return view('rendez-vous');
    }  
    public function calendarEvents(Request $request)
    {
        switch ($request->type) {
           case 'create':
              $event = Rendezvous::create([
                'patient_name' => $request->patient_name,
                'date' => $request->date,
                'time' => $request->time,
                'note' => $request->note,]);
              return response()->json($event);
             break;
           case 'edit':
              $event = Rendezvous::find($request->id)->update([
                'patient_name' => $request->patient_name,
                'date' => $request->date,
                'time' => $request->time,
                'note' => $request->note,]);
              return response()->json($event);
             break;
           case 'delete':
              $event = Rendezvous::find($request->id)->delete();
              return response()->json($event);
             break;
           default:
             # ...
             break;
        }
    }
 }
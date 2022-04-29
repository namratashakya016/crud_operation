<?php

namespace App\Http\Controllers;
use App\Models\EventModel;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function vaildEvent($request){
        $valid=$request->validate([
            'title'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'first_drop'=>'required|not_in:0',
            'second_drop'=>'required|not_in:0'
        ]);
        return $valid;

    }
    public function insertEvent(Request $request)
    {
    	$valid = $this->vaildEvent($request);

    	// $exits=EventModel::whereBetween('start_date', array($valid['start_date'],$valid['end_date']))
              // ->whereBetween('end_date', array($valid['start_date'],$valid['end_date']))->get();

        $result=EventModel::create($valid);
    	return redirect('event/list');
    }

    public function getEventList()
    {
        $data['list']=EventModel::all();
        return view('list',$data);
    }

    public function deleteEvent($id)
    {
        $event=EventModel::Where('id',$id)->delete();
        return redirect()->back()->with('msg','Event Deleted Successfully  .');
    }

    public function getSingleEvent($id)
    {
        $data['event']=EventModel::Where('id',$id)
                       ->get();
        return view('edit',$data);
    }

    public function updateEvent(Request $request,$id){

        $valid = $this->vaildEvent($request);        
        $data=EventModel::Where('id',$id)
              ->update($valid);
        return redirect('event/list');

    }

    public function singleEvent($id)
    {
        $data['event']=EventModel::Where('id',$id)
                       ->get();
        return view('single_event',$data);
    }
}

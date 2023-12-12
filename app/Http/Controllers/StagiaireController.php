<?php

namespace App\Http\Controllers;

// use App\Http\Requests\StagiaireRequest;
use App\Models\Stagiaire;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class StagiaireController extends Controller
{
    public function index()
    {
        $stagiaires=Stagiaire::all();
        return view('index')->with('stagiaires',$stagiaires);
    }

    public function create()
    {  
        return view('create');
    }
    
    public function store(Request $request)
    {
        $input = $request->validate(
            [
                'nom'=>'required|min:3',
                'prenom'=>'required|min:3',
                'sexe'=>'required|min:1|max:6',
                'fillier'=>'required|min:4',
                'email'=>'required|min:4',
                'ville'=>'required|min:3',
                'age'=>'required|min:2|max:2',
                'tel'=>'required|min:10|max:10',
                'photo'=>'required',
                'dateN'=>'required'
            ],[
                'nom.required'=>'the lastName field is required ',
                'prenom.required'=>'the firstName field is required ',
                'sexe.required'=>'the gender field is required ',
                'fillier.required'=>'the fillier field is required ',
                'email.required'=>'the email field is required ',
                'ville.required'=>'the city field is required ',
                'age.required'=>'the age  field is required ',
                'tel.required'=>'the phone number field is required ',
                'photo.required'=>'the picture field is required ',
                'dateN.required'=>'the birthday field is required ',
            ]
        );
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $input["photo"] = '/storage/'.$path;
        
        Stagiaire::create($input);
        return redirect('stagiaire')->with('flash_message', 'Stagiaire Addedd Succesfuly !');  
    }
    
    public function show($id)
    {
        $stagiaire = Stagiaire::find($id);
        return view('detail')->with('stagiaire', $stagiaire);
    }
    
    public function edit($id)
    {
        $stagiaire = Stagiaire::find($id);
        return view('edit')->with('stagiaire', $stagiaire);
    }
  
    public function update(Request $request, $id)
    {
        $stagiaire = Stagiaire::find($id);
        $stagiaire->update($request->all());
        return redirect('stagiaire')->with('flash_message','Stagiaire  Updated  Succesfuly !');  
    }
  
    public function destroy($id)
    {
        Stagiaire::destroy($id);
        return redirect('stagiaire')->with('flash_message', 'Stagiaire  Deleted  Succesfuly !');  
    }

    public function deleteAll(){
        DB::table('stagiaires')->truncate();
        return redirect('stagiaire')->with('flash_message', 'All Stagiaires is deleted Succesfuly  !'); 
        
    }
    
    public function search(){
        $search_text=$_GET['query'];
        $stagiaires=stagiaire::where('fillier','LIKE','%'.$search_text.'%')->get();
        return view('index',compact('stagiaires'));
    }
}


                                                 

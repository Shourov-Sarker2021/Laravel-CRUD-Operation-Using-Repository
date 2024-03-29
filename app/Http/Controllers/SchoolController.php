<?php

namespace App\Http\Controllers;
use App\Repositories\TestInterface;  // This CRUD is create by using repository.
//use App\Models\School; now its load from repository page.
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    protected $test;
    public function __construct(TestInterface $test)  // // This CRUD is create by using repository.
    {
        $this->test=$test;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schools= $this->test->all();  
        return view('school.index', compact('schools'))->with('i',(request('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('school.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'location'=>'required',
            'city'=>'required',
            'result'=>'required',
        ]);

        $input=$request->all();
        $this->test->store($input);
        return redirect()->route('schools.index')->with('success',"School Create Successfully");

         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $school=$this->test->get($id);
        return view('school.show',compact('school'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit($id) 
    {
        $school=$this->test->get($id); //repository.
        return view('school.edit',compact('school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)    
    {
        $request->validate([
            'name'=>'required',
            'location'=>'required',
            'city'=>'required',
            'result'=>'required',
        ]);

        $input=$request->all(); 
        $this->test->update($id,$input);
        return redirect()->route('schools.index')->with('success',"School Update Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)  
    {
        
        //return "Delete successfully";
        $this->test->delete($id);
        return redirect()->route('schools.index')->with('success',"School Delete Successfully");
    }
}

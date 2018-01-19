<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
             return view('informations.index')
            ->with('informations',animation_information::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
            return view('informations.create')
            ->with('classification', animation_classification::latest('updated_at')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $information_new = new Student;
        $information_new->name = $request->input('name');
        $information_new->Original_author = $request->input('Original_author');
        $information_new->Manufacturer = $request->input('Manufacturer');
        $information_new->url = $request->input('url');
        $information_new->animation_classification_id = $request->input('animation_classification_id');
        $information_new->save();

        return redirect('informations');
    }

    public function edit($id)
    {
        //
            return view('informations.edit')
            ->with(['informations'=>animation_information::findOrFail($id),
                    'classification'=>animation_classification::latest('employed_at')->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $s = animation_information::findOrFail($id);
        $s->update($request->all());

        return redirect('informations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $s = animation_information::findOrFail($id);
        $s->delete();

        return redirect('informations');
    }

    public function restore($id)
    {
        $t = animation_information::onlyTrashed()->where('id', '=', $id);
        $t->restore();

        return redirect('informations/quit');
    }

    public function quit()
    {

        return view('informations.quit')->with('informations',
            Student::onlyTrashed()->get());
    }

    public function del($id)
    {
        //
        $t = animation_information::findOrFail($id);
        $t->forceDelete();

        return redirect('informations');
    }
}

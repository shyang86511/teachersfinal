<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use \App\animation_classification;
use \App\Http\Requests\animation_classificationRequest;



class ClassificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('classification.index')
            ->with('classification',animation_classification::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('classification.create');
    }

    public function show($id)
    {
        $t = animation_classification::findOrFail($id);

        return view('informations.index')
            ->with('informations', $t->informations);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(animation_classificationRequest $request)
    {
        //
        $classification_new = new animation_classification;
        $classification_new->name = $request->input('name');
        $classification_new->save();


        return redirect('classification');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('classification.edit')
        ->with('classification', animation_classification::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(animation_classificationRequest $request, $id)
    {
        //
        $t = animation_classification::findOrFail($id);
        $t->update($request->all());

        return redirect('classification');
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
        $t = animation_classification::findOrFail($id);
        $t->delete();

        return redirect('classification');
    }

    public function restore($id)
    {
        $t = animation_classification::onlyTrashed()->where('id', '=', $id);
        $t->restore();

        return redirect('classification/quit');
    }

    public function quit()
    {
        return view('classification.quit')->with('classification',
            animation_classification::onlyTrashed()->get());
    }

    public function del($id)
    {
     
        $t = animation_classification::onlyTrashed($id);
        $t->forceDelete();

        return redirect('classification');
    }
}

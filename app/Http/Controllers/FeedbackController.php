<?php

namespace App\Http\Controllers;

use App\Models\FeedbackMap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


/* // Get all session data
$sessionData = Session::all();

// Display the session data
dd($sessionData); */

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbackMaps = FeedbackMap::all();
        return view('administration', compact('feedbackMaps'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('feedback');
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'x_coordinates' => 'required|numeric',
            'y_coordinates' => 'required|numeric',
            'noise_level' => 'required|integer|min:1|max:5',
            'temperature_level' => 'required|integer|min:1|max:5',
            'air_quality_level' => 'required|integer|min:1|max:5',
            'higge_level' => 'required|integer|min:1|max:5',
        ]);
    
        // Create a new instance of the FeedbackMap model and populate its properties
        $feedbackMap = new FeedbackMap();
        $feedbackMap->user()->associate(auth()->user());
        $feedbackMap->x_coordinates = $validatedData['x_coordinates'];
        $feedbackMap->y_coordinates = $validatedData['y_coordinates'];
        $feedbackMap->noise_level = $validatedData['noise_level'];
        $feedbackMap->temperature_level = $validatedData['temperature_level'];
        $feedbackMap->air_quality_level = $validatedData['air_quality_level'];
        $feedbackMap->higge_level = $validatedData['higge_level'];
        //dd($request->all());
        // Save the feedback map to the database
        $feedbackMap->save();

        // Store the feedbackMapId in the session
        session(['feedbackMapId' => $feedbackMap->id]);

    
        // Redirect or perform any additional actions as needed
        return redirect()->route('feedback.tipps', ['feedbackMapId' => $feedbackMap->id]);
        
    }
    
    /**
     * Display the specified resource.
     */
    public function show(FeedbackMap $feedbackMap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FeedbackMap $feedbackMap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FeedbackMap $feedbackMap)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FeedbackMap $feedbackMap)
    {
        $feedbackMap->delete();

        return redirect()->route('feedback.administration')->with('success', 'Feedback deleted successfully.');
    }


     public function createCommentary(Request $request, FeedbackMap  $feedbackMapId)
    {

        return view('tipps', ['feedbackMapId' => $feedbackMapId]);
        /* return view('tipps', compact('feedbackMapId')); */
    }
        
    
    /**
     * Store the commentary and critique data.
     */
    public function storeCommentary(Request $request, $feedbackMapId)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'commentary' => 'nullable|string',
        ]);
    
        //dd($request->all());
    
        // Find the corresponding feedbackMap
        $feedbackMap = FeedbackMap::findOrFail($feedbackMapId);
    
        // Update the feedback map with the commentary data
        $feedbackMap->commentary = $validatedData['commentary'];
        
        // Save the feedback map
        $feedbackMap->save();
    
        // Redirect or perform any additional actions as needed
        return redirect('/thankyou');
    }
    

}

<?php

namespace App\Http\Controllers;

use App\Models\FeedbackMap;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    
        // Save the feedback map to the database
        $feedbackMap->save();
    
        // Redirect or perform any additional actions as needed
        return redirect()->route('feedback.commentary.create')->with('feedbackMapId', $feedbackMap->id);
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
        //
    }

    /**
 * Store the commentary and critique data.
 */
public function storeCommentary(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'commoncritique' => 'required|in:yes,no',
        'commentary' => 'nullable|string',
    ]);

    // Retrieve the feedback map ID from the session
    $feedbackMapId = session('feedbackMapId');

    // Retrieve the feedback map from the database
    $feedbackMap = FeedbackMap::find($feedbackMapId);

    // Update the feedback map with the commentary and commoncritique data
    $feedbackMap->commoncritique = $validatedData['commoncritique'];
    $feedbackMap->commentary = $validatedData['commentary'];

    // Save the feedback map
    $feedbackMap->save();

    // Redirect or perform any additional actions as needed
    return redirect()->route('feedback.create')->with('success', 'Commentary and critique stored successfully.');
}

}

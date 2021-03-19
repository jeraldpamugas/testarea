<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $finalData = [];
        $resultOrder = Task::orderBy('order', 'asc')->get();
        $resultOrder1 = Task::where('order', '=', 1)->get();
        $resultOrder2 = Task::where('order', "=", 2)->get();
        $resultOrder3 = Task::where('order', "=", 3)->get();
        $resultOrder4 = Task::where('order', "=", 4)->get();
        $resultOrder5 = Task::where('order', "=", 5)->get();
-       
        array_push($finalData, $resultOrder1);
        array_push($finalData, $resultOrder2);
        array_push($finalData, $resultOrder3);

        // dd(json_decode(json_encode($resultOrder), true));
        // dd(json_decode(json_encode($finalData), true));
        // dd($data);
        return view('nestedlist')->with('data', json_decode(json_encode($resultOrder), true));
    }

    public function getAllTask(){
        $result = Task::orderBy('order', 'asc')->get();
        $data = json_decode($result, true);
        return $data;
    }

    public function getTaskByHead(){

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = Task::create([
            'name' => $request->name,
            'order' => $request->order,
            'parentId' => $request->parentId,
            'rootId' => $request->rootId
        ]);
        return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->name = $request->name;
        $task->order = $request->order;
        $task->parentId = $request->parentId;
        $task->rootId = $request->rootId;
        $result = $task->save();

        return response()->json($result, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $result = Task::destroy($task->id);

        return response()->json($result, 200);
    }
}

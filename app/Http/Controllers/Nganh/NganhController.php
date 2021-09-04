<?php

namespace App\Http\Controllers\Nganh;

use App\Models\nganh;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\NganhStore;
use App\Http\Requests\NganhUpdate;
class NganhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          //
          $search = $request->search ?? '';
          $nganhs = nganh::where(function($query) use($search) {
              $query->where('ten', 'LIKE', "%$search%");
                   
          })->orderBy('ten')->paginate(10);
          return view('nganh.index',
          [
              'nganhs' => $nganhs, 
              'search' => $search
          ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nganh.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NganhStore $request)
    {
        //
        $validated = $request->validated();
        // dd($validated);
        // exit();
        
        try {
            nganh::create($validated);
            return redirect()->back()->with('message','Thêm thành công');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(nganh $nganh_manager)
    {
        
        return view('nganh.edit')->with('nganh_manager', $nganh_manager);
    }

  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NganhUpdate $request,nganh $nganh_manager)
    {
        //
        $validated = $request->validated();

        // dd($validated);

        try {
            $nganh_manager->update($validated);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->route('nganh-manager.index')->with('success', 'sua thanh cong');
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
    }
}

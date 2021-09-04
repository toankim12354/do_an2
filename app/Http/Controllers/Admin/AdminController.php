<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\giao_vu;
use Illuminate\Http\Request;
use App\Http\Requests\AdminStore;
use App\Http\Requests\AdminUpdateFormRequest;
use Illuminate\Support\Facades\Hash;
use DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search ?? '';

        $giaoVus = giao_vu::where(function($query) use($search) {
            $query->where('ten', 'LIKE', "%$search%")
                  ->orWhere('email', 'LIKE', "%$search%")
                  ->orWhere('phone', 'LIKE', "%$search%");
        })->orderBy('ten')->paginate(10);
       
        return view('admins.index', [
            'giaoVus' => $giaoVus, 
            'search' => $search]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminStore $request)
    {
        // get input
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);
      

        // create new giao_vu
        try {
            giao_vu::create($validated);
            // return redirect()->route('admin-manager/create');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\giao_vu  $giao_vu
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // return redirect()->route('admin.edit',compact('giao_vu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\giao_vu  $giao_vu
     * @return \Illuminate\Http\Response
     */
    public function edit(giao_vu $admin_manager)
    {
       return view('admins.edit')->with('admin_manager', $admin_manager);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\giao_vu  $giao_vu
     * @return \Illuminate\Http\Response
     */
    public function update(AdminUpdateFormRequest $request, giao_vu $admin_manager)
    {
        $validated = $request->validated();

        // dd($validated);

        try {
            $admin_manager->update($validated);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->route('admin-manager.index')->with('success', 'sua thanh cong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\giao_vu  $giao_vu
     * @return \Illuminate\Http\Response
     */
    public function destroy(giao_vu $admin_manager)
    {
      

   

    
            $admin_manager->delete();
      
            // dd($admin_manager);
            // exit();
        return redirect()->route('admin-manager.index')->with('success', 'sua thanh cong');
        }
}

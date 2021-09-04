<?php

namespace App\Http\Controllers\Khoa;
use App\Http\Controllers\Controller;
use App\Models\khoa;
use Illuminate\Http\Request;
use App\Http\Requests\KhoaStore;
use App\Http\Requests\KhoaUpdate;
class KhoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $search = $request->search ?? '';
        $khoas = khoa::where(function($query) use($search) {
            $query->where('ten', 'LIKE', "%$search%");
                 
        })->orderBy('ten')->paginate(3);
        return view('khoa.index',
        [
            'khoas' => $khoas, 
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
        //
        return view('khoa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(khoaStore $request)
    {
        //
        $validated = $request->validated();
        // dd($validated);
        // exit();
        try {
            khoa::create($validated);
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
    public function show(khoa $khoa)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(khoa $khoa_manager)
    {

       return view('khoa.edit')->with('khoa_manager', $khoa_manager);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KhoaUpdate $request, khoa $khoa_manager)
    {
        //
        $validated = $request->validated();
        // dd($validated);
        // exit();
       
        try {
            $khoa_manager->update($validated);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->route('khoa-manager.index')->with('success', 'sua thanh cong');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(khoa $khoa_manager)
     {
       
 
    
 
     
             $khoa_manager->delete();
       
             // dd($admin_manager);
             // exit();
         return redirect()->route('khoa-manager.index')->with('success', 'sua thanh cong');
         }
}

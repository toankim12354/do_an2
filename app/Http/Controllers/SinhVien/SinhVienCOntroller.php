<?php

namespace App\Http\Controllers\SinhVien;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sinh_vien;

use App\Http\Requests\SinhVienUpdate;
use App\Http\Requests\SinhVienStore;
class SinhVienCOntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = $request->search ?? '';
        //
        $sinhVien = sinh_vien::join('lops','lops.id','=','sinh_viens.lop_id')
            ->select('sinh_viens.*','lops.ten as ten_lop')
            ->where(function($query) use($search) {
            $query->where('sinh_viens.ten', 'LIKE', "%$search%");
        })->orderBy('sinh_viens.ten')->paginate(10);
      

return view('sinhvien.index', [
    'sinhVien' => $sinhVien, 
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
       
        $lops = DB::table('lops')->get();
        

        return view('sinhvien.create')->with('class',$lops);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SinhVienStore $request)
    {
        //
        $validated = $request->validated();
        // dd($validated);
        // exit();
        try {
            sinh_vien::create($validated);
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
    public function edit(sinh_vien $sinhvien_manager)
    {
        //
      
        $lop = DB::table('lops')->get();
         
          
        //
        return view('sinhvien.edit',
        [
            'lop' => $lop,
            'sinhvien_manager' =>$sinhvien_manager,
        ]);
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(SinhVienUpdate $request, sinh_vien $sinhvien_manager)
    {
        $validated = $request->validated();

        // dd($validated);
        // exit();

        try {
            $sinhvien_manager->update($validated);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->route('sinhvien-manager.index')->with('success', 'sua thanh cong');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy(sinh_vien $sinhvien_manager)
    {
      

   

    
            $sinhvien_manager->delete();
      
            // dd($admin_manager);
            // exit();
        return redirect()->route('sinhvien-manager.index')->with('success', 'sua thanh cong');
        }
}

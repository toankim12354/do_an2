<?php

namespace App\Http\Controllers\Lop;

use App\Http\Controllers\Controller;
use App\Models\lop;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\LopStore;
use App\Http\Requests\LopUpdate;
class LopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $search = $request->search ?? '';

        $lops = lop::join('khoas','khoas.id','=','lops.khoa_id')
            ->join('nganhs','nganhs.id','=','lops.nganh_id')
            ->select('lops.*','khoas.ten as ten_khoa','nganhs.ten as ten_nganh')
            ->where(function($query) use($search) {
            $query->where('lops.ten', 'LIKE', "%$search%");
        })->orderBy('lops.ten')->paginate(3);
        return view('lop.index',
        [
            'lops' => $lops, 
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
        $major = DB::table('nganhs')->get();
        $khoa = DB::table('khoas')->get();
        

        return view('lop.create')->with('major',$major)->with('khoa',$khoa);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LopStore $request)
    {
        //
        $validated = $request->validated();
        // dd($validated);
        // exit();
        try {
            lop::create($validated);
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
    public function edit(lop $lop_manager )
    {
        $major = DB::table('nganhs')->get();
        $khoa = DB::table('khoas')->get();
         
          
        //
        return view('lop.edit',
        [
            'major' => $major, 
            'khoa' => $khoa,
            'lop_manager' =>$lop_manager,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(LopUpdate $request, lop $lop_manager)
    {
        $validated = $request->validated();

        // dd($validated);

        try {
            $lop_manager->update($validated);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->route('lop-manager.index')->with('success', 'sua thanh cong');
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

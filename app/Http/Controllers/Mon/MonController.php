<?php

namespace App\Http\Controllers\Mon;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\mon;
use App\Http\Requests\MonUpdate;
use App\Http\Requests\MonStore;
class MonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // //  $lops = lop::join('khoas','khoas.id','=','lops.khoa_id')
        // ->join('nganhs','nganhs.id','=','lops.nganh_id')
        //     ->select('lops.*','khoas.ten as ten_khoa','nganhs.ten as ten_nganh')
        //     ->where(function($query) use($search) {
        $search = $request->search ?? '';
            // dd($search);
            // exit();
        $mons = mon::join('nganhs','nganhs.id','mons.nganh_id')
        ->select('mons.*','nganhs.ten as ten_nganh')
        ->where(function($query) use($search) {
            $query->where('mons.ten', 'LIKE', "%$search%");
                 
        })->orderBy('mons.ten')->paginate(3);
        return view('mon.index',
        [
            'mons' => $mons, 
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
        $major = DB::table('nganhs')->get();
        $khoa = DB::table('khoas')->get();
        

        return view('mon.create')->with('major',$major)->with('khoa',$khoa);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MonStore $request)
    {
        //
        $validated = $request->validated();
        // dd($validated);
        // exit();
         try {
            mon::create($validated);
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
    public function edit(mon $mon_manager )
    {
        $major = DB::table('nganhs')->get();

        //
        return view('mon.edit',
        [
            'major' => $major, 
            'mon_manager' =>$mon_manager,
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MonUpdate $request, mon $mon_manager)
    {
        //
                $validated = $request->validated();

        //  dd($validated);
        //     exit();
        try {
            $mon_manager->update($validated);
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

        return redirect()->route('mon-manager.index')->with('success', 'sua thanh cong');
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

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\tamu_menginap_hotel;
use Illuminate\Http\Request;

class tamu_menginap_hotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $tamu_menginap_hotel = tamu_menginap_hotel::where('deposit_tamu', 'LIKE', "%$keyword%")
                ->orWhere('tanggal_menginap', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $tamu_menginap_hotel = tamu_menginap_hotel::latest()->paginate($perPage);
        }

        return view('admin.tamu_menginap_hotel.index', compact('tamu_menginap_hotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.tamu_menginap_hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        tamu_menginap_hotel::create($requestData);

        return redirect('admin/tamu_menginap_hotel')->with('flash_message', 'tamu_menginap_hotel added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $tamu_menginap_hotel = tamu_menginap_hotel::findOrFail($id);

        return view('admin.tamu_menginap_hotel.show', compact('tamu_menginap_hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $tamu_menginap_hotel = tamu_menginap_hotel::findOrFail($id);

        return view('admin.tamu_menginap_hotel.edit', compact('tamu_menginap_hotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $tamu_menginap_hotel = tamu_menginap_hotel::findOrFail($id);
        $tamu_menginap_hotel->update($requestData);

        return redirect('admin/tamu_menginap_hotel')->with('flash_message', 'tamu_menginap_hotel updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        tamu_menginap_hotel::destroy($id);

        return redirect('admin/tamu_menginap_hotel')->with('flash_message', 'tamu_menginap_hotel deleted!');
    }
}

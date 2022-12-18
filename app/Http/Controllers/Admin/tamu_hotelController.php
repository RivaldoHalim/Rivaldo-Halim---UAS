<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\tamu_hotel;
use Illuminate\Http\Request;

class tamu_hotelController extends Controller
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
            $tamu_hotel = tamu_hotel::where('id_tamu', 'LIKE', "%$keyword%")
                ->orWhere('nama_tamu', 'LIKE', "%$keyword%")
                ->orWhere('alamat_tamu', 'LIKE', "%$keyword%")
                ->orWhere('tempat_tinggal_tamu', 'LIKE', "%$keyword%")
                ->orWhere('no_telp', 'LIKE', "%$keyword%")
                ->orWhere('no_identitas_tamu', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $tamu_hotel = tamu_hotel::latest()->paginate($perPage);
        }

        return view('admin.tamu_hotel.index', compact('tamu_hotel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.tamu_hotel.create');
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
        
        tamu_hotel::create($requestData);

        return redirect('admin/tamu_hotel')->with('flash_message', 'tamu_hotel added!');
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
        $tamu_hotel = tamu_hotel::findOrFail($id);

        return view('admin.tamu_hotel.show', compact('tamu_hotel'));
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
        $tamu_hotel = tamu_hotel::findOrFail($id);

        return view('admin.tamu_hotel.edit', compact('tamu_hotel'));
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
        
        $tamu_hotel = tamu_hotel::findOrFail($id);
        $tamu_hotel->update($requestData);

        return redirect('admin/tamu_hotel')->with('flash_message', 'tamu_hotel updated!');
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
        tamu_hotel::destroy($id);

        return redirect('admin/tamu_hotel')->with('flash_message', 'tamu_hotel deleted!');
    }
}

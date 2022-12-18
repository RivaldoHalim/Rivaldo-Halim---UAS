<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\kamar_tamu;
use Illuminate\Http\Request;

class kamar_tamuController extends Controller
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
            $kamar_tamu = kamar_tamu::where('no_kamar_tamu', 'LIKE', "%$keyword%")
                ->orWhere('jenis_kamar', 'LIKE', "%$keyword%")
                ->orWhere('harga_kamar', 'LIKE', "%$keyword%")
                ->orWhere('keterangan', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $kamar_tamu = kamar_tamu::latest()->paginate($perPage);
        }

        return view('admin.kamar_tamu.index', compact('kamar_tamu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.kamar_tamu.create');
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
        
        kamar_tamu::create($requestData);

        return redirect('admin/kamar_tamu')->with('flash_message', 'kamar_tamu added!');
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
        $kamar_tamu = kamar_tamu::findOrFail($id);

        return view('admin.kamar_tamu.show', compact('kamar_tamu'));
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
        $kamar_tamu = kamar_tamu::findOrFail($id);

        return view('admin.kamar_tamu.edit', compact('kamar_tamu'));
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
        
        $kamar_tamu = kamar_tamu::findOrFail($id);
        $kamar_tamu->update($requestData);

        return redirect('admin/kamar_tamu')->with('flash_message', 'kamar_tamu updated!');
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
        kamar_tamu::destroy($id);

        return redirect('admin/kamar_tamu')->with('flash_message', 'kamar_tamu deleted!');
    }
}

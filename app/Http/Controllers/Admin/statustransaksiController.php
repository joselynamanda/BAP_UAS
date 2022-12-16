<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\statustransaksi;
use Illuminate\Http\Request;

class statustransaksiController extends Controller
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
            $statustransaksi = statustransaksi::where('namastatus', 'LIKE', "%$keyword%")
                ->orWhere('idtransaksi', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $statustransaksi = statustransaksi::latest()->paginate($perPage);
        }

        return view('statustransaksi.index', compact('statustransaksi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('statustransaksi.create');
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
        
        statustransaksi::create($requestData);

        return redirect('admin/statustransaksi')->with('flash_message', 'statustransaksi added!');
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
        $statustransaksi = statustransaksi::findOrFail($id);

        return view('statustransaksi.show', compact('statustransaksi'));
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
        $statustransaksi = statustransaksi::findOrFail($id);

        return view('statustransaksi.edit', compact('statustransaksi'));
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
        
        $statustransaksi = statustransaksi::findOrFail($id);
        $statustransaksi->update($requestData);

        return redirect('admin/statustransaksi')->with('flash_message', 'statustransaksi updated!');
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
        statustransaksi::destroy($id);

        return redirect('admin/statustransaksi')->with('flash_message', 'statustransaksi deleted!');
    }
}

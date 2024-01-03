<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Mahasiswa;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Exports\MahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mahasiswa = Mahasiswa::all();
        return view ('mahasiswa.index')->with('mahasiswa', $mahasiswa);
    }

    public function exportmahasiswa()
	{
		return Excel::download(new MahasiswaExport, 'mahasiswa.xlsx');
	}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        Mahasiswa::create($input);
        return redirect('mahasiswa')->with('flash_message', 'Student Addedd!');

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
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.show')->with('mahasiswa', $mahasiswa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

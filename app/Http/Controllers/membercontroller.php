<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class membercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = Member::all();
        return view('member.index', [
            'member' => $member
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama'=>'required',
            'NIK'=>'required'
        ]);
        $array = $request->only([
            'Nama', 'NIK'
        ]);
        // $member = new Member([
        //     'Nama' =>$request->get('Nama'),
        //     'NIK' =>$request->get('NIK')
        // ]);
        $member = Member::create($array);
        return redirect()->route('member.index')->with('success_message', 'Berhasil menambah user baru');
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
    public function edit($id)
    {
        $member = Member::find($id);
        return view('member.edit', compact('member'));
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
        $request->validate([
            'NIK'=>'required'
        ]);
        $member = Member::find($id);
        $member->Nama = $request->get('Nama');
        $member->NIK = $request->get('NIK');

        $member->save();
        return redirect('/member')->with('Success', 'Input berhasil');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        $member ->delete();
        return redirect('/member')->with('Success', 'Hapus berhasil');
    }
}

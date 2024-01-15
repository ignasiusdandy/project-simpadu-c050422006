<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use Illuminate\Http\Request;
use App\Models\Registration;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdateScheduleRequest;
use Illuminate\Support\Facades\Storage;

class Registrationcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $registrations = DB::table('registrations')
        ->when($request->input('id'), function ($query, $id) {
            return $query->where('id', 'like', '%' . $id . '%');
        })
        ->select('id', 'no_pendaftaran', 'nisn', 'nama','alamat','alamat','tempat_lahir','tanggal_lahir','asal_sekolah',
        'jenis_kelamin', 'jurusan','nama_ayah','pekerjaan_ayah','nama_ibu','pekerjaan_ibu','penghasilan_orang_tua','image')
        ->orderBy('id', 'asc')
        ->paginate(15);
    return view('pages.registrations.index', compact('registrations'));
    }

    /**
     * Store a newly created resource in storage.
     */

     public function create()
    {
        return view('pages.registrations.create');
    }

     public function store(StoreRegistrationRequest $request)
     {
         Registration::create([
            'no_pendaftaran' => $request['no_pendaftaran'],
            'nisn' => $request['nisn'],
            'nama' => $request['nama'],
            'alamat' => $request['alamat'],
            'tempat_lahir' => $request['tempat_lahir'],
            'tanggal_lahir' => $request['tanggal_lahir'],
            'asal_sekolah' => $request['asal_sekolah'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'jurusan' => $request['jurusan'],
            'nama_ayah' => $request['nama_ayah'],
            'pekerjaan_ayah' => $request['pekerjaan_ayah'],
            'nama_ibu' => $request['nama_ibu'],
            'pekerjaan_ibu' => $request['pekerjaan_ibu'],
            'penghasilan_orang_tua' => $request['penghasilan_orang_tua'],
            'image' => $request->file('image')->store('images'),
            $request->file('image')->store('public/images'),
         ]);
        
         return redirect(route('registration.index'))->with('success', 'data berhasil disimpan');
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

     public function edit(Registration $registration)
    {
        return view('pages.registrations.edit')->with('registration', $registration);
    }
    public function update(UpdateRegistrationRequest $request, Registration $registration)
    {
        $validate = $request->validated();
        $registration->update($validate);
        return redirect()->route('registration.index')->with('success', 'Edit User Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration)
    {
        $registration->delete();
        return redirect()->route('registration.index')->with('success', 'Delete User Successfully');
    }
}

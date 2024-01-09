<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Http\Requests\UpdateRegisterRequest;
use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function index(Request $request)
    {
        $registers = DB::table('registers')
            ->when($request->input('npwp'), function ($query, $npwp) {
                return $query->where('npwp', 'like', '%' . $npwp . '%');
            })
            ->select('id', 'npwp', 'nama', 'no_ktp', 'alamat_ktp', 'ttl', 'jenis_kelamin', 'email', 'no_hp', 'no_telp', 'no_npwp', 'kependudukan')
            ->orderBy('id', 'asc')
            ->paginate(15);
            return view('pages.registers.index', compact('registers'));
    }

    public function create()
    {
        return view('pages.registers.create');
    }

    public function store(StoreRegisterRequest $request)
    {
        Register::create([
            'npwp' => $request['npwp'],
            'nama' => $request['nama'],
            'no_ktp' => $request['no_ktp'],
            'alamat_ktp' => $request['alamat_ktp'],
            'ttl' => $request['ttl'],
            'jenis_kelamin' => $request['jenis_kelamin'],
            'email' => $request['email'],
            'no_hp' => $request['no_hp'],
            'no_telp' => $request['no_telp'],
            'no_npwp' => $request['no_npwp'],
            'kependudukan' => $request['kependudukan'],

        ]);
        return redirect()->route('register.index')->with('success', 'Create New Register Successfully');
    }

    public function edit(Register $register)
    {
        return view('pages.registers.edit')->with('register', $register);
    }

    public function show(string $id)
    {
        //
    }

    public function update(UpdateRegisterRequest $request, Register $register)
    {
        // $validate = $request->validate();
        // $register->update($validate);

        // return redirect()->route('register.index')->with('success', 'Edit Register Successfully');

        // Validate the request data
    $validatedData = $request->validated();

    // Update the register model with the validated data
    $register->update($validatedData);

    // Redirect to the register index with a success message
    return redirect()->route('register.index')->with('success', 'Edit Register Successfully');
    }

    public function destroy(Register $register)
    {
        $register->delete();
        return redirect(route('register.index'))->with('success', 'Delete Register Successfully');
    }
}

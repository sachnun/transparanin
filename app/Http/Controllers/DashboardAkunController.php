<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Activity;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardAkunController extends Controller
{

    public function index()
    {
        $akuns = User::paginate(10);

        return view('dashboard.akun.index', compact('akuns'));
    }

    public function create()
    {
        return view('dashboard.akun.create');
    }

    public function store(Request $request)
    {
        // validasi
        $validated = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required',
            'nama_depan' => 'required',
            'nama_belakang' => '',
            'nik' => 'required|unique:users',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'is_admin' => 'required',
        ]);

        // check avatar
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = Str::random(6) . '.' . $avatar->getClientOriginalExtension();

            // upload ke folder
            Storage::disk('public')->put($filename, file_get_contents($avatar));
            $validated['avatar'] = $filename;
        } else {
            $validated['avatar'] = 'avatar.png';
        }

        // simpan data ke database
        $akun = User::create([
            'username' => $validated['username'],
            'password' => bcrypt($validated['password']),
            'avatar' => $validated['avatar'],
            'nama_depan' => $validated['nama_depan'],
            'nama_belakang' => $validated['nama_belakang'],
            'nik' => $validated['nik'],
            'alamat' => $validated['alamat'],
            'rt' => $validated['rt'],
            'rw' => $validated['rw'],
            'kelurahan' => $validated['kelurahan'],
            'kecamatan' => $validated['kecamatan'],
            'is_admin' => $validated['is_admin'],
        ]);

        // log
        $log = new Activity();
        $log->log('Menambah akun dengan username ' . $akun->username);

        // redirect ke halaman show
        return redirect()->route('akun.show', $akun->id);
    }

    public function show($id)
    {
        $akun = User::findOrFail($id);

        return view('dashboard.akun.show', compact('akun'));
    }

    public function edit($id)
    {
        $akun = User::findOrFail($id);

        return view('dashboard.akun.edit', compact('akun'));
    }

    public function update(Request $request, $id)
    {
        // validasi
        $validated = $request->validate([
            'username' => 'required|unique:users,username,' . $id,
            'nama_depan' => 'required',
            'nama_belakang' => '',
            'nik' => 'required|unique:users,nik,' . $id,
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'kelurahan' => 'required',
            'kecamatan' => 'required',
            'is_admin' => 'required',
        ]);

        $akun = User::findOrFail($id);

        // check avatar
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = Str::random(6) . '.' . $avatar->getClientOriginalExtension();

            // upload ke folder
            Storage::disk('public')->put($filename, file_get_contents($avatar));
            $validated['avatar'] = $filename;
        } else {
            $validated['avatar'] = $akun->avatar;
        }

        // simpan data ke database
        $akun->update([
            'username' => $validated['username'],
            'avatar' => $validated['avatar'],
            'nama_depan' => $validated['nama_depan'],
            'nama_belakang' => $validated['nama_belakang'],
            'nik' => $validated['nik'],
            'alamat' => $validated['alamat'],
            'rt' => $validated['rt'],
            'rw' => $validated['rw'],
            'kelurahan' => $validated['kelurahan'],
            'kecamatan' => $validated['kecamatan'],
            'is_admin' => $validated['is_admin'],
        ]);

        // check password
        if ($request->has('password')) {
            $akun->update([
                'password' => bcrypt($request->password),
            ]);
        }

        // log
        $log = new Activity();
        $log->log('Mengubah akun dengan username ' . $akun->username);

        // redirect ke halaman show
        return redirect()->route('akun.show', $akun->id);
    }

    public function destroy($id)
    {
        $akun = User::findOrFail($id);
        $akun->delete();

        return redirect()->route('akun.index')->with('success', 'Data berhasil dihapus');
    }
}

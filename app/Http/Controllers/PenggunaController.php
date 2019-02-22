<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;

Use App\Pengguna;

use App\UserRole;

use App\User;

use Yajra\Datatables\Datatables;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role=Role::where('id','!=', 4)->get();

        return view('pengguna.index',compact('role'));
    }

    /**
     * Show the form for creating a new resource.s
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return Datatables::of(User::query()->whereIn('id_role',['1','2','3'])->orderBy('id','desc')->get())->addIndexColumn()->addColumn('action', function ($id){
        return '<a href="#" class="btn btn-xs btn-primary  edit-matkul"  did="'.$id->pengguna['id'].'"><i class="fa fa-pencil"></i> Edit</a>'
            ." ".
            '<a href="#" class="btn btn-xs btn-danger  hapus-matkul" did="'.$id->pengguna['id'].'">Hapus</a>';

        })->addColumn('status', function($data){
            return $data->role->role['name'];
        })->make(true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     if($request->has('aksi'))
     {

        if($request->input('aksi')==0) {

            $id=$request->input('id_pengguna');

            $result=Pengguna::where('id',$id)->update(
                ['nama_pengguna'=> $request->get('nama'),'keterangan'=> $request->get('keterangan')]);

            if($result){
                exit (json_encode(array('Sukses', 'Update Data berhasil', 'success')));
            }else{
                exit(json_encode(array('Ups', 'Update Data tidak berhasil', 'error')));

            }

        }elseif($request->input('aksi')==1) {

            //user

            $user = new User;

            $user->name =$request->nama;

            $user->email = $request->email;

            $user->id_role = $request->role;

            $user->password = bcrypt('123456');

            $user->save();

            //pengguna

            $pengguna = new Pengguna;

            $pengguna->nama = $request->nama;

            $pengguna->no_induk = $request->nip;

            $pengguna->no_tlp = $request->notlp;

            $pengguna->email =$request->email;

            $pengguna->id_user = $user->id;

            $pengguna->save();

            //User role

            $userRole          = new UserRole();
            $userRole->role_id = $request->role;
            $userRole->user_id = $user->id;
            $userRole->save();

            exit(json_encode(array('Sukses', 'Tambah Data <b>'.$request->get('nama').'</b> berhasil ', 'success')));
       }

   }

   if ($request->has('json_pengguna')){

    $id=$request->get('json_pengguna');

    $edit =Pengguna::where('id', $id)->get();

    return (json_encode($edit));
}

if ($request->has('hapus_pengguna')) {

    $id=$request->get('hapus_pengguna');

    $data=Pengguna::where('id',$id)->first();

    $result=Pengguna::where('id',$id)->delete();

    if($result){
        exit(json_encode(array('Sukses', ' Hapus nama  pengguna <b>'.$data->nama_pengguna.'</b> berhasil', 'success')));
    }else{
        exit(json_encode(array('Ups', 'Hapus nama  pengguna <b>'.$data->nama_pengguna.'</b>  tidak berhasil', 'error')));
    }

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

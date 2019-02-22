<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Materi;

use Validator;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'aksi' => 'required',
            'nama' => 'required'
        ]);

        if ($validator->fails()) {
            return json_encode(array('Hmm...', 'Anda dilarang otak atik form', 'error'));
        }

        if($request["aksi"] == 1) // tambah
        {

            $validator = Validator::make($request->all(), [
                'aksi' => 'required',
                'nama' => 'required',
                'keterangan' => 'required',
                'url' => 'nullable',
                'file' => 'nullable|mimes:pdf,doc'
            ]);

            if ($validator->fails()) {
                return json_encode(array('sts' => 0, 'message'=>['Ups', 'Ada yang salah pada saat pengiriman data', 'error']));
            }

            if($request->has('url'))
            {
                $save = Materi::create([
                    'nama_materi'=> $request->get('nama'),
                    'url'=> $request->get('url'),
                    'keterangan_materi'=> $request->get('keterangan'),
                    'id_kelas'=> $request->get('id_kelas')
                ]);

                $array = array('url'=> $request->get('url'), 'opsi'=>'url');
            }
            elseif ($request->hasfile('file')) 
            {
                $file = $request->file('file');
                $extension = $file->getClientOriginalExtension();
                $filename = time() .'.'. $extension;
                $file->move('template/assets/materi/', $filename);

                $save = Materi::create([
                    'nama_materi'=> $request->get('nama'),
                    'nama_file'=> $filename,
                    'keterangan_materi'=> $request->get('keterangan'),
                    'id_kelas'=> $request->get('id_kelas')
                ]);

                $array = array('url'=> $filename, 'opsi'=>'file');
            }

            $id = Materi::latest()->first();

            if($save){
                $output = array(
                            'sts' => 1,
                            'id' => $id->id,
                            'nama' => $request->get('nama'),
                            'keterangan' => $request->get('keterangan'),
                            'create' => get_time_difference_php($id->created_at),
                            'message'=> ['Sukses', 'Tambah materi berhasil', 'success']
                        );
                $output = array_merge($output, $array);
                exit(json_encode($output));
            }else{
                return json_encode(array('sts' => 2, 'message'=>['Ups', 'Simpan materi tidak berhasil', 'error']));
            }

        }
        else if($request["aksi"] == 2) // edit
        {

        }
        else
        {
            return json_encode(array('Hmm...', 'Anda dilarang otak atik form', 'error'));
        }
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

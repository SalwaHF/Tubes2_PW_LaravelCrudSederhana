<?php
    
    namespace App\Http\Controllers;
    use App\Makanan;
    use Illuminate\Http\Request;

    class MakananController extends Controller
    {
        /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function index()
        {
            $makanans = Makanan::orderBy('id', 'DESC')->paginate(5);
            return view('makanan.index', compact('makanans'));
        }

        /**
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function create()
        {
            return view('makanan.create');
        }

        /**
        * Store a newly created resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @return \Illuminate\Http\Response
        */
        public function store(Request $request)
        {
            $this->validate($request, [
                'nama_menu' => 'required',
                'kategori_menu' => 'required',
                'harga' => 'required'
            ]);

            $makanan = Makanan::create($request->all());

            return redirect()->route('makanan.index');
        }

        /**
        * Display the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function show($id)
        {
            $makanan = Makanan::findOrFail($id);
            return view('makanan.show', compact('makanan'));
        }

        /**
        * Show the form for editing the specified resource.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function edit($id)
        {
            $makanan = Makanan::findOrFail($id);
            return view('makanan.edit', compact('makanan'));
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
            $this->validate($request, [
                'nama_menu' => 'required',
                'kategori_menu' => 'required',
                'harga' => 'required'
            ]);

            $makanan = Makanan::findOrFail($id)->update($request->all());
            return redirect()->route('makanan.index');
        }

        /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
        public function destroy($id)
        {
            $makanan = Makanan::findOrFail($id)->delete();
            return redirect()->route('makanan.index');
        }
    }
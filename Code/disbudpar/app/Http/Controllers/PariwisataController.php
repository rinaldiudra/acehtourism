<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Kabupaten;
use App\Destinasi;
use App\Pemandu;
use App\Souvenir;
use App\Hotel;
use App\Travel;
use App\Kuliner;
use DataTables;
use Session;
use File;

class PariwisataController extends Controller
{
    public function index(){
        $destinasi = Destinasi::count();
        $hotel = Hotel::count();
        $pemandu = Pemandu::count();
        $travel = Travel::count();
        $souvenir = Souvenir::count();
        $kuliner = Kuliner::count();
        return view('user.index',['destinasi'=>$destinasi, 'pemandu'=>$pemandu, 'hotel'=>$hotel, 'travel'=>$travel, 'souvenir'=>$souvenir, 'kuliner'=>$kuliner]);
    }
    
    public function getKabupaten(){
    	$data = DB::table('kabupaten')->select('kabupaten.id','kabupaten.nama_kabupaten')->get();
    	echo json_encode($data);
    	exit;
	}
    
    //Halaman input Destinasi
	public function inputDestinasi(Request $request){
        $input = new Destinasi;

		$input->namaobjek = $request->namaobjek;
		$input->jenis = $request->jenis;
		$input->id_kabupaten = $request->id_kabupaten;
		$input->lokasi = $request->lokasi;
        $path = base_path()."/storage/app/foto";

        if ($request->hasfile('foto')){
            $nama_file = $request->file('foto')->getClientOriginalName(); 
            $request->file('foto')->move($path,$nama_file); 
         }else{
            $nama_file = "default.png";
         }

        $input->foto=$nama_file;
        $input->save();

        Session::flash('success_msg', 'Data Berhasil ditambahkan!');
        return redirect('/inputdestinasi');
	}
	
	public function halamanInputDestinasi()
    {
        return view('admin.inputdestinasi');
    }

    //Halaman input Pemandu
    public function inputPemandu(Request $request){
        $input = new Pemandu;

		$input->nama_pemandu = $request->nama_pemandu;
		$input->spesifikasi_bahasa = $request->spesifikasi_bahasa;
		$input->id_kabupaten = $request->id_kabupaten;
        $input->alamat = $request->alamat;
        $input->no_hp = $request->no_hp;
        $input->save();
        Session::flash('success_msg', 'Data Berhasil ditambahkan!');
        return redirect('/inputpemandu');
    }
    public function halamanInputPemandu()
    {
        return view('admin.inputpemandu');
    }

    //Halaman input Souvenir
	public function inputSouvenir(Request $request){
        $input = new Souvenir;

		$input->nama_usaha = $request->nama_usaha;
        $input->jenis_produk = $request->jenis_produk;
		$input->nama_pemilik = $request->nama_pemilik;
		$input->id_kabupaten = $request->id_kabupaten;
        $input->alamat = $request->alamat;
        $input->no_hp = $request->no_hp;
        $path = base_path()."/storage/app/foto";

        if ($request->hasfile('foto')){
            $nama_file = $request->file('foto')->getClientOriginalName(); 
            $request->file('foto')->move($path,$nama_file); 
         }else{
            $nama_file = "default.png";
         }

        $input->foto=$nama_file;
        $input->save();

        Session::flash('success_msg', 'Data Berhasil ditambahkan!');
        return redirect('/inputsouvenir');
	}
    
	public function halamanInputSouvenir()
    {
        return view('admin.inputsouvenir');
    }

    //Halaman input Hotel
    public function inputHotel(Request $request){
        $input = new Hotel;

		$input->nama_hotel = $request->nama_hotel;
        $input->kategori = $request->kategori;
		$input->pimpinan = $request->pimpinan;
		$input->id_kabupaten = $request->id_kabupaten;
        $input->alamat = $request->alamat;
        $input->no_telp = $request->no_telp;
        $input->jumlah_kamar = $request->jumlah_kamar;
        $input->detail_kamar = $request->detail_kamar;
        $path = base_path()."/storage/app/foto";

        if ($request->hasfile('foto')){
            $nama_file = $request->file('foto')->getClientOriginalName(); 
            $request->file('foto')->move($path,$nama_file); 
         }else{
            $nama_file = "default.png";
         }

        $input->foto=$nama_file;
        $input->save();

        Session::flash('success_msg', 'Data Berhasil ditambahkan!');
        return redirect('/inputhotel');
    }
    
    public function halamanInputHotel()
    {
        return view('admin.inputhotel');
    }

    //Halaman input Travel
    public function inputTravel(Request $request){
        $input = new Travel;
        $input->nama_travel = $request->nama_travel;
        $input->jenis = $request->jenis;
        $input->pimpinan = $request->pimpinan;
        $input->no_izin = $request->no_izin;
		$input->id_kabupaten = $request->id_kabupaten;
        $input->alamat = $request->alamat;
        $input->kontak = $request->kontak;
        $input->save();
        Session::flash('success_msg', 'Data Berhasil ditambahkan!');
        return redirect('/inputtravel');
    }
    public function halamanInputTravel()
    {
        return view('admin.inputtravel');
    }

    //Halaman input Kuliner
    public function inputKuliner(Request $request){
        $input = new Kuliner;
        $input->nama_kuliner = $request->nama_kuliner;
        $input->detail_kuliner = $request->detail_kuliner;
        $input->pemilik = $request->pemilik;
		$input->id_kabupaten = $request->id_kabupaten;
        $input->alamat = $request->alamat;
        $input->kontak = $request->kontak;
        $input->save();
        Session::flash('success_msg', 'Data Berhasil ditambahkan!');
        return redirect('/inputkuliner');
    }
    public function halamanInputKuliner()
    {
        return view('admin.inputkuliner');
    }


    //Halaman lihat Data Destinasi
    // public function halamanDataDestinasi(Request $request)
    // {
    //     if ($request->ajax()) {
    //         $datadestinasi = DB::table('destinasiwisata')->join('kabupaten','destinasiwisata.id_kabupaten','=','kabupaten.id')
    //         ->select('kabupaten.nama_kabupaten','destinasiwisata.namaobjek','destinasiwisata.jenis','destinasiwisata.lokasi','destinasiwisata.foto')
    //         ->get();
    //         return Datatables::of($datadestinasi)
    //                 ->addIndexColumn()
    //                 ->addColumn('action', function($row){
   
    //                        $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id_destinasi.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';
   
    //                        $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id_destinasi.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';
    
    //                         return $btn;
    //                 })
    //                 ->rawColumns(['action'])
    //                 ->make(true);
    //     }
    //     return view('admin.datadestinasi');
    // }

    //Halaman Data Destinasi Admin
    public function halamanDataDestinasi(){
        $search = \Request::get('search');

        $data = DB::table('destinasiwisata')->join('kabupaten','destinasiwisata.id_kabupaten','=','kabupaten.id')
            ->select('destinasiwisata.id','kabupaten.nama_kabupaten','destinasiwisata.namaobjek','destinasiwisata.jenis','destinasiwisata.lokasi','destinasiwisata.foto')
            ->where('destinasiwisata.namaobjek','like', '%'.$search.'%')
            ->orWhere('destinasiwisata.id','like', '%'.$search.'%')
            ->orWhere('kabupaten.nama_kabupaten', 'like', '%'.$search.'%')
            ->orWhere('destinasiwisata.jenis', 'like', '%'.$search.'%')
            ->orWhere('destinasiwisata.lokasi', 'like', '%'.$search.'%')
            ->paginate(10);
            return view('admin.datadestinasi',['data'=>$data]);
    }

    //Halaman Data Pemandu Admin
    public function halamanDataPemandu(){
        $search = \Request::get('search');

        $data = DB::table('pemanduwisata')->join('kabupaten','pemanduwisata.id_kabupaten','=','kabupaten.id')
            ->select('pemanduwisata.id','kabupaten.nama_kabupaten','pemanduwisata.nama_pemandu','pemanduwisata.alamat','pemanduwisata.spesifikasi_bahasa','pemanduwisata.no_hp')
            ->where('pemanduwisata.id','like', '%'.$search.'%')
            ->orWhere('kabupaten.nama_kabupaten','like', '%'.$search.'%')
            ->orWhere('pemanduwisata.nama_pemandu','like', '%'.$search.'%')
            ->orWhere('pemanduwisata.alamat','like', '%'.$search.'%')
            ->orWhere('pemanduwisata.spesifikasi_bahasa','like', '%'.$search.'%')
            ->orWhere('pemanduwisata.no_hp','like', '%'.$search.'%')
            ->paginate(10);
            return view('admin.datapemandu',['data'=>$data]);
    }

    //Halaman Data Souvenir Admin
    public function halamanDataSouvenir(){
        $search = \Request::get('search');

        $data = DB::table('souvenir')->join('kabupaten','souvenir.id_kabupaten','=','kabupaten.id')
            ->select('souvenir.id','kabupaten.nama_kabupaten','souvenir.nama_usaha','souvenir.alamat','souvenir.nama_pemilik','souvenir.jenis_produk','souvenir.no_hp', 'souvenir.foto')
            ->where('souvenir.id','like', '%'.$search.'%')
            ->orWhere('kabupaten.nama_kabupaten','like', '%'.$search.'%')
            ->orWhere('souvenir.nama_usaha','like', '%'.$search.'%')
            ->orWhere('souvenir.alamat','like', '%'.$search.'%')
            ->orWhere('souvenir.nama_pemilik','like', '%'.$search.'%')
            ->orWhere('souvenir.jenis_produk','like', '%'.$search.'%')
            ->orWhere('souvenir.no_hp','like', '%'.$search.'%')
            ->paginate(10);
            return view('admin.datasouvenir',['data'=>$data]);
    }

    //Halaman Data Hotel Admin
    public function halamanDataHotel(){
        $search = \Request::get('search');

        $data = DB::table('hotel')->join('kabupaten','hotel.id_kabupaten','=','kabupaten.id')
            ->select('hotel.id','kabupaten.nama_kabupaten','hotel.nama_hotel','hotel.kategori','hotel.pimpinan','hotel.alamat','hotel.no_telp', 'hotel.jumlah_kamar','hotel.detail_kamar','hotel.foto')
            ->where('hotel.id','like', '%'.$search.'%')
            ->orWhere('kabupaten.nama_kabupaten','like', '%'.$search.'%')
            ->orWhere('hotel.nama_hotel','like', '%'.$search.'%')
            ->orWhere('hotel.kategori','like', '%'.$search.'%')
            ->orWhere('hotel.pimpinan','like', '%'.$search.'%')
            ->orWhere('hotel.alamat','like', '%'.$search.'%')
            ->orWhere('hotel.no_telp','like', '%'.$search.'%')
            ->orWhere('hotel.jumlah_kamar','like', '%'.$search.'%')
            ->orWhere('hotel.detail_kamar','like', '%'.$search.'%')
            ->paginate(10);
            return view('admin.datahotel',['data'=>$data]);
    }

    //Halaman Data Travel Admin
    public function halamanDataTravel(){
        $search = \Request::get('search');

        $data = DB::table('travel')->join('kabupaten','travel.id_kabupaten','=','kabupaten.id')
            ->select('travel.id','kabupaten.nama_kabupaten','travel.nama_travel','travel.jenis','travel.pimpinan','travel.alamat','travel.no_izin','travel.kontak')
            ->where('travel.id','like', '%'.$search.'%')
            ->orWhere('kabupaten.nama_kabupaten','like', '%'.$search.'%')
            ->orWhere('travel.nama_travel','like', '%'.$search.'%')
            ->orWhere('travel.jenis','like', '%'.$search.'%')
            ->orWhere('travel.pimpinan','like', '%'.$search.'%')
            ->orWhere('travel.alamat','like', '%'.$search.'%')
            ->orWhere('travel.no_izin','like', '%'.$search.'%')
            ->orWhere('travel.kontak','like', '%'.$search.'%')
            ->paginate(10);
            return view('admin.datatravel',['data'=>$data]);
    }

    //Halaman Data Kuliner Admin
    public function halamanDataKuliner(){
        $search = \Request::get('search');

        $data = DB::table('kuliner')->join('kabupaten','kuliner.id_kabupaten','=','kabupaten.id')
            ->select('kuliner.id','kabupaten.nama_kabupaten','kuliner.nama_kuliner','kuliner.detail_kuliner','kuliner.pemilik','kuliner.alamat','kuliner.kontak')
            ->where('kuliner.id','like', '%'.$search.'%')
            ->orWhere('kabupaten.nama_kabupaten','like', '%'.$search.'%')
            ->orWhere('kuliner.nama_kuliner','like', '%'.$search.'%')
            ->orWhere('kuliner.detail_kuliner','like', '%'.$search.'%')
            ->orWhere('kuliner.pemilik','like', '%'.$search.'%')
            ->orWhere('kuliner.alamat','like', '%'.$search.'%')
            ->orWhere('kuliner.kontak','like', '%'.$search.'%')
            ->paginate(10);
            return view('admin.datakuliner',['data'=>$data]);
    }

    //Halaman Edit Travel
    public function editTravel($id){
        $primary = $id;
        $travel = Travel::find($primary);
        return view('admin.edittravel')->with('travel', $travel);
    }

    public function updateTravel($id, Request $request){
        $primary = $id;
        $travel = $request->all();
        $travel = Travel::find($primary)->update($travel);
        Session::flash('success_msg', 'Data berhasil diupdate!');
        return redirect()->route('datatravel',['travel'=>$primary])->with('travel',$travel);
    }

    //Halaman Edit Destinasi 
    public function editDestinasi($id){
        $primary = $id;
        $destinasi = Destinasi::find($primary);
        return view('admin.editdestinasi')->with('destinasi', $destinasi);
    }

    public function updateDestinasi($id, Request $request){
        $primary = $id;
        $destinasi = $request->all();
        $destinasi = Destinasi::find($primary)->update($destinasi);
        Session::flash('success_msg', 'Data berhasil diupdate!');
        return redirect()->route('datadestinasi',['destinasi'=>$primary])->with('destinasi',$destinasi);
    }

    //Halaman Edit Pemandu
    public function editPemandu($id){
        $primary = $id;
        $pemandu = Pemandu::find($primary);
        return view('admin.editpemandu')->with('pemandu', $pemandu);
    }

    public function updatePemandu($id, Request $request){
        $primary = $id;
        $pemandu = $request->all();
        $pemandu = Pemandu::find($primary)->update($pemandu);
        Session::flash('success_msg', 'Data berhasil diupdate!');
        return redirect()->route('datapemandu',['pemandu'=>$primary])->with('pemandu',$pemandu);
    }

    //Halaman Edit Hotel
    public function editHotel($id){
        $primary = $id;
        $hotel = Hotel::find($primary);
        return view('admin.edithotel')->with('hotel', $hotel);
    }

    public function updateHotel($id, Request $request){
        $primary = $id;
        $hotel = $request->all();
        $hotel = Hotel::find($primary)->update($hotel);
        Session::flash('success_msg', 'Data berhasil diupdate!');
        return redirect()->route('datahotel',['hotel'=>$primary])->with('hotel',$hotel);
    }

    //Halaman Edit Souvenir
    public function editSouvenir($id){
        $primary = $id;
        $souvenir = Souvenir::find($primary);
        return view('admin.editsouvenir')->with('souvenir', $souvenir);
    }

    public function updateSouvenir($id, Request $request){
        $primary = $id;
        $souvenir = $request->all();
        $souvenir = Souvenir::find($primary)->update($souvenir);
        Session::flash('success_msg', 'Data berhasil diupdate!');
        return redirect()->route('datasouvenir',['hotel'=>$primary])->with('souvenir',$souvenir);
    }

    //Halaman Edit Kuliner
    public function editKuliner($id){
        $primary = $id;
        $kuliner = Kuliner::find($primary);
        return view('admin.editkuliner')->with('kuliner', $kuliner);
    }

    public function updateKuliner($id, Request $request){
        $primary = $id;
        $kuliner = $request->all();
        $kuliner = Kuliner::find($primary)->update($kuliner);
        Session::flash('success_msg', 'Data berhasil diupdate!');
        return redirect()->route('datakuliner',['kuliner'=>$primary])->with('kuliner',$kuliner);
    }

    // public function editDestinasi($id_destinasi){
    //     //$primary = $id_destinasi;
    //     //$destinasi = Destinasi::find($primary);

    //     $destinasi = Destinasi::find($id_destinasi);

    //     return view('admin.editdestinasi', compact(['destinasi']));
    // }

    // public function updateDestinasi(Request $request, $id_destinasi){
    //     $destinasi = Destinasi::find($id_destinasi);
    
    // return redirect()->route('admin.datadestinasi');
    // }

    // //HalamanDeleteDestinasi
    // public function delete($id_destinasi){
    //     $destinasi = Destinasi::where('id_destinasi',$id_destinasi)->firstOrFail();
    //     $destinasi->delete();

    //     return view ('admin.datadestinasi');
    // }


    // public function editDataDestinasi($id_destinasi, Request $request){
    //     $primary = $id_destinasi;
    //     $destinasi = $request->all();
    //     $destinasi = Destinasi::find($primary)->update($destinasi);
    //     Session::flash('success_msg', 'Data Destinasi berhasil diupdate!');
    //     return redirect()->route('editdestinasi',['datadestinasi'=> $primary])->with('destinasi', $destinasi);
    // }

    //Hapus Data Destinasi
    public function hapusDestinasi($id){
        DB::table('destinasiwisata')->where('id',$id)->delete();
        Session::flash('success_msg', 'Data telah dihapus!');
        return redirect('/datadestinasi');
    }

    //Hapus Data Pemandu
    public function hapusPemandu($id){
        DB::table('pemanduwisata')->where('id',$id)->delete();
        Session::flash('success_msg', 'Data telah dihapus!');
        return redirect('/datapemandu');
    }

    //Hapus Data Hotel
    public function hapusHotel($id){
        DB::table('hotel')->where('id',$id)->delete();
        Session::flash('success_msg', 'Data telah dihapus!');
        return redirect('/datahotel');
    }

    //Hapus Data Souvenir
    public function hapusSouvenir($id){
        DB::table('souvenir')->where('id',$id)->delete();
        Session::flash('success_msg', 'Data telah dihapus!');
        return redirect('/datasouvenir');
    }

    //Hapus Data Travel
    public function hapusTravel($id){
        DB::table('travel')->where('id',$id)->delete();
        Session::flash('success_msg', 'Data telah dihapus!');
        return redirect('/datatravel');
    }

    //Hapus Data Kuliner
    public function hapusKuliner($id){
        DB::table('kuliner')->where('id',$id)->delete();
        Session::flash('success_msg', 'Data telah dihapus!');
        return redirect('/datakuliner');
    }

    //Halaman Destinasi User
    public function halamanDestinasi()
    {
        $kabupaten = Kabupaten::paginate(25);
        return view('user.destinasiwisata',['kabupaten'=>$kabupaten]);
    }

    //Halaman destinasi di kabupaten yang dipilih
    public function lihatDestinasi($id){
        $kab = DB::table('kabupaten')
        ->select ('nama_kabupaten')->where('id', '=', $id)
        ->get();

        $data = DB::table('destinasiwisata')->join('kabupaten','destinasiwisata.id_kabupaten','=','kabupaten.id')
        ->select ('kabupaten.nama_kabupaten','destinasiwisata.namaobjek','destinasiwisata.jenis', 'destinasiwisata.lokasi', 'destinasiwisata.foto')
        ->where('destinasiwisata.id_kabupaten', '=', $id)
        ->paginate(8);
        return view('user.lihatdestinasi',['data'=>$data, 'kab'=>$kab]);
    }

    //Halaman Pemandu User
    public function halamanPemandu()
    {
        $kabupaten = Kabupaten::paginate(25);
        return view('user.pemanduwisata',['kabupaten'=>$kabupaten]);
    }
    
    //Halaman pemandu di kabupaten yang dipilih
    public function lihatPemandu($id){
        $kab = DB::table('kabupaten')
        ->select ('nama_kabupaten')->where('id', '=', $id)
        ->get();

        $data = DB::table('pemanduwisata')->join('kabupaten','pemanduwisata.id_kabupaten','=','kabupaten.id')
        ->select ('kabupaten.nama_kabupaten','pemanduwisata.nama_pemandu','pemanduwisata.spesifikasi_bahasa', 'pemanduwisata.alamat', 'pemanduwisata.no_hp')
        ->where('pemanduwisata.id_kabupaten', '=', $id)
        ->paginate(8);
        return view('user.lihatpemandu',['data'=>$data, 'kab'=>$kab]);
    }

    //Halaman Souvenir User
    public function halamanSouvenir()
    {
        $kabupaten = Kabupaten::paginate(25);
        return view('user.souvenir',['kabupaten'=>$kabupaten]);
    }
    
    //Halaman Souvenir di kabupaten yang dipilih
    public function lihatSouvenir($id){
        $kab = DB::table('kabupaten')
        ->select ('nama_kabupaten')->where('id', '=', $id)
        ->get();

        $data = DB::table('souvenir')->join('kabupaten','souvenir.id_kabupaten','=','kabupaten.id')
        ->select ('kabupaten.nama_kabupaten','souvenir.nama_usaha','souvenir.nama_pemilik', 'souvenir.jenis_produk', 'souvenir.alamat','souvenir.no_hp','souvenir.foto')
        ->where('souvenir.id_kabupaten', '=', $id)
        ->paginate(8);
        return view('user.lihatsouvenir',['data'=>$data, 'kab'=>$kab]);
    }

    //Halaman Hotel User
    public function halamanHotel()
    {
        $kabupaten = Kabupaten::paginate(25);
        return view('user.hotel',['kabupaten'=>$kabupaten]);
    }
    
    //Halaman Hotel di kabupaten yang dipilih
    public function lihatHotel($id){
        $kab = DB::table('kabupaten')
        ->select ('nama_kabupaten')->where('id', '=', $id)
        ->get();

        $data = DB::table('hotel')->join('kabupaten','hotel.id_kabupaten','=','kabupaten.id')
        ->select ('kabupaten.nama_kabupaten','hotel.nama_hotel','hotel.kategori','hotel.pimpinan','hotel.alamat','hotel.no_telp','hotel.foto','hotel.jumlah_kamar','hotel.detail_kamar')
        ->where('hotel.id_kabupaten', '=', $id)
        ->paginate(8);
        return view('user.lihathotel',['data'=>$data, 'kab'=>$kab]);
    }

    //Halaman Travel User
    public function halamanTravel()
    {
        $kabupaten = Kabupaten::paginate(25);
        return view('user.travel',['kabupaten'=>$kabupaten]);
    }
    
    //Halaman Travel di kabupaten yang dipilih
    public function lihatTravel($id){
        $kab = DB::table('kabupaten')
        ->select ('nama_kabupaten')->where('id', '=', $id)
        ->get();

        $data = DB::table('travel')->join('kabupaten','travel.id_kabupaten','=','kabupaten.id')
        ->select ('kabupaten.nama_kabupaten','travel.nama_travel','travel.jenis','travel.pimpinan','travel.alamat','travel.kontak','travel.no_izin')
        ->where('travel.id_kabupaten', '=', $id)
        ->paginate(8);
        return view('user.lihattravel',['data'=>$data, 'kab'=>$kab]);
    }

    //Halaman Kuliner User
    public function halamanKuliner()
    {
        $kabupaten = Kabupaten::paginate(25);
        return view('user.kuliner',['kabupaten'=>$kabupaten]);
    }
    
    //Halaman Kuliner di kabupaten yang dipilih
    public function lihatKuliner($id){
        $kab = DB::table('kabupaten')
        ->select ('nama_kabupaten')->where('id', '=', $id)
        ->get();

        $data = DB::table('kuliner')->join('kabupaten','kuliner.id_kabupaten','=','kabupaten.id')
        ->select ('kabupaten.nama_kabupaten','kuliner.nama_kuliner','kuliner.detail_kuliner','kuliner.pemilik','kuliner.alamat','kuliner.kontak')
        ->where('kuliner.id_kabupaten', '=', $id)
        ->paginate(8);
        return view('user.lihatkuliner',['data'=>$data, 'kab'=>$kab]);
    }


}

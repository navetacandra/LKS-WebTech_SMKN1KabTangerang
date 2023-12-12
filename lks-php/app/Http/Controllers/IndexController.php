<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Place;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class IndexController extends Controller
{

    public function detail($id){

//        menagmbil data berserta memebuat relasi
        $data = Place::query()->where('id' , $id)->with('faq')->get();

        return view('detail' , ['data' =>  $data]);
    }

    public function order($id  , Request $request){


        $userId = $request->user();

//        menagmbil data
        $user = User::query()->where('id'   , $userId)->get();

        $data = Place::query()->where('id' , $id)->get();

        return view('order' , [
            'data' => $data ,
            'user' => $user
            ]);
    }

    public function history(Request  $request){

        $userId = $request->user()->id;
//        menagmbil data berserta memebuat relasi
        $data = Order::query()->where('user_id' , $userId)->with('place')->with('user')->orderBy('id' ,'desc')->get();

        return view('history' , ['data' =>$data]);
    }

    public function profile(Request $request){

        $userId  =  $request->user()->id;
        $user = User::query()->where('id' , $userId)->first();
//        menagmbil data berserta memebuat relasi
        $data = Order::query()->where('user_id' , $userId)->with('place')->with('user')->orderBy('id' ,'desc')->get();

        return view('profile' , ['data' => $user , 'dataOrder' => $data]);
    }


    public function orderL(Request  $request)
    {

        $userId = $request->user()->id;

//      Mengambil data
        $request->validate([
            'place_id',
            'quantity',
            'basePrice',
            'payment_methode',
        ]);

        $user = User::query()->where('id', $userId)->first();

        $place_id = $request->input('place_id');

        if (!$user) {
            return redirect()->route('home')->withErrors(['error' => 'Tolong pilih tempat wisata']);
        }

        $quantity = $request->input('quantity');

        $balance = $user->balance;
        $price = $request->input('basePrice');

        $payment_methode = $request->input('payment_methode');

//      cek jika metode pemabayan null
        if (is_null($payment_methode)) {
            return redirect()->route('order', ['id' => $place_id])->withErrors(['error' => 'Terjadi kesalahan']);
        }

//      Meembuat total
        $total = $price * $quantity;
        DB::beginTransaction();

        try {

            if ($payment_methode === "e-wallet") {
//                cek jika saldo lebih besar dari pada total
                if ($balance > $total) {
//                membuat orderan
                    Order::query()->insert([
                        'total' => $total,
                        'quantity' => $quantity,
                        'user_id' => $userId,
                        'status' => 'Sukses',
                        'place_id' => $place_id,
                        'date' => now()->year . "-" . now()->month . "-" . now()->day,
                    ]);
                    DB::commit();
                    return redirect()->route('history')->withErrors(['error' => 'Anda berhasil memesan tiket, jangan lupa untuk mengunjungi.']);
                } elseif ($balance < $total) {
                    DB::rollBack();
                    return redirect()->route('order', ['id' => $place_id])->withErrors(['error' => 'Maaf saldo anda tidak cukup, silakan pilih metode pemabayaran lain.']);
                }
            } elseif ($payment_methode === "cash") {
//                membuat orderan
                Order::query()->insert([
                    'total' => $total,
                    'quantity' => $quantity,
                    'user_id' => $userId,
                    'status' => 'Menungggu pembayaran',
                    'place_id' => $place_id,
                    'date' => now()->year . "-" . now()->month . "-" . now()->day,
                ]);
                DB::commit();
                return redirect()->route('history')->withErrors(['error' => 'Anda berhasil memesan tiket, jangan lupa untuk membayar di loket pemesanan.']);
            }

        } catch (\Exception $e) {
                DB::rollBack();
                Log::error($e);
                return redirect()->route('order', ['id' => $place_id])->withErrors(['error' => 'Terjadi kesalahan']);
            }
        }

}

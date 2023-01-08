<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Transaction;
use App\Models\TransactionDetail;

class TransactionController extends Controller
{
    public function index() {
        $transactions = Transaction::where('user_id', 1)
                                ->select('transactions.id', 'transactions.order_id', 'transactions.ongkir', 'users.name')
                                ->join('users', 'users.id', '=', 'transactions.user_id')
                                ->get();
        
        $transaction_id = [];

        foreach($transactions as $data){
            array_push($transaction_id, $data->id);
        }

        $transaction_detail = TransactionDetail::join('products', 'products.id', '=', 'transaction_detail.product_id')
        ->whereIn('transaction_detail.transaction_id', $transaction_id)->get();

        return view('transaction.history', ['history' => $transactions, 'details' => $transaction_detail]);
    }

    public function checkout() {
        $carts = Cart::where('user_id', 1)
                        ->join('products', 'products.id', '=', 'carts.product_id')
                        ->get();

        if(count($carts) == 0) {
            return redirect('transaction');
        }

        $total = 0;

        foreach($carts as $item) {
            $total += $item->qty * $item->price;
        }
        $orderID = 'ORDER-'.date('Ymd').date('His');
        $transaction = Transaction::create([
            'order_id' => $orderID,
            'user_id' => 1,
            'total' => $total,
            'ongkir' => 20000,
            'transaction_date' => date('Y-m-d') 
        ]);
        
        $transaction_detail = [];

        foreach($carts as $item) {
            array_push($transaction_detail, [
                'transaction_id' => $transaction->id,
                'product_id' => $item->product_id,
                'qty' => $item->qty,
                'price' => $item->price
            ]);
        }

        $detail = TransactionDetail::insert($transaction_detail);

        if($detail) {
            Cart::where('user_id', 1)->delete();

            return redirect('/transaction');
        }
        
    }
}

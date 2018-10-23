<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Client;
use App\Http\Controllers\Response;

class UploadController extends Controller
{
    //
    public function show(){
        return view('sales/add');
    }
    public function add($id, Request $request){
        $file = $request->file;
        $client = Client::find($id);
        $filename = date('Y-m-d') .'_' .date('h-i-s').'.pdf';

        $path = Storage::disk('uploads')->put($id.'/'. $filename, $file);
        $hash = basename($path);

        $invoice_store = [
            'client_id'=>$id,
            'invoice_link'=> $filename,
            'hash'=>trim($hash, '.pdf')
        ];

        Invoice::create($invoice_store);

        return redirect()->route('invoice.show', $id);



//        return response()->download(storage_path('app\\'.$id.'\\'.$filename));

    }
    public function download($id, $link)
    {
        $hash = Invoice::select('hash')->where('client_id', $id)->where('invoice_link', $link)->get();

        $file = public_path().'\\uploads\\'.$id.'\\'.$link.'\\'.$hash[0]['hash'].'.pdf';
        $headers = array('Content-Type: application/pdf',);
        return response()->download($file, $link,$headers);
    }

    public function delete($id, $link){
        $hash = Invoice::select('hash')->where('client_id', $id)->where('invoice_link', $link)->get();
        $file = [
            'id'=>$id,
            'link'=>$link,
            'hash'=>$hash[0]['hash']
        ];

        Storage::disk('uploads')->deleteDirectory($id.'/'. $file['link']);
        Invoice::where('client_id',$id)->where('invoice_link', $link)->delete();

        return redirect()->route('invoice.show', $id);
    }
    public function invoice($id, $link){
        $hash = Invoice::select('hash')->where('client_id', $id)->where('invoice_link', $link)->get();
        $file = [
            'id'=>$id,
            'link'=>$link,
            'hash'=>$hash[0]['hash']
        ];

        return view('sales/show')
            ->with('file', $file);

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\BookingDetail;
use App\Models\Room;
use Illuminate\Http\Request;
use Xendit\Configuration;
use Xendit\Invoice;
use Xendit\Invoice\InvoiceApi;
use Xendit\Invoice\CreateInvoiceRequest;


use Illuminate\Support\Str;

class BookingController extends Controller
{

    public function __construct()
    {
        // Xendit Key Triphita Key T1
        Configuration::setXenditKey("xnd_development_5368jZ0lqGWF52gJO8AfjboVPkV9l9MX8IJDJl7jRxrO3AjsLcKmoAZVX9tTni");
        $this->xenditInvoiceApi = new InvoiceApi();
    }

    public function booking(Request $request)
    {

        $params = [
            'external_id' => (string) Str::uuid(),
            'payer_email' => $request -> payer_email,
            'amount' => $request -> totalPrice,
            'redirect_url' => 'github.com'
        ];

        // PERLU DICEK MANA YANG BISA DIREMOVE BAGIAN CREATE_INVOICE_VARIABLE NYA
        $apiInstance = new InvoiceApi();
        $createInvoice = new CreateInvoiceRequest($params);

        $create_invoice_request = new CreateInvoiceRequest([
            'external_id' => (string) Str::uuid(),
            'description' => 'Test Invoice',
            // 'amount' =>  (int)$request->input('totalPrice'),
            'amount' => 130000,
            'invoice_duration' => 172800,
            'currency' => 'IDR',
            'reminder_time' => 1
          ]);

        $for_user_id = "62efe4c33e45694d63f585f0"; // string | Business ID of the sub-account merchant (XP feature)

        try {
            $result = $apiInstance->createInvoice($create_invoice_request);

        return redirect($result['invoice_url']);

        } catch (\Xendit\XenditSdkException $e) {
            echo 'Exception when calling InvoiceApi->createInvoice: ', $e->getMessage(), PHP_EOL;
            echo 'Full Error: ', json_encode($e->getFullError()), PHP_EOL;
        }

        // save to db
        $booking = new BookingDetail();
        $booking->room_id = 1;
        // $booking->checkout_link = $create_invoice_request['invoice_url'];
        $booking->checkout_link = 'test_checkout_link';
        $booking->external_id = $params['external_id'];
        $booking->full_name = "webe2";
        $booking->email = "webe@gmail.com";
        $booking->status = 'pending';
        $booking->save();

        return response()->json(['data' => $create_invoice_request['invoice_url']]);

            try {
                // Generate unique external ID
                $externalId = (string) Str::uuid();
        
                // Prepare Xendit invoice parameters
                $params = [
                    'external_id' => $externalId,
                    'payer_email' => $request->input('email'),
                    'amount' => (int)$request->input('amount'), // Ensure amount is numeric
                    'redirect_url' => url('/success'), // Redirect URL after successful payment
                ];
        
                // Call Xendit API to create invoice
                $apiInstance = new InvoiceApi();
                $invoice = $apiInstance->createInvoice($params);
        
                // Save to database
                $booking = new BookingDetail();
                $booking->room_id = 1; // Replace with dynamic room ID if needed
                $booking->checkout_link = $invoice['invoice_url']; // Assign the generated invoice URL
                $booking->external_id = $externalId;
                $booking->full_name = $request->input('full_name');
                $booking->email = $request->input('email');
                $booking->status = 'pending';
                $booking->save();
        
                // Redirect to Xendit invoice URL
                return redirect($invoice['invoice_url']);

            } catch (\Exception $e) {
                // Log the error and return a friendly message
                \Log::error('Error creating invoice: ' . $e->getMessage());
                return redirect()->back()->withErrors(['error' => 'Failed to create invoice. Please try again later.']);
            }

    }

}

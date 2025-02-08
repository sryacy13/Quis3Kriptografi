<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function qrcode (Request $request)
    {
        // Get the text and size from the request, with default values
        $text = $request->get('text', 'Default Text'); 
        $size = (int) $request->get('size', 200); 

        // Generate the QR code
        try {
            // Generate QR code as an SVG string
            $qrCode = QrCode::size($size)->generate($text); 
        } catch (\Exception $e) {
            // Redirect with an error message if QR code generation fails
            return redirect()->back()->with('error', 'Failed to generate QR Code. Please try again.');
        }

        // Pass the QR code to the view for rendering
        return view('qrcode.qrcode', compact('qrCode'));
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\HotelRoom;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

class RoomQrController extends Controller
{
    public function generate(HotelRoom $hotelRoom)
    {
        $url = 'http://localhost:3000/?room=' . urlencode($hotelRoom->room_number);

        $qrCode = new QrCode(
            data: $url,
            size: 300,
            margin: 10
        );

        $writer = new PngWriter();
        $result = $writer->write($qrCode);

        return response($result->getString())
            ->header('Content-Type', $result->getMimeType());
    }
}
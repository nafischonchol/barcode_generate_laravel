<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel Generate Barcode Examples</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <div class="container mt-4">
        
       
        @php
            $code = rand();
        @endphp
        {{$code}}
        <div class="mb-3">{!! DNS1D::getBarcodeHTML($code, 'CODABAR',2,33) !!}</div>
        {{-- here, 2 and 33 is width and height --}}

        {{-- More type of barcode --}}
        {{-- <div class="mb-3">{!! DNS2D::getBarcodeHTML('4445645656', 'QRCODE') !!}</div>
        <div class="mb-3">{!! DNS1D::getBarcodeHTML('4445645656', 'PHARMA') !!}</div>
        <div class="mb-3">{!! DNS1D::getBarcodeHTML('4445645656', 'PHARMA2T') !!}</div>
        <div class="mb-3">{!! DNS1D::getBarcodeHTML('4445645656', 'CODABAR') !!}</div>
        <div class="mb-3">{!! DNS1D::getBarcodeHTML('4445645656', 'KIX') !!}</div>
        <div class="mb-3">{!! DNS1D::getBarcodeHTML('4445645656', 'RMS4CC') !!}</div>
        <div class="mb-3">{!! DNS1D::getBarcodeHTML('4445645656', 'UPCA') !!}</div>   --}}
               
    </div>
</body>
</html>
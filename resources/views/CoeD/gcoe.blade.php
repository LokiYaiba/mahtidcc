
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate of Employment</title>
    <style>
        @font-face {
            font-family: 'Open Sans';
            src: url('D:/certificates/open-sans_5.0.29.ttf') format('truetype');
            font-weight: 500;
            font-style: normal;
        }
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            font-family: 'Open Sans', sans-serif;
        }

        .certificate {
            background-color: rgb(223, 117, 117);
            position: relative;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1;
            width: 297mm; /* A4 width in landscape */
            height: 210mm; /* A4 height in landscape */
            overflow: hidden;
            margin: 0; /* Ensure no margins for the certificate */
            padding: 0; /* Ensure no padding for the certificate */
        }

        .certificate img {
            width: 100%;
            height: auto;
            position: relative;
            z-index: 1;
            margin: 0;
            padding: 0;
        }

        .text-overlay {
            position: absolute;
            top: 48%; 
            left: 31.5%; 
            transform: translate(-50%, -50%);
            z-index: 2;
            font-size: 22px;
            color: #000;
            font-weight: 800;
        }

        .text-overlay1 {
            position: absolute;
            top: 64.3%; 
            left: 40%; 
            transform: translate(-50%, -50%);
            z-index: 2;
            font-size: 18px;
            color: #000;
            font-weight: bold;
        }

        .text-overlay2 {
            position: absolute;
            top: 64.3%; 
            left: 63.9%; 
            transform: translate(-50%, -50%);
            z-index: 2;
            font-size: 18px;
            color: #000;
            font-weight: bold;
        }

        .text-overlay3 {
            position: absolute;
            top: 76.5%; 
            left: 54.4%; 
            transform: translate(-50%, -50%);
            z-index: 2;
            font-size: 18px;
            color: #000;
            font-weight: bold;
        }

        .container-name {
            display: flex;
            align-items: center;
            z-index: 3;
            position: absolute;
            top: 41.5%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: calc(297mm - 20mm); /* Adjusted to ensure it fits within A4 landscape */
            text-align: center;
            justify-content: center;
        }

        .text-overlay4 {
            font-size: 43px;
            color: #000;
            text-transform: uppercase;
            font-weight: 800;
            display: inline;
        }

        .text-overlay4 p {
            display: inline-block;
            margin: 0;
        }

        .text-overlay5 {
            position: absolute;
            top: 54.5%; 
            left: 50.1%; 
            transform: translate(-50%, -50%);
            z-index: 2;
            font-size: 24px;
            color: #000;
            font-weight: 800;
        }

        .text-overlay6 {
            position: absolute;
            top: 48.3%; 
            left: 31.3%; 
            transform: translate(-50%, -50%);
            z-index: 2;
            font-size: 20px;
            color: #000;
            font-weight: 800;
        }
        .text-overlay7 {
            position: absolute;
            top: 57.1%; 
            left: 50%; 
            transform: translate(-50%, -50%);
            z-index: 2;
            font-size: 15px;
            color: #000;
            font-weight: normal;
        }

        @media print {
            @page {
                size: A4 landscape;
                margin: 0; /* Set zero margins for printing */
            }

            body {
                margin: 0;
                padding: 0;
                height: auto;
                background-color: #fff;
            }

            .certificate {
                margin: 0; /* Ensure no margins for the certificate */
                padding: 0; /* Ensure no padding for the certificate */
            }
        }
    </style>
</head>
<body>
    <div class="certificate">
        <img src="{{ asset('images/COE Final.png') }}" alt="Certificate of Employment">
        <div class="text-overlay"></div>
        <div class="text-overlay1">
            <p>{{ $coe-> sday }}</p>
        </div>
        <div class="text-overlay2">
            <p>{{ $coe-> eday }}</p>
        </div>
        <div class="text-overlay3">
            <p>{{ $coe-> gday }}</p>
        </div>
        <div class="container-name">
            <div class="text-overlay4">
                <p>{{ $coe-> fname }} </p>
                <p>{{ $coe-> mname }} </p>
                <p>{{ $coe-> lname }}</p>
            </div>
        </div>
        <div class="text-overlay5">
            <p>{{ $coe-> position }}</p>
        </div>
        <div class="text-overlay7">
            <p>({{ $coe-> dept }})</p>
        </div>
        <div class="text-overlay6">
            <p>{{ $coe-> jtype }}</p>
        </div>
    </div>
</body>
</html>

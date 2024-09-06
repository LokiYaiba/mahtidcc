
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate of Employment</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap">
    <style>
        /* General styles for display */
        @font-face {
            font-family: 'Open Sans';
            src: url('open-sans-cyrillic-500-normal.woff') format('woff'),
                 url('open-sans-cyrillic-500-normal.ttf') format('truetype');
            font-style: normal;
            font-weight: 800;
        }

        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            font-family: 'Open Sans';
        }

        .certificate {
            width: 1122.519685px; /* A4 height for landscape */
            height: 793.7007874px; /* A4 width for landscape */
            background-color: white;
            position: relative;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        .certificate img {
            width: 100%;
            height: auto;
            position: relative;
            z-index: 1; /* Image has lower z-index */
        }

        .duration {
            position: absolute;
            transform: translate(-50%, -50%);
            z-index: 2; /* Text overlay has higher z-index */
            font-size: 20px; /* Adjust font size as needed */
            color: #000; /* Text color */
            font-family: 'Open Sans', sans-serif; /* Apply custom font */
            width: 70px;
            margin-top: -400px;
            margin-left: 320px;
            text-align: center;
            font-weight: 800;
        }

        .duration-type {
            position: absolute;
            transform: translate(-50%, -50%);
            z-index: 2; /* Text overlay has higher z-index */
            font-size: 20px; /* Adjust font size as needed */
            color: #000; /* Text color */
            font-family: 'Open Sans', sans-serif; /* Apply custom font */
            width: 70px;
            margin-top: -400px;
            margin-left: 390px;
            text-align: center;
            font-weight: 800;
        }

        .start-day {
            position: absolute;
            transform: translate(-50%, -50%);
            z-index: 2; /* Text overlay has higher z-index */
            font-size: 18.5px; /* Adjust font size as needed */
            color: #000; /* Text color */
            font-weight: 700;
            font-family: 'Open Sans', sans-serif; /* Apply custom font */
            text-transform: capitalize;
            width: 210px;
            margin-top: -299px;
            margin-left: 455px;
            text-align: center;
        }
        .end-day {
            position: absolute;
            top: 63%; /* Center the text vertically */
            left: 63.9%; /* Center the text horizontally */
            transform: translate(-50%, -50%);
            z-index: 2; /* Text overlay has higher z-index */
            font-size: 18.5px; /* Adjust font size as needed */
            color: #000; /* Text color */
            font-weight: 700;
            font-family: 'Open Sans', sans-serif; /* Apply custom font */
            text-transform: capitalize;
            width: 210px;
            margin-top: -1px;
            margin-left: 0px;
            text-align: center;
         
        }
        .given-day {
            position: absolute;
            transform: translate(-50%, -50%);
            z-index: 2; /* Text overlay has higher z-index */
            font-size: 18.5px; /* Adjust font size as needed */
            color: #000; /* Text color */
            font-weight: 700;
            font-family: 'Open Sans', sans-serif; /* Apply custom font */
            text-transform: capitalize;
            width: 210px;
            margin-top: -201px;
            margin-left: 630px;
            text-align: left;
        }
        .name {
            position: absolute;
            text-align: center;
            z-index: 2; /* Text overlay has higher z-index */
            font-size: 35px; /* Adjust font size as needed */
            color: #000; /* Text color */
            font-weight: 800;
            text-transform: uppercase;
            margin-top: -510px;
            margin-left: 60px;
            font-family: 'Open Sans', sans-serif; /* Apply custom font */
            height: 100px;
            width: 1000px;
            padding: 0px;
            
        }
        .ojt {
            position: absolute;
            transform: translate(-50%, -50%);
            z-index: 2; /* Text overlay has higher z-index */
            font-size: 22px; /* Adjust font size as needed */
            color: #000; /* Text color */
            font-family: 'Open Sans', sans-serif; /* Apply custom font */
            text-transform: uppercase;
            margin-top: -360px;
            margin-left: 560px;
            font-family: 'Open Sans', sans-serif; /* Apply custom font */
            width: 1000px;
            padding: 0px;
            font-weight: 800;
            text-align: center;
        }

        .course {
            position: absolute;
            transform: translate(-50%, -50%);
            z-index: 2; /* Text overlay has higher z-index */
            font-size: 14px; /* Adjust font size as needed */
            color: #000; /* Text color */
            font-family: 'Open Sans', sans-serif; /* Apply custom font */
            text-transform: capitalize;
            margin-top: -340px;
            margin-left: 560px;
            font-family: 'Open Sans', sans-serif; /* Apply custom font */
            width: 1000px;
            padding: 0px;
            font-weight: 500;
            text-align: center;
        }
        
        .p1name {
            position: absolute;
            transform: translate(-50%, -50%);
            z-index: 2; /* Text overlay has higher z-index */
            font-size: 15.5px; /* Adjust font size as needed */
            color: #000; /* Text color */
            font-weight: 800;
            font-family: 'Open Sans', sans-serif; /* Apply custom font */
            text-transform: capitalize;
            width: 350px;
            margin-top: -117px;
            margin-left: 555px;
            text-align: center;
        }

        .p1position {
            position: absolute;
            transform: translate(-50%, -50%);
            z-index: 2; /* Text overlay has higher z-index */
            font-size: 15px; /* Adjust font size as needed */
            color: #000; /* Text color */
            font-weight: 500;
            font-family: 'Open Sans', sans-serif; /* Apply custom font */
            text-transform: capitalize;
            width: 350px;
            margin-top: -98px;
            margin-left: 555px;
            text-align: center;
        }

        .p1email {
            position: absolute;
            transform: translate(-50%, -50%);
            z-index: 2; /* Text overlay has higher z-index */
            font-size: 11px; /* Adjust font size as needed */
            color: #000; /* Text color */
            font-weight: 450;
            font-family: 'Open Sans', sans-serif; /* Apply custom font */
            width: 350px;
            margin-top: -84px;
            margin-left: 555px;
            text-align: center;
        }

        .p2name {
            position: absolute;
            transform: translate(-50%, -50%);
            z-index: 2; /* Text overlay has higher z-index */
            font-size: 15.5px; /* Adjust font size as needed */
            color: #000; /* Text color */
            font-weight: 800;
            font-family: 'Open Sans', sans-serif; /* Apply custom font */
            text-transform: capitalize;
            width: 350px;
            margin-top: -117px;
            margin-left: 890px;
            text-align: center;
        }

        .p2position {
            position: absolute;
            transform: translate(-50%, -50%);
            z-index: 2; /* Text overlay has higher z-index */
            font-size: 15px; /* Adjust font size as needed */
            color: #000; /* Text color */
            font-weight: 500;
            font-family: 'Open Sans', sans-serif; /* Apply custom font */
            text-transform: capitalize;
            width: 350px;
            margin-top: -98px;
            margin-left: 890px;
            text-align: center;
        }

        .p2email {
            position: absolute;
            transform: translate(-50%, -50%);
            z-index: 2; /* Text overlay has higher z-index */
            font-size: 11px; /* Adjust font size as needed */
            color: #000; /* Text color */
            font-weight: 450;
            font-family: 'Open Sans', sans-serif; /* Apply custom font */
            width: 350px;
            margin-top: -84px;
            margin-left: 890px;
            text-align: center;
        }
        
        /* Print styles */
        @media print {
            body {
                margin: 0;
                padding: 0;
            }

            .certificate {
                box-shadow: none;
                margin: 0; /* Remove margins */
                padding: 0;
                width: 100%; /* Ensure full width of the print area */
                height: 100%; /* Ensure full height of the print area */
                page-break-inside: avoid; /* Prevent page breaks inside the certificate */
            }

            @page {
                size: A4 landscape; /* Set to landscape */
                margin: 0; /* Remove default margins */
                padding: 0;
            }
        }

    </style>
</head>
<body>
    <div class="certificate">
        <img src="{{ asset('images/OJT-COC  MASTER.png') }}" alt="Certificate of Completion">
        <div class="duration">
            <p>{{ $coc-> renhour }}</p>
        </div>
        <div class="duration-type">
            <p>{{ $coc-> rentype }}</p>
        </div>
        <div class="start-day">
            <p>{{ $coc-> sday }}</p>
        </div>
        <div class="end-day">
            <p>{{ $coc-> eday }}</p>
        </div>
        <div class="given-day">
            <p>{{ $coc-> gday }}</p>
        </div>
        <div class="name">
            <p>{{ $coc-> fname }} {{ $coc-> mname }} {{ $coc-> lname }}</p>
        </div>
        <div class="ojt">
            <p>{{ $coc-> position }}</p>
        </div>
        <div class="course">
            <p>({{ $coc-> course }})</p>
        </div>
        <div class="p1name">
            <p>{{ $coc-> p1name }}</p>
        </div>
        <div class="p1position">
            <p>{{ $coc-> p1position }}</p>
        </div>
        <div class="p1email">
            <p>{{ $coc-> p1email }}</p>
        </div>
        <div class="p2name">
            <p>{{ $coc-> p2name }}</p>
        </div>
        <div class="p2position">
            <p>{{ $coc-> p2position }}</p>
        </div>
        <div class="p2email">
            <p>{{ $coc-> p2email }}</p>
        </div>
    </div>
</body>
</html>

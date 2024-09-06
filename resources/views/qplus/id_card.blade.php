<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Card</title>
    <style>
        @font-face {
        font-family: 'Myriad Pro Bold';
        font-style: normal;
        font-weight: normal;
        src: local('Myriad Pro Bold'), url({{ asset('MYRIADPRO-BOLD.woff') }}) format('woff');
        }

        .card {
            display: flex;
            gap: 3px; /* Adds space between the divs */
            font-family: 'Myriad Pro Bold', sans-serif;
            font-weight: bold;
        }

        .id-card {
            display: flex;
            width: 203px;
            height: 324px;
            border: 1px solid #000;
            overflow: hidden; 
            background-size: 100% 100%; 
            background-position: center; 
            background-repeat: no-repeat;
            font-family: 'Myriad Pro Bold', sans-serif;
        }

        #id-front{
            width: 204px;
            height: 324px;
            position: center;
            mask-repeat: no-repeat;
            z-index: 1;
            font-family: 'Myriad Pro Bold', sans-serif;
        }

        .layout {
            height: 100%;
        }

        .id-card-back {
            width: 203px;
            height: 324px;
            border: 1px solid #000;
            position: relative;
            overflow: hidden;
            background-size: 100% 100%;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Myriad Pro Bold', sans-serif;
            font-weight: lighter;
        }

        #id-back{
            width: 204px;
            height: 324px;
            position: center;
            mask-repeat: no-repeat;
            z-index: 1;
        }

        .layout {
            display: flex;
            flex-direction: column;
            align-items: center; /* Center content horizontally */
            height: 100%;
            padding-left: 110px;
            padding-top: 10px;
        }

        #id-info {
            height: 96px;
            width: 96px;
            margin-top: 74px;
            margin-right: 393px;
            display: flex;
            object-fit: contain;
            margin-left: -21px;
            z-index: 2;
            position:absolute;
            border: 1px solid #000;            
        }

        #id-pic {
            width: 100%;
            height: 100%;
            z-index: 2;
        }

        #name-info{
            margin-top: 172px;
            height: 28px;
            width: 200px;
            margin-right:421px;
            z-index: 2;
            position: absolute;
        }

        #name {
            text-transform: uppercase;
            text-align: center;
            color: white;
            text-shadow: 
                1px 1px 0px black, 
                -1px -1px 0px black, 
                1px -1px 0px black, 
                -1px 1px 0px black,
                1px 0px 0px black, 
                -1px 0px 0px black, 
                0px 1px 0px black, 
                0px -1px 0px black;
            font-family: 'Myriad Pro Bold', sans-serif;
            font-weight: bolder;
            z-index: 2;
            paint-order: stroke fill;
            font-size: 11.5px;
        }

        

        #position-info{
            margin-top: 212px;
            height: 20px;
            width: 201px;
            margin-right: 418px;
            z-index: 2;
            position: absolute;
        }

        #positionn {
            text-transform: uppercase;
            font-size: 10px;
            text-align: center;
            color: black;
            font-weight: bold;
            z-index: 2;
        }

        #signature-info {
            width: 100px;
            height: 40px;
            margin-top: 245px;
            display: flex;            
            margin-right: 410px;
            object-fit: contain;
            z-index: 2;
            position: absolute;
        }

        #signature { 
            width: 100%;
            height: 100%;
            z-index: 2;
        }

        #idnum-info{
            margin-top: 120px;
            height: 20px;
            width: 80px;
            margin-right: 308px;
            transform: rotate(270deg);
            z-index: 2;
            position: absolute;
        }

        #idnum {
            padding: 0;
            text-transform: uppercase;
            font-size: 6.5px;
            text-align: left;
            color: white;
            text-shadow: 
                0.7px 0.7px 0px black, 
                -0.7px -0.7px 0px black, 
                0.7px -0.7px 0px black, 
                -0.7px 0.7px 0px black,
                0.7px 0px 0px black, 
                -0.7px 0px 0px black, 
                0px 0.7px 0px black, 
                0px -0.7px 0px black;
            font-family: 'Myriad Pro Bold', sans-serif;
            font-weight: bolder;
            z-index: 2;
            paint-order: stroke fill;
            letter-spacing: 0.45px;

        }

        #valid-info{
            margin-top: 115px;
            height: 20px;
            width: 90px;
            margin-right: 283px;
            transform: rotate(270deg);
            z-index: 2;
            position: absolute;
        }

        #valid {
            padding: 0;
            text-transform: uppercase;
            font-size: 4.6px;
            text-align: left;
            color: white;
            text-shadow: 
                0.3px 0.3px 0px black, 
                -0.3px -0.3px 0px black, 
                0.3px -0.3px 0px black, 
                -0.3px 0.3px 0px black,
                0.3px 0px 0px black, 
                -0.3px 0px 0px black, 
                0px 0.3px 0px black, 
                0px -0.3px 0px black;
            font-family: 'Myriad Pro Bold', sans-serif;
            font-weight: bolder;
            z-index: 2;
            paint-order: stroke fill;
        }

        #address-info{
            margin-top: -317px;
            height: 18px;
            width: 178px;
            margin-left: 8px;
            z-index: 2;
            position: absolute;
        }

        #address {
            text-transform: uppercase;
            font-size: 7px;
            text-align: center;
            z-index: 2;
        }

        #contact-info {
            height: 10px;
            width: 93px;
            margin-left: 9px;
            margin-top: -291px;
            z-index: 2;
            position: absolute;
        }

        #contactnum {
            font-size: 7px;
            text-align: center;
            z-index: 2;
        }

        #tin-info {
            height: 10px;
            width: 93px;
            margin-left: 103px;
            margin-top: -291px;
            z-index: 2;
            position: absolute;
        }

        #tin {
            text-transform: uppercase;
            font-size: 7px;
            text-align: center;
            z-index: 2;
        }

        #bday-info {
            height: 10px;
            width: 93px;
            margin-left: 9px;
            margin-top: -275px;
            z-index: 2;
            position: absolute;
        }

        #bday {
            font-size: 7px;
            text-align: center;
            z-index: 2;
        }

        #sss-info {
            height: 10px;
            width: 93px;
            margin-left: 103px;
            margin-top: -275px;
            z-index: 2;
            position: absolute;
        }

        #sss {
            text-transform: uppercase;
            font-size: 7px;
            text-align: center;
        }

        #hired-info {
            height: 10px;
            width: 93px;
            margin-left: 9px;
            margin-top: -259px;
            z-index: 2;
            position: absolute;
        }

        #hired {
            font-size: 7px;
            text-align: center;
        }

        #pagibig-info {
            height: 10px;
            width: 93px;
            margin-left: 103px;
            margin-top: -259px;
            z-index: 2;
            position: absolute;
        }

        #pagibig {
            text-transform: uppercase;
            font-size: 7px;
            text-align: center;
        }

        #blood-info {
            height: 10px;
            width: 93px;
            margin-left: 9px;
            margin-top: -243px;
            z-index: 2;
            position: absolute;
        }

        #blood {
            text-transform: uppercase;
            font-size: 7px;
            text-align: center;
        }

        #phil-info {
            height: 10px;
            width: 93px;
            margin-left: 103px;
            margin-top: -243px;
            z-index: 2;
            position: absolute;
        }

        #phil {
            text-transform: uppercase;
            font-size: 7px;
            text-align: center;
        }

        #ecname-info {
            height: 10px;
            width: 187px;
            margin-left: 9px;
            margin-top: -213px;
            z-index: 2;
            position: absolute;
        }

        #ecname {
            text-transform: uppercase;
            font-size: 7px;
            text-align: center;
        }

        #ecrelation-info {
            height: 10px;
            width: 187px;
            margin-left: 9px;
            margin-top: -195px;
            z-index: 2;
            position: absolute;
        }

        #ecrelation {
            text-transform: uppercase;
            font-size: 7px;
            text-align: center;
        }

        #ecaddress-info {
            height: 10px;
            width: 187px;
            margin-left: 9px;
            margin-top: -178px;
            z-index: 2;
            position: absolute;
        }

        #ecaddress {
            text-transform: uppercase;
            font-size: 7px;
            text-align: center;
        }

        #eccontact-info {
            height: 10px;
            width: 187px;
            margin-left: 9px;
            margin-top: -152px;
            z-index: 2;
            position: absolute;
        }

        #eccontact {
            text-transform: uppercase;
            font-size: 7px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="id-card">
            <img src="{{ asset('images/qplusfront.png') }}" alt="id-front" id="id-front">
            <div class="layout">
                <div id="id-info">
                    @if ($students->pic)
                        <img src="{{ asset('storage/pics/' . basename($students->pic)) }}" alt="{{ $students->fname }} {{ $students->lname }}" id="id-pic">
                    @else
                        <img src="{{ asset('default-avatar.png') }}" alt="Default Avatar">
                    @endif
                </div>
                <div id="name-info">
                    <p id="name">{{ $students->fname }} {{ $students->lname }}</p>
                </div>
                <div id="position-info">
                    <p id="positionn">{{ $students->position }}</p>
                </div>
                <div id="signature-info">
                    @if ($students->sig)
                        <img src="{{ asset('storage/signatures/' . basename($students->sig)) }}" alt="{{ $students->fname }} {{ $students->lname }}" id="signature">
                    @else
                        <img src="{{ asset('default-avatar.png') }}" alt="Default Avatar">
                    @endif
                </div>
                <div id="idnum-info">
                    <p id="idnum">ID No.: {{ $students->employeeid }}</p>
                </div>
                <div id="valid-info">
                    <p id="valid">Valid until: {{ $students->validity }}</p>
                </div>
            </div>
        </div>

        <!-- Back -->
        <div class="id-card-back">
            <img src="{{ asset('images/qplusback.png') }}" alt="id-back" id="id-back">
            <!-- Student Info -->
            <div id="address-info">
                <p id="address">{{ $students->address }}</p>
            </div>
            <div id="contact-info">
                <p id="contactnum">{{ $students->mobile }}</p>
            </div>
            <div id="tin-info">
                <p id="tin">{{ $students->tinno }}</p>
            </div>
            <div id="bday-info">
                <p id="bday">{{ $students->bday }}</p>
            </div>
            <div id="sss-info">
                <p id="sss">{{ $students->sssno }}</p>
            </div>
            <div id="hired-info">
                <p id="hired">{{ $students->hiredate }}</p>
            </div>
            <div id="pagibig-info">
                <p id="pagibig">{{ $students->pagibigno }}</p>
            </div>
            <div id="blood-info">
                <p id="blood">{{ $students->bloodtype }}</p>
            </div>
            <div id="phil-info">
                <p id="phil">{{ $students->philno }}</p>
            </div>
            <div id="ecname-info">
                <p id="ecname">{{ $students->ecname }}</p>
            </div>
            <div id="ecrelation-info">
                <p id="ecrelation">{{ $students->ecrelationship }}</p>
            </div>
            <div id="ecaddress-info">
                <p id="ecaddress">{{ $students->ecaddress }}</p>
            </div>
            <div id="eccontact-info">
                <p id="eccontact">{{ $students->ecmobile }}</p>
            </div>
        </div>
    </div>
</body>

</html>
@extends('layouts.app')

@section('content')
    <div
        style="background-image: url('images/austin-skyline.png'); background-repeat: no-repeat; background-size: cover; height: 55vw;">
        <img style="margin-top: 4%; margin-left: 5%; width: 15%;
  max-width: 400px;
  min-width: 90px;
  height: auto;" src="{{ asset('images/LOGO_Vector_Smart_Object.png') }}"
             alt="Dare Logo" xmlns="http://www.w3.org/1999/html">
        <div style="margin-top: 80px; margin-left: 102px;
                width: 427px;
                height: 102px;
                color: #ffffff;
                    font-family: 'Nunito', sans-serif;
                font-size: 42px;
                font-weight: 300;
                line-height: 59px;">
            Working capital
        for growing companies.
    </div>
    <div>
        <button style="width: 185px;
height: 50px;
box-shadow: 0 10px 25px 1px rgba(255, 159, 0, 0.14);
background-color: #3a888b;margin-left: 105px; margin-top: 68px;font-family: 'Nunito', sans-serif;color: #ffffff;border: #3a888b;
                    font-size: 18px;
                    font-weight: 400;
                    line-height: 30px;">Apply for Funding</button>
    </div>
    </div>
    <div class="row text-center" style="margin-left: 90px; margin-right: 90px">
        <div class="col-md-4">
            <img src="{{ asset('images/shutterstock_1085127647.png') }}">
            <div style="
                    margin-top: 25px;
                    margin-bottom: 25px;
                    color: #3a888b;
                    font-family: 'Nunito', sans-serif;
                    font-size: 29px;">DARE TO BUILD</div>
            <div style="height: 400px; padding: 30px; text-align: left; margin:auto;width: 85%; box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);border-radius: 4px;">
                <div style="
                            color: #011f4b;
                            font-family: 'Nunito', sans-serif;
                            font-size: 28px;
                            font-weight: 300;
                            ">A financing
                    relationship you can
                    <strong style="font-weight: 900">build the future</strong> on.</div>
                <div style="
                        margin-top: 10px;
                        color: #6e748e;
                        font-family: 'Nunito', sans-serif;
                        font-size: 21px;
                        font-weight: 400;
                        line-height: 27px;
                        letter-spacing: 1.05px;">Have outstanding AR? Want a steadier cashflow? Need a line of credit, but you don’t fit in a bank’s box?
                    We’re here to help, and we love a challenge.</div>
                <div style="
                        width: 113px;
                        height: 13px;
                        color: #3c8685;
                        font-family: 'Nunito', sans-serif;
                        font-size: 16px;
                        font-weight: 400;
                        position: absolute;
                        bottom: 50px;
"><a>Read More >></a></div>
            </div>
        </div>
        <div class="col-md-4" style="bottom: 100px;">
            <img src="{{ asset('images/shutterstock_1564227556.png') }}">
            <div style="
                    margin-top: 25px;
                    margin-bottom: 25px;
                    color: #3a888b;
                    font-family: 'Nunito', sans-serif;
                    font-size: 29px;">DARE TO GROW</div>
            <div style="height: 400px; padding: 30px; text-align:left; margin:auto;width: 85%;box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);border-radius: 4px;">
                <div style="
                            color: #011f4b;
                            font-family: 'Nunito', sans-serif;
                            font-size: 28px;
                            font-weight: 300;
                            ">
                    <strong style="font-weight: 900">A partnership</strong> you
                    won’t have to sign
                    away equity for.*</div>
                <div style="
                        margin-top: 10px;
                        color: #6e748e;
                        font-family: 'Nunito', sans-serif;
                        font-size: 21px;
                        font-weight: 400;
                        line-height: 27px;
                        letter-spacing: 1.05px;">We can help you grow, the right way, at the right pace. With working capital financing, you don’t have to give up equity or mortgage your future−but you do get a financing partner invested in your success.
                </div>
                <div style="
                        width: 113px;
                        height: 13px;
                        color: #3c8685;
                        font-family: 'Nunito', sans-serif;
                        font-size: 16px;
                        font-weight: 400;
                        position: absolute;
                        bottom: 50px;"><a>Read More >></a></div>
            </div>
        </div>
        <div class="col-md-4" style="bottom: 200px;">
            <img src="{{ asset('images/Vector_Smart_Object.png') }}">
            <div style="
                    margin-top: 25px;
                    margin-bottom: 25px;
                    color: #3a888b;
                    font-family: 'Nunito', sans-serif;
                    font-size: 29px;">DARE TO GIVE</div>
            <div style="min-height: 400px; padding: 30px; text-align:left; margin:auto;width: 85%;box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);border-radius: 4px;">
                <div style="
                            color: #011f4b;
                            font-family: 'Nunito', sans-serif;
                            font-size: 28px;
                            font-weight: 300;
                            ">A resource
                    you can rely on
                    for
                    <strong style="font-weight: 900">more than financing</strong>.</div>
                <div style="
                        margin-top: 10px;
                        color: #6e748e;
                        font-family: 'Nunito', sans-serif;
                        font-size: 21px;
                        font-weight: 400;
                        line-height: 27px;
                        letter-spacing: 1.05px;">We’ve worked with 1,000+ companies in every stage of growth. We’ve seen it all;
                    we know all the red flags, and we can usually help with obstacles large and small. </div>
                <div style="
                        width: 113px;
                        height: 13px;
                        color: #3c8685;
                        font-family: 'Nunito', sans-serif;
                        font-size: 16px;
                        font-weight: 400;
                        position: absolute;
                        bottom: 50px;
                        "><a>Read More >></a></div>
            </div>
        </div>

    </div>
    <img src="{{ asset('images/Vector_Smart_Object_Diagonal_Line_1.png') }}" class="w-100">
    <div style="margin: auto; text-align: center; max-width: 50%">
        <h1 style="
                color: #6e748e;
                font-family: 'Nunito', sans-serif;
                font-size: 46px;
                font-weight: 400;
                margin: auto;
                text-transform: uppercase;
                letter-spacing: 3.45px;">INDUSTRIES WE SERVE</h1>
        <div class="row" style="margin-top: 85px">
            <div class="col-md-3">
                <img src="{{ asset('images/Vector_Smart_Object (1).png') }}">
                <div style="
color: #31364f;
font-family: 'Nunito', sans-serif;
font-size: 28px;
margin-top: 23px;
font-weight: 300;">Manufacturing</div>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('images/Vector_Smart_Object (2).png') }}">
                <div style="
color: #31364f;
font-family: 'Nunito', sans-serif;
font-size: 28px;
margin-top: 23px;
font-weight: 300;">Wholesale
                    Distributors</div>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('images/Vector_Smart_Object (3).png') }}">
                <div style="
color: #31364f;
font-family: 'Nunito', sans-serif;
font-size: 28px;
margin-top: 23px;
font-weight: 300;">Oil & Gas
                    Services</div>
            </div>
            <div class="col-md-3">
                <img src="{{ asset('images/Vector_Smart_Object (4).png') }}">
                <div style="
color: #31364f;
font-family: 'Nunito', sans-serif;
font-size: 28px;
margin-top: 23px;
font-weight: 300;">B2B Services</div>
            </div>
        </div>
        <div class="row" style="margin-top: 85px">
            <div class="col-md-4">
                <img src="{{ asset('images/Vector_Smart_Object (5).png') }}">
                <div style="
color: #31364f;
font-family: 'Nunito', sans-serif;
font-size: 28px;
margin-top: 23px;
font-weight: 300;">Construction</div>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/Vector_Smart_Object (6).png') }}">
                <div style="
color: #31364f;
font-family: 'Nunito', sans-serif;
font-size: 28px;
margin-top: 23px;
font-weight: 300;">Staffing</div>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/Vector_Smart_Object (7).png') }}">
                <div style="
color: #31364f;
font-family: 'Nunito', sans-serif;
font-size: 28px;
margin-top: 23px;
font-weight: 300;">IT Services</div>
            </div>
        </div>
    </div>
    <img src="{{ asset('images/Vector_Smart_Object_Diagonal_Line_1.png') }}" class="w-100">
    <h1 style="
                color: #6e748e;
                font-family: 'Nunito', sans-serif;
                font-size: 46px;
                font-weight: 400;
                margin: auto;
                text-align: center;
                text-transform: uppercase;
                letter-spacing: 3.45px;">WHAT PEOPLE<br>
        ARE SAYING</h1>
    <div class="row text-center" style="margin-left: 90px; margin-right: 90px; margin-top: 68px;">

        <div class="col-md-4">
            <div style="height: 315px; padding: 30px; text-align: left; margin:auto;width: 85%; box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);border-radius: 4px;">
                <div style="
                color: #515b69;
                font-family: 'Nunito', sans-serif;
                font-size: 20px;
                font-weight: 400;
                line-height: 34px;
                            ">Steven, CEO of CompanyXYZ</div>
                <div style="
                        margin-top: 10px;
                        color: #6e748e;
                        font-family: 'Nunito', sans-serif;
                        font-size: 21px;
                        font-weight: 400;
                        line-height: 27px;
                        letter-spacing: 1.05px;">“We love that Dare works with you to understand your past, present, and future. Have a detour you’re not proud of? We can overcome most challenges and plot an achievable path forward.”</div>
            </div>
        </div>
        <div class="col-md-4">
            <div style="height: 315px; padding: 30px; text-align: left; margin:auto;width: 85%; box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);border-radius: 4px;">
                <div style="
                color: #515b69;
                font-family: 'Nunito', sans-serif;
                font-size: 20px;
                font-weight: 400;
                line-height: 34px;
                            ">Steven, CEO of CompanyXYZ</div>
                <div style="
                        margin-top: 10px;
                        color: #6e748e;
                        font-family: 'Nunito', sans-serif;
                        font-size: 21px;
                        font-weight: 400;
                        line-height: 27px;
                        letter-spacing: 1.05px;">“We love that Dare works with you to understand your past, present, and future. Have a detour you’re not proud of? We can overcome most challenges and plot an achievable path forward.”</div>
            </div>
        </div>
        <div class="col-md-4">
            <div style="height: 315px; padding: 30px; text-align: left; margin:auto;width: 85%; box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);border-radius: 4px;">
                <div style="
                color: #515b69;
                font-family: 'Nunito', sans-serif;
                font-size: 20px;
                font-weight: 400;
                line-height: 34px;
                            ">Steven, CEO of CompanyXYZ</div>
                <div style="
                        margin-top: 10px;
                        color: #6e748e;
                        font-family: 'Nunito', sans-serif;
                        font-size: 21px;
                        font-weight: 400;
                        line-height: 27px;
                        letter-spacing: 1.05px;
              ">“We love that Dare works with you to understand your past, present, and future. Have a detour you’re not proud of? We can overcome most challenges and plot an achievable path forward.”</div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 42px;">
        <div class="col-md-4 offset-md-4 text-center">
        <a style="
        padding: 10px 14px;
box-shadow: 0 8px 16px 1px rgba(18, 18, 76, 0.14);
background-color: #3a888b;color: white;border-radius: 50%;  margin-right: 20px"><i class="fas fa-arrow-left"></i></a>
        <a style="
        padding: 10px 14px;
box-shadow: 0 8px 16px 1px rgba(19, 19, 78, 0.14);
background-color: #03396c;color: white;border-radius: 50%; "><i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
    <img src="{{ asset('images/Vector_Smart_Object_Diagonal_Line_1.png') }}" class="w-100">
    <h1 style="
                color: #6e748e;
                font-family: 'Nunito', sans-serif;
                font-size: 46px;
                font-weight: 400;
                margin: auto;
                text-align: center;
                text-transform: uppercase;
                letter-spacing: 3.45px;">Ready to<br>
        get financing?</h1>
    <div class="row justify-content-center" style="margin-top: 68px;letter-spacing: 0.57px;font-size: 19px;line-height: 30px;color: #292c78;">
        <div class="col-md-4">
            <span style="
            font-family: 'Nunito', sans-serif;
            font-weight: 900;">We want to help you grow and build without worrying about cashflow.</span>
            <span style="
            font-family: 'Nunito', sans-serif;">Leave us your name and contact information below, and one of our executives will give you a call as soon as possible.</span>
            <div style="
            margin-top: 30px;
            color: #3a888b;
            font-family: 'Nunito', sans-serif;
            font-size: 20px;
            font-weight: 400;
            line-height: 30px;"><span style="
            font-weight: 900;">Phone:</span> 512-886-<span style="
            font-weight: 900;">DARE</span></div>
        </div>
        <div class="col-md-4">
                <div class="cognito" style="padding: 30px;width: 85%; box-shadow: 0 10px 25px 1px rgba(20, 20, 80, 0.14);border-radius: 4px;">
                    <script src="https://services.cognitoforms.com/s/xVHxdnmaP0uDY40yI9wkMw"></script>
                    <script>Cognito.load("forms", { id: "2" });</script>
                </div>
        </div>
    </div>
    @include('includes.get-started')
    @include('includes.footer')
@endsection

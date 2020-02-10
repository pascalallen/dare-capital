<style>
    @media (max-width: 576px) {
        .apply-for-funding-container {
            display: none;
        }
    }
</style>
<div
    style="background-image: url({{ $slot }}); background-repeat: no-repeat; background-size: cover; height: 55vw;">
    <div style="padding-top: 4%; margin-left: 5%;">
        <img style="width: 15%;
          max-width: 400px;
          min-width: 90px;
          cursor: pointer;
          height: auto;" src="{{ asset('images/LOGO_Vector_Smart_Object.png') }}"
             alt="Dare Logo" xmlns="http://www.w3.org/1999/html" onclick="window.location.href = '/';">
        <div class="apply-for-funding-container" style="margin-top: 80px;
                        color: #ffffff;
                        font-size: 42px;
                        line-height: 59px;">
            Working capital<br>
            for growing companies.<br>
            <button style="width: 185px;
        height: 50px;
        box-shadow: 0 10px 25px 1px rgba(255, 159, 0, 0.14);
        background-color: #3a888b;margin-top: 68px;color: #ffffff;border: #3a888b;
                            font-size: 18px;
                            font-weight: 400;
                            line-height: 30px;"
                    onclick="window.location.href = '/apply';">
                Apply for Funding
            </button>
        </div>
    </div>
</div>

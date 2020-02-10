<style>
    .get-started-now-button {
        margin-top: 25px;
    }
</style>
<div class="row text-center ml-0 mr-0" style="margin-top: {{ $marginTop ?? '75px' }}">
    <div class="col-md-8 offset-md-2" style="
        padding: 60px;
box-shadow: 0 8px 40px rgba(18, 18, 76, 0.14);
background-color: #ffffff;
            color: #6e748e;
            font-size: 30px;
            line-height: 34px;">
            <span style="
            font-weight: 800;">Get Started Now.</span> Apply for Funding.
        <br>
        <button class="get-started-now-button" style="
        box-shadow: 0 10px 25px 1px rgba(1, 31, 75, 0.14);
        background-color: #3a888b;font-size: 16px;color: #ffffff;border: #3a888b;
        width: 170px;
height: 46px;
        line-height: 30px;" onclick="window.location.href = '{{ route('apply') }}';">Get Started Now
        </button>
    </div>
</div>

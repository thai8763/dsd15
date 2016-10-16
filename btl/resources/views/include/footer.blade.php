@if(!Auth::guest())
<footer style="background-color: #0D3349; color: white">
    <div class="container">
    <div class="row">
        <div class="col-xs-6">
            <h3> Liên hệ </h3>
            <p>
                Số điện thoại: 0979369407 <br/>
                Email: thai8763@gmail.com <br/>
                Địa chỉ: Đại học Bách Khoa Hà Nội
            </p>
        </div>
        <div class="col-xs-6">
            <h3> Mạng xã hội </h3>
            <a href="https://www.facebook.com/"> <img src=" {{url('images/face-icon.png')}} " alt="fb" /> </a>
            <a href="https://www.youtube.com/"> <img src=" {{url('images/youtube-icon.png')}} " alt="fb" /> </a>
            <a href=""> <img src=" {{url('images/rss-icon.png')}} " alt="fb" /> </a>
            <a href=""> <img src=" {{url('images/g-icon.png')}} " alt="fb" /> </a>
        </div>
    </div>
    </div>
</footer>
@endif
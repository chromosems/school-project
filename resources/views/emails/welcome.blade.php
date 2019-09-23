<!Doctype html>
<head>
<style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Quicksand:400,500,700');
    *{
    margin:0;
    padding:0;
        border: 0;
    }
    body{
        background-color: #F1F4F4;
        font-family: 'Qucksand',sans-serif;
        font-size: 18px;
        max-width: 800px;
        margin: 0 auto;
        padding: 2%;
        color: #565859;
    }
    #wrapper{
        margin: 0 auto;
        background: #FFF;
    }
    h2 {
        letter-spacing: 1px;
        padding-left: 2%;
        font-weight: 500;
    }
    p{
        padding: 2%;
        text-align: justify;
    }
    img {
        max-width: 100%;
    }
    .line{
        clear: both;
        margin: 4% auto;
        width: 90%;
        height: 2px;
        background-color: #E3E9E9;
    }
    header {
        width: 98%;
    }
    #logo {
        float: left;
        margin: 2% 0 0 5%;
        max-width: 220px;
    }
    #callout {
        float: right;
        margin: 3% 3% 2% 0;
        height: auto;
        overflow: hidden;
    }
    .social {
        float: right;
        list-style-type: none;
        margin-top: 4%;
        padding: 0;
    }
    .social li {
        display:inline;
        max-width: 50%;
        height: auto;
    }
    .banner {
        margin-bottom: 3px;
    }
    .btn{
       float:right;
        border-radius: 8px;
        color: #FFF;
        font-size: 17px;
        background: mediumseagreen;
        padding: 8px;
        text-decoration: none;

    }
    .button-holder {
        float: right;
        margin: 0 2%  4% 0;
    }
    .btn:hover {
        background: cadetblue;
        text-decoration: none;

    }
    .contact {
        text-align: center;
        margin-bottom: 4%;
        
    }
</style>
</head>
<body>
<div id="wrapper">
    <header>
        <div id="logo">
         <img src="">
        </div>
        {{--<div id="callout">--}}
            {{--<ul class="social">--}}
                {{--<li><a href="https://facebook.com " target="_blank"><img src="{{ asset('email/facebook.png')--}}
                {{--}}"></a></li>--}}
                {{--<li><a href="https://google.com " target="_blank"><img src="{{ asset('email/google-plus.png')--}}
                {{--}}"></a></li>--}}
                {{--<li><a href="https://instagram.com " target="_blank"><img src="{{ asset ('email/instagram.png')--}}
                {{--}}"></a></li>--}}

            {{--</ul>--}}

        {{--</div>--}}
    </header>
    <div class="banner">
        <img src="{{ asset ('email/logo.png')}}">
    </div>
    <h2>Kibs|systems After sale service </h2>

    <p>This is a notification , A new Ticket has been created by a customer...Show great support and effectiveness
        until task is  terminated in order to achieve great customer relationships and organisation objectives and
        milestones <br>

       <br>
        <br>
        <br>
        Thank you for your service
    </p>

    <div class="button-holder">
         <a class="btn" href="#">Learn more</a>
    </div>
    <div class="line"></div>
    <p class="contact">Kibs | After Sales Service System<br>
       Tel: 0393 114905<br>
        Email:Kibussystemsltd@gmail.com<br>
        Web: www.kibssystemsltd.com<br>
        Plot No. 1088 Ntinda Koli House.
    </p>
</div>
</body>

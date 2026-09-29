<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laundry</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        html{
            scroll-behavior:smooth;
        }

        body{
            font-family:Arial, Helvetica, sans-serif;
            background:#f7fcfe;
            color:#183b50;
            overflow-x:hidden;
        }


        /* =====================================
           NAVBAR
        ===================================== */

        .navbar{
            width:100%;
            height:76px;
            padding:0 7%;
            display:flex;
            align-items:center;
            justify-content:space-between;

            background:rgba(255,255,255,.96);

            position:relative;
            z-index:100;

            box-shadow:0 3px 20px rgba(24,137,165,.08);
        }

        .brand{
            display:flex;
            align-items:center;
            gap:12px;

            font-size:24px;
            font-weight:bold;
            color:#159bc2;
        }

        .brand-icon{
            width:45px;
            height:45px;

            display:flex;
            align-items:center;
            justify-content:center;

            border-radius:15px;

            background:linear-gradient(
                135deg,
                #1daed3,
                #71ddea
            );

            font-size:24px;

            box-shadow:
                0 8px 20px rgba(29,174,211,.2);
        }

        .login-button{
            text-decoration:none;

            padding:12px 23px;

            border-radius:30px;

            color:white;

            font-size:14px;
            font-weight:bold;

            background:linear-gradient(
                135deg,
                #159bc3,
                #50cfe1
            );

            box-shadow:
                0 8px 20px rgba(21,155,195,.2);

            transition:.3s;
        }

        .login-button:hover{
            transform:translateY(-3px);
        }


        /* =====================================
           HERO
        ===================================== */

        .hero{
            min-height:650px;

            padding:70px 7% 90px;

            display:grid;
            grid-template-columns:1fr 1fr;

            align-items:center;

            gap:35px;

            position:relative;

            overflow:hidden;

            background:
                radial-gradient(
                    circle at 80% 20%,
                    #dff8fc,
                    transparent 30%
                ),

                radial-gradient(
                    circle at 10% 80%,
                    #e9faff,
                    transparent 30%
                ),

                #f7fcfe;
        }

        .hero::before{
            content:"";

            position:absolute;

            width:500px;
            height:500px;

            border-radius:50%;

            background:#eafaff;

            right:-220px;
            top:-200px;
        }

        .hero-text{
            position:relative;
            z-index:5;
        }

        .label{
            display:inline-block;

            padding:10px 18px;

            border-radius:30px;

            background:#e0f7fb;

            color:#148bad;

            font-size:12px;

            font-weight:bold;

            letter-spacing:2px;

            margin-bottom:20px;
        }

        .hero h1{
            font-size:58px;

            line-height:1.08;

            color:#14364b;

            margin-bottom:20px;
        }

        .hero h1 span{
            color:#159fc5;
        }

        .hero-description{
            max-width:540px;

            color:#6b8492;

            font-size:17px;

            line-height:1.8;

            margin-bottom:30px;
        }

        .hero-actions{
            display:flex;

            align-items:center;

            gap:15px;
        }

        .main-button{
            text-decoration:none;

            color:white;

            padding:15px 26px;

            border-radius:30px;

            font-weight:bold;

            background:
                linear-gradient(
                    135deg,
                    #119bc3,
                    #55d3e2
                );

            box-shadow:
                0 12px 25px rgba(17,155,195,.23);

            transition:.3s;
        }

        .main-button:hover{
            transform:translateY(-4px);
        }

        .scroll-text{
            color:#78909c;
            font-size:13px;
        }


        /* =====================================
           ANIMATION AREA
        ===================================== */

        .visual{
            height:520px;

            position:relative;

            z-index:5;
        }

        .circle-bg{
            width:460px;
            height:460px;

            border-radius:50%;

            position:absolute;

            left:50%;
            top:50%;

            transform:translate(-50%,-50%);

            background:
                radial-gradient(
                    circle,
                    white 35%,
                    #e5f9fc 36%,
                    #e5f9fc 70%,
                    transparent 71%
                );
        }


        /* =====================================
           FLOATING BUBBLES
        ===================================== */

        .bubble{
            position:absolute;

            border-radius:50%;

            border:2px solid rgba(67,191,215,.35);

            background:rgba(255,255,255,.4);

            animation:float 4s ease-in-out infinite;
        }

        .bubble-1{
            width:48px;
            height:48px;

            left:25px;
            top:50px;
        }

        .bubble-2{
            width:25px;
            height:25px;

            right:30px;
            top:90px;

            animation-delay:1s;
        }

        .bubble-3{
            width:65px;
            height:65px;

            left:20px;
            bottom:55px;

            animation-delay:1.5s;
        }

        .bubble-4{
            width:20px;
            height:20px;

            right:50px;
            bottom:100px;

            animation-delay:2s;
        }

        @keyframes float{

            0%,100%{
                transform:translateY(0);
            }

            50%{
                transform:translateY(-22px);
            }

        }


        /* =====================================
           SPARKLE
        ===================================== */

        .sparkle{
            position:absolute;

            color:#25b0d0;

            font-size:30px;

            animation:sparkle 2.4s ease-in-out infinite;
        }

        .sparkle-1{
            left:35px;
            top:210px;
        }

        .sparkle-2{
            right:40px;
            top:235px;

            animation-delay:.8s;
        }

        .sparkle-3{
            left:105px;
            bottom:45px;

            animation-delay:1.4s;
        }

        @keyframes sparkle{

            0%,100%{
                opacity:.35;
                transform:scale(.7) rotate(0deg);
            }

            50%{
                opacity:1;
                transform:scale(1.2) rotate(20deg);
            }

        }


        /* =====================================
           WASHING MACHINE
        ===================================== */

        .washing-machine{
            width:375px;
            height:400px;

            position:absolute;

            left:50%;
            top:50%;

            transform:translate(-50%,-50%);

            border-radius:35px;

            border:8px solid #a8e1eb;

            background:
                linear-gradient(
                    145deg,
                    #ffffff,
                    #eaf9fc
                );

            box-shadow:
                0 30px 55px rgba(32,145,172,.18),

                inset 0 0 30px
                rgba(43,188,214,.08);
        }


        /* =====================================
           MACHINE TOP
        ===================================== */

        .machine-top{
            height:65px;

            padding:0 23px;

            display:flex;

            align-items:center;

            gap:9px;
        }

        .machine-dot{
            width:14px;
            height:14px;

            border-radius:50%;

            background:#2db3d1;
        }

        .machine-dot:nth-child(2){
            background:#8edce7;
        }

        .machine-display{
            width:90px;
            height:25px;

            margin-left:auto;

            border-radius:7px;

            background:#d9f1f5;
        }


        /* =====================================
           DOOR
        ===================================== */

        .door{
            width:275px;
            height:275px;

            position:absolute;

            left:50%;
            top:57%;

            transform:translate(-50%,-50%);

            border-radius:50%;

            border:10px solid #52c5dc;

            background:#76d5e5;

            box-shadow:
                inset 0 0 0 7px #bdebf2,
                0 12px 25px rgba(23,145,175,.2);

            overflow:hidden;
        }


        /* =====================================
           DRUM
        ===================================== */

        .drum{
            width:235px;
            height:235px;

            position:absolute;

            left:50%;
            top:50%;

            transform:translate(-50%,-50%);

            border-radius:50%;

            background:
                radial-gradient(
                    circle,
                    #8ee3ee 0 48%,
                    #52c6dc 49% 58%,
                    #37afca 59% 100%
                );

            box-shadow:
                inset 0 0 25px rgba(0,0,0,.12);

            animation:drumSpin 8s linear infinite;
        }

        @keyframes drumSpin{

            from{
                transform:
                    translate(-50%,-50%)
                    rotate(0deg);
            }

            to{
                transform:
                    translate(-50%,-50%)
                    rotate(360deg);
            }

        }


        /* =====================================
           WATER
        ===================================== */

        .water{
            width:280px;
            height:155px;

            position:absolute;

            left:50%;
            bottom:-20px;

            transform:translateX(-50%);

            border-radius:50% 50% 45% 45%;

            background:
                linear-gradient(
                    #56d3e5,
                    #159fc5
                );

            animation:water 2.5s ease-in-out infinite;

            z-index:2;
        }

        @keyframes water{

            0%,100%{
                transform:
                    translateX(-50%)
                    rotate(-2deg);
            }

            50%{
                transform:
                    translateX(-50%)
                    rotate(2deg);
            }

        }


        /* =====================================
           WATER WAVES
        ===================================== */

        .water-wave{
            width:260px;
            height:45px;

            position:absolute;

            left:50%;
            top:20px;

            transform:translateX(-50%);

            border-top:5px solid rgba(255,255,255,.65);

            border-radius:50%;

            animation:wave 2s ease-in-out infinite;
        }

        .water-wave-2{
            top:45px;

            animation-delay:.5s;
        }

        @keyframes wave{

            0%,100%{
                margin-left:-7px;
            }

            50%{
                margin-left:7px;
            }

        }


        /* =====================================
           CLOTHES
        ===================================== */

        .clothes{
            width:230px;
            height:230px;

            position:absolute;

            left:50%;
            top:50%;

            transform:translate(-50%,-50%);

            z-index:5;

            animation:clothesMove 6s linear infinite;
        }

        @keyframes clothesMove{

            0%{
                transform:
                    translate(-50%,-50%)
                    rotate(0deg);
            }

            100%{
                transform:
                    translate(-50%,-50%)
                    rotate(360deg);
            }

        }


        /* SHIRT */

        .shirt{
            width:62px;
            height:68px;

            position:absolute;

            left:25px;
            top:35px;

            background:#ffffff;

            border-radius:10px;

            transform:rotate(-25deg);

            box-shadow:
                0 4px 8px rgba(0,0,0,.1);
        }

        .shirt::before,
        .shirt::after{
            content:"";

            position:absolute;

            width:30px;
            height:38px;

            top:3px;

            background:#ffffff;

            border-radius:12px;
        }

        .shirt::before{
            left:-20px;
            transform:rotate(35deg);
        }

        .shirt::after{
            right:-20px;
            transform:rotate(-35deg);
        }


        /* PANTS */

        .pants{
            width:55px;
            height:78px;

            position:absolute;

            right:30px;
            top:35px;

            background:#377ab6;

            border-radius:10px;

            transform:rotate(25deg);
        }

        .pants::before,
        .pants::after{
            content:"";

            position:absolute;

            width:23px;
            height:50px;

            bottom:-38px;

            background:#377ab6;

            border-radius:0 0 12px 12px;
        }

        .pants::before{
            left:3px;
        }

        .pants::after{
            right:3px;
        }


        /* SKIRT */

        .skirt{
            width:75px;
            height:55px;

            position:absolute;

            left:72px;
            bottom:25px;

            background:#ef91b7;

            clip-path:
                polygon(
                    15% 0,
                    85% 0,
                    100% 100%,
                    0 100%
                );

            border-radius:7px;

            transform:rotate(15deg);
        }


        /* SOCK */

        .sock{
            width:35px;
            height:58px;

            position:absolute;

            right:35px;
            bottom:30px;

            background:white;

            border-radius:15px 15px 7px 7px;

            transform:rotate(-25deg);
        }

        .sock::before{
            content:"";

            width:100%;
            height:10px;

            position:absolute;

            top:13px;
            left:0;

            background:#ef91b7;
        }

        .sock::after{
            content:"";

            width:38px;
            height:17px;

            position:absolute;

            left:-8px;
            bottom:-3px;

            background:white;

            border-radius:10px;
        }


        /* =====================================
           INNER BUBBLES
        ===================================== */

        .inner-bubble{
            width:14px;
            height:14px;

            position:absolute;

            border:2px solid rgba(255,255,255,.8);

            border-radius:50%;

            z-index:8;

            animation:innerBubble 3s ease-in-out infinite;
        }

        .inner-1{
            left:25px;
            bottom:65px;
        }

        .inner-2{
            right:30px;
            top:55px;

            animation-delay:1s;
        }

        .inner-3{
            left:105px;
            top:35px;

            animation-delay:1.7s;
        }

        @keyframes innerBubble{

            0%,100%{
                transform:translateY(10px);
                opacity:.4;
            }

            50%{
                transform:translateY(-25px);
                opacity:1;
            }

        }


        /* =====================================
           DETERGENT
        ===================================== */

        .detergent{
            width:75px;
            height:105px;

            position:absolute;

            left:30px;
            bottom:45px;

            border-radius:15px 15px 20px 20px;

            background:
                linear-gradient(
                    145deg,
                    #68d9e8,
                    #1ba5cb
                );

            box-shadow:
                0 12px 20px rgba(27,155,190,.18);

            z-index:15;
        }

        .detergent::before{
            content:"";

            width:34px;
            height:15px;

            position:absolute;

            left:20px;
            top:-12px;

            border-radius:5px 5px 0 0;

            background:#43bad5;
        }

        .detergent::after{
            content:"✦";

            position:absolute;

            left:25px;
            top:37px;

            color:white;

            font-size:25px;
        }


        /* =====================================
           BASKET
        ===================================== */

        .basket{
            width:135px;
            height:90px;

            position:absolute;

            right:5px;
            bottom:42px;

            border-radius:15px 15px 27px 27px;

            background:
                linear-gradient(
                    145deg,
                    #58cde0,
                    #1aa1c5
                );

            box-shadow:
                0 14px 25px rgba(26,155,190,.2);

            z-index:15;

            overflow:hidden;
        }

        .basket::before{
            content:"";

            position:absolute;

            left:18px;
            right:18px;
            top:18px;
            bottom:8px;

            background:
                repeating-linear-gradient(
                    90deg,
                    rgba(255,255,255,.2) 0 7px,
                    transparent 7px 17px
                );
        }

        .basket-clothes{
            width:82px;
            height:35px;

            position:absolute;

            right:22px;
            bottom:110px;

            background:#ef91b7;

            border-radius:50%;

            transform:rotate(-8deg);

            z-index:16;
        }

        .basket-clothes::after{
            content:"";

            width:75px;
            height:32px;

            position:absolute;

            left:18px;
            top:-9px;

            background:#71d5e3;

            border-radius:50%;

            transform:rotate(15deg);
        }


        /* =====================================
           INFO CARDS
        ===================================== */

        .info{
            position:absolute;

            z-index:20;

            display:flex;

            align-items:center;

            gap:10px;

            padding:13px 17px;

            background:white;

            border-radius:17px;

            box-shadow:
                0 12px 30px rgba(31,139,164,.13);

            color:#718793;

            font-size:12px;

            animation:cardFloat 4s ease-in-out infinite;
        }

        .info strong{
            display:block;

            color:#183b50;

            font-size:14px;

            margin-bottom:3px;
        }

        .info-icon{
            font-size:23px;
        }

        .info-1{
            left:-5px;
            top:100px;
        }

        .info-2{
            right:-5px;
            bottom:150px;

            animation-delay:1s;
        }

        @keyframes cardFloat{

            0%,100%{
                transform:translateY(0);
            }

            50%{
                transform:translateY(-9px);
            }

        }


        /* =====================================
           SERVICES
        ===================================== */

        .services{
            padding:100px 7%;

            background:white;

            position:relative;

            overflow:hidden;
        }

        .section-heading{
            max-width:700px;

            text-align:center;

            margin:0 auto 55px;

            position:relative;

            z-index:2;
        }

        .section-label{
            display:inline-block;

            padding:9px 18px;

            border-radius:30px;

            background:#e3f8fc;

            color:#1498bd;

            font-size:12px;

            font-weight:bold;

            letter-spacing:2px;

            margin-bottom:15px;
        }

        .section-heading h2{
            font-size:40px;

            color:#173b50;

            margin-bottom:13px;
        }

        .section-heading h2 span{
            color:#16a4c9;
        }

        .section-heading p{
            color:#718897;

            line-height:1.7;
        }

        .service-grid{
            max-width:1100px;

            margin:auto;

            display:grid;

            grid-template-columns:
                repeat(3,1fr);

            gap:28px;

            position:relative;

            z-index:3;
        }

        .service-card{
            position:relative;

            padding:32px 27px;

            background:#ffffff;

            border:1px solid #e2f2f6;

            border-radius:27px;

            box-shadow:
                0 12px 30px
                rgba(30,145,175,.08);

            overflow:hidden;

            transition:.35s;
        }

        .service-card:hover{
            transform:translateY(-10px);

            box-shadow:
                0 22px 40px
                rgba(30,145,175,.15);
        }

        .service-icon{
            width:70px;
            height:70px;

            display:flex;

            align-items:center;
            justify-content:center;

            border-radius:22px;

            background:
                linear-gradient(
                    145deg,
                    #e3f9fc,
                    #c8f1f7
                );

            font-size:32px;

            margin-bottom:22px;
        }

        .service-card h3{
            color:#193e53;

            font-size:20px;

            margin-bottom:11px;
        }

        .service-card p{
            color:#718897;

            line-height:1.7;

            font-size:14px;
        }

        .service-number{
            position:absolute;

            right:20px;
            bottom:12px;

            font-size:44px;

            font-weight:bold;

            color:#edf8fa;
        }


        /* =====================================
           ADVANTAGES
        ===================================== */

        .advantages{
            padding:100px 7%;

            background:#eefaff;

            text-align:center;
        }

        .advantage-grid{
            max-width:1050px;

            margin:50px auto 0;

            display:grid;

            grid-template-columns:
                repeat(4,1fr);

            gap:20px;
        }

        .advantage{
            background:white;

            padding:30px 18px;

            border-radius:24px;

            box-shadow:
                0 10px 25px
                rgba(34,142,169,.07);

            transition:.3s;
        }

        .advantage:hover{
            transform:translateY(-7px);
        }

        .advantage-icon{
            font-size:34px;

            margin-bottom:15px;
        }

        .advantage h3{
            font-size:17px;

            color:#193e53;

            margin-bottom:8px;
        }

        .advantage p{
            color:#718897;

            font-size:13px;

            line-height:1.6;
        }


        /* =====================================
           PROCESS
        ===================================== */

        .process{
            padding:100px 7%;

            background:white;
        }

        .process-grid{
            max-width:1100px;

            margin:55px auto 0;

            display:grid;

            grid-template-columns:
                repeat(4,1fr);

            gap:20px;
        }

        .process-card{
            text-align:center;

            padding:30px 18px;

            border-radius:25px;

            background:#f8fdff;

            border:1px solid #e5f4f7;

            transition:.3s;
        }

        .process-card:hover{
            transform:translateY(-8px);

            box-shadow:
                0 15px 30px
                rgba(34,144,170,.1);
        }

        .process-number{
            width:55px;
            height:55px;

            margin:0 auto 18px;

            display:flex;

            align-items:center;
            justify-content:center;

            border-radius:18px;

            background:
                linear-gradient(
                    135deg,
                    #18a5cb,
                    #5bd8e5
                );

            color:white;

            font-weight:bold;

            box-shadow:
                0 9px 18px
                rgba(27,166,201,.2);
        }

        .process-icon{
            font-size:28px;

            margin-bottom:13px;
        }

        .process-card h3{
            color:#193e53;

            margin-bottom:9px;
        }

        .process-card p{
            color:#718897;

            font-size:13px;

            line-height:1.6;
        }


        /* =====================================
           CTA
        ===================================== */

        .cta{
            padding:90px 7%;

            position:relative;

            overflow:hidden;

            text-align:center;

            color:white;

            background:
                linear-gradient(
                    135deg,
                    #119bc3,
                    #59d4e3
                );
        }

        .cta-circle-1{
            width:300px;
            height:300px;

            position:absolute;

            left:-120px;
            top:-140px;

            border-radius:50%;

            background:
                rgba(255,255,255,.08);
        }

        .cta-circle-2{
            width:350px;
            height:350px;

            position:absolute;

            right:-170px;
            bottom:-190px;

            border-radius:50%;

            background:
                rgba(255,255,255,.08);
        }

        .cta-content{
            position:relative;

            z-index:3;
        }

        .cta-icon{
            font-size:43px;

            margin-bottom:12px;
        }

        .cta h2{
            font-size:39px;

            margin-bottom:13px;
        }

        .cta p{
            max-width:560px;

            margin:0 auto 27px;

            line-height:1.7;

            opacity:.92;
        }

        .cta-button{
            display:inline-block;

            text-decoration:none;

            background:white;

            color:#138eaf;

            padding:15px 29px;

            border-radius:30px;

            font-weight:bold;

            box-shadow:
                0 10px 25px rgba(0,0,0,.12);

            transition:.3s;
        }

        .cta-button:hover{
            transform:translateY(-4px);
        }


        /* =====================================
           FOOTER
        ===================================== */

        footer{
            padding:25px;

            text-align:center;

            background:#10384c;

            color:#b7d4dd;

            font-size:13px;
        }


        /* =====================================
           RESPONSIVE
        ===================================== */

        @media(max-width:1000px){

            .hero{
                grid-template-columns:1fr;

                text-align:center;
            }

            .hero-description{
                margin-left:auto;
                margin-right:auto;
            }

            .hero-actions{
                justify-content:center;
            }

            .visual{
                margin-top:20px;
            }

            .service-grid{
                grid-template-columns:
                    repeat(2,1fr);
            }

            .advantage-grid{
                grid-template-columns:
                    repeat(2,1fr);
            }

            .process-grid{
                grid-template-columns:
                    repeat(2,1fr);
            }

        }


        @media(max-width:600px){

            .navbar{
                height:70px;

                padding:
                    0 5%;
            }

            .brand{
                font-size:20px;
            }

            .brand-icon{
                width:40px;
                height:40px;

                font-size:20px;
            }

            .login-button{
                padding:10px 16px;

                font-size:12px;
            }

            .hero{
                padding:
                    55px 5% 60px;
            }

            .hero h1{
                font-size:41px;
            }

            .hero-description{
                font-size:15px;
            }

            .visual{
                height:440px;

                transform:scale(.78);

                transform-origin:center;

                margin-left:-45px;
                margin-right:-45px;
            }

            .service-grid,
            .advantage-grid,
            .process-grid{
                grid-template-columns:1fr;
            }

            .services,
            .advantages,
            .process{
                padding:
                    75px 5%;
            }

            .section-heading h2{
                font-size:30px;
            }

            .cta{
                padding:
                    70px 5%;
            }

            .cta h2{
                font-size:30px;
            }

        }

    </style>
</head>


<body>


    <!-- =================================
         NAVBAR
    ================================== -->

    <nav class="navbar">

        <div class="brand">

            <div class="brand-icon">
                🧺
            </div>

            Laundry

        </div>


        <a
            href="login.php"
            class="login-button"
        >
            Login Admin
        </a>

    </nav>



    <!-- =================================
         HERO
    ================================== -->

    <section class="hero">


        <div class="hero-text">

            <div class="label">
                LAUNDRY BERSIH • WANGI • RAPI
            </div>


            <h1>

                Pakaian Bersih,
                <br>

                <span>
                    Hidup Lebih Praktis.
                </span>

            </h1>


            <p class="hero-description">

                Serahkan urusan cucian kepada kami.
                Pakaian dicuci dengan bersih, wangi,
                rapi, dan siap digunakan kembali.

            </p>


            <div class="hero-actions">

                <a
                    href="login.php"
                    class="main-button"
                >
                    Login Admin →
                </a>

                <span class="scroll-text">
                    Bersih • Wangi • Rapi
                </span>

            </div>

        </div>



        <!-- =================================
             ANIMATION
        ================================== -->

        <div class="visual">


            <div class="circle-bg"></div>


            <!-- bubbles -->

            <div class="bubble bubble-1"></div>

            <div class="bubble bubble-2"></div>

            <div class="bubble bubble-3"></div>

            <div class="bubble bubble-4"></div>


            <!-- sparkle -->

            <div class="sparkle sparkle-1">
                ✦
            </div>

            <div class="sparkle sparkle-2">
                ✦
            </div>

            <div class="sparkle sparkle-3">
                ✦
            </div>



            <!-- info -->

            <div class="info info-1">

                <div class="info-icon">
                    ✨
                </div>

                <div>

                    <strong>
                        Bersih & Wangi
                    </strong>

                    Siap digunakan

                </div>

            </div>


            <div class="info info-2">

                <div class="info-icon">
                    🧺
                </div>

                <div>

                    <strong>
                        Laundry Praktis
                    </strong>

                    Hemat waktu

                </div>

            </div>



            <!-- washing machine -->

            <div class="washing-machine">


                <div class="machine-top">

                    <div class="machine-dot"></div>

                    <div class="machine-dot"></div>

                    <div class="machine-display"></div>

                </div>



                <div class="door">


                    <div class="drum">


                        <!-- clothes -->

                        <div class="clothes">

                            <div class="shirt"></div>

                            <div class="pants"></div>

                            <div class="skirt"></div>

                            <div class="sock"></div>

                        </div>


                        <!-- water -->

                        <div class="water">

                            <div class="water-wave"></div>

                            <div class="water-wave water-wave-2"></div>

                        </div>


                    </div>



                    <!-- inner bubbles -->

                    <div class="inner-bubble inner-1"></div>

                    <div class="inner-bubble inner-2"></div>

                    <div class="inner-bubble inner-3"></div>


                </div>

            </div>



            <!-- detergent -->

            <div class="detergent"></div>



            <!-- basket -->

            <div class="basket"></div>

            <div class="basket-clothes"></div>


        </div>

    </section>



    <!-- =================================
         SERVICES
    ================================== -->

    <section class="services">


        <div class="section-heading">

            <div class="section-label">
                LAYANAN KAMI
            </div>

            <h2>
                Semua Jadi
                <span>
                    Lebih Praktis
                </span>
            </h2>

            <p>
                Kami membantu merawat pakaianmu
                agar tetap bersih, wangi,
                dan nyaman digunakan.
            </p>

        </div>



        <div class="service-grid">


            <div class="service-card">

                <div class="service-icon">
                    👕
                </div>

                <h3>
                    Cuci Pakaian
                </h3>

                <p>
                    Pakaian dicuci dengan proses
                    yang rapi hingga bersih
                    dan siap digunakan.
                </p>

                <div class="service-number">
                    01
                </div>

            </div>



            <div class="service-card">

                <div class="service-icon">
                    🫧
                </div>

                <h3>
                    Bersih & Wangi
                </h3>

                <p>
                    Pakaian dirawat agar terasa
                    bersih dan memiliki aroma
                    yang menyegarkan.
                </p>

                <div class="service-number">
                    02
                </div>

            </div>



            <div class="service-card">

                <div class="service-icon">
                    🧺
                </div>

                <h3>
                    Rapi & Siap Pakai
                </h3>

                <p>
                    Setelah selesai, pakaian
                    dirapikan sehingga lebih
                    nyaman digunakan.
                </p>

                <div class="service-number">
                    03
                </div>

            </div>


        </div>

    </section>



    <!-- =================================
         ADVANTAGES
    ================================== -->

    <section class="advantages">


        <div class="section-heading">

            <div class="section-label">
                KENAPA KAMI?
            </div>

            <h2>
                Laundry yang
                <span>
                    Lebih Nyaman
                </span>
            </h2>

            <p>
                Kami ingin membuat urusan laundry
                menjadi lebih mudah dan praktis.
            </p>

        </div>



        <div class="advantage-grid">


            <div class="advantage">

                <div class="advantage-icon">
                    ✨
                </div>

                <h3>
                    Bersih
                </h3>

                <p>
                    Pakaian dicuci hingga
                    bersih dan nyaman.
                </p>

            </div>



            <div class="advantage">

                <div class="advantage-icon">
                    🌸
                </div>

                <h3>
                    Wangi
                </h3>

                <p>
                    Pakaian terasa segar
                    dan harum.
                </p>

            </div>



            <div class="advantage">

                <div class="advantage-icon">
                    👔
                </div>

                <h3>
                    Rapi
                </h3>

                <p>
                    Pakaian dirapikan
                    sebelum digunakan.
                </p>

            </div>



            <div class="advantage">

                <div class="advantage-icon">
                    ⏰
                </div>

                <h3>
                    Hemat Waktu
                </h3>

                <p>
                    Tidak perlu menghabiskan
                    waktu untuk mencuci.
                </p>

            </div>


        </div>

    </section>



    <!-- =================================
         PROCESS
    ================================== -->

    <section class="process">


        <div class="section-heading">

            <div class="section-label">
                CARA KERJA
            </div>

            <h2>
                Semudah
                <span>
                    4 Langkah
                </span>
            </h2>

            <p>
                Proses laundry sederhana
                dan mudah dipahami.
            </p>

        </div>



        <div class="process-grid">


            <div class="process-card">

                <div class="process-number">
                    01
                </div>

                <div class="process-icon">
                    🧺
                </div>

                <h3>
                    Antar
                </h3>

                <p>
                    Bawa pakaian
                    yang ingin dicuci.
                </p>

            </div>



            <div class="process-card">

                <div class="process-number">
                    02
                </div>

                <div class="process-icon">
                    🫧
                </div>

                <h3>
                    Dicuci
                </h3>

                <p>
                    Pakaian dicuci
                    hingga bersih.
                </p>

            </div>



            <div class="process-card">

                <div class="process-number">
                    03
                </div>

                <div class="process-icon">
                    ✨
                </div>

                <h3>
                    Dirapikan
                </h3>

                <p>
                    Pakaian dikeringkan
                    dan dirapikan.
                </p>

            </div>



            <div class="process-card">

                <div class="process-number">
                    04
                </div>

                <div class="process-icon">
                    💙
                </div>

                <h3>
                    Selesai
                </h3>

                <p>
                    Pakaian siap
                    digunakan kembali.
                </p>

            </div>


        </div>

    </section>



    <!-- =================================
         CTA
    ================================== -->

    <section class="cta">


        <div class="cta-circle-1"></div>

        <div class="cta-circle-2"></div>


        <div class="cta-content">

            <div class="cta-icon">
                🧺
            </div>

            <h2>
                Laundry Lebih Mudah
            </h2>

            <p>
                Kelola laundry dengan lebih
                praktis, cepat, dan teratur.
            </p>

            <a
                href="login.php"
                class="cta-button"
            >
                Login Admin →
            </a>

        </div>

    </section>



    <!-- =================================
         FOOTER
    ================================== -->

    <footer>

        © 2026 Laundry
        • Bersih, Wangi & Rapi

    </footer>


</body>
</html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<style>
    @font-face {
        font-family: 'MyCustomFont';
        src: url('./fonts/woff/IRANYekanX-Black.woff') format('woff2'),
        url('./fonts/woff/IRANYekanX-Black.woff') format('woff'),
        url('./fonts/woff/IRANYekanX-Black.woff') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    *,
    *:before,
    *:after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        font-family: "MyCustomFont", sans-serif;
        align-items: center;
        background: #333 linear-gradient(135deg, #404040, #333);
        display: flex;
        justify-content: center;
        min-height: 100vh;
        padding: 24px;
    }

    body::-webkit-scrollbar {
        display: none;
    }

    a {
        color: inherit;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    .card {
        color: #d4cd96;
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        transform-origin: 100% 50%;
        transform-style: preserve-3d;
        width: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        transition: transform 0.6s cubic-bezier(0.49, 0.23, 0.58, 0.49);
    }

    .card.flipped {
        transform: translateX(-100%) rotateY(-180deg);
    }

    .card-front,
    .card-back {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        background-size: 3px 3px;
        background: #302f34 repeating-linear-gradient(135deg, rgba(0, 0, 0, 0.3), transparent 1px, rgba(0, 0, 0, 0.3) 2px);
        border-radius: 1px;
        box-shadow: 0px -6px 8px 0px rgba(0, 0, 0, 0.1), 0px 6px 8px 0px rgba(0, 0, 0, 0.1), 6px 0px 8px 0px rgba(0, 0, 0, 0.1), -6px 0px 8px 0px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        height: 100%;
        left: 0;
        padding: 5%;
        position: absolute;
        top: 0;
        width: 100%;
    }

    .card-back {
        transform: rotateY(180deg);
    }

    .card-back .layer {
        background-size: 3px 3px;
        background: #d4cd96 repeating-linear-gradient(135deg, rgba(76, 71, 31, 0.3), transparent 1px, rgba(76, 71, 31, 0.3) 2px);
        color: #302f34;
        height: 100%;
        position: relative;
        width: 100%;
    }

    .card-back .layer:after {
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.2), transparent);
        content: "";
        display: block;
        height: 100%;
        left: 0;
        position: absolute;
        top: 0;
        width: 100%;
    }

    .card-back .layer .top,
    .card-back .layer .bottom {
        left: 8%;
        position: absolute;
        z-index: 1;
    }

    .card-back .layer .top {
        top: 12%;
    }

    .card-back .layer .bottom {
        bottom: 12%;
    }

    .card-back .layer h2, .card-back .layer h3, .card-back .layer h4 {
        font-weight: 400;
        margin: 2px 0;
    }

    .card-back .layer h2 {
        font-size: 18px;
        font-weight: 500;
        text-transform: uppercase;
    }

    .card-back .layer h3 {
        font-size: 16px;
    }

    .card-back .layer h4 {
        font-size: 16px;
        font-style: italic;
    }

    .card-front .layer {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        display: flex;
        flex-direction: column;
        height: 100%;
        justify-content: center;
        position: relative;
        width: 100%;
    }

    .card-front .layer h1 {
        font-size: 32px;
        font-weight: 400;
        letter-spacing: -2px;
        margin: 0 auto;
        padding: 6px 18px 4px;
        text-align: center;
    }

    .card-front .layer .corner {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        border-right: 2px solid #d4cd96;
        border-top: 2px solid #d4cd96;
        height: 12px;
        position: absolute;
        width: 12px;
    }

    .card-front .layer .corner:nth-of-type(1) {
        right: 0;
        top: 0;
    }

    .card-front .layer .corner:nth-of-type(2) {
        left: 0;
        top: 0;
        transform: rotateZ(-90deg);
    }

    .card-front .layer .corner:nth-of-type(3) {
        bottom: 0;
        left: 0;
        transform: rotateZ(180deg);
    }

    .card-front .layer .corner:nth-of-type(4) {
        bottom: 0;
        right: 0;
        transform: rotateZ(90deg);
    }

    .card-wrapper {
        height: 271.7647058824px;
        max-width: 420px;
        perspective: 600px;
        position: relative;
        width: 100%;
        transition: transform 1s;
    }

    h6 {
        color: #fff595;
        padding-top: 20px;
        text-align: center;
    }

    .card-back .layer .top, .card-back .layer .bottom {
        left: 50%;
        transform: translateX(-50%);
        position: absolute;
        z-index: 1;
    }

    .bottom {
        text-align: end;
    }

    /*------------------*
     * Media Queries *
     *------------------*/
    @media (max-width: 768px) { /* تبلت */
        .card-wrapper {
            height: 220px;
            max-width: 100%; /* عرض کامل */
        }
        .card-front .layer h1 {
            font-size: 24px; /* اندازه متن کمتر */
        }
        .card-back .layer h2 {
            font-size: 16px; /* اندازه متن کمتر */
        }
        .card-back .layer h3, .card-back .layer h4 {
            font-size: 14px; /* اندازه متن کمتر */
        }
    }

    @media (max-width: 480px) { /* گوشی */
        body {
            padding: 16px; /* فاصله داخلی کمتر */
        }
        .card-wrapper {
            height: 200px;
        }
        .card-front .layer h1 {
            font-size: 20px; /* اندازه متن کمتر */
        }
        .card-back .layer h2 {
            font-size: 14px; /* اندازه متن کمتر */
        }
        .card-back .layer h3, .card-back .layer h4 {
            font-size: 12px; /* اندازه متن کمتر */
        }
    }
</style>


<div class='card-wrapper'>
    <div class='card' data-toggle-class='flipped'>
        <div class='card-front'>
            <div class='layer'>
                <h1>محمدرضا حائری مهر</h1>
                <h6>Mohammadreza Haerimehr</h6>
                <div class='corner'></div>
                <div class='corner'></div>
                <div class='corner'></div>
                <div class='corner'></div>
            </div>
        </div>
        <div class='card-back txt-custom'>
            <div class='layer'>
                <div class='top'>
                    <h2>کارشناس منابع انسانی</h2>
                </div>
                <div class='bottom'>
                    <h3>
                        <a href='tel:+989122969260'>09122969260</a>
                        <i class="fa-solid fa-phone-flip"></i>
                    </h3>
                    <h3>
                        <a href='mailto:lmenus@lmen.us'>lmenus@lmen.us</a>
                        <i class="fas fa-envelope"></i>
                    </h3>
                    <h3>
                        <a href='https://www.twitter.com/lmenus' target='_blank'>lmenus</a>
                        <i class="fab fa-twitter"></i>
                    </h3>
                    <h3>
                        <a href='https://www.lmen.us' target='_blank'>lmen.us</a>
                        <i class="fas fa-globe"></i>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- اضافه کردن jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- اضافه کردن Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>

<script>
    ;(function () {
        let card  = document.getElementsByClassName('card')[0],
            moved = 0,
            interval;

        if (!card) return;

        card.addEventListener('click', function (event) {
            clearInterval(interval);
            card.style.transform = '';

            // Do not flip the card if the user is trying to
            // tap a link.
            if (event.target.nodeName === 'A') {
                return;
            }

            let cName   = card.getAttribute('data-toggle-class');
            let toggled = card.classList.contains(cName);
            card.classList[toggled ? 'remove' : 'add'](cName);
        });

        interval = setInterval(function () {
            moved = moved ? 0 : 10;
            card.style.transform = 'translateY(' + moved + 'px)';
        }, 1500);
    })();
</script>

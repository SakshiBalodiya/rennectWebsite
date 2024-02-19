<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <footer>
        <div class="container">
            <div class="row">
                <div class="card mt-5">
                    <div class="col">
                        <div class="row" style="padding: 5% 45px; display:flex;align-items:center;">
                            <div class="col-lg-6">
                                <h1 style="color: #521262;">Subscribe newsletters</h1>
                            </div>
                            <div class="col-lg-6">
                                <div class="row footer_email">
                                    <div class="col-lg-6">
                                        <input type="email" placeholder="Enter your email" style="border: none;">
                                    </div>
                                    <div class="col-lg-6">
                                        <button>Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5 border-bottom">
                <div class="col-lg-6 mb-5">
                    <ul class="list-inline">
                        <li class="list-inline-item">Home</li>
                        <li class="list-inline-item">Features</li>
                        <li class="list-inline-item">Screenshot</li>
                        <li class="list-inline-item">App</li>
                        <li class="list-inline-item">Blog</li>
                        <li class="list-inline-item">Contact</li>

                    </ul>
                </div>
                <div class="col-lg-6 text-end mb-5">
                    <img src="{{ asset('images\footer icons.png') }}">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6">
                    <p>copyright © 2024 Rennect All Rights Reserved.</p>
                </div>
                <div class="col-lg-6 text-end">
                    <ul class="list-inline">
                        <li class="list-inline-item">Terms of Service</li>
                        <li class="list-inline-item">Privacy Policy</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
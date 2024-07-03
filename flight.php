<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Flight</title>

    <link rel="stylesheet" href="flight.css">
</head>
<body>
    <div class="container">


        <div class="slide">

            <div class="item" style="background-image: url(./images/img1.jpeg);">
                <div class="content">
                    <div class="name">Europe</div>
                    <div class="des"> Immerse yourself in the rich tapestry of European history with packages that whisk you through ancient ruins in Greece, medieval castles in Germany, and grand palaces in Austria.</div>
                    <button onclick="document.location='about.php'"  type="button">Next</button>
                </div>


            </div>
            <div class="item" style="background-image: url(./images/img2.jpg);">
                <div class="content">
                    <div class="name">South East Asia</div>
                    <div class="des">Pristine beaches and turquoise waters beckon in Southeast Asia. Package deals abound in Thailand, Vietnam, and Indonesia, offering relaxation on the sand and exciting water activities.</div>
                    <button onclick="document.location='about.html'"  type="button">Next</button>
                </div>


            </div>
            <div class="item" style="background-image: url(./images/img3.jpg);">
                <div class="content">
                    <div class="name">Africa</div>
                    <div class="des">Embark on an unforgettable safari adventure in Africa. Packages can take you on thrilling game drives in Kenya, witness the majesty of Victoria Falls in Zambia, or trek through the otherworldly landscapes of Namibia.</div>
                    <button onclick="document.location='about.html'"  type="button">Next</button>
                </div>


            </div>
            <div class="item" style="background-image: url(./images/img4.jpg);">
                <div class="content">
                    <div class="name">Carribean islands</div>
                    <div class="des"> Explore the laid-back island vibes of the Caribbean with all-inclusive packages. From the white sands of the Dominican Republic to the lush rainforests of Dominica, there's a Caribbean island perfect for your beach escape.</div>
                    <button onclick="document.location='about.php'"  type="button">Next</button>
                </div>


            </div>
            <div class="item" style="background-image: url(./images/img5.jpg);">
                <div class="content">
                    <div class="name">middle East</div>
                    <div class="des">Explore the rich history and traditions of the Middle East. Packages can take you to the pyramids of Egypt, the souks of Morocco, or the architectural marvels of Dubai.</div>
                    <button onclick="document.location='about.php'"  type="button">Next</button>
                </div>


            </div>
            <div class="item" style="background-image: url(./images/img6.jpg);">
                <div class="content">
                    <div class="name">Multi country adventure</div>
                    <div class="des">Combine the best of several countries with multi-country travel packages. Explore the ancient wonders of Greece and Turkey, or island hop through the paradises of Fiji and Tahiti.</div>
                    <button onclick="document.location='call.php'"  type="button">Next</button>
                    
                </div>


            </div>
            

        </div>

        <div class="button">
            <button class="prev"><i class="fa-solid fa-arrow-left"></i></button>
            <button class="next"><i class="fa-solid fa-arrow-right"></i></button>
        </div>
    </div>


    <script src="app.js"></script>

</body>
</html>
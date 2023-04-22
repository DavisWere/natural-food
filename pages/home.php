<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foodie</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .main {
            width: 500px;
            background-image: url("../assets/images/welcome.jpg") ;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        /* For IE, Edge and Firefox */
        .scrollbar-hide {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
    </style>
</head>
<body onload="displayRoutes()">
<!--nav-->
    <nav class="flex gap-2 bg-white opacity-90 justify-between p-4 w-full h-16 sticky top-0 z-30 shadow-xl">
<!--        Logo-->
        <h3 class="w-2/12 h-full flex items-center text-3xl text-green-800 font-mono py-2">
            Natural
        </h3>
<!--        actual navigation-->
        <div class="flex gap-2 justify-between pt-1 px-8 bg-[#396F01] text-white text-center font-semibold w-9/12"
             id="navButtons"
             >
<!--nav links are displayed here-->
        </div>
    </nav>
<!--nav-->

<!--main-->
<div class="main w-full h-screen overflow-y-scroll scrollbar-hide">
<!--    welcome text and card-->
    <div class="p-4 flex grid grid-cols-2 ">
<!--        welcome card-->
        <container class=" flex justify-end py-10  ">
            <div class="bg-gray-200 hover:opacity-90  rounded-lg w-8/12 h-fit flex flex-col gap-4 px-4 py-8 justify-between relative">
                <h4 class="text-4xl text-green-600 font-semibold font-mono">
                   Welcome
                </h4>

                <p>
                    I’m a nutrition expert, the name is <span class="text-green-600 italic">Mariana.</span>
                </p>

                <p>
                    I post <span class="text-green-600 italic">latest news related to food and health,</span>
                    give tips on
                    <span class="text-green-600 italic">
                        healthy living for people living with certain health conditions
                    </span>
                    and
                    <span class="text-green-600 italic">even give creative recipes</span>
                </p>

<!--                foodie circle-->
                <div class="h-32 w-32 bg-white -top-14 -right-10 rounded-full flex flex-col justify-center
                items-center text-green-600 text-lg font-semibold font-mono absolute z-20">
                    FOODIE
                </div>
            </div>
        </container>
<!--        welcome text-->
        <container class=" flex justify-center py-10 ">
            <div class=" w-8/12 h-fit flex flex-col gap-4 px-4 py-8">
                <h4 class="text-lg font-semibold">Interested ?</h4>
                <h4 class="text-lg font-semibold">Join Our Online
                    <span class="text-green-600 italic">Community</span>
                </h4>
                <button
                        onclick="navigateTo('browse blogs')"
                        class="bg-green-600 text-white font-mono capitalize rounded-full w-fit py-2 px-4 text-sm hover:bg-green-700">
                    Browse Blogs
                </button>
            </div>
        </container>
    </div>

<!--    rest of body-->
    <div class="h-[800px] bg-gray-200  opacity-90  w-full">

        <div class="grid grid-cols-2 gap-4 border-b border-white py-2">
            &nbsp;
            <div class="w-6/12 mt-2 rounded-lg bg-white h-fit p-2 flex justify-evenly">
                <h3 class="text-2xl text-green-600 font-semibold font-mono">Recent Blog</h3>
                <button onclick="navigateTo('browse blogs')"
                        class="bg-green-600 text-white font-mono capitalize rounded-full w-fit py-2 px-4 text-sm hover:bg-green-700">
                    Browse Blogs
                </button>
            </div>
        </div>

        <!--    display latest blog -->
        <div class="grid grid-cols-2 gap-16">
            <container class=" flex pl-64 py-10 ">
                <!--        Rounded Image -->
                <img src="../assets/images/lemon.jpg" class="w-[300px] h-[300px] rounded">
            </container>
            <container class=" flex flex-col items-between justify-between gap-4 py-10 ">
                <!--        Rounded Image -->
                <h4 class="text-lg text-green-600 font-semibold">
                    Lose Belly Fat
                </h4>
                <h5 class="text-sm font-mono">
                    3/28/2023
                </h5>
                <p>
                Lemons are known to help you lose weight;
                 thanks to the presence of vitamin C and antioxidants that promote good digestion.
                  Lemons also have diuretic properties, which help in detoxifying the body, 
                  thereby helping burning fat. According to experts,
                   this magic potion can boost the body's metabolism to a great extent.
                </p>

                <button
                        onclick="navigateTo('open blog')"
                        class="bg-green-600 text-white font-mono capitalize rounded-full w-fit py-2 px-4 text-sm hover:bg-green-700">
                    Open Blog
                </button>
            </container>

        </div>
    </div>
    <div>
    <style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}
		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
		}
		h1 {
			font-size: 36px;
			margin: 0 0 20px 0;
		}
		h2 {
			font-size: 24px;
			margin: 20px 0 10px 0;
		}
		p {
			font-size: 18px;
			line-height: 1.5;
		}
		ul {
			list-style: none;
			padding: 0;
		}
		li {
			margin: 10px 0;
		}
		a {
			color: #333;
			text-decoration: none;
		}
		a:hover {
			color: #666;
		}
		.contact-info {
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			align-items: center;
			margin: 20px 0;
		}
		.contact-info div {
			flex-basis: 30%;
			margin-bottom: 20px;
		}
		.contact-info h3 {
			margin: 0 0 10px 0;
		}
		.contact-info p {
			margin: 0;
		}
		.social-media {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			margin-top: 20px;
		}
		.social-media a {
			display: inline-block;
			margin: 10px;
			font-size: 24px;
			color: #fff;
			background-color: #333;
			border-radius: 50%;
			width: 50px;
			height: 50px;
			text-align: center;
			line-height: 50px;
			transition: background-color 0.3s ease;
		}
		.social-media a:hover {
			background-color: #666;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Contact Us</h1>
		<div class="contact-info">
			<div>
				<h3>Email Us</h3>
				<p>info@adventuretravel.com</p>
			</div>
			<div>
				<h3>Call Us</h3>
				<p>02004578967</p>
			</div>
			<div>
				<h3>Find Us</h3>
				<p>00100, 565 NAIROBI</p>
			</div>
		</div>
		<h2>Follow Us on Social Media</h2>
		<div class="social-media">
			<a href="www.facebook.com"><i class="fab fa-facebook-f"></i></a>
			<a href="www.twitter.com"><i class="fab fa-twitter"></i></a>
			<a href="www.instagram.com"><i class="fab fa-instagram"></i></a>
			<a href="www.pinterest.com"><i class="fab fa-pinterest"></

</div>


<!--script-->
<script src="../assets/javascript/navigation.js"></script>
</body>
</html>
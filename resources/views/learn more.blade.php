<x-layout>
    <x-slot:heading>
        Learn More Page
    </x-slot:heading>
    <x-slot:action>
        <a href="/"
           class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
        >Return</a>
    </x-slot:action>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Naruto Learn More</title>
        <style>
            body {
                font-family: 'Arial', sans-serif;
                background-color: #f7f3e9; /* Light paper/parchment theme */
                margin: 0;
                padding: 0;
            }

            .learn-more-section {
                background: url('https://wallpapercave.com/wp/wp1810665.jpg') no-repeat center/cover; /* Naruto-themed image */
                padding: 80px 20px;
                color: #fff;
                text-align: center;
            }

            .learn-more-section h1 {
                font-size: 3rem;
                font-weight: bold;
                margin-bottom: 10px;
                letter-spacing: 2px;
                color: #ffc600; /* Hokage-inspired golden color */
                text-shadow: 2px 2px 5px #000;
            }

            .learn-more-section p {
                font-size: 1.2rem;
                max-width: 800px;
                margin: 0 auto 20px;
                line-height: 1.8;
                text-shadow: 1px 1px 4px #000;
            }

            .learn-more-grid {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
                justify-content: center;
                max-width: 1200px;
                margin: 0 auto;
            }

            .card {
                background: #1a1a1a;
                color: #ffc600;
                width: 300px;
                padding: 20px;
                border-radius: 10px;
                text-align: center;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
                transition: all 0.3s ease;
                border: 2px solid #ffc600;
            }

            .card:hover {
                transform: scale(1.05);
                box-shadow: 0 6px 15px rgba(0, 0, 0, 0.7);
            }

            .card img {
                width: 100%;
                border-radius: 10px;
                margin-bottom: 15px;
            }

            .card h2 {
                font-size: 1.6rem;
                margin-bottom: 10px;
                color: #ffe680;
            }

            .card p {
                font-size: 1rem;
                line-height: 1.5;
                color: #fff;
            }

            .btn {
                display: inline-block;
                padding: 10px 20px;
                margin-top: 20px;
                color: #fff;
                text-decoration: none;
                background-color: #e63946;
                border-radius: 5px;
                font-weight: bold;
                transition: background 0.3s ease;
            }

            .btn:hover {
                background-color: #d62828;
            }
        </style>
    </head>
    <body>
    <div class="learn-more-section">
        <h1>Learn More About Naruto</h1>
        <p>Step into the world of ninjas, explore the legendary tales of Naruto Uzumaki and his friends, and learn about
            their incredible journeys within the Hidden Leaf Village and beyond!</p>

        <div class="learn-more-grid">
            <!-- Card 1 -->
            <div class="card">
                <img src="https://wallpapercave.com/wp/wp2468006.jpg" alt="Survival Arc Image">
                <h2>The Ninja Way</h2>
                <p>Discover how Naruto inspired everyone with his never-give-up attitude and his dream to become the
                    Hokage of the Hidden Leaf Village.</p>
                <a href="#" class="btn">Read More</a>
            </div>

            <!-- Card 2 -->
            <div class="card">
                <img src="https://wallpapercave.com/wp/wp2032405.jpg" alt="Hidden Villages">
                <h2>Hidden Villages</h2>
                <p>Explore the world of ninjas, including the five great hidden villages, their traditions, and their
                    leaders!</p>
                <a href="#" class="btn">Read More</a>
            </div>

            <!-- Card 3 -->
            <div class="card">
                <img src="https://wallpapercave.com/wp/wp2317337.jpg" alt="Jutsu Image">
                <h2>Ultimate Jutsu</h2>
                <p>Learn about legendary Jutsu, from Rasengan and Chidori to the Sharingan techniques and Sage Mode
                    transformations!</p>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div>
    </div>
    </body>
    </html>

</x-layout>

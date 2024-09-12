<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance | OrbitDonation</title>

    <!-- Tailwind CSS (CDN) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Custom animation for fade-in */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: scale(0.9);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        /* Custom animation for bounce */
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-30px);
            }
            60% {
                transform: translateY(-15px);
            }
        }

        .fade-in {
            animation: fadeIn 1.5s ease-in-out;
        }

        .bounce {
            animation: bounce 2s infinite;
        }
    </style>

</head>
<body class="h-screen flex flex-col items-center justify-center bg-gradient-to-tr from-emerald-800 to-yellow-500 text-white text-center">
    <div class="max-w-xl p-10 bg-black bg-opacity-50 rounded-lg fade-in">
        <h1 class="text-xl md:text-xl font-bold mb-6">We're Making a Difference</h1>
        <div class="text-6xl mb-6 bounce">🎗️</div>
        <p class="text-base md:text-base mb-8 leading-relaxed">
            Our site is currently under maintenance as we continue to work towards making the world a better place.
            Please check back soon!
        </p>
        <a class="mt-8 inline-flex items-center justify-center rounded-xl bg-green-600 py-3 px-6 font-dm text-base font-medium text-white shadow-sm shadow-green-400/75 transition-transform duration-200 ease-in-out hover:scale-[1.02]"
        href="#">
        Donate Now
    </a>

        <!-- Contact Section -->
        <div class="mt-10">
            <p class="text-xl font-bold mb-4">Stay in touch:</p>
            <div class="flex justify-center space-x-6">
                <!-- Twitter -->
                <a href="https://twitter.com/yourcharity" class="text-2xl hover:text-gray-300" target="_blank" rel="noopener noreferrer">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 128 128">
                    <path d="M75.916 54.2L122.542 0h-11.05L71.008 47.06L38.672 0H1.376l48.898 71.164L1.376 128h11.05L55.18 78.303L89.328 128h37.296L75.913 54.2ZM60.782 71.79l-4.955-7.086l-39.42-56.386h16.972L65.19 53.824l4.954 7.086l41.353 59.15h-16.97L60.782 71.793Z" />
                  </svg>
                </a>

                <!-- Email -->
                <a href="mailto:contact@yourcharity.org" class="text-2xl hover:text-gray-300">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                    <path fill="black" d="M12 18.2c0-.96.5-1.86 1.2-2.46v-.24c0-2.44 2.2-4.5 4.8-4.5c1.65 0 3.13.83 4 2.06V6a2 2 0 0 0-2-2H4c-1.11 0-2 .89-2 2v12a2 2 0 0 0 2 2h8zM4 6l8 5l8-5v2l-8 5l-8-5zm16.8 11v-1.5c0-1.4-1.4-2.5-2.8-2.5s-2.8 1.1-2.8 2.5V17c-.6 0-1.2.6-1.2 1.2v3.5c0 .7.6 1.3 1.2 1.3h5.5c.7 0 1.3-.6 1.3-1.2v-3.5c0-.7-.6-1.3-1.2-1.3m-1.3 0h-3v-1.5c0-.8.7-1.3 1.5-1.3s1.5.5 1.5 1.3z" />
                  </svg>
                </a>

                <!-- Contact Page -->
                <a href="/contact" class="text-2xl hover:text-gray-300">
                  <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24">
                    <path fill="black" d="M17.715 15.953A2.2 2.2 0 0 1 17.152 14h-10.9a2.25 2.25 0 0 0-2.248 2.249v.92c0 .572.178 1.13.51 1.596C6.056 20.929 8.58 22 12 22q.585 0 1.133-.042a2.25 2.25 0 0 1 .353-2.16l.8-1.01a2.2 2.2 0 0 1 2.238-.77l.838.203c.52-.437.83-.975.948-1.644zM12 2.005a5 5 0 1 1 0 10a5 5 0 0 1 0-10m6.192 11.99l.476-1.205c.242-.614.92-.933 1.548-.728l.431.141c.724.237 1.326.806 1.35 1.569c.1 3.11-2.476 7.583-5.213 9.055c-.673.362-1.468.123-2.035-.391l-.337-.305a1.253 1.253 0 0 1-.142-1.706l.8-1.01c.29-.367.767-.53 1.22-.42l1.292.313q1.654-1.095 1.774-3.079l-.917-.964a1.2 1.2 0 0 1-.247-1.27" />
                  </svg>
                </a>
            </div>
        </div>
    </div>
</body>
</html>

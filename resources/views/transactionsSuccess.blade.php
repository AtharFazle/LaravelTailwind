<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    @vite('resources/css/tailwind.css')
    <title>Backer</title>
  </head>
  <body class="antialiased">
    <div class="success-page">
      <div class="container mx-auto h-screen flex justify-center items-center">
        <div class="w-full lg:w-1/3 px-10 lg:px-0">
          <div class="flex justify-center items-center mx-auto mt-6 mb-8">
            <img src="{{ asset('resources/funded-illustration.svg') }}" alt="" class="w-full" />
          </div>
          <h2 class="font-medium mb-3 text-3xl text-center">
            Yeay! You are super
          </h2>
          <p class="text-center font-light">
            Your money has ben transferred
            <br />
            into company's account
          </p>
          <div class="mb-4 mt-6">
            <div class="mb-3">
              <button
                @click="$router.push({ path: '/' })"
                class="block w-full bg-orange-button hover:bg-green-button text-white font-semibold px-6 py-4 text-lg rounded-full"
              >
                Fund Other Project
              </button>
            </div>
            <div class="mb-4">
              <button
                @click="$router.push({ path: '/dashboard' })"
                class="block w-full bg-transparent border border-gray-500 text-gray-500 hover:bg-green-button hover:border-green-button hover:text-white font-light px-6 py-4 text-lg rounded-full"
              >
                My Dashboard
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    @vite("resources/js/app.js")
  </body>
</html>

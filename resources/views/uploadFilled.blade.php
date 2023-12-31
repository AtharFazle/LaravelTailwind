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
    <div class="auth-page">
      <div class="container mx-auto h-screen flex justify-center items-center">
        <div class="w-full lg:w-1/3 px-10 lg:px-0">
          <div class="flex justify-center items-center mx-auto mb-4 w-40">
            <div class="relative">
              <a href="/upload-filled">
                <img
                  src="{{ asset('resources/avatar-filled.jpg') }}"
                  alt=""
                  class="rounded-full border-white border-4"
                />
                <img
                  src="{{ asset('resources/icon-avatar-change.svg') }}"
                  alt=""
                  class="absolute right-0 bottom-0 pb-2"
                />
              </a>
            </div>
          </div>
          <h2 class="font-normal mb-3 text-3xl text-white text-center">
            Hi, Julia
          </h2>
          <p class="text-white text-center font-light">
            Please upload your selfie
          </p>
          <div class="mb-4 mt-6">
            <div class="mb-3">
              <button
                @click="$router.push({ path: '/register-success' })"
                class="block w-full bg-orange-button hover:bg-green-button text-white font-semibold px-6 py-4 text-lg rounded-full"
              >
                Sign Up Now
              </button>
            </div>
          </div>
          <div>
            <div class="mb-4">
              <button
                @click="$router.push({ path: '/register-success' })"
                class="block w-full bg-transparent border-white border hover:bg-green-button hover:border-green-button text-white font-light px-6 py-4 text-lg rounded-full"
              >
                Skip
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    @vite("resources/js/app.js")
  </body>
</html>

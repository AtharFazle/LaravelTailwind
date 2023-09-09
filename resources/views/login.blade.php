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

    <style>
      .auth-background {
        background-image: url("../../public/resources/sign-in-background.jpg");
        background-position: center;
        background-size: cover;
      }
    </style>
        @vite('resources/css/tailwind.css')
    <title>Backer</title>
  </head>
  <body class="antialiased">
    <div class="auth-page">
      <div class="h-screen flex justify-center items-center">
        <div
          class="hidden md:block lg:w-1/3 bg-white h-full auth-background rounded-tr-lg rounded-br-lg"
        ></div>
        <div class="w-auto md:w-2/4 lg:w-2/3 flex justify-center items-center">
          <div class="w-full lg:w-1/2 px-10 lg:px-0">
            <h2 class="font-normal mb-6 text-3xl text-white">
              Sign In to Your Account
            </h2>
            <div class="mb-6">
              <div class="mb-4">
                <label class="font-normal text-lg text-white block mb-3"
                  >Email Address</label
                >
                <input
                  type="email"
                  class="auth-form focus:outline-none focus:bg-purple-hover focus:shadow-outline focus:border-purple-hover-stroke focus:text-gray-100"
                  placeholder="Write your email address here"
                  value="julia.keeva@gmail.com"
                />
              </div>
            </div>
            <div class="mb-6">
              <div class="mb-4">
                <label class="font-normal text-lg text-white block mb-3"
                  >Password</label
                >
                <input
                  type="password"
                  class="auth-form focus:outline-none focus:bg-purple-hover focus:shadow-outline focus:border-purple-hover-stroke focus:text-gray-100"
                  placeholder="Write your password here"
                  value="nasigorenglimaribbu"
                />
              </div>
            </div>
            <div class="mb-6">
              <div class="mb-4">
                <button
                  @click="$router.push({ path: '/' })"
                  class="block w-full bg-orange-button hover:bg-green-button text-white font-semibold px-6 py-4 text-lg rounded-full"
                >
                  Sign In
                </button>
              </div>
            </div>
            <div class="text-center">
              <p class="text-white text-md">
                Don't have account?
                <a href="/register" class="no-underline text-orange-button"
                  >Sign Up</a
                >.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @vite("resources/js/app.js")
  </body>
</html>
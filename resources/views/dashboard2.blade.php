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
    <div class="project-page">
      <section class="dashboard-header pt-5">
        <div class="container mx-auto relative">
          <header class="flex items-center">
            <div style="height: 54px" class="pr-5">
              <img src="{{ asset('resources/logo.svg') }}" alt="logo" class="h-full" />
            </div>
            <ul class="flex items-center">
              <li>
                <a
                  class="text-white hover:text-teal-500 text-lg px-4 py-3"
                  href="/"
                  >Home</a
                >
              </li>
              <li>
                <a
                  class="text-white hover:text-teal-500 text-lg px-4 py-3"
                  href="/pricing"
                  >Project</a
                >
              </li>
              <li>
                <a
                  class="text-white hover:text-teal-500 text-lg px-4 py-3"
                  href="/features"
                  >Features</a
                >
              </li>
              <li>
                <a
                  class="text-white hover:text-teal-500 text-lg px-4 py-3"
                  href="/story"
                  >Success Stories</a
                >
              </li>
            </ul>
            <ul class="flex ml-auto items-center mt-2">
              <li>
                <a
                  href="/register"
                  class="inline-block bg-transparent border-white border hover:bg-white hover:bg-opacity-25 text-white font-light w-40 text-center px-6 py-1 text-lg rounded-full mr-4"
                >
                  Sign Up
                </a>
              </li>
              <li>
                <a
                  href="/login"
                  class="inline-block bg-transparent border-white border hover:bg-white hover:bg-opacity-25 text-white font-light w-40 text-center px-6 py-1 text-lg rounded-full"
                >
                  My Account
                </a>
              </li>
            </ul>
          </header>
        </div>
      </section>
      <section class="container mx-auto pt-8">
        <div class="flex justify-between items-center mb-6">
          <div class="w-3/4 mr-6">
            <h2 class="text-4xl text-gray-900 mb-2 font-medium">Dashboard</h2>
            <ul class="flex mt-2">
              <li class="mr-6">
                <a class="text-gray-800 font-bold" href="#"> Your Projects </a>
              </li>
              <li class="mr-6">
                <a
                  class="text-gray-500 hover:text-gray-800"
                  href="/dashboard/transactions.html"
                >
                  Your Transactions
                </a>
              </li>
            </ul>
          </div>
          <div class="w-1/4 text-right">
            <a
              href="/dashboard/create.html"
              class="bg-orange-button hover:bg-green-button text-white font-bold py-4 px-4 rounded inline-flex items-center"
            >
              + Create Campaign
            </a>
          </div>
        </div>
        <hr />
        <div class="block mb-2">
          <div class="w-full lg:max-w-full lg:flex mb-4">
            <div
              class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
              style="
                background-image: url('https://tailwindcss.com/img/card-left.jpg');
              "
            ></div>
            <div
              class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-8 flex flex-col justify-between leading-normal"
            >
              <div class="mb-8">
                <div class="text-gray-900 font-bold text-xl mb-1">
                  Cari Uang Buat Gunpla
                </div>
                <p class="text-sm text-gray-600 flex items-center mb-2">
                  Rp. 200.000.000 &middot; 80%
                </p>
                <p class="text-gray-700 text-base">
                  With N-key rollover (NKRO on wired mode only) you can register
                  as many keys as you can press at once without missing out
                  characters. It allows to use all the same media keys as
                  conventional macOS.
                </p>
              </div>
              <div class="flex items-center">
                <a
                  href="/dashboard/detail.html"
                  class="bg-green-button text-white py-2 px-4 rounded"
                >
                  Detail
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="cta-clip -mt-20"></div>
      <section class="call-to-action bg-purple-progress pt-64 pb-10"></section>
      <footer class="bg-purple-progress py-20 text-white text-lg">
        <div class="container mx-auto">
          <div class="sm:flex mb-4">
            <div class="sm:w-1/2 sm:mt-0 mt-8 h-auto">
              <img src="{{ asset('resources/logo-footer.svg') }}" alt="" class="mb-3" />
              <p class="font-light">
                Helps people execute their <br />bright ideas
              </p>
            </div>
            <div class="sm:w-1/4 h-auto">
              <div class="mb-8 font-bold">Explore</div>
              <ul class="font-light">
                <li class="mb-3">Our Services</li>
                <li class="mb-3">Equity System</li>
                <li class="mb-3">Refund</li>
                <li class="mb-3">Shareholder</li>
              </ul>
            </div>
            <div class="sm:w-1/4 h-auto">
              <div class="mb-8 font-bold">Investor</div>
              <ul class="font-light">
                <li class="mb-3">My Account</li>
                <li class="mb-3">Top Startups</li>
                <li class="mb-3">How-to Tutorials</li>
                <li class="mb-3">Withdrawl</li>
              </ul>
            </div>
            <div class="sm:w-1/4 h-auto">
              <div class="mb-8 font-bold">Office</div>
              <ul class="font-light">
                <li class="mb-3">+021 2208 1996</li>
                <li class="mb-3">KBP, Bandung</li>
                <li class="mb-3">No.12 (Backer)</li>
                <li class="mb-3">support@backer.id</li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
    @vite("resources/js/app.js")
  </body>
</html>

<div class="min-h-screen flex flex-row  relative  bg-gray-600">
    <div class="flex flex-col w-56 bg-white rounded-r-3xl overflow-hidden bg-gray-600 ">

      <ul class="flex flex-col py-4">
        <li>
            <a href="/home" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-black hover:text-gray-800">
              <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-black"><i class="bx bx-shopping-bag"></i></span>
              <span class="text-sm text-xl font-medium">{{ __('Home') }}</span>
            </a>
          </li>

       <li>
          <a href="/employee/create" class="flex flex-row  pb-10 pt-10 items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-black hover:text-gray-800">
            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-black"><i class="bx bx-drink"></i></span>
            <span class="text-sm text-xl font-medium">{{ __('Add employee') }}</span>
          </a>
        </li>
        <li>
          <a href="/employee" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-black  hover:text-gray-800">
            <span class="inline-flex items-center justify-center h-12 w-12 text-xl text-gray-400"><i class="bx bx-shopping-bag"></i></span>
            <span class="text-sm text-xl font-medium">{{ __('See Employees') }}</span>
          </a>
        </li>

      </ul>
    </div>
  </div>

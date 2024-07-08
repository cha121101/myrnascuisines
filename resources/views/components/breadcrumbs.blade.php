  
  <nav class="flex px-2 pt-4 text-gray-700" aria-label="Breadcrumb">
      <ol class="inline-flex items-center space-x-1 md:space-x-3">
        <li class="inline-flex items-center">
          <button onclick="selected(id = 1)" id="1" class="inline-flex items-center text-xs md:text-base font-extrabold font-geologica text-red-700">
            <svg class="w-3 h-3 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
            </svg>
            <p class="text-red-700 transition duration-300 hover:text-red-700 " id="nav-personal-information"> Personal Details</p>
          </button>
        </li>
        <li>
          <div class="flex items-center" id="nav-packages">
            <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <button onclick="selected(id = 2)"  class="ml-1 text-xs md:text-base font-extrabold font-geologica text-red-700 transition duration-300 hover:text-red-700  md:ml-2">Packages</button>
          </div>
        </li>
        <li>
          <div class="flex items-center" id="nav-venues" >
            <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <button onclick="selected(id = 3)" class="ml-1 text-xs md:text-base font-extrabold font-geologica text-red-700 transition duration-300 hover:text-red-700  md:ml-2">Venues</button>
          </div>
        </li>
        <li>
          <div class="flex items-center" id="nav-time-and-date">
            <svg class="w-3 h-3 mx-1 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <button onclick="selected(id = 4)"  class="ml-1 text-xs md:text-base font-extrabold font-geologica text-red-700 transition duration-300 hover:text-red-700  md:ml-2">Time & Date</button>
          </div>
        </li>
      </ol>
  </nav>
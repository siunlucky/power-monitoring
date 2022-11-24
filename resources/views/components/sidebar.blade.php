<div class="flex flex-col fixed w-64 h-full bg-white">
    <div class="flex items-center justify-center h-14 shadow-md">
        <h1 class="text-3xl uppercase text-indigo-500">Logo</h1>
    </div>
    <ul class="flex flex-col py-4">
        <li class="border-l-4 border-indigo-500">
            <a href="#"
                class="flex flex-row items-center h-12 transform translate-x-2 transition-transform ease-in duration-200 text-gray-800">
                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-800">
                    <i class="bx bxs-dashboard"></i></span>
                <span class="text-sm font-medium">Dashboard</span>

            </a>
        </li>
        <li>
            <button id="dropdownRightButton" data-dropdown-toggle="dropdownRight" data-dropdown-placement="right"
                class="flex flex-row items-center h-12 outline-0 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800"
                type="button">
                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400">
                    <i class="bx bxs-battery"></i>
                </span>
                <span class="text-sm font-medium">Power Monitoring</span>
                <span class="inline-flex items-center justify-center -rotate-90 h-12 w-12 text-lg text-gray-400">
                    <i class="bx bx-chevron-down"></i>
                </span>
            </button>

            <!-- Dropdown menu -->
            <div id="dropdownRight"
                class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRightButton">
                    <li>
                        <a href="#"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                            out</a>
                    </li>
                </ul>
            </div>
        </li>
        <li>
            <a href="#"
                class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                        class="bx bxs-notepad"></i></span>
                <span class="text-sm font-medium">Report</span>
            </a>
        </li>
        <li>
            <a href="#"
                class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                        class="bx bxs-lock-alt"></i></span>
                <span class="text-sm font-medium">Management User</span>
            </a>
        </li>
        <li>
            <a href="#"
                class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                        class="bx bxs-devices"></i></span>
                <span class="text-sm font-medium">Management Device</span>
            </a>
        </li>
        <li>
            <a href="#"
                class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                        class="bx bxs-bell"></i></span>
                <span class="text-sm font-medium">Setting Notification</span>
            </a>
        </li>
        <li>
            <a href="#"
                class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i
                        class="bx bx-log-out"></i></span>
                <span class="text-sm font-medium">Logout</span>
            </a>
        </li>
    </ul>
</div>
<div class="">
    <div class="h-full space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
        <a href="/admin/books"
            class="flex flex-col items-center justify-center w-full p-4 hover:bg-slate-100 dark:hover:bg-gray-700">
            <span class="flex items-center justify-center object-contain w-16 rounded dark:bg-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-layout-list">
                    <rect width="7" height="7" x="3" y="3" rx="1" />
                    <rect width="7" height="7" x="3" y="14" rx="1" />
                    <path d="M14 4h7" />
                    <path d="M14 9h7" />
                    <path d="M14 15h7" />
                    <path d="M14 20h7" />
                </svg>
            </span>
            <div class="flex flex-col items-center justify-center">
                <dt class="mt-2 mb-2 text-3xl font-extrabold dark:text-white">{{ $counts['products'] }}</dt>
                <dd class="text-gray-500 dark:text-gray-400">Products</dd>
            </div>
        </a>

        <a href="/admin/brands"
            class="flex flex-col items-center justify-center w-full p-4 hover:bg-slate-100 dark:hover:bg-gray-700">
            <img src="{{ asset('assets/icons/author.png') }}" alt="icon"
                class="object-contain w-16 rounded dark:bg-gray-200">
            <div class="flex flex-col items-center justify-center">
                <dt class="mt-2 mb-2 text-3xl font-extrabold dark:text-white">{{ $counts['brands'] }}</dt>
                <dd class="text-gray-500 dark:text-gray-400">Brands</dd>
            </div>
        </a>

        <a href="/admin/people/customers"
            class="flex flex-col items-center justify-center w-full p-4 hover:bg-slate-100 dark:hover:bg-gray-700">
            <img src="{{ asset('assets/icons/user.png') }}" alt="icon"
                class="object-contain w-16 rounded dark:bg-gray-200">
            <div class="flex flex-col items-center justify-center">
                <dt class="mt-2 mb-2 text-3xl font-extrabold dark:text-white">{{ $counts['customers'] }}</dt>
                <dd class="text-gray-500 dark:text-gray-400">Customers</dd>
            </div>
        </a>

        <a href="/admin/people/suppliers"
            class="flex flex-col items-center justify-center w-full p-4 hover:bg-slate-100 dark:hover:bg-gray-700">
            <img src="{{ asset('assets/icons/book_categories.png') }}" alt="icon"
                class="object-contain w-16 rounded dark:bg-gray-200">
            <div class="flex flex-col items-center justify-center">
                <dt class="mt-2 mb-2 text-3xl font-extrabold dark:text-white">{{ $counts['suppliers'] }}</dt>
                <dd class="text-gray-500 dark:text-gray-400">Suppliers</dd>
            </div>
        </a>

        <a href="/admin/bulletins"
            class="flex flex-col items-center justify-center w-full p-4 hover:bg-slate-100 dark:hover:bg-gray-700">
            <img src="{{ asset('assets/icons/news.png') }}" alt="icon"
                class="object-contain w-16 rounded dark:bg-gray-200">
            <div class="flex flex-col items-center justify-center">
                <dt class="mt-2 mb-2 text-3xl font-extrabold dark:text-white">{{ $counts['news'] }}</dt>
                <dd class="text-gray-500 dark:text-gray-400">News</dd>
            </div>
        </a>

        <a href="/admin/users"
            class="flex flex-col items-center justify-center w-full p-4 hover:bg-slate-100 dark:hover:bg-gray-700">
            <img src="{{ asset('assets/icons/user.png') }}" alt="icon"
                class="object-contain w-16 rounded dark:bg-gray-200">
            <div class="flex flex-col items-center justify-center">
                <dt class="mt-2 mb-2 text-3xl font-extrabold dark:text-white">{{ $counts['users'] }}</dt>
                <dd class="text-gray-500 dark:text-gray-400">Users</dd>
            </div>
        </a>
        <a href="/admin/orders"
            class="flex flex-col items-center justify-center w-full p-4 hover:bg-slate-100 dark:hover:bg-gray-700">
            <span class="flex items-center justify-center object-contain w-16 rounded dark:bg-gray-200">
                <svg class="bg-white rounded dark:bg-gray-200" xmlns="http://www.w3.org/2000/svg" width="48"
                    height="48" viewBox="0 0 24 24" fill="none" stroke="#121212" stroke-width="1.25"
                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-list-ordered">
                    <path d="M10 12h11" />
                    <path d="M10 18h11" />
                    <path d="M10 6h11" />
                    <path d="M4 10h2" />
                    <path d="M4 6h1v4" />
                    <path d="M6 18H4c0-1 2-2 2-3s-1-1.5-2-1" />
                </svg>
            </span>
            <div class="flex flex-col items-center justify-center">
                <dt class="mt-2 mb-2 text-3xl font-extrabold dark:text-white">{{ $counts['orders'] }}</dt>
                <dd class="text-gray-500 dark:text-gray-400">Orders</dd>
            </div>
        </a>
        <a href="/admin/sales"
            class="flex flex-col items-center justify-center w-full p-4 hover:bg-slate-100 dark:hover:bg-gray-700">
            <span class="flex items-center justify-center object-contain w-16 rounded dark:bg-gray-200">
                <svg class="bg-white rounded dark:bg-gray-200" xmlns="http://www.w3.org/2000/svg" width="48"
                    height="48" viewBox="0 0 24 24" fill="none" stroke="#121212" stroke-width="1.25"
                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clipboard-list">
                    <rect width="8" height="4" x="8" y="2" rx="1" ry="1" />
                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
                    <path d="M12 11h4" />
                    <path d="M12 16h4" />
                    <path d="M8 11h.01" />
                    <path d="M8 16h.01" />
                </svg>
            </span>
            <div class="flex flex-col items-center justify-center">
                <dt class="mt-2 mb-2 text-3xl font-extrabold dark:text-white">{{ $counts['sales'] }}</dt>
                <dd class="text-gray-500 dark:text-gray-400">Sales</dd>
            </div>
        </a>
    </div>
</div>

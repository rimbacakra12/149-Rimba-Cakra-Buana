<header class="">
    <nav class="flex justify-between items-center bg-[#F1DEC9]">
        <div class="mx-5">
            <img src="{{ asset('image/GeekReads-profile.png') }}" alt="" class="w-40">
        </div>
        <div class="flex h-16 items-center justify-between">
            <ul class="flex items-center gap-8">
                <li><a class="text-[#8D7B68] hover:text-white hover:border-b-4 border-[#8D7B68] px-3 py-[17px] font-bold after:scale-50" href="{{ url('/') }}">Home</a></li>
                <li><a class="text-[#8D7B68] hover:text-white hover:border-b-4 border-[#8D7B68] px-3 py-[17px] font-bold" href="{{ url('/books') }}">Books</a></li>
                <li><a class="text-[#8D7B68] hover:text-white hover:border-b-4 border-[#8D7B68] px-3 py-[17px] font-bold" href="{{ url('/writers') }}">Writers</a></li>
                <li><a class="text-[#8D7B68] hover:text-white hover:border-b-4 border-[#8D7B68] px-3 py-[17px] font-bold" href="#">Community</a></li>
                <li><a class="text-[#8D7B68] hover:text-white hover:border-b-4 border-[#8D7B68] px-3 py-[17px] font-bold" href="#">News</a></li>
            </ul>
        </div>
        <div class="mx-5">
            <button class="bg-[#A4907C] text-white px-5 py-2 rounded-md hover:bg-[#8D7B68]">Sign in</button>
        </div>
    </nav>
</header>

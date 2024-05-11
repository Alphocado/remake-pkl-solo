<nav class="w-full bg-blue-950 text-white">
  <div class="container mx-auto flex items-center py-3">
    <h1
      class="space-char-title border-4 border-b-0 border-l-0 border-t-0 border-blue-900 pr-10 font-serif text-3xl"
    >
      MultiBlog
    </h1>
    <div class="flex w-full">
      <div class="flex w-1/4 items-center justify-evenly text-xl">
        <a href="#" class="underline">Home</a>
        <a href="#">About Us</a>
        <a href="#">Browse</a>
      </div>

      <div class="flex w-3/4 justify-end gap-10">
        <div id="search" class="flex items-center">
          <div class="rounded-md bg-blue-900 p-2">
            <label for="search-input" class="p-1">
              <i class="fa-solid fa-magnifying-glass"></i>
            </label>
            <input
              type="text"
              id="search-input"
              class="bg-blue-900 outline-none"
              placeholder="search"
            />
          </div>
        </div>

        <div class="flex items-center justify-center">
          <a id="tweet" href="#" class="rounded-md bg-blue-900 px-12 py-2">
            Tweet
          </a>
        </div>

        <div id="profile" class="flex items-center gap-2">
          <img
            src="/assets/images/default.jpg"
            class="w-12 rounded-full"
            alt=""
          />
          <i class="fa-solid fa-chevron-down"></i>
        </div>
      </div>
    </div>
  </div>
</nav>

@extends("layouts/template-login-signup")
@section("container")
  <div
    class="relative w-full rounded-md bg-gradient-to-t from-blue-900 to-blue-800 px-2 py-10 md:w-2/3 md:px-10 lg:w-1/3 xl:w-1/4 xl:px-12"
  >
    <div class="flex flex-col text-white">
      <a href="/login" class="absolute left-3 top-3 text-4xl">
        <i class="fa fa-arrow-left"></i>
      </a>
      <div class="mb-2 w-full text-center text-4xl md:mb-10">
        <h1>SignUp</h1>
      </div>
      <form action="/login" method="">
        {{-- Profile --}}
        <section class="-mt-5 mb-7 flex w-full items-center justify-center">
          <div
            id="image-preview"
            class="block h-20 w-20 overflow-hidden rounded-full"
          >
            <input id="upload" type="file" class="hidden" accept="image/*" />
            <label for="upload" class="flex cursor-pointer">
              <img
                src="/assets/images/default.jpg"
                class="h-full w-full object-cover"
              />
            </label>
          </div>

          <label
            for="upload"
            id="addImg"
            class="absolute flex h-20 w-20 cursor-pointer items-center justify-center rounded-full text-center text-black opacity-0 hover:bg-slate-600 hover:opacity-60"
          >
            <i class="fa-solid fa-file-circle-plus text-center text-3xl"></i>
          </label>
        </section>

        {{-- Name --}}
        <section class="relative mb-5">
          <input
            type="text"
            id="name_login"
            name="name_login"
            class="peer block w-full appearance-none rounded-lg border-2 border-gray-300 bg-blue-800 px-2.5 pb-2.5 pt-4 text-sm focus:outline-none focus:ring-0"
            placeholder=" "
          />
          <label
            for="name_login"
            class="absolute start-1 top-2 z-10 origin-[0] -translate-y-4 scale-75 transform bg-blue-800 px-2 text-sm duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4"
          >
            Name
          </label>
        </section>

        {{-- Username --}}
        <section class="relative mb-5">
          <input
            type="text"
            id="username_login"
            name="username_login"
            class="peer block w-full appearance-none rounded-lg border-2 border-gray-300 bg-blue-800 px-2.5 pb-2.5 pt-4 text-sm focus:outline-none focus:ring-0"
            placeholder=" "
          />
          <label
            for="username_login"
            class="absolute start-1 top-2 z-10 origin-[0] -translate-y-4 scale-75 transform bg-blue-800 px-2 text-sm duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4"
          >
            Username
          </label>
        </section>

        {{-- Email --}}
        <section class="relative mb-5">
          <input
            type="text"
            id="email_login"
            name="email_login"
            class="peer block w-full appearance-none rounded-lg border-2 border-gray-300 bg-blue-800 px-2.5 pb-2.5 pt-4 text-sm focus:outline-none focus:ring-0"
            placeholder=" "
          />
          <label
            for="email_login"
            class="absolute start-1 top-2 z-10 origin-[0] -translate-y-4 scale-75 transform bg-blue-800 px-2 text-sm duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4"
          >
            Email
          </label>
        </section>

        {{-- Password --}}
        <section class="relative mb-5">
          <input
            type="password"
            id="password_login"
            name="password_login"
            class="peer block w-full appearance-none rounded-lg border-2 border-gray-300 bg-blue-800 px-2.5 pb-2.5 pt-4 text-sm focus:outline-none focus:ring-0"
            placeholder=" "
          />
          <label
            for="password_login"
            class="absolute start-1 top-2 z-10 origin-[0] -translate-y-4 scale-75 transform bg-blue-800 px-2 text-sm duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4"
          >
            Password
          </label>
        </section>

        {{-- Confirm Password --}}
        <section class="relative mb-5">
          <input
            type="password"
            id="password_confirm_login"
            name="password_confirm_login"
            class="peer block w-full appearance-none rounded-lg border-2 border-gray-300 bg-blue-800 px-2.5 pb-2.5 pt-4 text-sm focus:outline-none focus:ring-0"
            placeholder=" "
          />
          <label
            for="password_confirm_login"
            class="absolute start-1 top-2 z-10 origin-[0] -translate-y-4 scale-75 transform bg-blue-800 px-2 text-sm duration-300 peer-placeholder-shown:top-1/2 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:scale-100 peer-focus:top-2 peer-focus:-translate-y-4 peer-focus:scale-75 peer-focus:px-2 rtl:peer-focus:left-auto rtl:peer-focus:translate-x-1/4"
          >
            Confirm Password
          </label>
        </section>

        {{-- Button --}}
        <section class="flex flex-col">
          <button
            type="submit"
            class="mb-3 rounded-lg bg-blue-700 p-3 text-center"
          >
            SignUp
          </button>
          <a href="/login" class="text-center underline">
            Already Have an Account?
          </a>
        </section>
      </form>
    </div>
  </div>
@endsection

@extends("layouts/template-login-signup")
@section("container")
  <div
    class="relative w-full rounded-md bg-gradient-to-t from-blue-900 to-blue-800 px-2 py-10 md:w-2/3 md:px-10 lg:w-1/3 xl:w-1/4 xl:px-12"
  >
    <div class="flex flex-col text-white">
      <a href="/" class="absolute left-3 top-3 text-4xl">
        <i class="fa fa-arrow-left"></i>
      </a>
      <div class="mb-7 w-full text-center text-4xl md:mb-10">
        <h1>Login</h1>
      </div>
      <form action="/" method="">
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
        <div class="relative mb-5">
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
        </div>

        <div class="mb-10 flex items-center xl:mb-28 xl:ml-10">
          <input
            id="remember_me"
            type="checkbox"
            value=""
            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600"
          />
          <label
            for="remember_me"
            class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300"
          >
            Remember Me
          </label>
        </div>

        <div class="flex flex-col">
          <button
            type="submit"
            class="mb-3 rounded-lg bg-blue-700 p-3 text-center"
          >
            Login
          </button>
          <a href="/signup" class="rounded-lg bg-blue-700 p-3 text-center">
            SignUp
          </a>
        </div>
      </form>
    </div>
  </div>
@endsection

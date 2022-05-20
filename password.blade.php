<x-app-layout>

    <form action="{{ url('/settings/password') }}" id="password" method="POST"
        class="flex-1 w-full p-6 space-y-6 overflow-hidden bg-white border border-gray-200 sm:rounded-lg">

        <h3 class="text-xl font-medium leading-6 text-gray-900">Password</h3>

        <div class="space-y-2">
            <label for="current_password" class="block text-sm font-medium leading-5 text-gray-700">
                Current Password
            </label>
            <input id="current_password" type="password" name="current_password"
                class="block w-full px-3 py-2 transition duration-150 ease-in-out border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5 {{ $errors->has('current_password') ? 'border-red-500': '' }}">
            {!! $errors->first('current_password', '<div class="mt-1 text-xs italic text-red-500">
                :message</div>') !!}
        </div>

        <div class="space-y-2">
            <label for="password" class="block text-sm font-medium leading-5 text-gray-700">
                New Password
            </label>
            <input id="password" type="password" name="password" required
                class="block w-full px-3 py-2 transition duration-150 ease-in-out border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5 {{ $errors->has('password') ? 'border-red-500': '' }}">
            {!! $errors->first('password', '<div class="mt-1 text-xs italic text-red-500">
                :message</div>') !!}
        </div>

        <div class="space-y-2">
            <label for="password_confirmation" class="block text-sm font-medium leading-5 text-gray-700">
                Confirm Password
            </label>
            <input id="password_confirmation" type="password" name="password_confirmation"
                class="block w-full px-3 py-2 transition duration-150 ease-in-out border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5 {{ $errors->has('password_confirmation') ? 'border-red-500': '' }}">
            {!! $errors->first('password_confirmation', '<div class="mt-1 text-xs italic text-red-500">
                :message</div>
            ') !!}
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="inline-flex items-center justify-center px-4 py-2 ml-3 space-x-2 text-sm font-semibold text-white transition duration-200 ease-in-out border border-transparent rounded-md shadow-sm bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                <span>Save</span>
            </button>
        </div>
        @csrf
    </form>

</x-app-layout>
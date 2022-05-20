<x-app-layout>

    <form action="{{ url('/settings/account') }}" id="account" method="POST" enctype="multipart/form-data"
        class="flex-1 w-full max-w-lg p-6 mx-auto space-y-6 overflow-hidden bg-white border border-gray-200 sm:rounded-lg">

        <h3 class="text-xl font-medium leading-6 text-gray-900">Account</h3>

        <div class="w-full space-y-2">
            <label for="name" class="block text-sm font-medium leading-5 text-gray-700">
                Full Name
            </label>
            <input type="text" id="name" name="name"
                class="block w-full px-3 py-2 transition duration-150 ease-in-out border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5 {{ $errors->has('name') ? 'border-red-500': '' }}"
                value="{{ old('name', $user->name) }}">
            {!! $errors->first('name', '<div class="mt-1 text-xs italic text-red-500">
                :message</div>') !!}
        </div>

        <div class="w-full space-y-2">
            <label for="email" class="block text-sm font-medium leading-5 text-gray-700">
                Email Address
            </label>
            <input type="email" id="email_address" name="email" required
                class="block w-full px-3 py-2 transition duration-150 ease-in-out border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5 {{ $errors->has('email') ? 'border-red-500': '' }}"
                value="{{ old('email', $user->email) }}">
            {!! $errors->first('email', '<div class="mt-1 text-xs italic text-red-500">
                :message
            </div>') !!}
        </div>

        <div class="w-full space-y-2">
            <label for="gender" class="block text-sm font-medium leading-5 text-gray-700">
                Gender
            </label>
            <input type="text" id="gender" name="gender" required
                class="block w-full px-3 py-2 transition duration-150 ease-in-out border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5 {{ $errors->has('gender') ? 'border-red-500': '' }}"
                value="{{ old('gender', $user->gender) }}">
            {!! $errors->first('gender', '<div class="mt-1 text-xs italic text-red-500">
                :message
            </div>') !!}
        </div>

        <div class="w-full space-y-2">
            <label for="instagram" class="block text-sm font-medium leading-5 text-gray-700">
                Instagram
            </label>
            <input type="text" id="instagram" name="instagram" required
                class="block w-full px-3 py-2 transition duration-150 ease-in-out border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5 {{ $errors->has('instagram') ? 'border-red-500': '' }}"
                value="{{ old('instagram', $user->instagram) }}">
            {!! $errors->first('instagram', '<div class="mt-1 text-xs italic text-red-500">
                :message
            </div>') !!}
        </div>
        
        <div class="w-full space-y-2">
            <label for="follower_count" class="block text-sm font-medium leading-5 text-gray-700">
                Follower Count
            </label>
            <input type="text" id="follower_count" name="follower_count" required
                class="block w-full px-3 py-2 transition duration-150 ease-in-out border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5 {{ $errors->has('follower_count') ? 'border-red-500': '' }}"
                value="{{ old('follower_count', $user->follower_count) }}">
            {!! $errors->first('follower_count', '<div class="mt-1 text-xs italic text-red-500">
                :message
            </div>') !!}
        </div>

        <div class="w-full space-y-2">
            <label for="age" class="block text-sm font-medium leading-5 text-gray-700">
                Age
            </label>
            <input type="text" id="age" name="age" required
                class="block w-full px-3 py-2 transition duration-150 ease-in-out border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5 {{ $errors->has('age') ? 'border-red-500': '' }}"
                value="{{ old('age', $user->age) }}">
            {!! $errors->first('age', '<div class="mt-1 text-xs italic text-red-500">
                :message
            </div>') !!}
        </div>

        <div class="w-full space-y-2">
            <label for="industry" class="block text-sm font-medium leading-5 text-gray-700">
                Industry
            </label>
            <input type="text" id="industry" name="industry" required
                class="block w-full px-3 py-2 transition duration-150 ease-in-out border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5 {{ $errors->has('industry') ? 'border-red-500': '' }}"
                value="{{ old('industry', $user->industry) }}">
            {!! $errors->first('industry', '<div class="mt-1 text-xs italic text-red-500">
                :message
            </div>') !!}
        </div>

        <div class="w-full space-y-2">
            <label for="city" class="block text-sm font-medium leading-5 text-gray-700">
                City
            </label>
            <input type="text" id="city" name="city" required
                class="block w-full px-3 py-2 transition duration-150 ease-in-out border border-gray-300 rounded-md shadow-sm form-input focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5 {{ $errors->has('city') ? 'border-red-500': '' }}"
                value="{{ old('city', $user->city) }}">
            {!! $errors->first('city', '<div class="mt-1 text-xs italic text-red-500">
                :message
            </div>') !!}
        </div>

        <div class="w-full space-y-2">
            <label for="bio" class="block text-sm font-medium leading-5 text-gray-700">
                Bio
            </label>
            
            <textarea id="bio" name="bio" rows="7" class="block w-full border border-gray-300 rounded-md shadow-sm focus:ring-primary-500 focus:border-primary-500 sm:text-sm">{{ old('bio', $user->bio) }}</textarea>
            {!! $errors->first('bio', '<div class="mt-1 text-xs italic text-red-500">
                :message
            </div>') !!}
        </div>

        <div class="flex items-center p-4 rounded-lg bg-gray-50">
            <img src="" class="hidden object-cover w-16 h-16 rounded-full image-preview" id="uploadPreview">
            @if (isset($user->avatar))
            <img src="/storage/avatars/{{ $user->avatar }}" class="w-16 h-16 rounded-full image-icon">
            @else
            <div class="image-icon">
                <x-avatar :user="$user" rounded :size="16" />
            </div>
            @endif

            <input type="file" id="imageInput" name="avatar" class="hidden">
            <label type="button" for="imageInput"
                class="px-3 py-2 ml-5 text-sm font-medium leading-4 text-gray-700 transition duration-200 ease-in-out bg-white border border-gray-300 rounded-md shadow-sm cursor-pointer hover:bg-primary-100 focus:outline-none">
                Change
            </label>
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
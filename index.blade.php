<x-app-layout>
@include('cookieConsent::index')
    @section('header')
        @if(Auth::user()->type == 'influencer')
        Brands
        @else
        Influencers
        @endif
    @endsection

    @if($results && $results->count() != 0)
    
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach($results as $result)
            <a href="/user/{{ $result->uuid }}" class="p-3 bg-white rounded primary">
                <div class="flex space-x-4">
                    <x-avatar :user="$result" rounded :size="12" />
                    <div>
                        <div class="text-lg font-bold">{{ $result->name }}</div>
                        <div class="text-xs font-medium text-gray-500">{!! Str::limit($result->bio, 110, ' ...') !!}
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
        </div>


        <hr style="	margin-top: 30px;">
        <h1 class="text-lg font-bold" style="	margin-top: 30px; margin-bottom: 30px;">
            @if(Auth::user()->type == 'influencer')
            Brands for You
            @else
            Influencers for You
            @endif
        </h1>
        <hr style=" margin-bottom: 30px;">

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach($matched_city as $res)
            <a href="/user/{{ $res->uuid }}" class="p-3 bg-white rounded primary">
                <div class="flex space-x-4">
                    <x-avatar :user="$res" rounded :size="12" />
                    <div>
                        <div class="text-lg font-bold">{{ $res->name }}</div>
                        <div class="text-xs font-medium text-gray-500">{!! Str::limit($res->bio, 110, ' ...') !!}
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
        </div>
        <br>
        <br>

    @else
        <div class="relative block w-full p-12 text-center border-2 border-gray-300 border-dashed rounded-lgtrans">
            <svg class="w-10 h-10 mx-auto text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
            <span class="block mt-2 font-semibold text-gray-900">
                Nothing found.
            </span>
        </div>
    @endif
    
</x-app-layout>
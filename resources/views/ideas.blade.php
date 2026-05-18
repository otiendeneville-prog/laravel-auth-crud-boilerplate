<x-layout>
    <div class="space-y-12">

        <!-- 1. CREATE NEW IDEA FORM -->
        <form method="POST" action="/ideas">
            @csrf
            <div class="col-span-full">
                <label for="ideas" class="block text-sm/6 font-medium text-white">New Idea</label>
                <div class="mt-2">
                    <textarea id="ideas" name="ideas" cols="30" rows="3"
                        class="block w-full rounded-md bg-white/5 px-3 text-white" placeholder="Type your idea here..."></textarea>
                </div>
                <p class="mt-3 text-sm/6 text-gray-400">You have an idea want to save for later.</p>
            </div>

            <div class="mt-4">
                <button type="submit"
                    class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-400">
                    Save Idea
                </button>
            </div>
        </form>

        <!-- 2. LISTING ALL IDEAS & ACTIONS -->
        <div class="mt-10 text-white">
            {{-- @if ($ideas->count()) --}}
            @if (isset($ideas) && $ideas->count())

                <h2 class="font-bold text-lg mb-4">Ideas in podcast!</h2>
                <ul class="space-y-4">
                    @foreach ($ideas as $singleIdea)
                        <li class="flex items-center justify-between p-4 bg-white/5 rounded-md">
                            <div>
                                <span class="text-sm block">{{ $singleIdea->description }}</span>
                                <!-- Link to take user to the specific edit page -->
                                <a href="/ideas/{{ $singleIdea->id }}"
                                    class="text-xs text-indigo-400 hover:underline">Edit details</a>
                            </div>
                            <!-- INDEPENDENT DELETE FORM -->
                            <form action="/ideas/{{ $singleIdea->id }}" method="POST"
                                onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="rounded-md bg-red-600 px-3 py-1 text-xs font-semibold text-white hover:bg-red-500">
                                    Delete
                                </button>
                            </form>
                        </li>
                    @endforeach
                </ul>
            @else
            @endif
            <div class=" mt-6 grid grid-col-2 gap-6-xl gap-y-4 card bg-neutral text-neutral-content w-96">
                 @foreach($ideas as $idea)
                <div class="card-body items-center text-center">
                    <h2 class="card-title">{{$idea->description}}</h2>
                    <div class="card-actions justify-end">
                    </div>
                </div>
                  @endforeach
            </div>
            <div class=" mt-6 grid grid-col-2 gap-6-xl gap-y-4 card bg-neutral text-neutral-content w-96">
                <div class="card-body items-center text-center">
                    <h2 class="card-title">Cookies!</h2>
                    <p>We are using cookies for no reason.</p>
                    <div class="card-actions justify-end">
                    </div>
                </div>
            </div>
         
            <div class=" mt-6 grid grid-col-2 gap-6-xl gap-y-4 card bg-neutral text-neutral-content w-96">
                <div class="card-body items-center text-center">
                    <h2 class="card-title">Cookies!</h2>
                    <p>We are using cookies for no reason.</p>
                    <div class="card-actions justify-end">
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-layout>

<x-layout>
    <div class="space-y-12">

        <form method="POST" action="/ideas">
            @csrf
            <div class="col-span-full">
                <label for="ideas" class="block text-sm/6 font-medium text-white">edit a new blade:</label>
                <div class="mt-2">
                    <textarea id="ideas" name="ideas" cols="30" rows="3"
                        class="block w-full rounded-md bg-white/5 px-3 text-white" placeholder="Type your idea here..."></textarea>
                        @if($errors->has('description'))
                          <p>there is an error</p>
                        @endif
                </div>
                <p class="mt-3 text-sm/6 text-gray-400">You have an idea want to save for later.</p>
            </div>

            <div class="mt-4">
                <button type="submit"
                    class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-400">
                    edit idea
                </button>
                <p>No idea yet create idea:<a href="/ideas/create">edit the new idea</a></p>
            </div>
        </form>
    </div>
</x-layout>

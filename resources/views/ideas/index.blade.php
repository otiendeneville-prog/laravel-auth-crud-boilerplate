<x-layout>
  <form method="POST" action="/ideas">
   @csrf
   <div class="col-span-full">
      <label for="idea" class="block text-sm/6 font-medium text-white">New Idea</label>
      <div class="mt-2">
         <textarea id="idea" name="idea" cols="30" rows="3" class="block w-full rounded-md bg-white/5 px-3" required></textarea>
      </div>
      <p class="mt-3 text-sm/6 text-white-400">You have an idea want to save for later.</p>
   </div>
   <div class="mt-6 flex items-center gap-x-6">
      <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white">Save</button>
   </div>
  </form>
  <hr class="my-6 border-white/10">
  <ul class="text-white">
     @foreach($ideas as $idea)
         <li class="mb-2">{{ $idea->content }}</li>
     @endforeach
  </ul>
</x-layout>

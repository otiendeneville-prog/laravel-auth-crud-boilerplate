




<x-layout>
  
  <form method="POST" action="/ideas" >
   @csrf
   <div class="col-span-full">
      <label for="idea" class="block text-sm/6 font-medium text-white">New Idea</label>
      <div class="mt-2">
         <textarea  id="idea" name="idea"  cols="30" rows="3" class="block w-full rounded-md bg-white/5 px-3"></textarea>
      </div>
           <p class="mt- 3 text-sm/6 text-white-400">You have an idea want to save for later.</p>
   </div>
   <div class="mt-6 flex items-center gap-x-6">
      <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>


   </div>
  </form>

</x-layout>







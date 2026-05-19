<x-layout>
  register from here:
  <form action="/register" method="POST">
  <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 max-auto">
  <legend class="fieldset-legend">Register</legend>

  <label class="lable" for="name">Name</label>
  <input class="text" placeholder="Your Name">

  <label class="label" for="email">Email</label>
  <input type="email" class="input" placeholder="Email" />

  <label class="label">Password</label>
  <input type="password" class="input" placeholder="Password" />

  <button class="btn btn-neutral mt-4">Register</button>
</fieldset>
</form>
</x-layout>
<x-layout>
    Login
    <form action="/login" method="POST">
        @csrf
        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 mx-auto">
            <legend class="fieldset-legend">Login</legend>
            <label class="label" for="email">Email</label>
            <input type="email" name="email" class="input" placeholder="Email" required />
            @error('email')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <label class="label">Password</label>
            <input type="password" name="password" class="input" placeholder="Password" required />
            @error('password')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <button class="btn btn-neutral mt-4">Login</button>
        </fieldset>
    </form>
</x-layout>

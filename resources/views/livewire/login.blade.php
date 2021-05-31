<div class="bg-blue-400 h-screen w-screen">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <div class="flex flex-col items-center flex-1 h-full justify-center px-4 sm:px-0">
        <div class="flex rounded-lg shadow-lg w-full sm:w-3/4 lg:w-1/2 bg-white sm:mx-0" style="height: 500px">
            <div class="flex flex-col w-full md:w-1/2 p-4">
                <div class="flex flex-col flex-1 justify-center mb-8">
                    <h1 class="text-4xl text-center font-thin">Welcome Back</h1>
                    <div class="w-full mt-4">
                            <form>

                                <div class="form-group">
                                    <label for="exampleFormControlInput2">Email address</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput2" wire:model="email" placeholder="Enter Email">
                                    @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Enter password" wire:model="password">
                                </div>
                                    <button wire:click.prevent="login()" class="btn btn-success" >login</button>
                            </form>
                            <div class="text-center mt-4">
                                <a class="no-underline hover:underline text-blue-dark text-xs">
                                    Forgot Your Password?
                                </a>
                            </div>
                    </div>
                </div>
            </div>
            <div class="hidden md:block md:w-1/2 rounded-r-lg" style="background: url('https://images.unsplash.com/photo-1515965885361-f1e0095517ea?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=3300&q=80'); background-size: cover; background-position: center center;"></div>
        </div>
    </div>
</div>
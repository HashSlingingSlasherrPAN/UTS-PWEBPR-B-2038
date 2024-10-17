@extends('components.template')
@section('title','login')

@section('content')
    <section class="my-[80px]">
        <div class="grid bg grid-cols-2">
            <div class="px-[20px]  col-span-1">
                <h1 class="font-[500] text-[3.5rem]">Stay Connected, Stay In Control</h1>
                <p class="top-[40px] relative font-[400] text-[1.5rem]">take full control of your professional and personal contacts with a sleek, user-friendly app that simplifies communication.</p>
            </div>
            <div class="col-span-1 overflow-hidden relative px-[50px]">
                <div class=" border-[1px] bg-white rounded-xl border-black">
                     <h1 class="font-[500] left-[90px] top-[10px] absolute text-[1.5rem]">LOGIN</h1>

                    <form class="px-[50px] flex-col flex gap-[10px] py-[50px]" action="">
                        <div>
                            <label class="" for="">Username :</label><br>
                        <input class="w-full border rounded-sm border-black" type="text" name="" id=""><br>

                       <div>
                        <label for="">Password</label><br>
                        <input class="w-full border border-black rounded-sm" type="text" name="" id="">
                       </div>

                    </form>
                    <div class="text-black my-[5px]">
                        <h1>
                            Don't have an account?<a class="text-[#15B392]" href="register">Register</a>
                        </h1>
                    </div>
                    <div class="my-[40px]">
                        <a class="my-[90px] py-[6px] px-[40px] rounded-lg font-[500]  text-white bg-[#753ee1] shadow-lg shadow-[#753ee1]" href="/dashboard">Login</a>

                    </div>
                </div>
            </div>

        </div>

    </section>
@endsection








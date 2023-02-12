<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Home</title>
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

  #check:checked ~ ul{
    left: 0;
  }
</style>
<body>
    <nav class="bg-cyan-600 w-full fixed top-0">
        <div class = 'flex md:flex-row justify-between items-center mt-5 mb-5 sm:w-[90%] mx-auto text-white'>
            <div>
                <h1 class="font-bold">Gretsa Tech Corner</h1>
            </div>

            <div class="space-x-6">
                <span><a href="#">Web</a></span>
                <span><a href="#">Android</a></span>
                <span><a href="#">CyberSec</a></span>
                <span><a href="#">Network</a></span>
                <span><a href="#">Data Science</a></span>
                <span><a href="#">UI/UX Designer</a></span>
                <input type="checkbox" name="checkbox" class="md:hidden">
            </div>
        </div>
    </nav>

    <main class ="min-h-screen bg-slate-200">
        <section class = 'bg-img sm:h-[50vh] sm:w-full' >

        </section>
        <section class="grid grid-cols-[500px_1fr] gap-4">
            <div class="p-3">
                <div class="text-sm">Design.  Code  .Network</div>
                
                <div class="h-3/5 w-full">
                    <h1 class="text-center tracking-wider">Upcoming Events</h1>
                    <div class="flex p-3 shadow-md h-24">
                        <div class="date text-white font-semibold bg-slate-500 rounded-sm text-center p-2 h-20 w-20">
                            <div class="day text-xs">Monday</div>
                            <div class="day-int text-sm">1</div>
                        </div>
                        <div class="event p-2 shadow-inner">
                            <div class="title text-base font-semibold">Data Persistence</div>
                            <div class="Description text-sm">Data Persistence with Daniel Waiguru Senior Android Dev</div>
                        </div>
                    </div>

                    <div class="flex p-3 shadow-md h-24">
                        <div class="date text-white font-semibold bg-slate-500 rounded-sm text-center p-2 h-20 w-20">
                            <div class="day text-xs">Wednesday</div>
                            <div class="day-int text-sm">3</div>
                        </div>
                        <div class="event p-2 shadow-inner">
                            <div class="title text-base font-semibold">Web Development</div>
                            <div class="Description text-sm">Web Development with Brian K. Senior Web Dev</div>
                        </div>
                    </div>

                    <div class="flex p-3 shadow-md h-24">
                        <div class="date text-white font-semibold bg-slate-500 rounded-sm text-center p-2 h-20 w-20">
                            <div class="day text-xs">Saturday</div>
                            <div class="day-int text-sm">6</div>
                        </div>
                        <div class="event p-2 shadow-inner">
                            <div class="title text-base font-semibold">Networking Specialist</div>
                            <div class="Description text-sm">Networking Specialist with Andrew Senior Net Specialist</div>
                        </div>
                    </div>
                    <div class="flex p-3 shadow-md h-24">
                        <div class="date text-white font-semibold bg-slate-500 rounded-sm text-center p-2 h-20 w-20">
                            <div class="day text-xs">Tuesday</div>
                            <div class="day-int text-sm">12</div>
                        </div>
                        <div class="event p-2 shadow-inner">
                            <div class="title text-base font-semibold">Dev Fest</div>
                            <div class="Description text-sm">Dev Fest with inter-universities GDSCS</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class ='p-4 flex gap-4 flex-wrap justify-start'>
                <div class = 'p-3 flex flex-col justify-center items-center h-64 w-72 rounded-2xl shadow-2xl bg-gradient-to-r from-cyan-500 to-blue-500'>
                    <x-microns-web class="h-12 w-12 text-white"/>
                    <h1 class="text-white text-lg font-bold">Web Development</h1>
                </div>
                
                <div class = 'p-3 flex flex-col justify-center items-center h-64 w-72 rounded-2xl shadow-2xl bg-gradient-to-r from-cyan-500 to-blue-500'>
                    <x-eos-android class="h-12 w-12 text-white"/>
                    <h1 class="text-white text-lg font-bold p-2">Android Dev</h1>
                </div>
                <div class = 'p-3 flex flex-col justify-center items-center h-64 w-72 rounded-2xl shadow-2xl bg-gradient-to-r from-cyan-500 to-blue-500'>
                    <x-gmdi-security class="h-12 w-12 text-white" />
                    <h1 class="text-white text-lg font-bold p-2">Cyber Security</h1>
                </div>
                <div class = 'p-3 flex flex-col justify-center items-center h-64 w-72 rounded-2xl shadow-2xl bg-gradient-to-r from-cyan-500 to-blue-500'>
                    <x-lucide-network class="h-12 w-12 text-white"/>
                    <h1 class="text-white text-lg font-bold p-2">Networking</h1>
                    
                </div>
                <div class = 'p-3 flex flex-col justify-center items-center h-64 w-72 rounded-2xl shadow-2xl bg-gradient-to-r from-cyan-500 to-blue-500'>
                    <x-eos-data-scientist class="h-12 w-12 text-white"/>
                    <h1 class="text-white text-lg font-bold p-2">Data Science</h1>  
                </div>
                <div class = 'p-3 flex flex-col justify-center items-center h-64 w-72 rounded-2xl shadow-2xl bg-gradient-to-r from-cyan-500 to-blue-500'>
                    <x-elusive-brush class="h-12 w-12 text-white"/>
                    <h1 class="text-white text-lg font-bold p-2">UI/UX Design</h1>
                </div>
            </div>
        </section>
        
        <section class="w-full h-[30vh] p-3 bg-black">
            <canvas class = 'w-full h-full object-cover' id="canvas" >
        </section>
    </main>
</body>
</html>
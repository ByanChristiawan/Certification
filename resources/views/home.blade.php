@extends('layouts.app')

@section('content')
    <div class="justify-center md:pl-10 w-full h-auto space-y-5 md:w-[65%] md:space-y-10 my-auto">
        <div class="space-y-3">
        <h1 class="text-typography-100 text-2xl font-bold text-center lg:text-5xl lg:text-start">Check a Certification</h1>
        <p class="text-typography-300 text-sm text-center md:text-base lg:text-start">Enter the certification number to check the valid certification.</p>
        </div>
        <form class='space-y-5 md:space-y-10'>
            <div class='space-y-1'>
            <input
                name = 'certification'
                class="p-3 w-full text-sm bg-opacity-0 rounded-lg outline-1 outline-typography-300 md:text-base md:p-5 focus:outline-primary-100"
                placeholder='Certification Number' />
            </div>
            <Button class="w-full bg-primary-100 text-sm md:text-base text-typography-100 py-2 rounded-lg md:py-5 hover:bg-primary-200 active:border-0 focus:border-0">Check</Button>
        </form>
    </div>
@endsection
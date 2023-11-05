@extends('layouts.app')

@section('content')
    <div class="justify-center md:pl-10 w-full h-auto space-y-5 md:w-[65%] md:space-y-10 my-auto">
        <div class="flex bg-transaparent text-sm md:text-base font-normal fill-typography-300 text-typography-300 hover:font-medium hover:text-typography-100 hover:fill-typography-100">
            <svg class="" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 25" fill="none">
                <path d="M15.41 17.09L10.83 12.5L15.41 7.91L14 6.5L8 12.5L14 18.5L15.41 17.09Z" fill="#000"/>
            </svg>
            <p class='mx-[10px]'>Back</p>
        </div>
        <h1 class="text-typography-100 text-2xl font-bold text-center md:text-3xl md:text-start lg:text-5xl">Your Certificate Data</h1>

        <table class="table-auto  w-full">
            <tbody class='space-y-5'>

                <tr class='flex flex-col lg:flex-row  lg:gap-5'>
                    <td class='text-xs text-typography-300 text-center md:text-start md:text-base lg:text-typography-100 lg:w-40'>Certification Number</td>
                    <td class='hidden lg:inline-block text-base text-typography-100'>:</td>
                    <td class='text-base font-medium text-center md:text-start text-typography-100 lg:font-normal'>03/03/MG/EDU/ALSAV/2023</td>
                </tr>

                <tr class='flex flex-col lg:flex-row lg:gap-5'>
                    <td class='text-xs text-typography-300 text-center md:text-start lg:text-base lg:text-typography-100 lg:w-40'>Name</td>
                    <td class='hidden lg:block text-base text-typography-100'>:</td>
                    <td class='text-base font-medium text-center md:text-start text-typography-100 lg:font-normal'>DICKI TRI WAHYUDHA</td>
                </tr>

                <tr class='flex flex-col lg:flex-row lg:gap-5'>
                    <td class='text-xs text-typography-300 text-center md:text-start lg:text-base lg:text-typography-100 lg:w-40'>Program</td>
                    <td class='hidden lg:inline-block text-base text-typography-100'>:</td>
                    <td class='text-base font-medium text-center md:text-start text-typography-100 lg:font-normal'>INTERNSHIP PROGRAM (MAGANG)</td>
                </tr>

                <tr class='flex flex-col lg:flex-row lg:gap-5'>
                    <td class='text-xs text-typography-300 text-center md:text-start lg:text-base lg:text-typography-100 lg:w-40'>Period</td>
                    <td class='hidden lg:block text-base text-typography-100'>:</td>
                    <td class='text-base font-medium text-center md:text-start text-typography-100 lg:font-normal'>03 OCTOBER 2023 to 16 MARCH 2024</td>
                </tr>

                <tr class='flex flex-col lg:flex-row lg:gap-5'>
                    <td class='text-xs text-typography-300 text-center md:text-start lg:text-base lg:text-typography-100 md:w-40'>Status</td>
                    <td class='hidden lg:inline-block text-base text-typography-100'>:</td>
                    <td class='text-base font-medium text-center md:text-start text-primary-100 lg:font-bold'>Valid</td>
                </tr>
            </tbody>
        </table>
        <p class="text-typography-300 text-sm text-center md:text-base md:text-start">This certificate is issued by <span class='font-bold'>PT. ALSAV SYSTEM DEVELOPMENT</span> and internally validated</p>
    </div>
@endsection
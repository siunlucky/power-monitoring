@extends('layout.main')

@section('content')
<div class="grid grid-cols-12 gap-6">
    {{-- INFO 1 --}}
    <div
        class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
        <div class="px-5 pt-5">
            <header class="flex justify-between items-center mb-2">
                <i class="bx bxs-bolt bx-md z-0 text-slate-400"></i>
                <button class="text-slate-400 flex hover:text-slate-500 rounded-full false">
                    <i class="bx bx-info-circle flex bx-sm"></i>
                </button>
            </header>
            <h2 class="text-lg font-semibold text-slate-800 mb-2">Total Power Consumed</h2>
            <div class="text-xs font-semibold text-slate-400 uppercase mb-1">Total Daya </div>
            <div class="flex items-start mb-2">
                <div class="text-2xl font-bold text-slate-800 mr-2">17.690 kWh</div>
                <div class="text-sm font-semibold text-white px-1.5 bg-green-400 rounded-full">+49%</div>
            </div>
            <div class="text-xs font-semibold text-slate-400 uppercase mb-1">Cost</div>
            <div class="flex items-start mb-4">
                <div class="text-xl font-bold text-slate-800 mr-2">Rp. 9.830.771</div>

            </div>
        </div>
        <div class="grow" style="width: 100%; margin: auto;">
            <canvas id="line-chart1"></canvas>
        </div>
    </div>

    {{-- INFO 2 --}}

    <div
        class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
        <div class="px-5 pt-5">
            <header class="flex justify-between items-center mb-2">
                <i class="bx bxs-bolt bx-md text-slate-400"></i>
                <button class="text-slate-400 flex hover:text-slate-500 rounded-full false">
                    <i class="bx bx-info-circle flex bx-sm"></i>
                </button>
            </header>
            <h2 class="text-lg font-semibold text-slate-800 mb-2">Lorem, ipsum dolor.</h2>
            <div class="text-xs font-semibold text-slate-400 uppercase mb-1">Lorem ipsum dolor sit.</div>
            <div class="flex items-start mb-2">
                <div class="text-2xl font-bold text-slate-800 mr-2">Lorem, ipsum.</div>
                <div class="text-sm font-semibold text-white px-1.5 bg-green-400 rounded-full">+22</div>
            </div>
            <div class="text-xs font-semibold text-slate-400 uppercase mb-1">Cost</div>
            <div class="flex items-start mb-4">
                <div class="text-xl font-bold text-slate-800 mr-2">Rp. 9.830.771</div>

            </div>
        </div>
        <div class="grow" style="width: 100%; margin: auto;">
            <canvas id="line-chart2"></canvas>
        </div>
    </div>

    {{-- INFO 3 --}}

    <div
        class="flex flex-col col-span-full sm:col-span-6 xl:col-span-4 bg-white shadow-lg rounded-sm border border-slate-200">
        <div class="px-5 pt-5">
            <header class="flex justify-between items-center mb-2">
                <i class="bx bxs-bell-ring bx-tada bx-md text-amber-400"></i>
                <button class="text-slate-400 flex hover:text-slate-500 rounded-full false">
                    <i class="bx bx-info-circle flex bx-sm"></i>
                </button>
            </header>
            <h2 class="text-lg font-semibold text-slate-800 mb-2">Warning Alert</h2>
            <div class="text-xs font-semibold text-slate-400 uppercase mb-1">Total Warning </div>
            <div class="flex items-start mb-2">
                <div class="text-2xl font-bold text-slate-800 mr-2">1</div>
                <div class="text-sm font-semibold text-white px-1.5 bg-green-400 rounded-full"></div>
            </div>
        </div>
        <div class="grow" style="width: 100%; margin: auto;">
            <canvas id="line-chart"></canvas>
        </div>
    </div>

    {{-- INFO 4 --}}

    <div class="flex flex-col col-span-full sm:col-span-6 bg-white shadow-lg rounded-sm border border-slate-200">
        <header class="px-5 py-4 border-b border-slate-100">
            <h2 class="font-semibold text-slate-800">Realtime Power</h2>
        </header>
        <div class="px-5 py-3">
            <div class="flex items-start">
                <div class="text-3xl font-bold text-slate-800 mr-2 tabular-nums">
                    <span>42.14</span>
                </div>
                <div class="text-sm font-semibold text-white px-1.5 bg-green-400 rounded-full">+22%</div>
            </div>
        </div>
        <div class="grow">
            <canvas id="line-chart3"></canvas>
        </div>
    </div>

    {{-- INFO 5 --}}
    <div class="flex flex-col col-span-full sm:col-span-6 bg-white shadow-lg rounded-sm border border-slate-200">
        <header class="px-5 py-4 border-b border-slate-100">
            <h2 class="font-semibold text-slate-800">Alert History</h2>
        </header>
        <div class="p-3">
            <div>
                <header class="text-xs uppercase text-slate-400 bg-slate-50 rounded-sm font-semibold p-2">
                    Today
                </header>
                <ul class="my-1">
                    <li class="flex px-2">
                        <div class="w-9 h-9 rounded-full shrink-0 bg-rose-500 my-2 mr-3">
                            <div class="w-9 h-9 flex items-center justify-center">
                                <i class="bx bxs-error text-rose-50 bx-sm"></i>
                            </div>

                            {{-- <svg class="w-9 h-9 fill-current text-rose-50" viewBox="0 0 36 36">
                                <path d="M17.7 24.7l1.4-1.4-4.3-4.3H25v-2H14.8l4.3-4.3-1.4-1.4L11 18z"></path>
                            </svg> --}}
                        </div>
                        <div class="grow flex items-center border-b border-slate-100 text-sm py-2">
                            <div class="grow flex justify-between">
                                <div class="self-center"><a class="font-medium text-slate-800 hover:text-slate-900"
                                        href="#0">Sensor Suhu</a> was down</div>
                                <div class="shrink-0 self-start ml-2"><span class="font-medium text-slate-800">24
                                        November 2022 02.12</span></div>
                            </div>
                        </div>
                    </li>

                    <header class="text-xs uppercase text-slate-400 bg-slate-50 rounded-sm font-semibold p-2">
                        Yesterday
                    </header>
                    <ul class="my-1">
                        <li class="flex px-2">
                            <div class="w-9 h-9 rounded-full shrink-0 bg-green-500 my-2 mr-3">
                                <div class="w-9 h-9 flex items-center justify-center">
                                    <i class="bx bxs-bell-ring text-rose-50 bx-sm"></i>
                                </div>

                            </div>
                            <div class="grow flex items-center border-b border-slate-100 text-sm py-2">
                                <div class="grow flex justify-between">
                                    <div class="self-center"><a class="font-medium text-slate-800 hover:text-slate-900"
                                            href="#0">Sensor Air</a> is back to normal</div>
                                    <div class="shrink-0 self-start ml-2"><span class="font-medium text-green-500">23
                                            November 2022 12.11</span></div>
                                </div>
                            </div>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')

@endsection
@extends('layouts.app')
@section('title', 'SABR: South African Breastmilk Reserve - Statistics')
@section('meta-description', 'South African Breastmilk Reserve - Bringing milk to babies, safely.')
@section('content')

<style>
    .table-responsive-media {
        width: 100%;
        border-collapse: collapse;
        background: #fff;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.08);
    }

    .table-responsive-media thead {
        background-color: #23b4e9;
        color: #fff;
    }

    .table-responsive-media th {
        padding: 16px;
        text-align: left;
        font-size: 18px;
        font-weight: 600;
        text-transform: capitalize;
    }

    .table-responsive-media tbody tr {
        border-bottom: 1px solid #e5e5e5;
    }

    .table-responsive-media tbody tr:last-child {
        border-bottom: none;
        background-color: #f3fcff;
    }

    .table-responsive-media tbody tr:hover {
        background-color: #f8f9fa;
    }

    .table-responsive-media td {
        padding: 16px;
        font-size: 16px;
        color: #333;
    }

    .table-responsive-media tbody tr:last-child td {
        font-weight: 700;
        color: #23b4e9;
    }

    /* Mobile responsive styling */
    @media screen and (max-width: 768px) {
        .table-responsive-media thead {
            display: none;
        }

        .table-responsive-media tbody tr {
            display: block;
            margin-bottom: 16px;
            border: 1px solid #e5e5e5;
            border-radius: 12px;
            overflow: hidden;
        }

        .table-responsive-media tbody tr:last-child {
            background-color: #23b4e9;
            border-color: #23b4e9;
        }

        .table-responsive-media tbody tr:last-child td {
            color: #fff;
        }

        .table-responsive-media td {
            display: block;
            text-align: right;
            padding: 12px 16px;
            position: relative;
            border-bottom: 1px solid #e5e5e5;
        }

        .table-responsive-media td:last-child {
            border-bottom: none;
        }

        .table-responsive-media td::before {
            content: attr(data-label);
            position: absolute;
            left: 16px;
            font-weight: 600;
            color: #666;
        }

        .table-responsive-media tbody tr:last-child td::before {
            color: rgba(255, 255, 255, 0.9);
        }
    }
</style>

<section class="relative w-full h-[350px] md:h-[450px] overflow-hidden">
    <!-- Background Video -->

    <!-- Content Overlay -->
    <div class="relative z-10 flex flex-col h-full pt-[10px] md:pt-[186px]">
        <div class="wrapper">
            <div class="w-full h-full flex flex-col gap-6">
                <div class="w-full h-full flex flex-col text-[#107BA2] gap-0">
                    <div class="w-full text-[#107BA2] text-[48px] md:text-[64px] font-normal break-words pt-[180px] md:pt-[20px]">
                        Our Statistics
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Historical Data Table Section -->
<section class="py-[60px] bg-[#FCFAF8]">
    <div class="wrapper">
        <div class="mb-8">
            <h2 class="text-[32px] md:text-[48px] text-[#107BA2] font-sans font-semibold mb-4">Historical Data</h2>
            <p class="text-[18px] text-[#666562] font-sans font-light">Recipients and donors supported over the years</p>
        </div>
        
        <table class="table-responsive-media">
            <thead>
                <tr>
                    <th>Year</th>
                    <th>Total Recipients</th>
                    <th>Total Donors</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Year">2003/2014</td>
                    <td data-label="Total Recipients">8000</td>
                    <td data-label="Total Donors">—</td>
                </tr>
                <tr>
                    <td data-label="Year">2014/2015</td>
                    <td data-label="Total Recipients">2845</td>
                    <td data-label="Total Donors">1142</td>
                </tr>
                <tr>
                    <td data-label="Year">2015/2016</td>
                    <td data-label="Total Recipients">2831</td>
                    <td data-label="Total Donors">1170</td>
                </tr>
                <tr>
                    <td data-label="Year">2016/2017</td>
                    <td data-label="Total Recipients">2721</td>
                    <td data-label="Total Donors">1159</td>
                </tr>
                <tr>
                    <td data-label="Year">2017/2018</td>
                    <td data-label="Total Recipients">2969</td>
                    <td data-label="Total Donors">828</td>
                </tr>
                <tr>
                    <td data-label="Year">2018/2019</td>
                    <td data-label="Total Recipients">3250</td>
                    <td data-label="Total Donors">850</td>
                </tr>
                <tr>
                    <td data-label="Year">2019/2020</td>
                    <td data-label="Total Recipients">3022</td>
                    <td data-label="Total Donors">880</td>
                </tr>
                <tr>
                    <td data-label="Year">2020/2021</td>
                    <td data-label="Total Recipients">5729</td>
                    <td data-label="Total Donors">1049</td>
                </tr>
                <tr>
                    <td data-label="Year">2021/2022</td>
                    <td data-label="Total Recipients">3779</td>
                    <td data-label="Total Donors">1000</td>
                </tr>
                <tr>
                    <td data-label="Year">2022/2023</td>
                    <td data-label="Total Recipients">3506</td>
                    <td data-label="Total Donors">815</td>
                </tr>
                <tr>
                    <td data-label="Year">2023/2024</td>
                    <td data-label="Total Recipients">3074</td>
                    <td data-label="Total Donors">832</td>
                </tr>
                <tr>
                    <td data-label="Year">2024/2025 </td>
                    <td data-label="Total Recipients">4818</td>
                    <td data-label="Total Donors">971</td>
                </tr>
                <tr>
                    <td data-label="Year">Total</td>
                    <td data-label="Total Recipients">46544</td>
                    <td data-label="Total Donors">10696</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<section class="pb-[100px]">
    <div class="wrapper">
        <h2 class="text-[32px] font-sans md:text-[48px] text-[#107BA2] mb-4">MILK BY NUMBERS</h2>
        <div class="section-3 font-inter">
            <div class="flex flex-col gap-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-[#23b4e9]">
                    <div class="flex flex-col bg-[#f3fcff] border border-[#23b4e9] rounded-2xl p-6 gap-4">
                        <b class="text-[64px] text-[#23b4e9]">156</b>
                        <b class="text-xl text-black">NICU supported with human milk banking service</b>
                    </div>
                    <div class="flex flex-col bg-[#f3fcff] border border-[#23b4e9] rounded-2xl p-6 gap-4">
                        <b class="text-[64px] text-[#23b4e9]">28229</b>
                        <b class="text-xl text-black">Units of breastmilk distributed countrywide</b>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="flex flex-col bg-[#f3fcff] border border-[#23b4e9] rounded-2xl p-6 gap-3.5">
                        <b class="text-[64px] text-[#23b4e9]">4818</b>
                        <b class="text-xl text-black">Babies received DBM</b>
                    </div>
                    
                    <div class="flex flex-col bg-[#f3fcff] border border-[#23b4e9] rounded-2xl p-6 gap-3.5">
                        <b class="text-[64px] text-[#23b4e9]">971</b>
                        <b class="text-xl text-black">Number of donors supplying breastmilk</b>
                    </div>
                    <div class="flex flex-col bg-[#f3fcff] border border-[#23b4e9] rounded-2xl p-6 gap-3.5">
                        <b class="text-[64px] text-[#23b4e9]">25</b>
                        <b class="text-xl text-black">Situated in public hospitals</b>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="flex flex-col border border-[#23b4e9] bg-[#f3fcff] rounded-2xl p-6 gap-3.5">
                        <b class="text-[64px] text-[#23b4e9]">2</b>
                        <b class="text-xl text-black">Additional collection centres</b>
                    </div>
                    <div class="flex flex-col bg-[#f3fcff] border border-[#23b4e9] rounded-2xl p-6 gap-3.5">
                        <b class="text-[64px] text-[#23b4e9]">1</b>
                        <b class="text-xl text-black">Reserve bank</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
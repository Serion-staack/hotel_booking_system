@extends('dashboard.layouts.app')
@php
    use Illuminate\Support\Str;
@endphp

@section('content')

    <div class="container">
        <h1>Available Rooms</h1>
        <div class="row">
            @foreach($rooms as $room)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                       {{-- <img src="{{ $room->image_url ? asset('storage/' . $room->image_url) : asset('images/default.jpg') }}"
                             class="w-full h-40 object-cover rounded" alt="Room Image">--}}
                        @if($room->images->isNotEmpty())
                            <img src="{{ asset('storage/' . $room->images->first()->image_path) }}"
                                 class="w-full h-40 object-cover rounded" alt="Room Image">
                        @else
                            <img src="{{ asset('images/default.jpg') }}"
                                 class="w-full h-40 object-cover rounded" alt="Default Room Image">
                        @endif


                        <div class="card-body">
                            <h5 class="card-title">Room {{ $room->room_number }} - {{ $room->name }}</h5>
                            <p><strong>Floor:</strong> {{ $room->floor }}</p>
                            <p><strong>Price:</strong> ${{ number_format($room->price, 2) }}</p>
                            <p>{{ Str::limit($room->description, 100) }}</p>
                            @if(!empty(json_decode($room->amenities)))
                                <p><strong>Amenities:</strong></p>
                                <ul>
                                    @foreach(json_decode($room->amenities) as $amenity)
                                        <li>{{ ucfirst($amenity) }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


{{--@php
    $languages = ['en', 'it', 'al', 'es', 'de', 'fr'];
@endphp

@section('content')
    <div class="app-container container-xxl">
        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
            <div class="d-flex flex-column flex-column-fluid">
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <div class="d-flex flex-column flex-lg-row">
                        <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
                            <div class="card">
                                <div class="card-body p-12">
                                    <form action="{{ route('company.insurances.store') }}" method="POST" class="ajax-form" id="insurances_store_form">
                                        @csrf

                                        <div class="mb-10">
                                            <h2 class="fs-2x fw-bold text-gray-800 mb-4">@lang('master.insurances.new_insurance')</h2>
                                            <div class="separator separator-dashed mb-10"></div>
                                            <div class="mb-10">
                                                <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                                                    @foreach($languages as $lang)
                                                        <li class="nav-item">
                                                            <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-bs-toggle="tab" href="#title_{{ $lang }}">
                                                                @lang("master.languages.$lang")
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                                <div class="tab-content">
                                                    @foreach($languages as $lang)
                                                        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="title_{{ $lang }}">
                                                            <div class="mb-5">
                                                                <label for="title_{{ $lang }}" class="form-label fw-semibold">
                                                                    @lang("master.insurances.title_$lang")
                                                                </label>
                                                                <input type="text" class="form-control form-control-lg form-control-solid"
                                                                       name="title_{{ $lang }}" id="title_{{ $lang }}"
                                                                       placeholder="@lang("master.insurances.title_$lang")">
                                                                <span class="invalid-feedback" role="alert"><strong></strong></span>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="mb-10">
                                                <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                                                    @foreach($languages as $lang)
                                                        <li class="nav-item">
                                                            <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-bs-toggle="tab" href="#desc_{{ $lang }}">
                                                                @lang("master.languages.$lang")
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                                <div class="tab-content">
                                                    @foreach($languages as $lang)
                                                        <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="desc_{{ $lang }}">
                                                            <div class="mb-5">
                                                                <label for="description_{{ $lang }}" class="form-label fw-semibold">
                                                                    @lang("master.insurances.description_$lang")
                                                                </label>
                                                                <input type="text" class="form-control form-control-lg form-control-solid"
                                                                       name="description_{{ $lang }}" id="description_{{ $lang }}"
                                                                       placeholder="@lang("master.insurances.description_$lang")">
                                                                <span class="invalid-feedback" role="alert"><strong></strong></span>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 mb-5">
                                                    <label for="price_per_day" class="form-label fw-semibold">@lang('master.insurances.price_per_day') (€)</label>
                                                    <input type="number" name="price_per_day" id="price_per_day" class="form-control form-control-lg form-control-solid"
                                                           placeholder="@lang('master.insurances.price_per_day')" />
                                                </div>
                                                <div class="col-md-6 mb-5">
                                                    <label for="deposit_price" class="form-label fw-semibold">@lang('master.insurances.deposit_price')</label>
                                                    <input type="number" name="deposit_price" id="deposit_price" class="form-control form-control-lg form-control-solid"
                                                           placeholder="@lang('master.insurances.deposit_price')" />
                                                </div>
                                                <div class="col-md-6 mb-5">
                                                    <label for="theft_protection_price" class="form-label fw-semibold">@lang('master.insurances.theft_protection_price')</label>
                                                    <input type="number" name="theft_protection_price" id="theft_protection_price" class="form-control form-control-lg form-control-solid"
                                                           placeholder="@lang('master.insurances.theft_protection_price')" />
                                                </div>
                                            </div>
                                            <div class="form-check form-switch form-check-custom form-check-solid mt-7 mb-3">
                                                <input class="form-check-input" type="checkbox" name="has_deposit" id="has_deposit">
                                                <label class="form-check-label fw-bold" for="has_deposit">
                                                    @lang('master.insurances.deposit')
                                                </label>
                                            </div>

                                            <div class="form-check form-switch form-check-custom form-check-solid mb-10">
                                                <input class="form-check-input" type="checkbox" name="has_theft_protection" id="has_theft_protection">
                                                <label class="form-check-label fw-bold" for="has_theft_protection">
                                                    @lang('master.insurances.theft_protection')
                                                </label>
                                            </div>
                                        </div>

                                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                                            <button type="submit" class="btn btn-primary submit-btn-2">
                                                <i class="ki-outline ki-triangle fs-3"></i>
                                                <i class="fa fa-spinner fa-spin d-none"></i>
                                                @lang('master.save')
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection--}}

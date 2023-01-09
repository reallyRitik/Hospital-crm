@extends('users.admin.layouts.master')
@section('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_green.css">

@endsection
@section('content')

    <!-- begin:: Content -->
    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
        <!-- begin:: Content Head -->
        <div class="kt-subheader  kt-grid__item" id="kt_subheader">
            <div class="kt-container  kt-container--fluid ">
                <div class="kt-subheader__main">

                    <h3 class="kt-subheader__title">{{isset($timeschedule) ? 'Edit Time Schedule Info' : 'Add Time Schedule'}}</h3>

                    <span class="kt-subheader__separator kt-subheader__separator--v"></span>

                    <span class="kt-subheader__desc">#XRS-45670</span>

                    <div class="kt-input-icon kt-input-icon--right kt-subheader__search kt-hidden">
                        <input type="text" class="form-control" placeholder="Search order..." id="generalSearch">
                        <span class="kt-input-icon__icon kt-input-icon__icon--right">
                        <span><i class="flaticon2-search-1"></i></span>
                </span>
                    </div>
                </div>
                <div class="kt-subheader__toolbar">
                    <div class="kt-subheader__wrapper">
                        <a href="#" class="btn kt-subheader__btn-secondary">Today</a>

                        <a href="#" class="btn kt-subheader__btn-secondary">Month</a>

                        <a href="#" class="btn kt-subheader__btn-secondary">Year</a>

                        <a href="#" class="btn kt-subheader__btn-daterange" id="kt_dashboard_daterangepicker"
                           data-toggle="kt-tooltip" title="Select dashboard daterange" data-placement="left">
                            <span class="kt-subheader__btn-daterange-title" id="kt_dashboard_daterangepicker_title">Today</span>&nbsp;
                            <span class="kt-subheader__btn-daterange-date"
                                  id="kt_dashboard_daterangepicker_date">Aug 16</span>
                            <i class="flaticon2-calendar-1"></i>
                        </a>

                        <div class="dropdown dropdown-inline" data-toggle-="kt-tooltip" title="Quick actions"
                             data-placement="left">
                            <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                     class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
                                        <path
                                            d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                                            id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                        <path
                                            d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                                            id="Combined-Shape" fill="#000000"/>
                                    </g>
                                </svg>                        <!--<i class="flaticon2-plus"></i>-->
                            </a>
                            <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
                                <!--begin::Nav-->
                                <ul class="kt-nav">
                                    <li class="kt-nav__head">
                                        Add anything or jump to:
                                        <i class="flaticon2-information" data-toggle="kt-tooltip" data-placement="right"
                                           title="Click to learn more..."></i>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-drop"></i>
                                            <span class="kt-nav__link-text">Order</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                                            <span class="kt-nav__link-text">Ticket</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                                            <span class="kt-nav__link-text">Goal</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <i class="kt-nav__link-icon flaticon2-new-email"></i>
                                            <span class="kt-nav__link-text">Support Case</span>
                                            <span class="kt-nav__link-badge">
                                        <span class="kt-badge kt-badge--brand kt-badge--rounded">5</span>
                                    </span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__separator"></li>
                                    <li class="kt-nav__foot">
                                        <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
                                        <a class="btn btn-clean btn-bold btn-sm kt-hidden" href="#"
                                           data-toggle="kt-tooltip" data-placement="right"
                                           title="Click to learn more...">Learn more</a>
                                    </li>
                                </ul>
                                <!--end::Nav-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end:: Content Head -->

        <!-- begin:: Content Container-->
        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
            <div class="row">
                <div class="offset-2 col-md-8">
                    <!--begin::Portlet-->
                    <div class="kt-portlet">
                        <div class="kt-portlet__head">
                            <div class="kt-portlet__head-label">
                                <h3 class="kt-portlet__head-title">
                                    {{isset($timeschedule) ? 'Edit Time Schedule Info' : 'Add Time Schedule'}}
                                </h3>
                            </div>
                        </div>

                        <!--begin::Form-->
                        <form id="timescheduleform"
                            class="kt-form kt-form--label-right"
                              action="{{isset($timeschedule) ? route('timeschedules.update',$timeschedule->id) : route('timeschedules.store')}}"
                              method="POST"
                              enctype="multipart/form-data">
                            <div class="kt-portlet__body">
                                <div class="form-group form-group-last">
                                    <div class="alert alert-secondary" role="alert">
                                        <div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                                        <div class="alert-text">
                                            You Can Add New Time Schedule From This Form.
                                        </div>
                                    </div>
                                </div>
                                @csrf
                                @if(isset($timeschedule))
                                    @method('PUT')
                                @endif
                                <div class="form-group">
                                    <label>Schedule For</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                            <select class="form-control" id="usertype" name="usertype">
                                                <option value="">Select User Type</option>
                                                <option value="doctor">doctor</option>
                                                <option value="nurse">nurse</option>
                                                <option value="accountant">accountant</option>
                                                <option value="laboratorist">laboratorist</option>
                                                <option value="pharmacist">pharmacist</option>
                                                <option value="receptionist">receptionist</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group" style="display:none;" id="userDiv">
                                    <label>User</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-heading"></i></span></div>
                                            <select class="form-control" id="user" name="user">
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Start Time</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
							               <span class="input-group-text">
								             <i class="fa fa-clock"></i>
                                           </span>
                                        </div>
                                        <input class="form-control timepicker" id="start_time" name="start_time" readonly
                                               placeholder="Select time" type="text" @if(isset($timeschedule)) value="{{$timeschedule->start_time}}"@endif>

                                    </div>
                                </div>
                                <div class="form-group" id="endtimeDiv" style="display:none;">
                                    <label>End Time</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
							               <span class="input-group-text">
								             <i class="fa fa-clock"></i>
                                           </span>
                                        </div>
                                        <input class="form-control timepicker" id="end_time" name="end_time" readonly
                                               placeholder="Select time" type="text" @if(isset($timeschedule)) value="{{$timeschedule->end_time}}"@endif>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Week Day</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-location-arrow"></i></span></div>
                                        <select class="form-control" name="week_day" id="week_day">
                                            <option
                                                value="saturday" @if(isset($timeschedule)) {{$timeschedule->week_day == 'saturday' ? 'selected' : ''}} @endif>
                                                Saturday
                                            </option>
                                            <option
                                                value="sunday" @if(isset($timeschedule)) {{$timeschedule->week_day == 'sunday' ? 'selected' : ''}} @endif>
                                                Sunday
                                            </option>
                                            <option
                                                value="monday" @if(isset($timeschedule)) {{$timeschedule->week_day == 'monday' ? 'selected' : ''}} @endif>
                                                Monday
                                            </option>
                                            <option
                                                value="tuesday" @if(isset($timeschedule)) {{$timeschedule->week_day == 'tuesday' ? 'selected' : ''}} @endif>
                                                Tuesday
                                            </option>
                                            <option
                                                value="wednesday" @if(isset($timeschedule)) {{$timeschedule->week_day == 'wednesday' ? 'selected' : ''}} @endif>
                                                Wednesday
                                            </option>
                                            <option
                                                value="thursday" @if(isset($timeschedule)) {{$timeschedule->week_day == 'thursday' ? 'selected' : ''}} @endif>
                                                Thursday
                                            </option>
                                            <option
                                                value="friday" @if(isset($timeschedule)) {{$timeschedule->week_day == 'friday' ? 'selected' : ''}} @endif>
                                                Friday
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group" id="durationDiv" style="display:none;">
                                    <label>Appointment Duration</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i
                                                    class="fa fa-clock"></i></span></div>
                                        <input type="number" class="form-control" name="duration" id="duration" min="0" step="1">
                                        <div class="input-group-append"><span class="input-group-text">minute</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="kt-portlet__foot">
                                <div class="kt-form__actions">
                                    <input type="submit" value="{{isset($timeschedule) ? 'Update' : 'Submit'}}"
                                           class="btn-lg btn-primary">
                                    <input type="reset" class="btn-lg btn-danger" value="Cancel">
                                </div>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Portlet-->
                </div>
            </div>
        </div>
        <!-- end:: Content Container-->
    </div>
    <!-- begin:: Content -->

@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

    <script>

        flatpickr('#start_time', {
            enableTime: true,
            time_24hr: true,
            noCalendar: true,
            defaultDate:'12:00',
            dateFormat: "H:i",
        });

        $("#start_time").change(function () {
            $("#endtimeDiv").show();
            flatpickr('#end_time', {
                enableTime: true,
                time_24hr: true,
                noCalendar: true,
                minTime:moment($("#start_time").val(), 'HH:mm').add(5,'m').format('HH:mm'),
                defaultDate:moment($("#start_time").val(), 'HH:mm').add(1,'H').format('HH:mm'),
                dateFormat: "H:i",
            });
        });



        $("#usertype").change(function () {
            $('#user').empty();

            if ($(this).val() == ''){
                $('#userDiv').hide();
                $('#durationDiv').hide();
            } else {
                if ($(this).val() == 'doctor'){
                    $('#durationDiv').show();
                } else {
                    $('#durationDiv').hide();
                }
                $.ajax({
                    url: "{{route('get-user-by-user-type')}}?usertype=" + $(this).val(),
                    method: 'GET',
                    success: function (data) {
                        jsonar = JSON.parse(data.html);
                        $.each(jsonar, function (i, value) {
                            $('#user').append('<option value="'+ jsonar[i].id +'">'+ jsonar[i].first_name + ' ' + jsonar[i].last_name +'</option>');
                        });
                        $('#userDiv').show();
                    }
                });
            }

        });
    </script>
@endsection

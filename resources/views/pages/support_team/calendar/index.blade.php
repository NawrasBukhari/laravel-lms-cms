@extends('layouts.master')
@section('page_title', 'Manage Events')
@section('content')
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <link href="{{ asset('assets/css/_materialFullCalendar.css') }}" rel="stylesheet" type="text/css">
    </head>
<style>
    .calendar-des {
        background-color: #e84393;
        background-image: linear-gradient(325deg, #980053 20%, #9b5936 60%);
        color: #46d5c4;
        position: relative;
        font-family: "Open Sans", sans-serif;
    }
</style>
    <div class="card">
<div class="card-header header-elements-inline">

        <div class="calendar-des" id='calendar'>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {

        var SITEURL = "{{ url('/') }}";

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var calendar = $('#calendar').fullCalendar({
            editable: true,
            events: SITEURL + "/calendar",
            displayEventTime: true,
            editable: true,
            eventRender: function (event, element, view) {
                event.allDay = event.allDay === 'true';
            },
            selectable: true,
            selectHelper: true,
            select: function (start, end, allDay) {
                var title = prompt('Event Title:');
                if (title) {
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                    $.ajax({
                        url: SITEURL + "/fullcalenderAjax",
                        data: {
                            title: title,
                            start: start,
                            end: end,
                            type: 'add',
                            color: '#C2185B'


                        },
                        type: "POST",
                        success: function (data) {
                            displayMessage("Event Created Successfully");

                            calendar.fullCalendar('renderEvent',
                                {
                                    id: data.id,
                                    title: title,
                                    start: start,
                                    end: end,
                                    allDay: allDay,
                                    color: '#C2185B'

                                },true);

                            calendar.fullCalendar('unselect');
                        }
                    });
                }
            },
            eventDrop: function (event, delta) {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

                $.ajax({
                    url: SITEURL + '/fullcalenderAjax',
                    data: {
                        title: event.title,
                        start: start,
                        end: end,
                        id: event.id,
                        type: 'update',
                        color: '#C2185B'

                    },
                    type: "POST",
                    success: function (response) {
                        displayMessage("Event Updated Successfully");
                    }
                });
            },
            eventClick: function (event) {
                var deleteMsg = confirm("Do you really want to delete?");
                if (deleteMsg) {
                    $.ajax({
                        type: "POST",
                        url: SITEURL + '/fullcalenderAjax',
                        data: {
                            id: event.id,
                            type: 'delete'
                        },
                        success: function (response) {
                            calendar.fullCalendar('removeEvents', event.id);
                            displayMessage("Event Deleted Successfully");
                        }
                    });
                }
            }

        });

    });

    function displayMessage(message) {
        toastr.success(message, 'Event');
    }

</script>
</div>
</div>
@endsection

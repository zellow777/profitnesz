$(document).ready(function() {
    display_events();
}); //end document.ready block
var result
var event_id;
    function display_events() {
    var events = new Array();
    $.ajax({
    url: 'display_event.php',
    dataType: 'json',
    success: function (response) {

    result=response.data;
    $.each(result, function (i, item) {
    events.push({
    event_id: result[i].event_id,
    title: result[i].title,
    start: result[i].start,
    end: result[i].end,
    color: result[i].color,
    url: result[i].url
});
})

let admin = false;
    var calendar = $('#calendar').fullCalendar({
    defaultView: 'listWeek',
    timeZone: 'local',
    editable: true,
    selectable: true,
    selectHelper: true,
    select: function(start, end) {
    //alert(start);
    //alert(end);
    $('#event_start_date').val(moment(start).format('YYYY-MM-DD'));
    $('#event_end_date').val(moment(end).format('YYYY-MM-DD'));
    $('#event_entry_modal').modal('show');
},
    events: events,
    eventRender: function(event, element, view) {
    element.bind('click', function() {
        event_id = event.event_id;
    if(admin){
        $.ajax({
            url:"display_vendeg.php",
            type:"POST",
            dataType: 'json',
            data: {vendeg_index: event_id},
            success:function(response){
                $('#display_users').html(response.msg);
                if(response.status == true)
                {
                    $('#display_users').html(response.msg);
                }
                else
                {
                    alert(response.msg);
                }
            },
            error: function (xhr, status) {
                console.log('ajax error = ' + xhr.statusText);
                alert(response.msg);
            }
        });
        $('#display_users_modal').modal('show');
    }
    else{
        $('#user_entry_modal').modal('show');
    }
});
}
}); //end fullCalendar block
        document.getElementById("calendar_admin").addEventListener('click', function() {
            if(!admin) {
                if(prompt("Please enter password")=='admin'){
                    admin = true;
                    document.getElementById("calendar_admin").textContent = 'User';
                    document.getElementById("calendar_admin").classList.remove('btn-danger');
                    document.getElementById("calendar_admin").classList.add('btn-success');
                    $('#calendar').fullCalendar('changeView', 'month');
                }
            }
            else{
                admin = false;
                document.getElementById("calendar_admin").textContent = 'Admin';
                document.getElementById("calendar_admin").classList.remove('btn-success');
                document.getElementById("calendar_admin").classList.add('btn-danger');
                $('#calendar').fullCalendar('changeView', 'listWeek');
            }
        });
},//end success block
    error: function (xhr, status) {
    alert(response.msg);
}
});//end ajax block
}

function save_user() {
    var user_name=$("#user_name").val();
    if(user_name=="")
    {
        alert("Please enter all required details.");
        return false;
    }
    $.ajax({
        url:"save_vendeg.php",
        type:"POST",
        dataType: 'json',
        data: {vendeg_index: event_id, vendeg_nev: user_name},
        success:function(response){
            $('#user_entry_modal').modal('hide');
            if(response.status == true)
            {
                alert(response.msg);
            }
            else
            {
                alert(response.msg);
            }
        },
        error: function (xhr, status) {
            console.log('ajax error = ' + xhr.statusText);
            alert(response.msg);
        }
    });
    clearinputs();
}

function save_event()
{
    var event_name=$("#event_name").val();
    var event_start_date=$("#event_start_date").val();
    var event_end_date=$("#event_end_date").val();
    if(event_name=="" || event_start_date=="" || event_end_date=="")
{
    alert("Please enter all required details.");
    return false;
}
    $.ajax({
    url:"save_event.php",
    type:"POST",
    dataType: 'json',
    data: {event_name:event_name,event_start_date:event_start_date,event_end_date:event_end_date},
    success:function(response){
    $('#event_entry_modal').modal('hide');
    if(response.status == true)
{
    alert(response.msg);
}
    else
{
    alert(response.msg);
}
},
    error: function (xhr, status) {
    console.log('ajax error = ' + xhr.statusText);
    alert(response.msg);
}
});
    clearinputs();
    return false;
}

function close_event_entry_modal(){
    $('#event_entry_modal').modal('hide');
    clearinputs();
}
function close_user_entry_modal(){
    $('#user_entry_modal').modal('hide');
    clearinputs();
}
function close_display_users_modal(){
    $('#display_users_modal').modal('hide');
}
function clearinputs(){
    var inputs = document.querySelectorAll("input");
    for (var i = 0; i < inputs.length; i++) {
        inputs[i].value = "";
    }
}

function changeCalendarView(){
    // Get a reference to the element that uses fullcalendar.js
    var calendarElement = document.getElementById("calendar");

    // Change the view to "month" view
    calendarElement.fullCalendar("changeView", "month");
}


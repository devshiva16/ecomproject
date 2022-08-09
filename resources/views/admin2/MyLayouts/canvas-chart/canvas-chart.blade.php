<script>
window.onload = function () {

var options = {
    animationEnabled: true,
    theme: "light2",
    title:{
        text: "Student Attendence"
    },
    axisX:{
        valueFormatString: "DD MMM"
    },
    axisY: {
        title: "Attendence in the Month",
        suffix: "",
        minimum: 0
    },
    toolTip:{
        shared:true
    },  
    legend:{
        cursor:"pointer",
        verticalAlign: "bottom",
        horizontalAlign: "left",
        dockInsidePlotArea: true,
        itemclick: toogleDataSeries
    },
    data: [{
        type: "line",
        showInLegend: true,
        name: "Absent",
        markerType: "square",
        xValueFormatString: "DD MMM, YYYY",
        color: "#F08080",
        yValueFormatString: "#,##0 Students",
        dataPoints: [
            @for($list_day = 1; $list_day <= $days_in_month; $list_day++)
                
               @php $i = 0; @endphp
                @foreach($studentattendances as $item)
                @if($list_day == date('d', strtotime(@$item->attend_date)) AND @$item->student_id == @$item->devicelog_id AND $item->student_id != 0)
                                  @php $i++; @endphp
                                  
                                @endif
                @endforeach
                {x: new Date({{$year}}, {{$updateMonth}}, {{$list_day}}), y: {{($student - $i)}}}
                {{$list_day < $days_in_month ? "," : ''}}
            @endfor
        ]
    },
    {
        type: "line",
        showInLegend: true,
        name: "Present",
        lineDashType: "dash",
        yValueFormatString: "#,##0 Students",
        dataPoints: [
            @for($list_day = 1; $list_day <= $days_in_month; $list_day++)
               @php $i = 0; @endphp
                @foreach($studentattendances as $item)
               
                @if($list_day == date('d', strtotime(@$item->attend_date)) AND @$item->student_id == @$item->devicelog_id AND $item->student_id != 0)
                                  @php $i++; @endphp
                                @endif
                @endforeach
                {x: new Date({{$year}}, {{$updateMonth}}, {{$list_day}}), y: {{$i}}}
                {{$list_day < $days_in_month ? "," : ''}}
            @endfor
        ]
    }]
};
$("#chartContainer").CanvasJSChart(options);

/*Start staff chart here*/

var options2 = {
    animationEnabled: true,
    theme: "light2",
    title:{
        text: "Staff Attendence"
    },
    axisX:{
        valueFormatString: "DD MMM"
    },
    axisY: {
        title: "Attendence in the Month",
        suffix: "",
        minimum: 0
    },
    toolTip:{
        shared:true
    },  
    legend:{
        cursor:"pointer",
        verticalAlign: "bottom",
        horizontalAlign: "left",
        dockInsidePlotArea: true,
        itemclick: toogleDataSeries
    },
    data: [{
        type: "line",
        showInLegend: true,
        name: "Absent",
        markerType: "square",
        xValueFormatString: "DD MMM, YYYY",
        color: "#F08080",
        yValueFormatString: "#,##0 Employees",
        dataPoints: [
            @for($list_day = 1; $list_day <= $days_in_month; $list_day++)
                
               @php $i = 0; @endphp
                @foreach($staff_attendances as $item)
                    @if($list_day == date('d', strtotime(@$item->attend_date)) AND @$item->employee_id == @$item->devicelog_id AND $item->employee_id != 0)
                            @php $i++; @endphp
                    @endif
                @endforeach
                {x: new Date({{$year}}, {{$updateMonth}}, {{$list_day}}), y: {{($staff - $i)}}}
                {{$list_day < $days_in_month ? "," : ''}}
            @endfor
        ]
    },
    {
        type: "line",
        showInLegend: true,
        name: "Present",
        lineDashType: "dash",
        yValueFormatString: "#,##0 Employees",
        dataPoints: [
           @for($list_day = 1; $list_day <= $days_in_month; $list_day++)
                
               @php $i = 0; @endphp
                @foreach($staff_attendances as $item)
                @if($list_day == date('d', strtotime(@$item->attend_date)) AND @$item->employee_id == @$item->devicelog_id AND $item->employee_id != 0)
                                  @php $i++; @endphp
                                @endif
                @endforeach
                {x: new Date({{$year}}, {{$updateMonth}}, {{$list_day}}), y: {{$i}}}
                {{$list_day < $days_in_month ? "," : ''}}
            @endfor
        ]
    }]
};
$("#chartContainerStaff").CanvasJSChart(options2);

/*Start Books chart here*/

var options3 = {
    animationEnabled: true,
    theme: "light2",
    title:{
        text: "Book History"
    },
    axisX:{
        valueFormatString: "DD MMM"
    },
    axisY: {
        title: "Total Books",
        suffix: "",
        minimum: 0
    },
    toolTip:{
        shared:true
    },  
    legend:{
        cursor:"pointer",
        verticalAlign: "bottom",
        horizontalAlign: "left",
        dockInsidePlotArea: true,
        itemclick: toogleDataSeries
    },
    data: [{
        type: "line",
        showInLegend: true,
        name: "Books",
        markerType: "square",
        xValueFormatString: "DD MMM, YYYY",
        color: "#F08080",
        yValueFormatString: "#,##0 Books",
        dataPoints: [
            @for($list_day = 1; $list_day <= $days_in_month; $list_day++)
                {x: new Date({{$year}}, {{$updateMonth}}, {{$list_day}}), y: {{($books)}}}
                {{$list_day < $days_in_month ? "," : ''}}
            @endfor
        ]
    },
    {
        type: "line",
        showInLegend: true,
        name: "Issue Books",
        lineDashType: "dash",
        yValueFormatString: "#,##0 Issue",
        dataPoints: [
           @for($list_day = 1; $list_day <= $days_in_month; $list_day++)
                
               @php $i = 0; @endphp
                @foreach($books_charts as $item)
                @if($list_day == date('d', strtotime(@$item->created_at)) AND @$item->status == 1)
                @php $i++; @endphp
                        @endif
                @endforeach
                {x: new Date({{$year}}, {{$updateMonth}}, {{$list_day}}), y: {{$i}}}
                {{$list_day < $days_in_month ? "," : ''}}
            @endfor
        ]
    },
    {
        type: "spline",
        showInLegend: true,
        name: "Return Books",
        lineDashType: "dash",
        yValueFormatString: "#,##0 Return",
        dataPoints: [
           @for($list_day = 1; $list_day <= $days_in_month; $list_day++)
                
               @php $i = 0; @endphp
                @foreach($books_charts as $item)
                @if($list_day == date('d', strtotime(@$item->created_at)) AND @$item->status == 0)
                @php $i++; @endphp
                        @endif
                @endforeach
                {x: new Date({{$year}}, {{$updateMonth}}, {{$list_day}}), y: {{$i}}}
                {{$list_day < $days_in_month ? "," : ''}}
            @endfor
        ]
    }]
};
$("#chartContainerBooks").CanvasJSChart(options3);

function toogleDataSeries(e){
    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
        e.dataSeries.visible = false;
    } else{
        e.dataSeries.visible = true;
    }
    e.chart.render();
}

}
</script>
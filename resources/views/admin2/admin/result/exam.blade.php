@extends('MyLayouts.examMaster')
<style>
    .qNO{
        font-weight: bold !important;
        padding-right: 10px;
    }
    .qTitle{
        font-weight: bold !important;
    }
    .question{

    }
    .aNo{
        font-weight: bold !important;
        padding-right: 20px !important;
    }
    .ans{

    }
    .error {
        color: #B94A48;
    }
    .form-horizontal {
        margin-bottom: 20px;
    }
    .hide{
        display: none;
    }
    .btn-unview {
        border: 1px solid !important;
        background-color: #f2f4f4;
        border-bottom-color: #5bc0de;
        border-left-color: #5bc0de;
        border-right-color: #5bc0de;
        border-top-color: #5bc0de;
        color: #808b96;
    }

    .bg-purple{
        color: white !important;
        background: #7b59c0 !important;
    }
    .bg-gr{
        color: white !important;
        background: #79f377 !important;
    }
</style>
@section('BodyContent')
    <div class="content-page" style="margin-left: 0px !important;padding-top: 60px !important; padding-left: 10px !important;padding-right: 10px !important;">
        <div class="widget">
            <div class="widget-header transparent">
                <h2><strong>Question</strong></h2>
                <div class="additional-btn">
                    <a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
                    <a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
                </div>
            </div>
            <div class="widget-content padding">
                <div class="row">
                    <div class="col-md-9 question" style="margin-bottom: 0px !important; height: 500px !important;">
                        <div style="width:100%;">
                            <b> Total Questions : {{ count($allQuestions) }}</b></nobr>
                            <!--<span id="countdown" style="margin-left:584px;">Time <span id="h"></span>:<span id="m"></span>:<span id="s"></span></span>-->
                                <a class="dropdown-toggle pull-right" style="font-weight: bold; margin-right: 40px;" id="quiz-time-left"></a>
                                <script type="text/javascript">

                                    //var max_time = '{{ $testtime }}';
                                    var max_time = 1;
                                    var c_seconds  = 0;
                                    var hours = Math.floor(max_time / 60);
                                    var mins = 0;
                                    var total_seconds =60*max_time;
                                    max_time = parseInt(total_seconds/60);
                                    c_seconds = parseInt(total_seconds%60);
                                    document.getElementById("quiz-time-left").innerHTML='Time Left : '+ hours + '  Hr : ' + mins + '  Min  : ' + c_seconds + '  Sec';
                                    function init(){
                                        document.getElementById("quiz-time-left").innerHTML='Time Left : '+ hours + '  Hr : ' + mins + '  Min  :  ' + c_seconds + '  Sec';
                                        setTimeout("CheckTime()",999);
                                    }
                                    function CheckTime(){
                                        document.getElementById("quiz-time-left").innerHTML='Time Left : '+ hours + '  Hr : ' + mins + '  Min  :  ' + c_seconds + '  Sec';
                                        if(total_seconds <=0){
                                            //setTimeout('document.quiz.submit()',1);
                                            document.getElementById("form_id").submit();
                                        } else
                                        {
                                            total_seconds = total_seconds -1;
                                            max_time = parseInt(total_seconds/60);
                                            hours = Math.floor(max_time / 60);
                                            mins = parseInt(total_seconds/60);

                                            c_seconds = parseInt(total_seconds%60);
                                            setTimeout("CheckTime()",999);
                                        }
                                    }
                                    init();
                                </script>
                                <script type="text/javascript">
                                    function finishpage()
                                    {
                                        alert("unload event detected!");
                                        document.quiz.submit();
                                    }
                                    window.onbeforeunload= function() {
                                        setTimeout('document.quiz.submit()',1);
                                    }
                                </script>
                        </div>
                        <hr width="100%" align="left">
                        <form id="form_id" class="form-horizontal" method="post" action="{{ asset('saveResult') }}" >
                            {{csrf_field()}}
                            <input type="hidden" id="qid" name="qid" value="btn1">
                            <input type="hidden" name="test_id" value="{{ $tid }}">
                           @php
                            {{$i = 1; $ques_count= count($allQuestions); }}
                           @endphp
                           <script>
                               qCount = '<?php echo $ques_count ;?>';
                           </script>
                           @foreach($allQuestions as $question)
                                <input type="hidden" id="">
                               @if($i==1)
                                   @php {{ $cl=''; }} @endphp
                               @else
                                    @php {{ $cl='hide'; }} @endphp
                               @endif
                                    <div id='question{{ $i }}' class="cont {{ $cl }}">
                                        <div style="margin-left: 20px;height:380px;max-height: 380px;overflow-y: scroll;">
                                            <div class="col-md-12 questions" id="qname{{ $i }}">
                                                <div class="col-md-1">
                                                    <span style="color: red;"> Q.{{ $i }} : </span>
                                                </div>
                                                <div class="col-md-11">
                                                    {{ $question['ques_title'] }}
                                                </div>
                                                <div class="col-md-1">&nbsp;</div>
                                                <div class="col-md-11" style="margin-top: 5px;">
                                                    {!! $question['ques'] !!}
                                                </div>
                                                <div class="col-md-1">&nbsp;</div>
                                                <div class="col-md-11 " style="display: none;">
                                                    <strong> Options are as follows :-</strong>
                                                    <hr style="margin-left: 25px; width: 40%;">
                                                </div>
                                            </div>
                                            <div id="answers" class="col-md-12">
                                                <div class="col-md-1">&nbsp;</div>
                                                <div class="col-md-11">
                                                    <ol type="A">
                                                        @php {{ $ans_count = 0; }} @endphp
                                                        @foreach($question['ans'] as $ans)
                                                            @php {{ $ans_count++; }} @endphp
                                                            <li placeholder="Opt." >
                                                                <input type="radio" class="aNo ra" value="{{ $ans['ansid'] }}" id='radio1_{{ $ans['ansid'] }}' name='qno[{{ $question['qid'] }}]'/>
                                                                <div class="col-md-12">
                                                                    &nbsp;&nbsp;{!! $ans['answer'] !!}
                                                                    <hr>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ol>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <br/>
                                            @if($i==1)
                                                <button id='{{ $i }}' class='next btn btn-danger btn-sm' type='button'>Next <i class="fa fa-arrow-circle-right"></i></button>
                                                <button id='{{ $i }}' class='bookmark btn bg-purple btn-sm' type='button'>Mark for review <i class="fa fa-bookmark"></i></button>
                                            @endif
                                            @if( $i>1 && $i < $ques_count )
                                                <button id='{{ $i }}' class='previous btn btn-info btn-sm' type='button'><i class="fa fa-arrow-circle-left"></i> Previous</button>
                                                <button id='{{ $i }}' class='next btn btn-danger btn-sm' type='button' >Next <i class="fa fa-arrow-circle-right"></i></button>
                                                <button id='{{ $i }}' class='bookmark btn bg-purple btn-sm' type='button'>Mark for review <i class="fa fa-bookmark"></i></button>
                                            @endif
                                            @if($i==$ques_count)
                                                <button id='{{ $i }}' class='previous btn btn-info btn-sm' type='button'><i class="fa fa-arrow-circle-left"></i> Previous</button>
                                                <button id='{{ $i }}' class='bookmark btn bg-purple btn-sm' type='button'>Mark for review <i class="fa fa-bookmark"></i></button>
                                                <button id='{{ $i }}' type="Submit" class="btn btn-success btn-sm pull-right" style="margin-right: 20px;"><i class="fa fa-check-circle"></i> Submit</button>
                                            @endif
                                        </div>
                                    </div>
                            @php {{ $i++;  }} @endphp
                        @endforeach
                    </div>
                    <div class="col-md-3" style="border-left: 1px solid #eee;padding-top: 0px; text-align: center;margin-top: 0px; height: 500px !important;">

                        <center>All Questions</center>
                        <hr>
                        <div style="margin-bottom: 0px !important;float:left;font-size: 11px !important;"><span id="countdown2">Max Marks : </span>{{ count($allQuestions) }}<!--<span style="margin-left: 25px;">  Max 	<span id="countdown2" style="margin-left:0px;">Time : <span id="h2"></span>:<span id="m2"></span>:<span id="s2"></span></span>-->
				</span></div><br>
                        <hr>
                        <div class="scroll" style="width: 100%;padding-right: 10px;height: 275px !important; overflow-y: scroll;font-size: 11px !important;">
                            @for($i=1;$i<=(count($allQuestions));$i++)
                                @if($i%4==0)
                                    <button type="button" id="btn{{$i}}" class="btn btn-unview btn-xs ques" style="width: 40px !important;margin-left: 10px;margin-bottom: 10px;border-radius: 4px;">{{$i}}</button><br>
                                @else
                                    <button type="button" id="btn{{$i}}" class="btn btn-unview btn-xs ques" style="width: 40px !important;margin-left: 10px;margin-bottom: 10px;border-radius: 4px;">{{$i}}</button>
                                @endif
                            @endfor
                        </div>
                        </form>
                        <hr>
                        <small>
                            Unattempted : <button class="btn btn-unview btn-sm"></button><br>
                            Attempted : <button class="btn bg-gr btn-sm"></button><br>
                            Marked : <button class="btn bg-purple btn-sm"></button>
                        </small>
                    </div>
                </div>
            </div>
    </div>
    </div>
    <script>
        //make and array for result

        var qCount = 0;
        var result = [];

        // On Next Button Click
        $(document).on('click','.next',function(){
            last=parseInt($(this).attr('id'));
            nex=last+1;
            $('#qid').val('btn'+nex);
                $('#question'+last).addClass('hide');
            $('#question'+nex).removeClass('hide');
        });

        // On Previous Button CLick
        $(document).on('click','.previous',function(){
            last=parseInt($(this).attr('id'));
            pre=last-1;
            $('#qid').val('btn'+pre);
            $('#question'+last).addClass('hide');
            $('#question'+pre).removeClass('hide');
        });

        // Click on the Question Button display the Question
        $('body').on('click', '.ques', function(){
            var id = $(this).attr('id');
            last=$('#qid').val();
            //console.log(last);
            last =last.replace( /^\D+/g, '');
            //console.log(last);
            if(id!=''){
                $('#qid').val(id);
                $('#q').html(id);
                $(this).attr('class','btn btn-info btn-sm ques');
                //console.log(id);
                nex=id.replace( /^\D+/g, '');
                if(nex!=last){
                    $('#question'+nex).removeClass('hide');

                    $('#question'+last).addClass('hide');
                }
            }
            //ajax call here
        });

        // Bookmark the Question for further review
        $('body').on('click', '.bookmark', function(e){
            var id = e.target.id;
            //console.log(id);
            $('#btn'+id).removeClass('btn-unview');
            $('#btn'+id).addClass('bg-purple');
        });

        // If Question is attempted than change the color of Question Buttons on right panel
        $('body').on('click', '.ra', function(e){
            var ansid = e.target.id;
            //console.log(ansid);
            var id = $("#"+ansid).attr('name');
            $('#btn'+id).removeClass('btn-unview');
            $('#btn'+id).removeClass('bg-purple');
            $('#btn'+id).addClass('bg-gr');
            console.log(qCount);
        });
    </script>
@endsection



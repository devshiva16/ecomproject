@extends('MyLayouts.examMaster')

@section('BodyContent')

    <div class="container" style="width:1275px !important;">
        <div class="row">

            <div class="col-md-9 question" style="margin-bottom: 0px !important; padding-bottom: 0px !important;">
                <div style="width:100%;">
                    <b> Total Questions : {{ count($allQuestions) }}</b><nobr>
                        <span id="countdown" style="margin-left:584px;">Time <span id="h"></span>:<span id="m"></span>:<span id="s"></span></span>
                </div>
                <hr width="90%" align="left">
                <form class="form-horizontal" role="form" id='login' method="post" action="logout.php" >
                    <input type="hidden" id="qid" name="qid" value="btn1">

                    <?php
                         $i=1;
                    ?>
                    @foreach( $allQuestions as $aq)
                    @if($i==1)
                    <div id='question<?php echo $i;?>' class='cont'>
                        <div style="margin-left: 20px;height:450px;max-height: 450px;overflow-y: scroll;">
                            <p class='questions' id="qname<?php echo $i;?>"><b> Q<?php echo $i?>.</b>&nbsp;&nbsp;<?php echo $result['question_name'];?></p>
                            <ol type="small-alpha">
                                <li><input type="radio" class="ra" value="1" id='radio1_<?php echo $aq['id'];?>' name='<?php echo $aq['id'];?>'/>&nbsp;&nbsp;<?php echo $aq['answer1'];?></li>
                                <li><input type="radio" class="ra" value="2" id='radio1_<?php echo $aq['id'];?>' name='<?php echo $aq['id'];?>'/>&nbsp;&nbsp;<?php echo $aq['answer2'];?></li>
                                <li><input type="radio" class="ra" value="3" id='radio1_<?php echo $aq['id'];?>' name='<?php echo $aq['id'];?>'/>&nbsp;&nbsp;<?php echo $aq['answer3'];?></li>
                                <li><input type="radio" class="ra" value="4" id='radio1_<?php echo $aq['id'];?>' name='<?php echo $aq['id'];?>'/>&nbsp;&nbsp;<?php echo $aq['answer4'];?></li>
                            </ol>
                            <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>
                            <input type="hidden" id='radio1_<?php echo $result['id'];?>' name='t<?php echo $result['id'];?>'/>
                            <input type="hidden" id="q<?php echo $i;?>" name="q" value="<?php echo $result['id'];?>">
                        </div><div>
                            <br/>

                            <button id='<?php echo $i;?>' class='next btn btn-danger btn-sm' type='button'>Next <i class="fa fa-arrow-circle-right"></i></button>
                            <button type="button" id="bookmark" class="btn btn-warning btn-sm b"><i class="fa fa-bookmark"></i> Bookmark</button> &nbsp;
                        </div>
                    </div>

                    @elseif($i<1 || $i<$rows){?>

                    <div id='question<?php echo $i;?>' class='cont'>
                        <div style="margin-left: 20px;height:450px;max-height: 450px;overflow-y: scroll;">
                            <p class='questions' id="qname<?php echo $i;?>"><b> Q<?php echo $i?>.&nbsp;&nbsp;</b><?php echo $result['question_name'];?></p>
                            <ol type="small-alpha">
                                <li><input type="radio" class="ra" value="1" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>&nbsp;&nbsp;<?php echo $result['answer1'];?></li>
                                <li><input type="radio" class="ra" value="2" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>&nbsp;&nbsp;<?php echo $result['answer2'];?></li>
                                <li><input type="radio" class="ra" value="3" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>&nbsp;&nbsp;<?php echo $result['answer3'];?></li>
                                <li><input type="radio" class="ra" value="4" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>&nbsp;&nbsp;<?php echo $result['answer4'];?></li>
                            </ol>
                            <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>
                            <input type="hidden" id='radio1_<?php echo $result['id'];?>' name='t<?php echo $result['id'];?>'/>
                            <input type="hidden" id="q<?php echo $i;?>" name="q" value="<?php echo $result['id'];?>">
                        </div><div>
                            <br/>
                            <button id='<?php echo $i;?>' class='previous btn btn-info btn-sm' type='button'><i class="fa fa-arrow-circle-left"></i> Previous</button>
                            <button id='<?php echo $i;?>' class='next btn btn-danger btn-sm' type='button' >Next <i class="fa fa-arrow-circle-right"></i></button>
                            <button type="button" id="bookmark" class="btn btn-warning btn-sm b"><i class="fa fa-bookmark"></i> Bookmark</button> &nbsp;
                        </div>
                    </div>
                    <?php }elseif($i==$rows){?>
                    <div id='question<?php echo $i;?>' class='cont'>
                        <div style="margin-left: 20px;height:450px;max-height: 450px;overflow-y: scroll;">
                            <p class='questions' id="qname<?php echo $i;?>"><b> Q<?php echo $i?>.&nbsp;&nbsp;</b><?php echo $result['question_name'];?></p>
                            <ol type="small-alpha">
                                <li><input type="radio" class="ra" value="1" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>&nbsp;&nbsp;<?php echo $result['answer1'];?></li>
                                <li><input type="radio" class="ra" value="2" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>&nbsp;&nbsp;<?php echo $result['answer2'];?></li>
                                <li><input type="radio" class="ra" value="3" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>&nbsp;&nbsp;<?php echo $result['answer3'];?></li>
                                <li><input type="radio" class="ra" value="4" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>&nbsp;&nbsp;<?php echo $result['answer4'];?></li>
                            </ol>
                            <input type="radio" checked='checked' style='display:none' value="5" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'/>
                            <input type="hidden" id='radio1_<?php echo $result['id'];?>' name='t<?php echo $result['id'];?>'/>
                            <input type="hidden" id="q<?php echo $i;?>" name="q" value="<?php echo $result['id'];?>">
                            <br/>
                        </div>
                        <div>
                            <button id='<?php echo $i;?>' class='previous btn btn-info btn-sm' type='button'><i class="fa fa-arrow-circle-left"></i> Previous</button>
                            <button type="button" id="bookmark" class="btn btn-warning btn-sm b"><i class="fa fa-bookmark"></i> Bookmark</button> &nbsp;
                        <!--<button id='<?php echo $i;?>' class='next btn btn-success btn-sm' type='submit'>Submit</button>-->
                            <button id='<?php echo $i;?>' type="Submit" class="btn btn-success btn-sm pull-right" style="margin-left: 450px;"><i class="fa fa-check-circle"></i> Submit</button>
                        </div>
                    </div>
                    <?php } $i++;} ?>

                </form>
            </div>
            <!--</div>-->
            <div class="col-md-12" style="border-left: 1px solid #eee;padding-top: 0px; text-align: center;margin-top: 0px;">
                <!--<div class="row">&nbsp;-->
                <hr>&nbsp;
                Welcome : <?php //if(isset($_SESSION['name'])) { echo $_SESSION['name'];}else{?>Pankaj<?php //}?>
                <hr>

                <!--</div>-->
                <center>All Questions</center>
                <div style="margin-bottom: 0px !important;float:left;"><span id="countdown2">Max Marks : </span><?php echo $rows;?><span style="margin-left: 25px;">  Max 	<span id="countdown2" style="margin-left:0px;">Time : <span id="h2"></span>:<span id="m2"></span>:<span id="s2"></span></span>
				</span></div><br>
                <hr>
                <div class="scroll" style="width: 100%;padding-right: 10px;">
                <?php
                for($i=1;$i<=$rows;$i++){

                ?>
                <!--<button type="button" class="btn btn-success btn-sm" style="width: 40px !important;"><?php echo $i;?></button> &nbsp;-->
                    <?php
                    if($i%4==0){
                        echo  '<button type="button" id="btn'.$i.'" class="btn btn-unview btn-sm ques" style="width: 50px !important;margin-left: 10px;margin-bottom: 10px;border-radius: 4px;">'.$i.'</button><br>';
                    }
                    else{
                        echo  '<button type="button" id="btn'.$i.'" class="btn btn-unview btn-sm ques" style="width: 50px !important;margin-left: 10px;margin-bottom: 10px;border-radius: 4px;">'.$i.'</button>';
                    }
                    }
                    ?>
                </div>
                </form>
                <hr><small>
                    Labels Used <br>
                    Unviewed : <button class="btn btn-unview btn-sm"></button>
                    Viewed : <button class="btn btn-info btn-sm"></button><br>
                    Bookmark : <button class="btn btn-bookmark btn-sm"></button>
                    Correct : <button class="btn btn-success btn-sm"></button><br>
                    Wrong : <button class="btn btn-danger btn-sm"></button><br>
                </small>
            </div>

        </div>

    </div>

@endsection

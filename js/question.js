/**
 * Created by Junxiang on 2015/1/25.
 */

function showAnswer(){
    var answers = document.getElementsByClassName('show');
    for(var i=0; i<answers.length; ++i)
        answers[i].style.display="block";
    return false;
}
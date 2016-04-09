
function checkAndDisable300(_checked) {
    document.getElementById('304').checked = false;
    document.getElementById('313').checked = false;
    document.getElementById('331').checked = false;
    document.getElementById('341').checked = false;
    document.getElementById('345').checked = false;

    document.getElementById('304').disabled = true;
    document.getElementById('313').disabled = true;
    document.getElementById('331').disabled = true;
    document.getElementById('341').disabled = true;
    document.getElementById('345').disabled = true;
}

/*
//checkAndDisable is split between six parts for easier readability
//all classes are accounted for; if not in diagram, it is in group5; others
//group1 = involved strictly with 331

function checkAndDisable400p1() {
    document.getElementById('431').checked = false;
    document.getElementById('432').checked = false;
    document.getElementById('433').checked = false;
    document.getElementById('473').checked = false;

    document.getElementById('431').disabled = true;
    document.getElementById('431').disabled = true;
    document.getElementById('433').disabled = true;
    document.getElementById('473').disabled = true;
}

//group2 = involved strictly with 341
function checkAndDisable400p2() {
    document.getElementById('481').checked = false;
    document.getElementById('461').checked = false;
    document.getElementById('421').checked = false;
    document.getElementById('475').checked = false;
    document.getElementById('476').checked = false;
    document.getElementById('456').checked = false;
    document.getElementById('455').checked = false;
    document.getElementById('453').checked = false;
    document.getElementById('443').checked = false;
    document.getElementById('441').checked = false;
    document.getElementById('437').checked = false;
    document.getElementById('436').checked = false;
    document.getElementById('427').checked = false;
    document.getElementById('471').checked = false;
    document.getElementById('435').checked = false;
    document.getElementById('431').checked = false;

    document.getElementById('481').disabled = true;
    document.getElementById('461').disabled = true;
    document.getElementById('421').disabled = true;
    document.getElementById('475').disabled = true;
    document.getElementById('476').disabled = true;
    document.getElementById('456').disabled = true;
    document.getElementById('455').disabled = true;
    document.getElementById('453').disabled = true;
    document.getElementById('443').disabled = true;
    document.getElementById('441').disabled = true;
    document.getElementById('437').disabled = true;
    document.getElementById('436').disabled = true;
    document.getElementById('427').disabled = true;
    document.getElementById('471').disabled = true;
    document.getElementById('435').disabled = true;
    document.getElementById('431').disabled = true;

}

//group3 = involved strictly with 471
function checkAndDisable400p3() {
    document.getElementById('493').checked = false;
    document.getElementById('479').checked = false;
    document.getElementById('478').checked = false;
    document.getElementById('477').checked = false;

    document.getElementById('493').disabled = true;
    document.getElementById('479').disabled = true;
    document.getElementById('478').disabled = true;
    document.getElementById('477').disabled = true;
}

//group4 = involved strictly with 421
function checkAndDisable400p4() {
    document.getElementById('487').checked = false;
    document.getElementById('483').checked = false;
    document.getElementById('426').checked = false;

    document.getElementById('487').disabled = true;
    document.getElementById('483').disabled = true;
    document.getElementById('426').disabled = true;
}

//group5 = not involved in diagram
function checkAndDisable400p5() {
    document.getElementById('404').checked = false;
    document.getElementById('442').checked = false;
    document.getElementById('444').checked = false;
    document.getElementById('446').checked = false;
    document.getElementById('448').checked = false;
    document.getElementById('491').checked = false;
    document.getElementById('495').checked = false;
    document.getElementById('498').checked = false;
    document.getElementById('499').checked = false;

    document.getElementById('404').disabled = true;
    document.getElementById('442').disabled = true;
    document.getElementById('444').disabled = true;
    document.getElementById('446').disabled = true;
    document.getElementById('448').disabled = true;
    document.getElementById('491').disabled = true;
    document.getElementById('495').disabled = true;
    document.getElementById('498').disabled = true;
    document.getElementById('499').disabled = true;
}

//group6 = involved strictly with 203
function checkAndDisable400p6() {
    document.getElementById('451').checked = false;
    document.getElementById('452').checked = false;
    document.getElementById('457').checked = false;

    document.getElementById('451').disabled = true;
    document.getElementById('452').disabled = true;
    document.getElementById('457').disabled = true;
}

/*  must STILL include:
    202 -> 484, 486
    313 -> 411, 435
    481 -> 465, 466 */
    
//unchecks and disables everything


function checkAndDisable400(_checked) {
    /* checkAndDisable400p1();
    checkAndDisable400p2();
    checkAndDisable400p3();
    checkAndDisable400p4();
    checkAndDisable400p5();
    checkAndDisable400p6(); */

    //classes to 313
    document.getElementById('431').checked = false;
    document.getElementById('432').checked = false;
    document.getElementById('433').checked = false;
    document.getElementById('473').checked = false;

    document.getElementById('431').disabled = true;
    document.getElementById('431').disabled = true;
    document.getElementById('433').disabled = true;
    document.getElementById('473').disabled = true;

    //classes to 341
    document.getElementById('447').checked = false;
    document.getElementById('432').checked = false;

    document.getElementById('481').checked = false;
    document.getElementById('461').checked = false;
    document.getElementById('421').checked = false;
    document.getElementById('475').checked = false;
    document.getElementById('476').checked = false;
    document.getElementById('456').checked = false;
    document.getElementById('455').checked = false;
    document.getElementById('453').checked = false;
    document.getElementById('443').checked = false;
    document.getElementById('441').checked = false;
    document.getElementById('437').checked = false;
    document.getElementById('436').checked = false;
    document.getElementById('427').checked = false;
    document.getElementById('471').checked = false;
    document.getElementById('435').checked = false;
    document.getElementById('431').checked = false;

    document.getElementById('447').disabled = true;
    document.getElementById('432').disabled = true;

    document.getElementById('481').disabled = true;
    document.getElementById('461').disabled = true;
    document.getElementById('421').disabled = true;
    document.getElementById('475').disabled = true;
    document.getElementById('476').disabled = true;
    document.getElementById('456').disabled = true;
    document.getElementById('455').disabled = true;
    document.getElementById('453').disabled = true;
    document.getElementById('443').disabled = true;
    document.getElementById('441').disabled = true;
    document.getElementById('437').disabled = true;
    document.getElementById('436').disabled = true;
    document.getElementById('427').disabled = true;
    document.getElementById('471').disabled = true;
    document.getElementById('435').disabled = true;
    document.getElementById('431').disabled = true;

    //classes to 471
    document.getElementById('493').checked = false;
    document.getElementById('479').checked = false;
    document.getElementById('478').checked = false;
    document.getElementById('477').checked = false;

    document.getElementById('493').disabled = true;
    document.getElementById('479').disabled = true;
    document.getElementById('478').disabled = true;
    document.getElementById('477').disabled = true;

    //classes to 421
    document.getElementById('487').checked = false;
    document.getElementById('483').checked = false;
    document.getElementById('426').checked = false;

    document.getElementById('487').disabled = true;
    document.getElementById('483').disabled = true;
    document.getElementById('426').disabled = true;

    // unrelated courses not listed in diagram, so they're normally unchecked
    //442 needs 203 and 221 requirement
    document.getElementById('442').checked = false; //
    document.getElementById('444').checked = false; //
    document.getElementById('446').checked = false; // 
    document.getElementById('448').checked = false; //
    document.getElementById('451').checked = false;
    document.getElementById('452').checked = false;
    document.getElementById('491').checked = false;
    document.getElementById('495').checked = false;
    document.getElementById('498').checked = false;
    document.getElementById('499').checked = false;
    
    document.getElementById('442').disabled = true;
    document.getElementById('444').disabled = true;
    document.getElementById('446').disabled = true;
    document.getElementById('448').disabled = true;
    document.getElementById('451').disabled = true;
    document.getElementById('452').disabled = true;
    document.getElementById('491').disabled = true;
    document.getElementById('495').disabled = true;
    document.getElementById('498').disabled = true;
    document.getElementById('499').disabled = true;

    // unrelated courses listed in diagram but specifically changed by one class
    document.getElementById('484').checked = false;
    document.getElementById('486').checked = false;
    document.getElementById('411').checked = false;
    document.getElementById('435').checked = false;
    document.getElementById('465').checked = false;
    document.getElementById('466').checked = false;

    document.getElementById('484').disabled = true;
    document.getElementById('486').disabled = true;
    document.getElementById('411').disabled = true;
    document.getElementById('435').disabled = true;
    document.getElementById('465').disabled = true;
    document.getElementById('466').disabled = true;
}



function toggleDisabled201up(_checked) {
    document.getElementById('202').disabled = _checked ? false : true;
    document.getElementById('203').disabled = _checked ? false : true;
    document.getElementById('202').checked = false;
    document.getElementById('203').checked = false;
    
    //checkAndDisable300();
    //checkAndDisable400();
}

function toggleDisabled300up(_checked) {
    var cs202 = document.getElementById("202").checked;
    var cs203 = document.getElementById("203").checked;

    if (cs202 && cs203) {
        //document.getElementById('304').disabled = false; commenting bc documentations says you can take 304 after 202
        document.getElementById('313').disabled = false;
        document.getElementById('331').disabled = false;
        document.getElementById('341').disabled = false;
        document.getElementById('451').disabled = false;
        
    } else {
        //checkAndDisable300();
        document.getElementById('313').checked = false;
        document.getElementById('331').checked = false;
        document.getElementById('341').checked = false;
        document.getElementById('345').checked = false;
        document.getElementById('313').disabled = true;
        document.getElementById('331').disabled = true;
        document.getElementById('341').disabled = true;
        document.getElementById('345').disabled = true;
        //can i rewrite calling the upper level functions so that i can just validate in one swoop
        checkAndDisable400();
    }
}
    

//specific fx call for 304, only checked from 202
function toggleDisabled304(_checked) {
    document.getElementById('304').disabled = _checked ? false : true;

    document.getElementById('304').checked = false;
}

//specific fx call for 411, only leads from 313
function toggledDisabled411(_checked) {
    document.getElementById('411').disabled = _checked ? false : true;

    document.getElementById('411').checked = false;
}

function toggledDisabled331(_checked) {
    document.getElementById('431').disabled = _checked ? false : true;
    document.getElementById('432').disabled = _checked ? false : true;
    document.getElementById('433').disabled = _checked ? false : true;
    document.getElementById('473').disabled = _checked ? false : true;

    document.getElementById('431').checked = false;
    document.getElementById('432').checked = false;
    document.getElementById('433').checked = false;
    document.getElementById('473').checked = false;
}

function toggledDisabled341(_checked) {
    //fx split into two parts, required, electives and permissables
    //required classes; 447 is also a permissions class
    document.getElementById('421').disabled = _checked ? false : true;
    document.getElementById('441').disabled = _checked ? false : true;
    document.getElementById('447').disabled = _checked ? false : true;

    document.getElementById('421').checked = false;
    document.getElementById('441').checked = false;
    document.getElementById('447').checked = false;

    //electives
    document.getElementById('345').disabled = _checked ? false : true;
    document.getElementById('481').disabled = _checked ? false : true;
    document.getElementById('461').disabled = _checked ? false : true;
    document.getElementById('475').disabled = _checked ? false : true;
    document.getElementById('476').disabled = _checked ? false : true;
    document.getElementById('456').disabled = _checked ? false : true;
    document.getElementById('455').disabled = _checked ? false : true;

    document.getElementById('345').checked = false;
    document.getElementById('481').checked = false;
    document.getElementById('461').checked = false;
    document.getElementById('475').checked = false;
    document.getElementById('476').checked = false;
    document.getElementById('456').checked = false;
    document.getElementById('455').checked = false;

    //electives w/ permission
    document.getElementById('453').disabled = _checked ? false : true;
    document.getElementById('443').disabled = _checked ? false : true;
    document.getElementById('437').disabled = _checked ? false : true;
    document.getElementById('436').disabled = _checked ? false : true;
    document.getElementById('427').disabled = _checked ? false : true;
    document.getElementById('471').disabled = _checked ? false : true;

    document.getElementById('453').checked = false;
    document.getElementById('443').checked = false;
    document.getElementById('437').checked = false;
    document.getElementById('436').checked = false;
    document.getElementById('427').checked = false;
    document.getElementById('471').checked = false;
}
function toggleDisabled421(_checked) {
    document.getElementById('487').disabled = _checked ? false : true;
    document.getElementById('483').disabled = _checked ? false : true;
    document.getElementById('426').disabled = _checked ? false : true;

    document.getElementById('487').checked = false;
    document.getElementById('483').checked = false;
    document.getElementById('426').checked = false;
}

function toggleDisabled435(_checked) {
    //435 is also validated by 341
    document.getElementById('435').disabled = _checked ? false : true;

    document.getElementById('435').checked = false;
}

function toggledDisabled486(_checked) {
    document.getElementById('486').disabled = _checked ? false : true;

    document.getElementById('486').checked = false;
}

//you're putting these functions into the if classes (421 and 481)
function toggledDisabled444(_checked) {
    var cs421 = document.getElementById("421").checked;
    var cs481 = document.getElementById("481").checked;

    if (cs421 && cs481) {
        document.getElementById('444').disabled = false;

    } else {
        document.getElementById('444').checked = false;

        document.getElementById('444').disabled = true;
    }
}

function toggledDisabled446(_checked) {
    var cs331 = document.getElementById("331").checked;
    var cs341 = document.getElementById("341").checked;

    if (cs331 && cs341) {
        document.getElementById('446').disabled = false;

    } else {
        document.getElementById('446').checked = false;

        document.getElementById('446').disabled = true;
    }
}

function toggledDisabled448(_checked) {
    var cs345 = document.getElementById("345").checked;
    var cs447 = document.getElementById("447").checked;

    if (cs345 && cs447) {
        document.getElementById('448').disabled = false;

    } else {
        document.getElementById('448').checked = false;

        document.getElementById('448').disabled = true;
    }
}

function toggledDisabled452(_checked) {
    document.getElementById('452').disabled = _checked ? false : true;
    document.getElementById('452').checked = false;
}

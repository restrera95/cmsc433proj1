/* Javascript file handles validation.
    Names of functions are divided into three groups:
        1. checks and disables
        2. toggles part 1, which toggles based on required classes
        3. toggles part 2, which toggles based on prerequisites.

    Second group takes priority of the first group,
    so any classes that are enabled from taking required classes like
    201, 202, 203, 313, 331, 341, 411, 421, 441 and 447
    fall into this category.
    Third group involves electives.     */

//  unchecks and disables 300 level courses when 201, 202 or 203 are unchecked 
//  (because they are assumed to have it checked / completed)
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

//  unchecks and disables 400 level courses when lower classes (200's and 300's) are unchecked
//  for the same reason as the above function
function checkAndDisable400(_checked) {

    //  classes to 313; 431 - 432 - 433 - 473
    document.getElementById('431').checked = false;
    document.getElementById('432').checked = false;
    document.getElementById('433').checked = false;
    document.getElementById('473').checked = false;

    document.getElementById('431').disabled = true;
    document.getElementById('431').disabled = true;
    document.getElementById('433').disabled = true;
    document.getElementById('473').disabled = true;

    //  classes to 341; 447 - 432 - 481 - 461 - 421 - 475 - 476 - 457 - 456 - 453
    //                  443 - 441 - 437 - 436 - 427 - 471 - 435 - 431
    document.getElementById('447').checked = false;
    document.getElementById('432').checked = false;
    document.getElementById('481').checked = false;
    document.getElementById('461').checked = false;
    document.getElementById('421').checked = false;
    document.getElementById('475').checked = false;
    document.getElementById('476').checked = false;
    document.getElementById('457').checked = false;
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
    document.getElementById('457').disabled = true;
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

    //  classes to 471; 493 - 479 - 478 - 477
    document.getElementById('493').checked = false;
    document.getElementById('479').checked = false;
    document.getElementById('478').checked = false;
    document.getElementById('477').checked = false;

    document.getElementById('493').disabled = true;
    document.getElementById('479').disabled = true;
    document.getElementById('478').disabled = true;
    document.getElementById('477').disabled = true;

    //  classes to 421; 487 - 483 - 426
    document.getElementById('487').checked = false;
    document.getElementById('483').checked = false;
    document.getElementById('426').checked = false;

    document.getElementById('487').disabled = true;
    document.getElementById('483').disabled = true;
    document.getElementById('426').disabled = true;

    //  unrelated courses not listed in diagram
    //  442; CS203 + MATH221
    //  444; CS421 + CS481 
    //  446; CS331 + CS341
    //  448; CS345 + CS447
    //  451, 452; CS202 + CS203
    //  491, 495, 498, 499; Needs only departmental consent / passed core (201, 202, 203) 
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

    //  unrelated courses listed in diagram but specifically changed by one class
    //  484; CS202
    //  486; CMPE 313 || 212 + 152
    //  411; CS313
    //  435; CS313, CS341, MATH221
    //  465, 466; CS461 + CS481
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


//  checking 201 enables 202 and 203
function toggleDisabled201up(_checked) {
    document.getElementById('202').disabled = _checked ? false : true;
    document.getElementById('203').disabled = _checked ? false : true;
    document.getElementById('202').checked = false;
    document.getElementById('203').checked = false;
}

//  checking 202 + 203 enables 300 classes
function toggleDisabled300up(_checked) {
    var cs202 = document.getElementById("202").checked;
    var cs203 = document.getElementById("203").checked;
    if (cs202 && cs203) {
        //  opens classes
        document.getElementById('313').disabled = false;
        document.getElementById('331').disabled = false;
        document.getElementById('341').disabled = false;
        document.getElementById('451').disabled = false;
        document.getElementById('491').disabled = false;
        document.getElementById('495').disabled = false;
        document.getElementById('498').disabled = false;
        document.getElementById('499').disabled = false;
    } else {
        //304 not included because 304 is opened by 202
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

//  end of checks and disables
//  beginning required classes
//  specific fx call for 304, only checked from 202. Writing intensive is required.
function toggleDisabled304(_checked) {
    document.getElementById('304').disabled = _checked ? false : true;

    document.getElementById('304').checked = false;
}

//  specific fx call for 411, only leads from 313.
function toggledDisabled411(_checked) {
    document.getElementById('411').disabled = _checked ? false : true;
    document.getElementById('411').checked = false;
}

//  classes that are opened by checking 331
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

//  classes that are opened by checking 341
//  fx split into two parts, required, electives and permissables
function toggledDisabled341(_checked) {
    
    //  list of required classes; 447 is also a permissions class
    document.getElementById('421').disabled = _checked ? false : true;
    document.getElementById('441').disabled = _checked ? false : true;
    document.getElementById('447').disabled = _checked ? false : true;

    document.getElementById('421').checked = false;
    document.getElementById('441').checked = false;
    document.getElementById('447').checked = false;

    //  list of electives
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

    //  list of electives w/ permission
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

//  classes opened by checking 421
function toggleDisabled421(_checked) {
    document.getElementById('487').disabled = _checked ? false : true;
    document.getElementById('483').disabled = _checked ? false : true;
    document.getElementById('426').disabled = _checked ? false : true;

    document.getElementById('487').checked = false;
    document.getElementById('483').checked = false;
    document.getElementById('426').checked = false;
}

//  f(x) opens 484 + 486 = 484(6)
function toggledDisabled4846(_checked) {
    document.getElementById('484').disabled = _checked ? false : true;
    document.getElementById('486').disabled = _checked ? false : true;

    document.getElementById('484').checked = false;
    document.getElementById('486').checked = false;
}

//  end of list of required classes
//  beginning of list of classes that are opened via checked prerequisites
//  444 opened by 421 + 481
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

//  431 opened by 313 + 331 + 341
function toggledDisabled431() {
    var cs313 = document.getElementById("313").checked;
    var cs331 = document.getElementById("331").checked;
    var cs341 = document.getElementById("341").checked;

    if (cs313 == true && cs331 == true && cs341 == true) {
        document.getElementById('431').disabled = false;
    } else {
        document.getElementById('431').checked = false;
        document.getElementById('431').disabled = true;
    }
}

//  446 opened by 331 + 341
function toggledDisabled446(_checked) {
    var cs331 = document.getElementById("331").checked;
    var cs341 = document.getElementById("341").checked;

    if (cs331 && cs341) {
        document.getElementById('446').disabled = false;
        document.getElementById('432').disabled = false;
    } else {
        document.getElementById('446').checked = false;
        document.getElementById('432').checked = false;

        document.getElementById('446').disabled = true;
        document.getElementById('432').disabled = true;
    }
}

//  448 opened by 345 + 447
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

//  452 opened when placed in function
function toggledDisabled452(_checked) {
    document.getElementById('452').disabled = _checked ? false : true;
    document.getElementById('452').checked = false;
}

//  function that enables 453 + 455 + 456
//  opened by 341 + MATH221 + (MATH151 || MATH152)
function toggledDisabled45356() {
    var cs341 = document.getElementById("341").checked;
    var ma221 = document.getElementById("221").checked;
    var ma151 = document.getElementById("151").checked;
    var ma152 = document.getElementById("152").checked;

    if (cs341 == true && ma221 == true) {
        if (ma151 == true || ma152 == true) {
            document.getElementById('453').disabled = false;
            document.getElementById('455').disabled = false;
            document.getElementById('456').disabled = false;
        } else {
            document.getElementById('453').checked = false;
            document.getElementById('455').checked = false;
            document.getElementById('456').checked = false;
            document.getElementById('453').disabled = true;
            document.getElementById('455').disabled = true;
            document.getElementById('456').disabled = true;
        }
    } else {
        document.getElementById('453').checked = false;
        document.getElementById('455').checked = false;
        document.getElementById('456').checked = false;
        document.getElementById('453').disabled = true;
        document.getElementById('455').disabled = true;
        document.getElementById('456').disabled = true;
    }
}

//  function that opens 457
//  opened by 203 + MATH221
function toggledDisabled457() {
    var cs203 = document.getElementById('203').checked;
    var ma221 = document.getElementById('221').checked;

    if (cs203 == true && ma221 == true) {
        document.getElementById('457').disabled = false;
    } else {
        document.getElementById('457').checked = false;
        document.getElementById('457').disabled = true;
    }
}

//  function that opens 465 + 466
//  opened by 461 + 481
function toggledDisabled4656() {
    var cs461 = document.getElementById('461').checked;
    var cs481 = document.getElementById('481').checked;

    if (cs461 == true && cs481 == true) {
        document.getElementById('465').disabled = false;
        document.getElementById('466').disabled = false;
    } else {
        document.getElementById('465').checked = false;
        document.getElementById('466').checked = false;
        document.getElementById('465').disabled = true;
        document.getElementById('466').disabled = true;
    }
}

//  function that opens 477 + 478 + 479
//  opened by attached function in HTML form
function toggledDisabled47789(_checked) {
    document.getElementById('477').disabled = _checked ? false : true;
    document.getElementById('478').disabled = _checked ? false : true;
    document.getElementById('479').disabled = _checked ? false : true;
}

//  function that opens 487
//  opened by 421 + 481
function toggledDisabled487() {
    var cs421 = document.getElementById('421').checked;
    var cs481 = document.getElementById('481').checked;

    if (cs421 == true && cs481 == true) {
        document.getElementById('487').disabled = false;
    } else {
        document.getElementById('487').checked = false;
        document.getElementById('487').disabled = true;
    }
}

//  function that opens 493
//  opened by 435 + 471
function toggledDisabled493() {
    var cs435 = document.getElementById('435').checked;
    var cs471 = document.getElementById('471').checked;

    if (cs435 == true && cs471 == true) {
        document.getElementById('493').disabled = false;
    } else {
        document.getElementById('493').checked = false;
        document.getElementById('493').disabled = true;
    }
}

//  function that opens 435
//  opened by 313 + 341 + MATH221
function toggledDisabled435() {
    var cs313 = document.getElementById('313').checked;
    var cs341 = document.getElementById('341').checked;
    var ma221 = document.getElementById('221').checked;

    if (cs313 == true && cs341 == true && ma221 == true) {
        document.getElementById('435').disabled = false;
    } else {
        document.getElementById('435').checked = false;
        document.getElementById('435').disabled = true;
    }
}

//  function that opens 437
//  opened by 341 + MATH221
function toggledDisabled437() {
    var cs341 = document.getElementById('341').checked;
    var ma221 = document.getElementById('221').checked;

    if (cs341 == true && ma221 == true) {
        document.getElementById('437').disabled = false;
    } else {
        document.getElementById('437').checked = false;
        document.getElementById('437').disabled = true;
    }
}

//  function that opens 442
//  opened by 203 + MATH221
function toggledDisabled442() {
    var cs203 = document.getElementById('203').checked;
    var ma221 = document.getElementById('221').checked;

    if (cs203 == true && ma221 == true) {
        document.getElementById('442').disabled = false;
    } else {
        document.getElementById('442').checked = false;
        document.getElementById('442').disabled = true;
    }
}

//  function that opens 443
//  opened  by 341 + MATH221 + STAT355
function toggledDisabled443() {
    var cs341 = document.getElementById('341').checked;
    var ma221 = document.getElementById('221').checked;
    var st355 = document.getElementById('355').checked;

    if (cs341 == true && ma221 == true && st355 == true) {
        document.getElementById('443').disabled = false;
    } else {
        document.getElementById('443').checked = false;
        document.getElementById('443').disabled = true;
    }
}


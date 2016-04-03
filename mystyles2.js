function checkAndDisable300() {
    document.getElementById('304').checked = false;
    document.getElementById('313').checked = false;
    document.getElementById('331').checked = false;
    document.getElementById('341').checked = false;

    document.getElementById('304').disabled = true;
    document.getElementById('313').disabled = true;
    document.getElementById('331').disabled = true;
    document.getElementById('341').disabled = true;
}
function checkAndDisable400() {
    document.getElementById('411').checked = false;
    document.getElementById('421').checked = false;
    document.getElementById('441').checked = false;
    document.getElementById('447').checked = false;
    document.getElementById('432').checked = false;
    document.getElementById('433').checked = false;

    document.getElementById('411').disabled = true;
    document.getElementById('421').disabled = true;
    document.getElementById('441').disabled = true;
    document.getElementById('447').disabled = true;
    document.getElementById('432').disabled = true;
    document.getElementById('433').disabled = true;
}

function toggleDisabled201up(_checked) {
    document.getElementById('202').disabled = _checked ? false : true;
    document.getElementById('203').disabled = _checked ? false : true;
    document.getElementById('202').checked = false;
    document.getElementById('203').checked = false;
    
    checkAndDisable300();
    checkAndDisable400();
}

function toggleDisabled300up(_checked) {
    var cs202 = document.getElementById("202").checked;
    var cs203 = document.getElementById("203").checked;

    if (cs202 && cs203) {
        //document.getElementById('304').disabled = false; commenting bc documentations says you can take 304 after 202
        document.getElementById('313').disabled = false;
        document.getElementById('331').disabled = false;
        document.getElementById('341').disabled = false;
        
    } else {
        //checkAndDisable300();
        document.getElementById('313').checked = false;
        document.getElementById('331').checked = false;
        document.getElementById('341').checked = false;
        document.getElementById('313').disabled = true;
        document.getElementById('331').disabled = true;
        document.getElementById('341').disabled = true;
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
function toggleDisabled411(_checked) {
    document.getElementById('411').disabled = _checked ? false : true;

    document.getElementById('411').checked = false;
}

function toggledDisabled331(_checked) {
    document.getElementById('432').disabled = _checked ? false : true;
    document.getElementById('433').disabled = _checked ? false : true;

    document.getElementById('432').checked = false;
    document.getElementById('433').checked = false;
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
    document.getElementById('481').disabled = _checked ? false : true;
    document.getElementById('461').disabled = _checked ? false : true;
    document.getElementById('475').disabled = _checked ? false : true;
    document.getElementById('476').disabled = _checked ? false : true;
    document.getElementById('456').disabled = _checked ? false : true;
    document.getElementById('455').disabled = _checked ? false : true;

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


const musteriBilgileri = null;

//---------------------- Kod Kısmı --------------------------//
window.onload = function () {
    var rememberstr = getCookie('remember');
    if (rememberstr == "1") {
        $('#container1').hide();
        $('#container2').show();
    }
    $.ajax({
        type: "POST",
        url: '/getcompany',
        data: null,
        success: function (response) {
            musteriBilgileri = response;
            var themeListID = document.getElementById('themeListID');
            if (themeListID.options.length == 1) SelectTemplate();
        },
        dataType: 'json'
    });

}

var ck = null;

function SelectTemplate() {
    var value = document.getElementById('themeListID').value;
    var selectedTheme = htmlTemplateList.filter(x => x.id == parseInt(value));
    if (selectedTheme.length > 0) {
        var firsttheme = selectedTheme[0];
        firsttheme.html = firsttheme.html.replaceAll('##CONTACT##', musteriBilgileri.contact);
        firsttheme.html = firsttheme.html.replaceAll('##FEEDBACKURL##', musteriBilgileri.feedback);
        firsttheme.html = firsttheme.html.replaceAll('##ABOUT##', musteriBilgileri.aboutus);
        firsttheme.html = firsttheme.html.replaceAll('##ITEMS##', musteriBilgileri.myitems);
        firsttheme.html = firsttheme.html.replaceAll('##NEWSLETTER##', musteriBilgileri.newsletter);
        firsttheme.html = firsttheme.html.replaceAll('##HAVE##', musteriBilgileri.havequestion);
        firsttheme.html = firsttheme.html.replaceAll('##LOGO##', musteriBilgileri.logo);
        document.getElementById('editor1').innerHTML = firsttheme.html;


        ck = CKEDITOR.inline('editor1');
        ck.on('instanceReady', function (ev) {
            var editor = ev.editor;
            editor.setReadOnly(false);
        });
    } else {
        alert('Tema bulunamadı.')
    }
}

function GetHtml() {
    modal.style.display = "block";
    document.getElementById('htmldata').innerHTML = ck.getData();
}

function addHtml() {
    addmodal.style.display = "block";
    var templatelabel = document.getElementById('templatelabel').value;
    var templatedata = document.getElementById('templatedata').value;
    var data = {
        id: 0,
        label: templatelabel,
        html: templatedata
    }
    $.ajax({
        type: "POST",
        url: '/SaveHtml',
        data: data,
        success: function (response) {
            alert('Başarılı');
        },
        dataType: 'json'
    });
}

function updateHtml() {
    var selectedtheme = document.getElementById('themeListID').value;
    var data = {
        id: selectedtheme,
        html: ck.getData()
    }
    $.ajax({
        type: "POST",
        url: '/SaveHtml',
        data: data,
        success: function (response) {
            alert('Başarılı');
        },
        dataType: 'json'
    });
}

function passControl() {
    var data = {
        password: $('#passwordTxt').val()
    };
    $.ajax({
        type: "POST",
        url: '/passwordControl',
        data: data,
        success: function (response) {
            if (response.status) {
                $('#container1').hide();
                $('#container2').show();
                if (document.getElementById('checkRememberMe').checked) {
                    setCookie('remember', '1', 999);
                }
            } else {
                alert('Şifre Hatalı');
            }
        },
        dataType: 'json'
    });


}

////------------------General Function ---------------------////
var addmodal = document.getElementById("addmodal");
var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close")[0];
var addmodalclose = document.getElementsByClassName("addmodalclose")[0];
span.onclick = function () {
    modal.style.display = "none";
}
addmodalclose.onclick = function () {
    addmodal.style.display = "none";
}
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    } else if (event.target == addmodal) {
        addmodal.style.display = "none";
    }
}
String.prototype.replaceAll = function (str1, str2, ignore) {
    return this.replace(new RegExp(str1.replace(/([\/\,\!\\\^\$\{\}\[\]\(\)\.\*\+\?\|\<\>\-\&])/g, "\\$&"), (ignore ? "gi" : "g")), (typeof (str2) == "string") ? str2.replace(/\$/g, "$$$$") : str2);
}

function setCookie(name, value, daysToLive) {
    // Encode value in order to escape semicolons, commas, and whitespace
    var cookie = name + "=" + encodeURIComponent(value);

    if (typeof daysToLive === "number") {
        /* Sets the max-age attribute so that the cookie expires
        after the specified number of days */
        cookie += "; max-age=" + (daysToLive * 24 * 60 * 60);

        document.cookie = cookie;
    }
}

function getCookie(name) {
    // Split cookie string and get all individual name=value pairs in an array
    var cookieArr = document.cookie.split(";");

    // Loop through the array elements
    for (var i = 0; i < cookieArr.length; i++) {
        var cookiePair = cookieArr[i].split("=");

        /* Removing whitespace at the beginning of the cookie name
        and compare it with the given string */
        if (name == cookiePair[0].trim()) {
            // Decode the cookie value and return
            return decodeURIComponent(cookiePair[1]);
        }
    }

    // Return null if not found
    return null;
}

////------------------General Function ---------------------////

var API_KEY = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjExYzg1MjMzZWFmZGFjODU5NjhkNzg4ZTcwOTU3OGRhZTE0YWE4ZDlkZmNmNjM1ODgzMDU2YzE4YzI5ZWZiODhiZDk3Y2EwMjY0MTY0ZmI4In0.eyJhdWQiOiIxMCIsImp0aSI6IjExYzg1MjMzZWFmZGFjODU5NjhkNzg4ZTcwOTU3OGRhZTE0YWE4ZDlkZmNmNjM1ODgzMDU2YzE4YzI5ZWZiODhiZDk3Y2EwMjY0MTY0ZmI4IiwiaWF0IjoxNTEwMjQ4NDEwLCJuYmYiOjE1MTAyNDg0MTAsImV4cCI6MTgyNTc4MTIxMCwic3ViIjoiNzQ4Iiwic2NvcGVzIjpbInVzZXJCYXNlSW5mbyIsInVzZXJEZXRhaWxlZEluZm8iLCJ1c2VyQ291cnNlSW5mbyJdfQ.sJW6c7Vwheq_O1d3H42eT6Kwl57UA0Vk1J_raVppq6cT8bMXD13QfoqbFJmZ0Bt4ZWeiT3tSVIhxEnKE7NCwLa-cxfsOLNl3E3rDhrOOuG2iWicKgC33E_7m3du55ETJSi9plAyfItA64xB132RsNgMgKM5S2I0pSSlGN86ScT4sYnh_LVcpnnt9ZGXXmYRKvsZcUUVcVqtGjcyfRjWo4FhXDj_O5dr8yXCV5PqXXiPHbwpSgRSHweSlDyEKJRFf-z6FVSMeAMgcZt5JXT4TaMO1u6im6P5YXGQSkYr03fquKmcTKmvJbz4Y37UGyLt_JjFw2p7X_Blx2PFxNLEOIp_GNU_thaoPFl4ZNykShAL9S-5zxCauiZX3WsTirhDOjmtOayiQ-YWzyTcuXCEMvnUZCcMsHcCEGmOWuP6S3lMraNPpNSb4VvTTpptWvaAmRO4XhNrJmT5UX7M67_34CPtJ9rMu47-xCCcT1LMViqst44YC35zp4TSn8ex4tlWQ2GGjL26ttkvvhtQnPXhXT4pJrnyrz6LD1M8morbiAxzAoz5ZgaYvenqRdQgNe4DzVHCL6G6ufDtt2KS8azYiwUZjpZEpSakI2xUSbEMVQuKuqNjXOLHcIJKwsha7_GPjf2qSh_JmduyTltBK9IXNTO-zkECgWv0zXIs_YxGFvtY';
// var myID = 748;
var client = new INTITAClient({
    key: API_KEY,
});


//----------------------------------------------------------------------------------
client.getUserDetails(function(error, data) {
    // debugger;
    var phone = document.getElementById('phone');
    var interests = document.getElementById('interests');
    var surname = document.getElementById('surname');
    var email = document.getElementById('email');
    var skype = document.getElementById('skype');
    // var facebook = document.getElementById('facebook');
    // var twitter = document.getElementById('twitter');
    var name = document.getElementsByClassName('name');

    for (var i = 0; i < name.length; i++) {
        name[i].innerText = data.firstName;
    }
    phone.innerText = data.phone;
    interests.innerHTML = data.interests;
    document.getElementById('avatar').src = data.avatar;
    email.innerText = data.email;
    surname.innerText = data.secondName;
    skype.innerText = data.skype;
    // facebook.innerText = data.facebook;
    // twitter.innerText = data.twitter;
});
client.getUserCoursesAndModules(function(error, data) {

    data.courses.forEach(function(element) {
        var id = element.id;
        client.getCourseInfo(id, function(error, data) {
            // var element = document.querySelectorAll('#about_course');
            // element[0].innerHTML = data.title_en;
            var list = [
                data.for_whom_en,
                // data.what_you_learn_en,
                // data.what_you_get_en
            ];
            var elements = document.querySelectorAll('#about_courses');
            for (var i = 0; i < list.length; i++) {
                elements[i].innerHTML = list[i];
            }
        });
        client.getCourseModules(id, function (error, modules) {

            for(var i = 0; i<modules.length; i++ ){
                    client.getModuleInfo(modules[i].id, function (error, my_data) {
                        if(my_data.title_en !== "") {
                            client.getModuleLectures(my_data.module_ID, function (error, data) {
                                document.querySelector("#modules").innerHTML += "<hr>" + my_data.title_en.toUpperCase() + "<br>" + "<hr>";
                            });
                        }
                    });
                }
        });

    });

    });
// });
// console.log();
// client.getUserCoursesAndModules(myID, function(error, data) {
//
// });
// client.getCourseInfo(myID, function(error, data) {
//
// });
// client.getModuleInfo(1, function(error, data) {
//
// });
// client.getCourseModules(1, function(error, data) {
//
// });
// client.getCourseTags(1, function(error, data) {
//
// });
// client.getModuleTags(1, function(error, data) {
//
// });
// client.getModuleLectures(1, function(error, data) {
//
// });
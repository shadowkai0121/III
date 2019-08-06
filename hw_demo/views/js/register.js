$("#submit").click(function () {
    let data = {
        userID: $("#userID").val(),
        userPwd: $("#userPwd").val(),
        email: $("#email").val()
    }

    if (check(data)) {
        window.location.href = localStorage.getItem("page");
    }

});

function check(data) {
    $(".tips").text("");

    let checkResult = true;
    let regex;

    if (data.userID.length < 6) {
        $("#wrongID").text("需要大於6個字元的帳號");
        checkResult = false;
    }

    // 小寫英文開頭 6 個英數以上
    regex = /^[a-z]+\w{6}/g;
    if (!regex.exec(data.userPwd)) {
        $("#wrongPwd").text("需要開頭小寫字母的 6 個字元密碼")
        checkResult = false;
    }

    // 小寫英文開頭 + 3個字元以上 @ 任意英數字 .
    regex = /^[a-z]+\w{3}@\w+\./g;
    if (!regex.exec(data.email)) {
        $("#wrongMail").text("請輸入正確的信箱格式");
        checkResult = false;
    }

    return checkResult;
}

function log(str) {
    str += $("#debug").text();
    $("#debug").text(str);
}
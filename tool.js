function commutation(str, brackets) {
    if (brackets) {
        document.write("<hr>");
        document.write(brackets + str + brackets);
        document.write("<br>");
    }
    else if (str) {
        document.write(str + "<br>");
    }
    else {
        document.write('<br>');
    }
}